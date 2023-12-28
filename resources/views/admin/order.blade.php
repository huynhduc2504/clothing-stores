@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="/css/product.css">
<div class="container">
    <div class="text-sm breadcrumbs text-xl">
        <ul>
            <li><a>Home</a></li>
            <li>Orders</li>
        </ul>
    </div>
    @if(session()->has("OK"))
    <p class="alert alert-success">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        {{session()->get('OK')}}
    </p>
    @elseif(session()->has("Fail"))
    <p class="alert alert-error">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        {{session()->get('Fail')}}
    </p>
    @endif
    <h2 class="title">Danh sách đơn hàng</h2>
    <div class="data-table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Mã đon hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Tổng tiền</th>
                    <th>Mã khách hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Địa chỉ giao hàng</th>
                    <th>Chú thích</th>
                    <th>Số điện thoại</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $order)
                <!-- Thêm các thẻ HTML khác hoặc thao tác với dữ liệu khác -->
                <tr>
                    <td>{{ $order->Id }}</td>
                    <td>{{ $order->OrderDate }}</td>
                    <td>{{ $order->TotalAmount }}</td>
                    <td>{{ $order->IdCustomer }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->note }}</td>
                    <td>{{ $order->sdt }}</td>
                    <td>
                        <form action="/admin/detail/{{ $order->Id }}" method="get">
                            @csrf
                            <button type="submit" class="btn btn-info">Xem</button>
                        </form>
                        <form action="/admin/order/delete/{{ $order->Id }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="btn btn-error">Xóa</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
});
</script>
@endsection