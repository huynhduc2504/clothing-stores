@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="/css/product.css">
<div class="container">
    <div class="text-sm breadcrumbs text-xl">
        <ul>
            <li><a>Home</a></li>
            <li>Categories</li>
        </ul>
    </div>
    <h2 class="title">Danh sách danh mục</h2>
    <div class="data-table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $cate)
                <!-- Thêm các thẻ HTML khác hoặc thao tác với dữ liệu khác -->
                <tr>
                    <td>{{ $cate->CategoryID }}</td>
                    <td>{{ $cate->CategoryName }}</td>
                    <td>
                        <form action="/admin/category/delete/{{ $cate->CategoryID }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="btn btn-error">Xóa</button>
                        </form>
                        <form action="/admin/category/edit/{{ $cate->CategoryID }}" method="get">
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