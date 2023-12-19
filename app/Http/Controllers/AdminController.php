<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Customers;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return admin()->json($data);
        return view('admin.dashboard');
    }
    public function products_list()
    {
        //Lay tat ca du lieu trong bang Product
        $data = Products::all();

        // return response()->json($data);
        return view('admin.product',['data'=>$data]);
    }
    public function customers_list()
    {
        //Lay tat ca du lieu trong bang Product
        $data = Customers::all();

        // return response()->json($data);
        return view('admin.customer',['data'=>$data]);
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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
