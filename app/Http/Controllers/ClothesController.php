<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Size;
use App\Models\Color;
use App\Models\Comment;
use App\Models\Catelogries;
use App\Models\Customers;
use App\Models\Images;


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
        $data1= Size::all();
        $data2= Color::all();
        $data3= Catelogries::all();
        return view('admin.add-product', [
            'Size' => $data1,
            'Color' => $data2,
            'Cate' => $data3
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $rule=[
            'Name' => 'required|min:10',
            'Price' => 'required|min_digits:5'
        ];
        $message=[
            'required' => 'Thông tin này là bắt buộc',
            'min' => 'Cần dài hơn :min kí tự',
            'integer' => 'Phải là số nguyên',
            'email' => 'Chưa đúng định dạng email',
            'min_digits' => 'Cần ít nhất :min_digits kí tự'
        ];
        $request->validate($rule,$message);
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
        $dataColor = Color::all();
        $dataSize = Size::all();
        $comments = Comment::where('clothes_id', $id)->get();
        $images = Images::where('idClothes', $id)->get();
        foreach ($comments as $key => $comment) {
            // Lấy thông tin người dùng dựa trên user_id của comment
            $user = Customers::find($comment->user_id);
    
            // Thêm thông tin người dùng vào mỗi comment
            $comments[$key]->user = $user;
        }
        return view('home.detail',['data'=>$data,'dataColor'=>$dataColor,'dataSize'=>$dataSize,'comments'=>$comments,'images'=>$images]);
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
        $rule=[
            'Name' => 'required|min:10',
            'Price' => 'required|min_digits:5'
        ];
        $message=[
            'required' => 'Thông tin này là bắt buộc',
            'min' => 'Cần dài hơn :min kí tự',
            'integer' => 'Phải là số nguyên',
            'email' => 'Chưa đúng định dạng email',
            'min_digits' => 'Cần ít nhất :min_digits kí tự'
        ];
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

    public function filter(Request $request){
        $data = Products::all();
        $dataCate = Catelogries::all();

        //Lấy data từ client xuống
        $searchQuery = $request->input('search');
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        //Search theo tên
        if ($searchQuery) {
            $data = Products::where('Name', 'like', "%{$searchQuery}%")->get();
        } else {
            $data = Products::all();
        }

        //Search theo giá
        if ($minPrice) {
            $data = $data->where('Price', '>=', $minPrice);
        }
    
        if ($maxPrice) {
            $data = $data->where('Price', '<=', $maxPrice);
        }

        return view("home.filter",['data'=>$data,'dataCate'=>$dataCate]);
    }
}