@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="/css/product.css">
<div class="container">
    <div class="text-sm breadcrumbs text-xl">
        <ul>
            <li><a>Home</a></li>
            <li>Products</li>
        </ul>
    </div>
    <h2 class="title">Danh sách sản phẩm</h2>
    <div class="data-table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Mô tả sản phẩm</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $product)
                <!-- Thêm các thẻ HTML khác hoặc thao tác với dữ liệu khác -->
                <tr>
                    <td>{{ $product->Id }}</td>
                    <td><image width="100px" src="{{ $product->ImageURL }}"></image></td>
                    <td>{{ $product->Name }}</td>
                    <td>{{ $product->Description }}</td>
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