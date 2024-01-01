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
    <div class="comment">
        <!-- component -->
        <div class="antialiased pl-12 w-3/4 flex flex-col flex-start">
            <h3 class="mb-4 text-lg font-semibold text-gray-900">Comments</h3>

            <div class="space-y-4 border p-4  min-h-[100px]">
                @if($comments->count() == 0)
                <div class="flex min-h-[100px] justify-center items-center">
                    <h1>Chưa có bình luận nào</h1>
                </div>
                @else
                @foreach($comments as $comment)
                <div class="flex">
                    <div class="flex-shrink-0 mr-3">
                        <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                            src="https://images.unsplash.com/photo-1513956589380-bad6acb9b9d4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80"
                            alt="">
                    </div>
                    <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                        <strong>{{$comment->user->Username}}</strong> <span
                            class="text-xs text-gray-400">{{ $comment->created_at->format('M d, Y h:i A') }}</span>
                        <p class="text-sm">
                            {{ $comment->content }}
                        </p>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- component -->
    <!-- comment form -->
    <div class="flex pl-8 items-center mb-4 w-3/4">
        <form method="post" action="/posts/{{$data->Id}}/comments"
            class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-full px-3 mb-2 mt-2">
                    <input type="hidden" value="{{ session()->get('user') ? session()->get('user')['id'] : 0 }}" name="IdCustomer">
                    <textarea
                        class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                        name="content" placeholder='Type Your Comment' required></textarea>
                </div>
                <div class="w-full md:w-full flex items-start md:w-full px-3">
                    <div class="-mr-1">
                        <input type='submit'
                            class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100"
                            value='Post Comment'>
                    </div>
                </div>
        </form>
    </div>
</div>
<div class="product-relate"></div>
</div>
@endsection