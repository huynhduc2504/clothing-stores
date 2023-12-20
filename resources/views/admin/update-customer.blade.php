@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="/css/product.css">
<div class="container">
    <div class="text-sm breadcrumbs text-xl">
        <ul>
            <li><a>Home</a></li>
            <li><a>Customers</a></li>
            <li>Update</li>
        </ul>
    </div>
    <h2 class="title">Cập nhật thông tin khách hàng</h2>
    <form class="form" action="/admin/customer/update/{{$data->Id}}" method="post" enctype="multipart/form-data">
        @csrf
        <label class="form-control w-full">
            <div class="label w-full">
                <span class="label-text">Tên khách hàng</span>
            </div>
            <input name="Username" type="text" placeholder="Tên khách hàng" value="{{$data->Username}}"
                class="input input-bordered w-full" required />
        </label>
        <label class="form-control w-full">
            <div class="label w-full">
                <span class="label-text">Email</span>
            </div>
            <input name="Email" type="text" placeholder="Email" value="{{$data->Email}}"
                class="input input-bordered w-full" required />
        </label>
        <label class="form-control w-full">
            <div class="label w-full">
                <span class="label-text">Địa chỉ</span>
            </div>
            <input name="Address" type="text" placeholder="Địa chỉ" value="{{$data->Address}}"
                class="input input-bordered w-full" required />
        </label>
        <label class="form-control w-full">
            <div class="label w-full">
                <span class="label-text">Số điện thoại</span>
            </div>
            <input name="Phone" type="text" placeholder="Số điện thoại" value="{{$data->Phone}}"
                class="input input-bordered w-full" required />
        </label>
        <input type="hidden" value="put" name="_method">
        <button type="submit" class="btn btn-neutral mt-7">Cập nhật</button>
    </form>
</div>

@endsection