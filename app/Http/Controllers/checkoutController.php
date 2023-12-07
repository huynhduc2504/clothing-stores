<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Stock;
use App\Models\DetailOrder;
use Illuminate\Http\Request;

class checkoutController extends Controller
{
    public function checkout_view(){
        return view('checkout.checkout');
    }

    public function order(Request $r)
    {
        $data = $r->all();
        $data['OrderDate'] = now();
        $order = Order::create($data);
    
        // Decode the JSON string to an array
        $cartItems = json_decode($data['cartItems'], true);
    
        foreach ($cartItems as $item) {
            $stockId = Stock::where('idClothes', $item['id'])->first()->Id; // Assuming you want to get the 'id' of the stock
            $orderDetailData = [
                'Quantity' => $item['quantity'],
                'Price' => $item['price'],
                'IdOrder' => $order->Id,
                'idClothes' => $item['id'],
                'idStock' => $stockId,
            ];
            DetailOrder::create($orderDetailData);
        }
        \Cart::clear();

    }
    
}
