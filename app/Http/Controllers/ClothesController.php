<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Size;
use App\Models\Color;
use App\Models\Catelogries;


class ClothesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Lay tat ca du lieu trong bang Product
        $data = Products::all();

        // return response()->json($data);
        return view('home.home',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data= $request->all();
        // $tenanh=$request->anhsp->getClientOriginalName();
        // $request->anhsp->storeAs('public',$tenanh);
        // $data['anhsp']=$tenanh;
        Products::create($data);
        return redirect('/admin/product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Products::find($id);
        return view('home.detail',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data= Products::find($id);
        $data1= Size::all();
        $data2= Color::all();
        $data3= Catelogries::all();
        return view('admin.update-product', [
            'data' => $data,
            'Size' => $data1,
            'Color' => $data2,
            'Cate' => $data3
        ]);
    } 

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $temp= Products::find($id);
        $temp->Name= $request->Name;
        $temp->Price= $request->Price;
        $temp->ImageURL= $request->ImageURL;
        $temp->IdSize= $request->IdSize;
        $temp->IdColor= $request->IdColor;
        $temp->IdCategories= $request->IdCategories;
        $temp->Description= $request->Description;
        $temp->save();
        return redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Products::destroy($id);
        return redirect('/admin/product');
    }
}