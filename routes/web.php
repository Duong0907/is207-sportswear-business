<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;

// register, login
Route::prefix('auth')->group(function () {
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'postRegister'])->name('post-register');
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'postLogin'])->name('post-login');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

// unauthorized users
Route::prefix('/')->group(function () {
    Route::get('/', [ProductsController::class, 'renderHome'])->name('home');

    Route::prefix('/products')->group(function () {
        Route::get('/', [ProductsController::class, 'index'])->name('products');
        Route::get('/new',  [ProductsController::class, 'renderNewProducts'])->name('new-products');
        Route::get('/search',  [ProductsController::class, 'renderSearchProducts'])->name('search-products');
    });

    Route::get('/product/{id}', [ProductsController::class, 'renderProductDetail'])->name('product-detail');

    Route::get('product-list', function () {
        return view('user.product_list');
    })->name('product-list');

    Route::get('/guide', function () {
        return view('user.guide');
    })->name('guide');

    Route::get('/introduce', function () {
        return view('user.introduce');
    })->name('introduce');

    Route::get('/product-detail/1', function () {
        return view('user.product_detail');
    })->name('product-detail');
});

// authorized users
Route::prefix('/user')->middleware('auth')->group(function () {
    Route::get('/cart', function () {
        return view('user.cart');
    })->name('cart');
    Route::get('/purchase-history', function () {
        return view('user.purchase_history');
    })->name('purchase-history');
});

// admin login
Route::prefix('/admin')->group(function () {
    Route::get('/login', [adminController::class, 'login'])->name('admin-login');
    Route::post('/login', [adminController::class, 'postLogin'])->name('admin-post-login');
});
// admin
Route::prefix('admin')->middleware('adminAuth')->group(function () {
    // category
    Route::get('/category', function () {
        return view('admin.category.index');
    })->name('admin-category');
    // coupon
    Route::get('/coupon',  function () {
        return view('admin.coupon.index');
    })->name('admin-coupon');
    // customer
    Route::get('/customer', function () {
        return view('admin.customer.index');
    })->name('admin-customer');


    // product
    Route::prefix('/product')->group(function () {
        Route::get('/', [ProductsController::class, 'adminIndex'])->name('admin-product');

        Route::get('/create', [ProductsController::class, 'create'])->name('admin-product-create');

        Route::get('/edit/{id}', [ProductsController::class, 'edit']);
    });


    // report
    Route::get('/report', function () {
        return view('admin.report.index');
    })->name('admin-report');
    // logout
    Route::get('/logout', [adminController::class, 'logout'])->name('admin-logout');
});

Route::get('/error', function () {
    return view('error.404');
})->name('error');
