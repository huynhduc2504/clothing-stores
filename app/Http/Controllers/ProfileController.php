<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Order;


class ProfileController extends Controller
{
    public function view(){
        $userData = session('user');

        // Truy cập thông tin cụ thể
        $userEmail = $userData['email'];
        $userId = $userData['id'];
        
        $data = Customers::where('Email','=',$userEmail)->get();
        $dataOrder = Order::where('IdCustomer', '=', $userId)->get();
        return view("home.profile")->with("data",$data)->with("dataOrder",$dataOrder);
    }

    public function update(Request $request){
        $userData = session('user');
    
        // Truy cập thông tin cụ thể
        $userEmail = $userData['email'];
    
        // Use first() instead of get() to get a single model instance
        $customer = Customers::where('Email', '=', $userEmail)->first();
        
        if ($customer) {
            // Update the attributes of the model
            $customer->Email = $request->input("email");
            $customer->Username = $request->input("name");
            $customer->Address = $request->input("address");
            $customer->Phone = $request->input("phone");
            $customer->save();
            // You can add additional logic or redirection here if needed
            return redirect()->back()->with('success', 'Profile updated successfully');
        } else {
            // Handle the case where the customer with the specified email is not found
            return redirect()->back()->with('error', 'Customer not found');
        }
    }
    
}
