@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="/css/product.css">
<div class="container">
    <div class="text-sm breadcrumbs text-xl">
        <ul>
            <li><a>Home</a></li>
            <li><a>Products</a></li>
            <li>Add</li>
        </ul>
    </div>
    <h2 class="title">Thêm sản phẩm</h2>
    <form class="form" action="/admin/product/add" method="post" enctype="multipart/form-data">
        @csrf
        <label class="form-control w-full">
            <div class="label w-full">
                <span class="label-text">Tên sản phẩm</span>
            </div>
            <input name="Id" type="text" placeholder="Tên sản phẩm" class="input input-bordered w-full" required />
        </label>
        <label class="form-control w-full">
            <div class="label w-full">
                <span class="label-text">Giá sản phẩm</span>
            </div>
            <input name="Price" type="text" placeholder="Giá sản phẩm" class="input input-bordered w-full" required />
        </label>
        <label class="form-control w-full">
            <div class="label w-full">
                <span class="label-text">Ảnh sản phẩm</span>
            </div>
            <input name="ImageURL" type="text" placeholder="Ảnh sản phẩm" class="input input-bordered w-full"
                required />
        </label>
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Kích thước</span>
            </div>
            <select name="IdSize" class="select select-bordered" required>
                <option disabled selected>Chọn kích thước</option>
                <option value="1">S</option>
                <option value="2">M</option>
                <option value="3">L</option>
                <option value="4">XL</option>
            </select>
        </label>
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Màu sắc</span>
            </div>
            <select name="IdColor" class="select select-bordered" required>
                <option disabled selected>Chọn màu sắc</option>
                <option value="1">Trắng</option>
                <option value="2">Đen</option>
                <option value="3">Hồng</option>
                <option value="4">Xanh</option>
            </select>
        </label>
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Danh mục</span>
            </div>
            <select name="IdCatologies" class="select select-bordered">
                <option disabled selected>Chọn loại</option>
                <option value="1">Quần</option>
                <option value="2">Áo</option>
            </select>
        </label>
        <label class="form-control">
            <div class="label">
                <span class="label-text">Mô tả sản phẩm</span>
            </div>
            <textarea name="Description" class="textarea textarea-bordered h-24"
                placeholder="Mô tả sản phẩm"></textarea>
        </label>
        <button type="submit" class="btn btn-neutral mt-7">Thêm</button>
    </form>
</div>

@endsection