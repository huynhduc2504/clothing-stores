@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="/css/product.css">
<div class="container">
    <div class="text-sm breadcrumbs text-xl">
        <ul>
            <li><a>Home</a></li>
            <li><a>Category</a></li>
            <li>Update</li>
        </ul>
    </div>
    <h2 class="title">Cập nhật thông tin danh mục</h2>
    <form class="form" action="/admin/category/update/{{$data->CategoryID}}" method="post" enctype="multipart/form-data">
        @csrf
        <label class="form-control w-full">
            <div class="label w-full">
                <span class="label-text">Tên danh mục</span>
            </div>
            <input name="CategoryName" type="text" placeholder="Tên danh mục" value="{{$data->CategoryName}}"
                class="input input-bordered w-full" required />
        </label>
        <input type="hidden" value="put" name="_method">
        <button type="submit" class="btn btn-neutral mt-7">Cập nhật</button>
    </form>
</div>

@endsection