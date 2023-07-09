<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::all();
        return view('transaction.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = Transaction::find($id);

        if ($transaction) {
            $data = $transaction->products;
        }

        if (Auth::user()->roles[0]->id == 3) {
            $this->authorize('transaction-view-permission', $transaction->user_id ?? (Auth::id() + 1));
        }

        return view('transaction.detailtransaction', compact('transaction', 'data'));
    }

    public function mytransaction()
    {
        $id = Auth::user()->id;
        $transactions = Transaction::whereHas('user', function (Builder $query) use ($id) {
            $query->where('user_id', '=', $id);
        })->get();
        return view('transaction.index', compact('transactions'));
    }

    public function indexLaporan()
    {
        $this->authorize('owner-only-permission');
        $data = [
            [
                'name' => 'Produk Terlaris',
                'link' => 'laporan/produkterlaris'
            ],
            [
                'name' => 'Brand Terlaris',
                'link' => 'laporan/brandterlaris'
            ],
            [
                'name' => 'Kategori Terlaris',
                'link' => 'laporan/kategoriterlaris'
            ],
            [
                'name' => 'Tipe Terlaris',
                'link' => 'laporan/tipeterlaris'
            ],
            [
                'name' => 'Pembeli Terbanyak',
                'link' => 'laporan/pembeliterbanyak'
            ],
        ];
        return view('laporan.index', compact('data'));
    }

    public function produkTerlaris()
    {
        $this->authorize('owner-only-permission');
        $data = DB::select(DB::raw("SELECT p.id AS id, p.name AS name, SUM(pt.quantity) AS quantity, SUM(pt.price * pt.quantity) AS total_omzet, COUNT(t.id) AS total_transaction FROM products p INNER JOIN product_transaction pt INNER JOIN transactions t ON pt.transaction_id=t.id ON p.id=pt.product_id GROUP BY p.id;"));
        return view('laporan.produkTerlaris', compact('data'));
    }

    public function brandTerlaris()
    {
        $this->authorize('owner-only-permission');
        $data = DB::select(DB::raw("SELECT b.id AS id, b.name AS name, SUM(pt.quantity) AS quantity, SUM(pt.price * pt.quantity) AS total_omzet, COUNT(t.id) AS total_transaction FROM brands b INNER JOIN products p ON b.id=p.brand_id INNER JOIN product_transaction pt INNER JOIN transactions t ON pt.transaction_id=t.id ON p.id=pt.product_id GROUP BY b.id;"));
        return view('laporan.brandTerlaris', compact('data'));
    }

    public function kategoriTerlaris()
    {
        $this->authorize('owner-only-permission');
        $data = DB::select(DB::raw("SELECT c.id AS id, c.name AS name, SUM(pt.quantity) AS quantity, SUM(pt.price * pt.quantity) AS total_omzet, COUNT(t.id) AS total_transaction FROM categories c INNER JOIN products p ON c.id=p.category_id INNER JOIN product_transaction pt INNER JOIN transactions t ON pt.transaction_id=t.id ON p.id=pt.product_id GROUP BY c.id;"));
        return view('laporan.kategoriTerlaris', compact('data'));
    }

    public function tipeTerlaris()
    {
        $this->authorize('owner-only-permission');
        $data = DB::select(DB::raw("SELECT ty.id AS id, ty.name AS name, SUM(pt.quantity) AS quantity, SUM(pt.price * pt.quantity) AS total_omzet, COUNT(t.id) AS total_transaction FROM types ty INNER JOIN products p ON ty.id=p.type_id INNER JOIN product_transaction pt INNER JOIN transactions t ON pt.transaction_id=t.id ON p.id=pt.product_id GROUP BY ty.id;"));
        return view('laporan.tipeTerlaris', compact('data'));
    }

    public function pembeliTerbanyak()
    {
        $this->authorize('owner-only-permission');
        $data = DB::select(DB::raw("SELECT u.id AS id, u.name AS name, SUM(totalprice) AS total_spent, COUNT(t.id) AS total_transaction FROM users u INNER JOIN transactions t ON u.id=t.user_id INNER JOIN role_user ru WHERE ru.role_id=3 GROUP BY u.id;"));
        return view('laporan.pembeliTerbanyak', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function submit_front($grandtotal)
    {
        $cart = session()->get('cart');
        $user = Auth::user();
        $t = new Transaction;
        $t->user_id = $user->id;
        $t->totalprice = $grandtotal;
        $t->transaction_date = Carbon::now()->toDateTimeString();
        $t->save();

        $poin = floor($grandtotal / 100000);
        $user = User::find($user->id);
        $user->poin = $user->poin + $poin;
        $user->save();

        foreach ($cart as $id => $details) {
            DB::insert("INSERT INTO product_transaction (product_id, transaction_id, quantity, price) VALUES ($details[id], $t->id, $details[quantity], $details[price])");
            $product = Product::find($details['id']);
            $product->stock = $product->stock - $details['quantity'];
            $product->save();
        }

        session()->forget('cart');
        return redirect('home');
    }
}
