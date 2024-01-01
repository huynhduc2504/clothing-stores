@extends('layouts.layout')

@section('content')
<link rel="stylesheet" href="/css/login.css">
<div class="product-breadcrumb">
    <h2>LOGIN</h2>
    <a href="/">HOME / LOGIN</a>
</div>
<div class="modal-login">
    @if(session()->has('error'))
    <div role="alert" class="alert alert-error">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <p>{{session()->get('error')}}</p>
    </div>
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
            <input type="password" class="input_password" placeholder="Password" name="Password"></input>
        </div>
        <button class="login_button" type="submit" name="submit">Login</button>
    </form>
    <a href="/register">Đăng ký</a>
</div>
@endsection