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
            <input name="Name" type="text" placeholder="Tên sản phẩm" class="input input-bordered w-full" />
            @error('Name')
                <span class="text-red-400 text-lg">{{ $message }}</span>
            @enderror
        </label>
        <label class="form-control w-full">
            <div class="label w-full">
                <span class="label-text">Giá sản phẩm</span>
            </div>
            <input name="Price" type="text" placeholder="Giá sản phẩm" class="input input-bordered w-full" />
            @error('Price')
            <!-- <div role="alert" class="alert alert-warning h-2 flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
                <span>{{ $message }}</span>
            </div> -->
            <span class="text-red-400 text-lg">{{ $message }}</span>
            @enderror
        </label>
        <label class="form-control w-full">
            <div class="label w-full">
                <span class="label-text">Ảnh sản phẩm</span>
            </div>
            <input name="ImageURL" type="text" placeholder="Ảnh sản phẩm" class="input input-bordered w-full" />
        </label>
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Kích thước</span>
            </div>
            <select name="IdSize" class="select select-bordered">
                <option disabled selected>Chọn kích thước</option>
                @foreach($Size as $items)
                <option value="{{$items->Id}}">
                    {{$items->Name}}
                </option>
                @endforeach
            </select>
        </label>
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Màu sắc</span>
            </div>
            <select name="IdColor" class="select select-bordered">
                <option disabled selected>Chọn màu sắc</option>
                @foreach($Color as $items)
                <option value="{{$items->Id}}">
                    {{$items->Name}}
                </option>
                @endforeach
            </select>
        </label>
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Danh mục</span>
            </div>
            <select name="IdCatologies" class="select select-bordered">
                <option disabled selected>Chọn loại</option>
                @foreach($Cate as $items)
                <option value="{{$items->CategoryID}}">
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
                placeholder="Mô tả sản phẩm"></textarea>
        </label>
        <button type="submit" class="btn btn-neutral mt-7">Thêm</button>
    </form>
</div>

@endsection