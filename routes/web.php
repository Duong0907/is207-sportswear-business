<?php

use App\Http\Controllers\productsController;
use Illuminate\Support\Facades\Route;

// register, login
Route::prefix('auth')->group(function () {
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
});

// user not login
Route::prefix('')->group(function () {
    Route::get('/', function () {
        return view('homePage');
    })->name('homePage');
    Route::get('/product-list', [productsController::class, 'index'])->name('product-list');
    Route::get('/guide', function () {
        return view('user.guide');
    })->name('guide');
    Route::get('/product-detail/1', function () {
        return view('user.product_detail');
    })->name('product-detail');
});

// user login
Route::prefix('/after-login')->group(function () {
    Route::get('/', function () {
        return view('homePage_login');
    })->name('homePage_login');
    Route::get('/cart', function () {
        return view('user.cart');
    })->name('cart');
    Route::get('/purchase-history', function () {
        return view('user.purchase_history');
    })->name('purchase-history');
});

// admin
Route::prefix('admin')->group(function () {
    // category
    Route::get('/category', function () {
        return view('admin.category.index');
    })->name('admin_category');
    // coupon
    Route::get('/coupon',  function () {
        return view('admin.coupon.index');
    })->name('admin_coupon');
    // customer
    Route::get('/customer', function () {
        return view('admin.customer.index');
    })->name('admin_customer');
    // product
    Route::get('/product', function () {
        return view('admin.product.index');
    })->name('admin_product');
    // report
    Route::get('/report', function () {
        return view('admin.report.index');
    })->name('admin_report');
});

Route::get('/error', function () {
    return view('error.404');
})->name('error');
