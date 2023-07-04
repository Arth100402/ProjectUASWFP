<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return view('product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataCate = Category::all();
        $dataType = Type::all();
        $dataBrand = Brand::all();
        return view ('product.createproduct',compact('dataCate','dataType','dataBrand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Product();
        $data->name = $request->get('nameprod');
        $data->category_id = $request->get('cateprod');
        $data->type_id = $request->get('typeprod');
        $data->brand_id = $request->get('brandprod');
        $data->price = $request->get('priceprod');
        $data->stock = $request->get('stockprod');
        $data->dimensi = $request->get('dimensiprod');
        $data->image = $request->get('imageprod');

        $data->save();
        return redirect()->route('product.index')->with('status','Horray!! Your New Product Data is Already Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::find($id);

         return view('product.detailproduct',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        $dataCate = Category::all();
        $dataType = Type::all();
        $dataBrand = Brand::all();
        return view('product.editProduct',compact('data','dataCate','dataType','dataBrand'));
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
        $data = Product::find($id);
        $data->name = $request->get('nameprod');
        $data->category_id = $request->get('cateprod');
        $data->type_id = $request->get('typeprod');
        $data->brand_id = $request->get('brandprod');
        $data->price = $request->get('priceprod');
        $data->stock = $request->get('stockprod');
        $data->dimensi = $request->get('dimensiprod');
        $data->image = $request->get('imageprod');
        $data->save();
        return redirect()->route('product.index')->with('status','Horray!! Your Product is Already Up-to-date');
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

    public function addToCart($id)
    {
        $p = Product::find($id);
        $cart = session()->get('cart');
        if (!isset($cart[$id]))
        {
            $cart[$id] = [
                "name"=>$p->name,
                "quantity"=>1,
                "price"=>$p->price,
                "photo"=>$p->image
            ];
        } else{
            $cart[$id]["quantity"]++;
        }
        session()->put('cart',$cart);
        return redirect()->back()->with('success','Horrey Product telah ditambah');
    }

    public function cart(){
        return view('public.cart');
    }
}
