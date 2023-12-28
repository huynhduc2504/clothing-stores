@extends('layouts.layout')

@section('content')
<link rel="stylesheet" href="css/home.css">
<div class="container mx-auto p-8">
    <h1 class="text-3xl font-semibold mb-4">Product Page</h1>

    <!-- Filter Section -->
    <div>
        <!-- Category Filter -->
        <form action="/filter" method="GET" class="flex space-x-4 mb-8">
            <div>
                <label class="block text-sm font-medium text-gray-700">Category</label>
                <select class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    <option>All</option>
                    @foreach($dataCate as $dataCa)
                    <option>{{$dataCa->CategoryName}}</option>
                    @endforeach
                </select>
            </div>
    
            <!-- Price Range Filter -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Price Range</label>
                <div class="flex items-center mt-1">
                    <input type="text" placeholder="Min" name="min_price" class="w-1/2 p-2 border border-gray-300 rounded-md">
                    <span class="mx-2">to</span>
                    <input type="text" placeholder="Max" name="max_price" class="w-1/2 p-2 border border-gray-300 rounded-md">
                </div>
            </div>
    
            <div>
                <label class="block text-sm font-medium text-gray-700">Search</label>
                <input type="text" placeholder="Search..." name="search" class="mt-1 p-2 border border-gray-300 rounded-md">
            </div>
    
            <!-- Apply Filter Button -->
            <div class="flex items-end">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md" type="submit">Apply Filters</button>
            </div>
        </form>
    </div>

    <!-- Product List -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        <!-- Product Card Example (Repeat as needed) -->
        @foreach($data as $item)
            <a href="/detail/{{$item->Id}}" class="href-detail">
              <div class="new-product-item">
                  <div class="img-product-container">
                    <img src="{{$item->ImageURL}}" alt="">
                    <div class="add-cart-container">
                      <form action="{{ route('cart.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $item->Id }}" name="id">
                        <input type="hidden" value="{{ $item->Name }}" name="name">
                        <input type="hidden" value="{{ $item->Price }}" name="price">
                        <input type="hidden" value="{{ $item->ImageURL }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button>Thêm vào giỏ hàng</button>
                      </form>
                    </div>
                  </div>
                  <div class="content-product-container">
                    <p>{{$item->Name}}</p>
                    <p class="content-product-price">{{$item->Price}}$</p>
                  </div>
              </div>
              </a>
            @endforeach
      
    </div>
</div>

@endsection