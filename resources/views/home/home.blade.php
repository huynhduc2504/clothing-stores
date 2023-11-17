@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="css/home.css">
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
      />
      <!-------------------------- Slider Image -------------------------------------->
    <div class="img-slider">
        <div class="img-item">
          <img src="https://images.unsplash.com/photo-1593380090147-a2192b72a9ae?auto=format&fit=crop&q=80&w=1925&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
        </div>
        <div class="img-item">
          <img src="https://images.unsplash.com/photo-1516209519364-365964646088?auto=format&fit=crop&q=80&w=1770&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
        </div>
        <div class="img-item">
          <img src="https://images.unsplash.com/flagged/photo-1553802922-2eb2f7f2c65b?auto=format&fit=crop&q=80&w=1770&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
        </div>
    </div>
    <!------------------------------------------ Home body ---------------------------------------->
    <div class="home-body">
      <!----------------------- Support container -------------------------------------------------->
      <div class="support-group">
          <div class="support-item">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 support-icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <div class="support-content">
                <p class="support-content-title">Thanh toán khi nhận hàng (COD)</p>
                <p>Giao hàng toàn quốc</p>
              </div>
          </div>
          <div class="support-item">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 support-icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
              </svg>
              <div class="support-content">
                <p class="support-content-title">Miễn phí giao hàng</p>
                <p>Với đơn hàng trên 599.000đ.</p>
              </div>
          </div>
          <div class="support-item">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 support-icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
              </svg>
              <div class="support-content">
                <p class="support-content-title">Đổi hàng miễn phí</p>
                <p>Trong 30 ngày kể từ ngày mua.</p>
              </div>
          </div>
      </div>

      <!-------------------------- New Product -------------------------------->
      <div class="new-product-group">
          <h2>Sản phẩm mới</h2>
          <div class="new-product-container">
            @foreach($data as $item)
            <a href="/detail/{{$item->Id}}" class="href-detail">
              <div class="new-product-item">
                  <div class="img-product-container">
                    <img src="{{$item->ImageURL}}" alt="">
                    <div class="add-cart-container">
                      <span>Thêm vào giỏ hàng</span>
                  </div>
                  </div>
                  <div class="content-product-container">
                    <p>{{$item->Name}}</p>
                    <p class="content-product-price">{{$item->Price}}$</p>
                  </div>
              </div>
              </a>
            @endforeach
          </div>
      </div>
    </div>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script>
        $(document).ready(function(){
            $('.img-slider').slick({
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows:false,
            });
        });
    </script>
@endsection