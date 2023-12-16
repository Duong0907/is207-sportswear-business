<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
}
