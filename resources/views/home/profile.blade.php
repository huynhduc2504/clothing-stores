@extends('layouts.layout')
@section('content')
<div class="container mx-auto mt-8 p-4">
    <div class="bg-white p-8 rounded shadow-md">
            @if(session('error'))
            <div role="alert" class="alert alert-error">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('error') }}.</span>
            </div>
            @endif
            @if(session('success'))
            <div role="alert" class="alert alert-success">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('success') }}.</span>
            </div>
            @endif
        <!-- Tab Navigation -->
        <div class="mb-8">
            <input type="radio" id="tab1" name="tab" class="hidden" checked>
            <label for="tab1"
                class="cursor-pointer text-lg font-semibold border-b-2 border-gray-300 px-4 py-2 inline-block">User
                Information</label>

            <input type="radio" id="tab2" name="tab" class="hidden">
            <label for="tab2"
                class="cursor-pointer text-lg font-semibold border-b-2 border-gray-300 px-4 py-2 inline-block">Order
                History</label>

            <!-- Tab Content - User Information -->
            <div class="proflie mt-4" id="tab-content-1">
                <h1 class="text-2xl font-bold mb-6">User Information</h1>
                <form action="/update-profile" method="post" class="mb-8">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Full Name</label>
                        <input type="text" id="name" name="name" class="w-full p-2 border rounded" value="{{$data[0]->Username}}">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full p-2 border rounded" value="{{$data[0]->Email}}">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-semibold mb-2">Address</label>
                        <input type="text" id="password" name="address" class="w-full p-2 border rounded" value="{{$data[0]->Address ?? 'Chưa có thông tin'}}">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-semibold mb-2">Phone</label>
                        <input type="text" id="password" name="phone" class="w-full p-2 border rounded" value="{{$data[0]->Phone ?? 'Chưa có thông tin'}}">
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Update
                        Information</button>
                </form>
            </div>

            <!-- Tab Content - Order History -->
            <div class="proflie hidden mt-4" id="tab-content-2">
    <h1 class="text-2xl font-bold mb-6">Order History</h1>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Tên</th>
                <th class="px-4 py-2">Địa chỉ</th>
                <th class="px-4 py-2">Số điện thoại</th>
                <th class="px-4 py-2">Tổng tiền</th>
                <th class="px-4 py-2">Trạng thái</th>
                <th class="px-4 py-2">Ngày đặt</th>
                <th class="px-4 py-2">Ghi chú</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample Order Entry (Replace with dynamic data) -->
            @foreach($dataOrder as $item)
            <tr>
                <td class="border px-4 py-2"><span class="font-semibold">{{$item->name}}</span></td>
                <td class="border px-4 py-2"><span class="font-semibold">{{$item->address}}</span></td>
                <td class="border px-4 py-2"><span class="font-semibold">{{$item->sdt}}</span></td>
                <td class="border px-4 py-2"><span class="font-semibold">{{$item->TotalAmount}}</span></td>
                <td class="border px-4 py-2"><span class="font-semibold text-green-500">Delivered</span></td>
                <td class="border px-4 py-2"><span class="font-semibold">{{$item->OrderDate}}</span></td>
                <td class="border px-4 py-2"><span class="font-semibold">{{$item->note}}</span></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

        </div>

    </div>
</div>

<script>
// Updated script for tab switching
const tabs = document.querySelectorAll('[name="tab"]');
tabs.forEach(tab => {
    tab.addEventListener('change', () => {
        const tabContents = document.querySelectorAll('.proflie');
        tabContents.forEach(content => {
            content.classList.add('hidden');
        });

        const selectedTab = document.querySelector(`#tab-content-${tab.id.slice(-1)}`);
        selectedTab.classList.remove('hidden');
    });
});
</script>


@endsection