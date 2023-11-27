@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="/css/login.css">
    <div class="product-breadcrumb">
            <h2>LOGIN</h2>
            <a href="/">HOME / LOGIN</a>
    </div>
    <div class="modal-login">
        @if(session()->has('error'))
            <p>{{session()->get('error')}}</p>
        @endif
            <h1>LOGIN</h1>
            <form class="login_box" method="post" action="/login">
                @csrf
                <div class="login_user">
                    <span>Tài khoản hoặc email:</span>
                    <input class="input_user" type="text" placeholder="Username or email" name="Email"></input>
                </div>
                <div class="login_password">
                    <span>Mật khẩu:</span>
                    <input
                        type="password"
                        class="input_password"
                        placeholder="Password"
                        name="Password"
                    ></input>
                </div>
                <button class="login_button" type="submit" name="submit">Login</button>
            </form>
            <a href="/register">Đăng ký</a>
    </div>
@endsection