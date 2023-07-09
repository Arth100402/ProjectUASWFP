<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('access-backend');
        // Untuk Query dengan RAW
        // $queryRaw = DB::select(DB::raw("select * from users u inner join role_user as ru on u.id=ru.user_id where ru.role_id=3"));
        $queryRaw = User::whereHas("roles", function (Builder $query) {
            $query->where('role_id', '=', 3);
        })->get();
        return view('member.index',compact('queryRaw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataUser = User::all();
        $dataRole = Role::all();
        return view ('member.createmember',compact('dataUser','dataRole'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new User();
        $data->name = $request->get('namemember');
        $data->email = $request->get('emailmember');
        $data->password = $request->get('passmember');
        $data->poin = $request->get('poinmember');
        $data->save();

        $role_id = $request->get('rolemember');
        DB::insert("INSERT INTO role_user (user_id, role_id) VALUES ($data->id,$role_id)");

        return redirect()->route('user.index')->with('status','Horray!! Your New Member Data is Already Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('member.profile', compact('data'));
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
        $this->authorize('owner-only-permission');

        try{
            $objUser = User::find($id);
            $objUser->delete();
            return redirect()->route('user.index')->with('status','Horray!! Berhasil Hapus Data Member');
        }catch(\PDOException $ex)
        {
            $msg = "Data Gagal Dihapus. Pastikan Kembali Tidak Ada Data yang berelasi sebelum dihapus";
            return redirect()->route('user.index')->with('status',$msg);
        }
    }

    public function checkout()
    {
        $user = Auth::user();
        $user = User::find($user->id);
        return view('public.checkout', compact('user'));
    }

    public function submitcheckout()
    {
        $this->authorize('add-to-cart-permission');
    }

    public function profile()
    {
        $auth = Auth::user()->id;
        $data = User::find($auth);
        return view('public.profile', compact('data'));
    }

    public function profileedit()
    {
        $auth = Auth::user()->id;
        $data = User::find($auth);
        return view('public.profileedit', compact('data'));
    }

    public function profileupdate(Request $request)
    {
        $auth = Auth::user()->id;
        $data = User::find($auth);
        $data->name = $request->get('nameuser');
        $data->email = $request->get('emailuser');
        $data->save();
        return redirect()->route('profile')->with('status','Your profile is already up-to-date');
    }

    public function staff()
    {
        $this->authorize('access-backend');
        // Untuk Query dengan RAW
        // $queryRaw = DB::select(DB::raw("select * from users u inner join role_user as ru on u.id=ru.user_id where ru.role_id=2"));
        $queryRaw = User::whereHas("roles", function (Builder $query) {
            $query->where('role_id', '=', 2);
        })->get();
        return view('staff.index',compact('queryRaw'));
    }

    public function staffcreate()
    {
        $data = Role::find(2);
        return view ('staff.createstaff',compact('data'));
    }

    public function staffstore(Request $request)
    {
        $data = new User();
        $data->name = $request->get('namestaff');
        $data->email = $request->get('emailstaff');
        $data->password = $request->get('passstaff');
        $data->poin = $request->get('poinstaff');
        $data->save();

        $role_id = $request->get('rolestaff');
        DB::insert("INSERT INTO role_user (user_id, role_id) VALUES ($data->id,$role_id)");

        return redirect()->route('staff')->with('status','Horray!! Your New Staff Data is Already Inserted');
    }
}
