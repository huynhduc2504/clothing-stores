@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="/css/product.css">
<div class="container">
    <div class="text-sm breadcrumbs text-xl">
        <ul>
            <li><a>Home</a></li>
            <li>Sizes</li>
        </ul>
    </div>
    <h2 class="title">Các loại kích thước</h2>
    <div class="data-table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Mã kích thước</th>
                    <th>Tên kích thước</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $size)
                <!-- Thêm các thẻ HTML khác hoặc thao tác với dữ liệu khác -->
                <tr>
                    <td>{{ $size->Id }}</td>
                    <td>{{ $size->Name }}</td>
                    <td>
                        <form action="/admin/size/delete/{{ $size->Id }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="btn btn-error">Xóa</button>
                        </form>
                        <form action="/admin/size/edit/{{ $size->Id }}" method="get">
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