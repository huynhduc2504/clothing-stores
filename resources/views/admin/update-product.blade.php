@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="/css/product.css">
<div class="container">
    <div class="text-sm breadcrumbs text-xl">
        <ul>
            <li><a>Home</a></li>
            <li><a>Products</a></li>
            <li>Update</li>
        </ul>
    </div>
    <h2 class="title">Cập nhật thông tin sản phẩm</h2>
    <form class="form" action="/admin/product/update/{{$data->Id}}" method="post" enctype="multipart/form-data">
        @csrf
        <label class="form-control w-full">
            <div class="label w-full">
                <span class="label-text">Tên sản phẩm</span>
            </div>
            <input name="Name" type="text" placeholder="Tên sản phẩm" value="{{$data->Name}}"
                class="input input-bordered w-full" required />
        </label>
        <label class="form-control w-full">
            <div class="label w-full">
                <span class="label-text">Giá sản phẩm</span>
            </div>
            <input name="Price" type="text" placeholder="Giá sản phẩm" value="{{$data->Price}}"
                class="input input-bordered w-full" required />
        </label>
        <label class="form-control w-full">
            <div class="label w-full">
                <span class="label-text">Ảnh sản phẩm</span>
            </div>
            <input name="ImageURL" type="text" placeholder="Ảnh sản phẩm" value="{{$data->ImageURL}}"
                class="input input-bordered w-full" required />
        </label>
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Kích thước</span>
            </div>
            <select name="IdSize" class="select select-bordered" required>
                @foreach($Size as $items)
                <option value="{{$items->Id}}" {{ $data->IdSize == $items->Id ? 'selected' : '' }}>
                    {{$items->Name}}
                </option>
                @endforeach
            </select>
        </label>
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Màu sắc</span>
            </div>
            <select name="IdColor" class="select select-bordered" required>
                @foreach($Color as $items)
                <option value="{{$items->Id}}" {{ $data->IdColor == $items->Id ? 'selected' : '' }}>
                    {{$items->Name}}
                </option>
                @endforeach
            </select>
        </label>
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Danh mục</span>
            </div>
            <select name="IdCategories" class="select select-bordered">
                @foreach($Cate as $items)
                <option value="{{$items->CategoryID}}" {{ $data->IdCategories == $items->Id ? 'selected' : '' }}>
                    {{$items->CategoryName}}
                </option>
                @endforeach
            </select>
        </label>
        <label class="form-control">
            <div class="label">
                <span class="label-text">Mô tả sản phẩm</span>
            </div>
            <textarea name="Description" class="textarea textarea-bordered h-24"
                placeholder="Mô tả sản phẩm">{{$data->Description}}</textarea>
        </label>
        <input type="hidden" value="put" name="_method">
        <button type="submit" class="btn btn-neutral mt-7">Cập nhật</button>
    </form>
</div>

@endsection