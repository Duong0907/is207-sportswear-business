<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\ProductType;
use App\Models\Discount;
use App\Models\Report;

class AdminController extends Controller
{
    public function login()
    {
        // check if user is logged in
        if (Auth::check()) {
            return redirect()->route('admin-product');
        }
        return view('admin.adminLogin');
    }

    public function postLogin(Request $request)
    {
        try {
            $user = User::where('phonenumber', $request->phoneNumber)->first();
            if (!$user) {
                return redirect()->back()->with('error', 'Số điện thoại hoặc mật khẩu không đúng');
            }
            // check bcrypt of password
            if (!password_verify($request->password, $user->password)) {
                return redirect()->back()->with('error', 'Số điện thoại hoặc mật khẩu không đúng');
            }
            // check if user is admin 
            if ($user->is_admin != 1) {
                return redirect()->back()->with('error', 'Bạn không có quyền truy cập');
            }
            // save user using auth facade
            auth()->login($user);
            // send success message
            return redirect()->route('admin-product')->with('success', 'Đăng nhập thành công');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }
    public function customerManager()
    {
        $users = User::where('is_admin', 0)->get();
        // find total price and the count of buying of each user from order table
        foreach ($users as $user) {
            $user->totalPrice = Order::where('user_id', $user->id)->sum('total_money');
            $user->count = Order::where('user_id', $user->id)->count();
        }
        return view('admin.customer.index', [
            'users' => $users
        ]);
    }
    public function couponManager()
    {
        $coupons = Discount::all();
        return view('admin.coupon.index', [
            'coupons' => $coupons
        ]);
    }
    public function orderManager()
    {
        $orders = Order::all();
        // take all 
        return view('admin.order.index', [
            'orders' => $orders
        ]);
    }
    public function categoryManager()
    {
        $productTypes = ProductType::all();
        // take the count of each product type from product table
        foreach ($productTypes as $productType) {
            $productType->count = Product::where('product_type_id', $productType->id)->count();
        }
        return view('admin.category.index', [
            'productTypes' => $productTypes
        ]);
    }
    public function reportManager()
    {
        return view('admin.report.index');
    }
}
