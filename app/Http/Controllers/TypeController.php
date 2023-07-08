<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Type::all();
        return view('type.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('access-backend');
        $dataType = Type::all();

        return view ('type.createtype',compact('dataType'));
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
        $data = new Type();
        $data->name = $request->get('nametype');

        $data->save();
        return redirect()->route('type.index')->with('status','Type is Already Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('access-backend');
        $data = Type::find($id);

         return view('type.index',compact('data'));
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
        $data = Type::find($id);
        return view('type.edittype',compact('data'));
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
        $data = Type::find($id);
        $data->name = $request->get('nametype');
        $data->save();
        return redirect()->route('type.index')->with('status','Horray!! Your Type is Already Up-to-date');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $objType = Type::find($id);
            $objType->delete();
            return redirect()->route('type.index')->with('status','Horray!! Berhasil Hapus Tipe');
        }catch(\PDOException $ex)
        {
            $msg = "Data Gagal Dihapus. Pastikan Kembali Tidak Ada Data yang berelasi sebelum dihapus";
            return redirect()->route('type.index')->with('status',$msg);
        }
    }
}
