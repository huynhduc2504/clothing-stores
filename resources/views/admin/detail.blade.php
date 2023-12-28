@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="/css/product.css">
<div class="container">
    <div class="text-sm breadcrumbs text-xl">
        <ul>
            <li><a>Home</a></li>
            <li>Detail Orders</li>
        </ul>
    </div>
    <h2 class="title">Danh sách chi tiết đơn hàng</h2>
    <div class="data-table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Mã chi tiết đon hàng</th>
                    <th>Số lượng sản phẩm</th>
                    <th>Tổng tiền</th>
                    <th>Mã đơn hàng</th>
                    <th>Mã sản phẩm</th>
                    <th>Mã tồn kho</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $detail)
                @if($detail->IdOrder == $id)
                <!-- Thêm các thẻ HTML khác hoặc thao tác với dữ liệu khác -->
                <tr>
                    <td>{{ $detail->Id }}</td>
                    <td>{{ $detail->Quantity }}</td>
                    <td>{{ $detail->Price }}</td>
                    <td>{{ $detail->IdOrder }}</td>
                    <td>{{ $detail->idClothes }}</td>
                    <td>{{ $detail->idStock }}</td>
                </tr>
                @else
                @endif
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