@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="/css/product.css">
<div class="container">
    <div class="text-sm breadcrumbs text-xl">
        <ul>
            <li><a>Home</a></li>
            <li><a>Customers</a></li>
            <li>Add</li>
        </ul>
    </div>
    <h2 class="title">Thêm khách hàng</h2>
    <div class="form">
        <label class="form-control w-full">
            <div class="label w-full">
                <span class="label-text">Tên khách hàng</span>
            </div>
            <input type="text" placeholder="Tên khách hàng" class="input input-bordered w-full" />
        </label>
        <label class="form-control w-full">
            <div class="label w-full">
                <span class="label-text">Email</span>
            </div>
            <input type="email" placeholder="Email" class="input input-bordered w-full" />
        </label>
        <label class="form-control w-full">
            <div class="label w-full">
                <span class="label-text">Số điện thoại</span>
            </div>
            <input type="text" placeholder="Số điện thoại" class="input input-bordered w-full" />
        </label>
        <label class="form-control w-full">
            <div class="label w-full">
                <span class="label-text">Địa chỉ</span>
            </div>
            <input type="text" placeholder="Địa chỉ" class="input input-bordered w-full" />
        </label>
    </div>
</div>

@endsection