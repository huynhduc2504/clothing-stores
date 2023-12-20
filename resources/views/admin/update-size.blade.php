@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="/css/product.css">
<div class="container">
    <div class="text-sm breadcrumbs text-xl">
        <ul>
            <li><a>Home</a></li>
            <li><a>Sizes</a></li>
            <li>Update</li>
        </ul>
    </div>
    <h2 class="title">Cập nhật thông tin kích thước</h2>
    <form class="form" action="/admin/size/update/{{$data->Id}}" method="post" enctype="multipart/form-data">
        @csrf
        <label class="form-control w-full">
            <div class="label w-full">
                <span class="label-text">Tên</span>
            </div>
            <input name="Name" type="text" placeholder="Tên" value="{{$data->Name}}"
                class="input input-bordered w-full" required />
        </label>
        <input type="hidden" value="put" name="_method">
        <button type="submit" class="btn btn-neutral mt-7">Cập nhật</button>
    </form>
</div>

@endsection