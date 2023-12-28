<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;
use App\Models\Order;
use App\Models\Stock;
use App\Models\DetailOrder;
use Carbon\Carbon;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('home.cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
            'image' => $request->image,
            'size' => $request->size,
            'color' => $request->color,
            )
        ]);
        session()->flash('success', 'Thêm sản phẩm vào giỏ hàng thành công !');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Update sản phẩm trong giỏ hàng thành công !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Xóa sản phẩm trong giỏ hàng thành công !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'Xóa tất cả sản phẩm trong giỏ hàng thành công !');

        return redirect()->route('cart.list');
    }

    public function applyCoupon(Request $request)
    {
        $code = $request->input('code');
        
        $coupon = Discount::where('code', $code)->first();
    
        if (!$coupon) {
            return redirect()->back()->with('error', 'Mã giảm giá không hợp lệ.');
        }
    
        // Kiểm tra ngày hết hạn
        $now = Carbon::now();
        $expirationDate = Carbon::parse($coupon->expiration_date);
    
        if ($now->gt($expirationDate)) {
            return redirect()->back()->with('error', 'Mã giảm giá đã hết hạn.');
        }
    
        // Kiểm tra xem mã giảm giá đã được áp dụng hay chưa
        if (session('coupon_applied')) {
            return redirect()->back()->with('error', 'Mã giảm giá đã được áp dụng trước đó.');
        }
    
        // Lưu giá trị giảm giá vào session
        session(['coupon_discount' => $coupon->discount_percent]);
    
        // Đánh dấu rằng mã giảm giá đã được áp dụng
        session(['coupon_applied' => true]);

    
        // Áp dụng mã giảm giá vào giá trị đơn hàng ở đây
    
        return redirect()->back()->with('success', 'Mã giảm giá đã được áp dụng.');
    }
    
    public function removeCoupon()
    {
        // Xóa giá trị giảm giá từ session
        session()->forget('coupon_discount');
    
        // Xóa trạng thái áp dụng mã giảm giá từ session
        session()->forget('coupon_applied');
    
        return redirect()->back()->with('success', 'Mã giảm giá đã được xóa.');
    }
    
    
}
