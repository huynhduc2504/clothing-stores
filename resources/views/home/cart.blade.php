@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="css/cart.css">
<div class="container px-6 mx-auto">
    <div class="flex justify-center my-6">
        <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
            @if ($message = Session::get('success'))
            <div class="p-4 mb-3 bg-green-400 rounded">
                <p class="text-green-800">{{ $message }}</p>
            </div>
            @endif
            <h3 class="text-3xl font-bold">Giỏ hàng</h3>
            <div class="flex-1">
                <div class="overflow-x-auto">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th></th>
                                <th>Ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Tổng tiền</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            @foreach ($cartItems as $item)
                            <tr>
                                <th></th>
                                <td> <a href="#">
                                        <img src="{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
                                    </a></td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <form action="{{ route('cart.update') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id}}">
                                        <input type="text" name="quantity" value="{{ $item->quantity }}"
                                            class="w-16 text-center h-6 text-gray-800 outline-none rounded border border-blue-600" />
                                        <button
                                            class="px-4 mt-1 py-1.5 text-sm rounded rounded shadow text-violet-100 bg-violet-500">Update</button>
                                    </form>
                                </td>
                                <td>${{ $item->price }}</td>
                                <td>${{ $item->price * $item->quantity}}</td>
                                <td>
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                        <button class="px-4 py-2 text-white bg-red-600 shadow rounded-full">x</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    Tổng tiền giỏ hàng: ${{ Cart::getTotal() }}
                </div>
                <div class="flex">
                    <div class="m-5">
                        <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-red-500">Xóa giỏ
                                hàng</button>
                        </form>
                    </div>
                    <div class="m-5">
                        <a href="{{ route('checkout.view') }}">
                            <button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-red-500">Đặt hàng</button>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<div class="container px-6 mx-auto">
    <div class="flex justify-center my-6">
        <!-- <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
            <h3 class="text-3xl font-bold">Thông tin đặt hàng</h3>
            <form action="/order/create" class="flex justify-around w-full flex-wrap items-center flex-col">
                <div class="flex w-4/5 justify-between">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Họ tên</span>
                        </div>
                        <input type="text" placeholder="Type here" name="name"
                            class="input input-bordered w-full max-w-xs" />
                    </label>
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Địa chỉ</span>
                        </div>
                        <input type="text" placeholder="Type here" name="address"
                            class="input input-bordered w-full max-w-xs" />
                    </label>
                </div>
                <div class="flex w-4/5 justify-between">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Số điện thoại</span>
                        </div>
                        <input type="text" placeholder="Type here" name="sdt"
                            class="input input-bordered w-full max-w-xs" />
                    </label>
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Ghi chú</span>
                        </div>
                        <input type="text" placeholder="Type here" name="note"
                            class="input input-bordered w-full max-w-xs" />
                    </label>
                </div>
                <input type="hidden" value="{{ Cart::getTotal() }}" name="TotalAmount">
                <input type="hidden" value="{{session()->get('user')['id']}}" name="IdCustomer">
                <input type="hidden" value="" name="OrderDate">
                 @foreach ($cartItems as $index => $item)
                <input type="hidden" value="{{ $item->price }}" name="Price_{{ $index }}">
                <input type="hidden" value="{{ $item->quantity }}" name="Quantity_{{ $index }}">
                @endforeach -->
                <!-- <input type="hidden" value="{{$cartItems}}" name="cartItems">
                <button class="btn my-8" type="submit">Đặt hàng</button>
            </form>
        </div> --> 
    </div>
</div>

@endsection