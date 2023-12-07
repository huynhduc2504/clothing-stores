@extends('layouts.layout')

@section('content')
<div class="container px-6 mx-auto">
    <div class="flex justify-center my-6">
        <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
            <h3 class="text-3xl font-bold">Thông tin đặt hàng</h3>
            <form action="" class="flex justify-around w-full flex-wrap items-center flex-col">
                <div class="flex w-4/5 justify-between">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Họ tên</span>
                        </div>
                        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </label>
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Địa chỉ</span>
                        </div>
                        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </label>
                </div>
                <div class="flex w-4/5 justify-between">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Họ tên</span>
                        </div>
                        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </label>
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Số điện thoại</span>
                        </div>
                        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    </label>
                </div>
                <button class="btn my-8" type="submit">Ghi chú</button>
            </form>
        </div>
    </div>
</div>


@endsection