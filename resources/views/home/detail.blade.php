@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="/css/detail.css">
<div class="product-container">
    <div class="product-breadcrumb">
        <h2>PRODUCT</h2>
        <a href="/">HOME / PRODUCT</a>
    </div>
    <div class="product-info">
        <div class="product-left">
            <img src="{{$data->ImageURL}}" alt="Hinh" />
            <img src="{{$data->ImageURL}}" alt="Hinh" />
            <img src="{{$data->ImageURL}}" alt="Hinh" />
            <img src="{{$data->ImageURL}}" alt="Hinh" />
        </div>
        <div class="product-right">
            <h2>{{$data->Name}}</h2>
            <h4>
                <del>24.000.000 VND</del> <span>50% Off</span>
            </h4>
            <h3>{{$data->Price}} VND</h3>
            <form action="{{ route('cart.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
            <div class="product-description">
                <div class="flex w-3/4">
                    <div class="w-1/2">
                        <h6>Kích thước :</h6>
                        <div class="product-size">
                            <select class="select select-bordered w-full max-w-xs" name="size">
                                @foreach($dataSize as $item)
                                <option value="{{$item->Name}}">{{$item->Name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <h6>Màu sắc:</h6>
                        <div class="product-size">
                            <select class="select select-bordered w-full max-w-xs" name="color">
                                @foreach($dataColor as $item)
                                <option value="{{$item->Name}}">{{$item->Name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <span>Còn hàng</span>
            </div>
            <div class="product-action">
                    <input type="hidden" value="{{ $data->Id }}" name="id">
                    <input type="hidden" value="{{ $data->Name }}" name="name">
                    <input type="hidden" value="{{ $data->Price }}" name="price">
                    <input type="hidden" value="{{ $data->ImageURL }}" name="image">
                    <h6>Số lượng:</h6>
                    <select class="select select-bordered w-full max-w-xs mb-4" name="quantity">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <button class="btn">Thêm vào giỏ hàng</button>
                </div>
              </form>
            <div class="product-detail">
                <h6>Chi tiết sản phẩm</h6>
                <p>
                    It is a long established fact that a reader will be distracted by
                    the readable content of a page when looking at its layout. The
                    point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters,It is a long established fact that a
                    reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that it
                    has a more-or-less normal distribution of letters.
                </p>
            </div>
        </div>
    </div>
    <div class="product-relate"></div>
</div>
@endsection