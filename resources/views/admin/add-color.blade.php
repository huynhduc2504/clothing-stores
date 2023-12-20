@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="/css/product.css">
<div class="container">
    <div class="text-sm breadcrumbs text-xl">
        <ul>
            <li><a>Home</a></li>
            <li><a>Colors</a></li>
            <li>Add</li>
        </ul>
    </div>
    <h2 class="title">Thêm màu sắc</h2>
    <form class="form" action="/admin/color/add" method="post" enctype="multipart/form-data">
        @csrf
        <label class="form-control w-full">
            <div class="label w-full">
                <span class="label-text">Tên</span>
            </div>
            <input name="Name" type="text" placeholder="Tên" class="input input-bordered w-full" required />
        </label>
        <button type="submit" class="btn btn-neutral mt-7">Thêm</button>
    </form>
</div>

@endsection