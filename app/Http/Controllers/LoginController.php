<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.login');
    }

    public function register_view()
    {
        return view('home.register');
    }

    public function login(Request $r)
    {
        $u = Customers::where('Email','=',$r->Email)->get();
        if(!$u->isEmpty()){
        if(Hash::check($r->Password,$u[0]->Password))
        {
            session(['user'=>'1','user'=>['id'=>$u[0]->Id,'email'=>$u[0]->Email,'name'=>$u[0]->Username]]);
            session()->flash('success','Đăng nhập thành công');
            return redirect('/');
        }else
        {
            session()->flash('error','Thông tin đăng nhập không hợp lệ');
            return redirect('/login');
        }
       }else{
           session()->flash('error','Thông tin đăng nhập không hợp lệ');
            return redirect('/login');
       }
    }

    function register(Request $r)
    {
        $r->validate(
            [
                'Email' => 'required|unique:customer',
                'Password' => 'required|min:6|max:20',
            ],
            [
                'Email.required' => 'Email không được để trống',
                'Email.unique' => 'Tai khoan đã tồn tại. Vui lòng chọn email khác',
                'Password.required' => 'Password không được để trống',
                'Password.min' => 'Password tối thiểu 6 ký tự',
            ]
        );
        $data = $r->all();
        $data['Password'] = Hash::make($r->Password);
        // $data->save();
        Customers::Create($data);
        session()->flash('regis_seccess','Tạo tài khoản thành công.Có thể đăng nhập');
        return redirect('/login');
    }

    function logout()
    {
        session()->forget(['user','user']);
        return redirect('/login');
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
