<?php

namespace App\Http\Controllers;

use App\Models\Catelogries;
use Illuminate\Http\Request;

class CatelogriesController extends Controller
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
        $data= $request->all();
        Catelogries::create($data);
        return redirect('/admin/category');
    }

    /**
     * Display the specified resource.
     */
    public function show(Catelogries $catelogries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data= Catelogries::find($id);
        return view('admin.update-categories', [
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $temp = Catelogries::find($id);
        $temp->CategoryName = $request->CategoryName;
        $temp->save();
        return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Catelogries::find($id);
        
        try {
            $data->delete();
            return redirect('/admin/category');
        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }
}
