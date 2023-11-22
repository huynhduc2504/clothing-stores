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
          <img
            src="{{$data->ImageURL}}"
            alt="Hinh"
          />
          <img
            src="{{$data->ImageURL}}"
            alt="Hinh"
          />
          <img
            src="{{$data->ImageURL}}"
            alt="Hinh"
          />
          <img
            src="{{$data->ImageURL}}"
            alt="Hinh"
          />
        </div>
        <div class="product-right">
          <h2>{{$data->Name}}</h2>
          <h4>
            <del>24.000.000 VND</del> <span>50% Off</span>
          </h4>
          <h3>{{$data->Price}} VND</h3>
          <div class="product-description">
            <h6>Kích thước :</h6>
            <div class="product-size">
              <a href="/">S</a>
              <a href="/">M</a>
              <a href="/">L</a>
            </div>
            <span>Còn hàng</span>
            <h6>Số lượng :</h6>
            <div class="product-qty">
              <button >
                +
              </button>
              <input type="text" value="1"></input>
              <button>
                -
              </button>
            </div>
          </div>
          <div class="product-action">
            <button class="button-primary">Thêm vào giỏ hàng</button>
            <button class="button-primary">Mua ngay</button>
          </div>
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