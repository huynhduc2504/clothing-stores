<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Stock;
use App\Models\DetailOrder;

class PaymentMomo extends Controller
{
    function execPostRequest($url, $data)
    {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
    }

    public function paymentMomo(Request $request)
    {
        if ($request->has('payUrl')) {
            $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
            $partnerCode = 'MOMOBKUN20180529';
            $accessKey = 'klm05TvNBzhg7h7j';
            $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
            $orderInfo = "Thanh toán qua MoMo";
            $amount = $request->input("TotalAmount");
            $orderId = time() . "";
            $redirectUrl = "http://127.0.0.1:8000";
            $ipnUrl = "https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b";
            $extraData = "";

            $partnerCode = $partnerCode;
            $accessKey = $accessKey;
            $serectkey = $secretKey;
            $orderId = $orderId;
            $orderInfo = $orderInfo;
            $amount = $amount;
            $ipnUrl = $ipnUrl;
            $redirectUrl = $redirectUrl;
            $extraData = $extraData;

            $requestId = time() . "";
            $requestType = "payWithATM";
            
            $rawHash = "accessKey={$accessKey}&amount={$amount}&extraData={$extraData}&ipnUrl={$ipnUrl}&orderId={$orderId}&orderInfo={$orderInfo}&partnerCode={$partnerCode}&redirectUrl={$redirectUrl}&requestId={$requestId}&requestType={$requestType}";
            $signature = hash_hmac("sha256", $rawHash, $serectkey);

            $data = [
                'partnerCode' => $partnerCode,
                'partnerName' => "Test",
                'storeId' => "MomoTestStore",
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'redirectUrl' => $redirectUrl,
                'ipnUrl' => $ipnUrl,
                'lang' => 'vi',
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature,
            ];

            $result = $this->execPostRequest($endpoint, json_encode($data));
            $jsonResult = json_decode($result, true);

            $this->success_order($request);
            return redirect()->away($jsonResult['payUrl']);
        }
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

    public function success_order(Request $request){
        $this->order($request);
        return view('home.success');
    }
}