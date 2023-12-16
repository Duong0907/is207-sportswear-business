<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function register()
    {
        if (auth()->check()) {
            return redirect()->route('home');
        }
        return view('auth.register');
    }
    public function login()
    {
        if (auth()->check()) {
            return redirect()->route('home');
        }
        return view('auth.login');
    }
    public function postRegister(Request $request)
    {
        try {
            if ($request->password != $request->verify) {
                return redirect()->back()->with('error', 'Mật khẩu không khớp');
            }
            // check if phoneNumber is already registered
            $user = User::where('phonenumber', $request->phoneNumber)->first();
            if ($user) {
                return redirect()->back()->with('error', 'Số điện thoại đã được đăng ký');
            }
            // check if phoneNumber is not 10 digits
            // if (strlen($request->phoneNumber) != 10) {
            //     return redirect()->back()->with('error', 'Số điện thoại không hợp lệ');
            // }
            // check if password is not 6-20 characters
            // if (strlen($request->password) < 6 || strlen($request->password) > 20) {
            //     return redirect()->back()->with('error', 'Mật khẩu phải từ 6-20 ký tự');
            // }
            // check if password contains special characters, digits and letters and at least 8 characters
            // if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/', $request->password)) {
            //     return redirect()->back()->with('error', 'Mật khẩu phải chứa ít nhất 1 chữ cái, 1 số và 1 ký tự đặc biệt');
            // }
            $user = new User();
            $user->username = $request->username;
            $user->phoneNumber = $request->phoneNumber;
            $user->password = bcrypt($request->password);
            $user->save();
            // dd($user);
            return redirect()->route('login')->with('success', 'Đăng ký thành công');
        } catch (\Throwable $th) {
            dd($th);
        }
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
            // save user using auth facade
            auth()->login($user);
            // send success message
            return redirect()->route('home')->with('success', 'Đăng nhập thành công');
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
