<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function pay(Request $request)
    {
        // Read shipping_note, shipping_address, shipping_phonenumber, shipping_firstname, shipping_lastname from request
        $shipping_note = $request->shipping_note;
        $shipping_address = $request->shipping_address;
        $shipping_phonenumber = $request->shipping_phonenumber;
        $shipping_firstname = $request->shipping_firstname;
        $shipping_lastname = $request->shipping_lastname;

        // Read cart from cookie
        $cart = json_decode($request->cookie('cart'));

        if (!$cart) {
            return redirect()->route('payment')->with('error', 'Giỏ hàng rỗng');
        }

        // Get user's id from auth
        $user_id = Auth::id();

        // Create order
        $order = new Order();
        $order->user_id = $user_id;
        $order->paid = true;
        $order->shipping_note = $shipping_note;
        $order->shipping_address = $shipping_address;
        $order->shipping_phonenumber = $shipping_phonenumber;
        $order->shipping_firstname = $shipping_firstname;
        $order->shipping_lastname = $shipping_lastname;

        $order->save();

        // Create order detail
        foreach ($cart as $item) {
            // dd($item);
            $order->products()->attach($item->id, [
                'quantity' => $item->quantity,
                'color_hex_code' => $item->color_hex_code,
                'size_name' => $item->size_name
            ]);
        }

        // Delete cart cookie
        $cookie = cookie()->forget('cart');

        return redirect()->route('purchase-history')->cookie($cookie);
    }

    public function renderCart(Request $request)
    {
        // Get user's id from auth
        $user_id = auth()->user()->id;
        // return $user_id;

        // Get all order with unpaid = true
        $cart = Order::where('user_id', $user_id)->where('paid', false)->get();
        return view('user.cart', compact('cart'));
    }

    public function renderPurchaseHistory(Request $request)
    {
        $user_id = auth()->user()->id;

        // order_id, create_at, total_money, shipping_address
        $orders = Order::select("id", "created_at", "total_money", "shipping_address")->where('user_id', $user_id)->get();
        return view('user.purchase_history', compact('orders'));
    }
    public function vnPay()
    {
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        // url thanh toán của VNPAY 
        $vnp_Returnurl = "http://127.0.0.1:8000/vn-pay";
        // sau khi thanh toán thành công, VNPAY sẽ gửi kết quả về url này
        $vnp_TmnCode = env('VNPAY_TMN_CODE'); //Mã website tại VNPAY 
        $vnp_HashSecret = env('VNPAY_HASH_SECRET'); //Chuỗi bí mật

        // $vnp_TxnRef = $_POST['order_id']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_TxnRef = rand(100000, 999999);
        $vnp_OrderInfo = "Thanh toan don hang qua VNPAY";
        $vnp_OrderType = "billpayment";
        $vnp_Amount = 20000 * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params of 2.0.1 Version
        // $vnp_ExpireDate = $_POST['txtexpire'];
        //Billing 
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        // if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
        //     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        // }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
        // vui lòng tham khảo thêm tại code demo
    }
    public function vnPayHandle(Request $request)
    {
        $cart = json_decode($request->cookie('cart'));

        if (!$cart) {
            return redirect()->route('payment')->with('error', 'Giỏ hàng rỗng');
        }

        // Get user's id from auth
        $user_id = Auth::id();

        // Create order
        $order = new Order();
        $order->user_id = $user_id;
        $order->paid = true;
        $order->shipping_note = "";
        $order->shipping_address = "";
        $order->shipping_phonenumber = "";
        $order->shipping_firstname = "";
        $order->shipping_lastname = "";

        $order->save();

        // Create order detail
        foreach ($cart as $item) {
            // dd($item);
            $order->products()->attach($item->id, [
                'quantity' => $item->quantity,
                'color_hex_code' => $item->color_hex_code,
                'size_name' => $item->size_name
            ]);
        }
        $cookie = cookie()->forget('cart');
        return redirect()->route('purchase-history')->cookie($cookie);
    }
}
