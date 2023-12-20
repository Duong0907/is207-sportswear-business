<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

// register, login
Route::prefix('auth')->group(function () {
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'postRegister'])->name('post-register');
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'postLogin'])->name('post-login');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

// unauthorized users

// unauthorized users
Route::prefix('/')->group(function () {
    Route::get('/', [ProductController::class, 'renderHome'])->name('home');

    Route::prefix('/products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('products');
        Route::get('/new',  [ProductController::class, 'renderNewProducts'])->name('new-products');
        Route::get('/search',  [ProductController::class, 'renderSearchProducts'])->name('search-products');
        Route::get('/filter',  [ProductController::class, 'renderFilterProducts'])->name('filter-products');
    });

    Route::get('/product/{id}', [ProductController::class, 'renderProductDetail'])->name('product-detail');

    Route::get('/guide', function () {
        return view('user.guide');
    })->name('guide');

    Route::get('/introduce', function () {
        return view('user.introduce');
    })->name('introduce');

    Route::prefix('/')->middleware('auth')->group(function () {
        Route::get('/cart', [OrderController::class, 'renderCart'])->name('cart');

        Route::get('/payment', function () {
            return view('user.payment');
        })->name('payment');

        Route::post('/payment', [OrderController::class, 'pay'])->name('payment-controller');

        Route::get('/purchase-history', [OrderController::class, 'renderPurchaseHistory'])->name('purchase-history');

        Route::get('/profile', [UserController::class, 'renderProfile'])->name('profile');
    });
});
// admin login
Route::prefix('/admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin-login');
    Route::post('/login', [AdminController::class, 'postLogin'])->name('admin-post-login');
});


// admin
Route::prefix('admin')->middleware('adminAuth')->group(function () {
    // category
    Route::get('/category', [AdminController::class, 'categoryManager'])->name('admin-category');
    // coupon
    Route::get('/coupon', [AdminController::class, 'couponManager'])->name('admin-coupon');
    // customer
    Route::get('/customer', [AdminController::class, 'customerManager'])->name('admin-customer');
    // order
    Route::get('/order', [AdminController::class, 'orderManager'])->name('admin-order');


    // product
    Route::prefix('/product')->group(function () {
        Route::get('/', [ProductController::class, 'adminIndex'])->name('admin-product');
        Route::get('/create', [ProductController::class, 'create'])->name('admin-product-create');
        Route::post('/create', [ProductController::class, 'store'])->name('admin-product-store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('admin-product-edit');
        Route::put('/edit/{id}', [ProductController::class, 'update'])->name('admin-product-update');
        Route::delete('/delete/{id}', [ProductController::class, 'destroy']);
    });

    // report
    Route::get('/report', function () {
        return view('admin.report.index');
    })->name('admin-report');
    // logout
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin-logout');
});

Route::get('/error', function () {
    return view('error.404');
})->name('error');

Route::prefix('/api')->group(function () {
    Route::get('/product/{id}',  [ProductController::class, 'gerProductInfo'])->name('get-product-info');
});
