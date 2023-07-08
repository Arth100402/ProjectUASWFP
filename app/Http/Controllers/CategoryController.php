<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::all();
        return view('category.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('access-backend');

        $dataCate = Category::all();
        // $dataType = Type::all();
        // $dataBrand = Brand::all();
        return view ('category.createcategory',compact('dataCate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('access-backend');

        $data = new Category();
        $data->name = $request->get('namecategory');

        $data->save();
        return redirect()->route('category.index')->with('status','Category is Already Inserted');
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

         return view('category.index',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('access-backend');

        // $data = Product::find($id);
        $dataCate = Category::find($id);
        return view('category.editcategory',compact('dataCate'));
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
        $this->authorize('access-backend');

        $data = Category::find($id);
        $data->name = $request->get('namecategory');
        $data->save();
        return redirect()->route('category.index')->with('status','Horray!! Your Category is Already Up-to-date');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('access-backend');

        try{
            $objCategory = Category::find($id);
            $objCategory->delete();
            return redirect()->route('category.index')->with('status','Horray!! Berhasil Hapus Category');
        }catch(\PDOException $ex)
        {
            $msg = "Data Gagal Dihapus. Pastikan Kembali Tidak Ada Data yang berelasi sebelum dihapus";
            return redirect()->route('category.index')->with('status',$msg);
        }
    }
}
