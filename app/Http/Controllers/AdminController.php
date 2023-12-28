<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Customers;
use App\Models\Size;
use App\Models\Color;
use App\Models\Catelogries;
use App\Models\Order;
use App\Models\DetailOrder;



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
        $data = Products::all();

        // return response()->json($data);
        return view('admin.product',['data'=>$data]);
    }
    public function customers_list()
    {
        $data = Customers::all();

        // return response()->json($data);
        return view('admin.customer',['data'=>$data]);
    }
    public function sizes_list()
    {
        $data = Size::all();

        // return response()->json($data);
        return view('admin.size',['data'=>$data]);
    }
    public function colors_list()
    {
        $data = Color::all();

        // return response()->json($data);
        return view('admin.color',['data'=>$data]);
    }
    public function catelogries_list()
    {
        $data = Catelogries::all();

        // return response()->json($data);
        return view('admin.category',['data'=>$data]);
    }
    public function orders_list()
    {
        $data = Order::all();
        return view('admin.order',['data' => $data]);
    }
    public function detail_orders_list($id)
    {
        $data = DetailOrder::all();
        return view('admin.detail',['data' => $data,'id' => $id]);
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
