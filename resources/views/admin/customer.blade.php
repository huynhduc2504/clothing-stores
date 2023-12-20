@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="/css/product.css">
<div class="container">
    <div class="text-sm breadcrumbs text-xl">
        <ul>
            <li><a>Home</a></li>
            <li>Customers</li>
        </ul>
    </div>
    <h2 class="title">Danh sách khách hàng</h2>
    <div class="data-table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Mã khách hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $customer)
                <!-- Thêm các thẻ HTML khác hoặc thao tác với dữ liệu khác -->
                <tr>
                    <td>{{ $customer->Id }}</td>
                    <td>{{ $customer->Username }}</td>
                    <td>{{ $customer->Email }}</td>
                    <td>{{ $customer->Address }}</td>
                    <td>{{ $customer->Phone }}</td>
                    <td>
                        <form action="/admin/customer/delete/{{ $customer->Id }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="btn btn-error">Xóa</button>
                        </form>
                        <form action="/admin/customer/edit/{{ $customer->Id }}" method="get">
                            @csrf
                            <button type="submit" class="btn btn-warning">Sửa</button>
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