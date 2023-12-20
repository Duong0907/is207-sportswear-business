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

        if(!$cart)
        {
            return redirect()->route('payment')->with('error', 'Giỏ hàng rỗng');
            return;
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
        foreach ($cart as $item)
        {
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
}
