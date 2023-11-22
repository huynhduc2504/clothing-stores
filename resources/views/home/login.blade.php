@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="/css/login.css">
    <div class="product-breadcrumb">
            <h2>LOGIN</h2>
            <a href="/">HOME / LOGIN</a>
    </div>
    <div class="modal-login">
        <div class="modal_content">
            <h1>LOGIN</h1>
            <form class="login_box" action="/login" method="POST">
                <div class="login_user">
                    <span>Tài khoản hoặc email:</span>
                    <input class="input_user" placeholder="Username or email"></input>
                </div>
                <div class="login_password">
                    <span>Mật khẩu:</span>
                    <input
                        type="password"
                        class="input_password"
                        placeholder="Password"
                    ></input>
                </div>
                <button class="login_button" type="submit">Login</button>
            </form>
        </div>
    </div>
@endsection