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
    <div class="overflow-x-auto">
        <table id="demo_table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>User Id</th>
                    <th>Comments Number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Quần áo trẻ em</td>
                    <td>007</td>
                    <td>100000000</td>
                </tr>
            </tbody>
        </table>

    </div>
</div>

<script>
$(document).ready(function() {
    $('#demo_table').DataTable({
        "processing": true,
        "serverSide": true
        "ajax": '{{ route('ajax.posts.index') }}',

        "columns": [{
                "data": "id"
            },
            {
                "data": "title"
            },
            {
                "data": "user_name"
            },
            {
                "data": "comments_num"
            },
        ]
    });
});
</script>
@endsection