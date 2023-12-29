<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $data= Customers::find($id);
        return view('admin.update-customer', [
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $temp = Customers::find($id);
        $temp->Username = $request->Username;
        $temp->Email = $request->Email;
        $temp->Address = $request->Address;
        $temp->Phone = $request->Phone;
        if($request->Permission == 0){
            $temp->Permission = 0;
        }else{
            $temp->Permission = 1;
        }
        $temp->save();
        return redirect('/admin/customer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Customers::destroy($id);
        return redirect('/admin/customer');
    }
}
