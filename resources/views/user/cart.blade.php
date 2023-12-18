@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/user/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/shared/toast.css') }}">

@endsection

@section('content')
    <h1 id="heading">Giỏ hàng của bạn</h1>
    <div class="container">
        <div class="cart-container">
            <!-- Chèn link direct đến page danh sách sản phẩm  -->
            <div class="direct-text">
                <p>Sẵn sàng thanh toán ?
                    <a href="/products/new">Tiếp tục mua sắm</a>
                </p>
            </div>
            <div class="cart-product-list" id="style-3">
                <!-- Generate cart-product-item từ cartProductItem components -->
                {{-- <div class="cart-product-container">
                    <div class="cart-product-img">
                        <img src=""
                            alt="Hình ảnh sản phẩm">
                    </div>
                    <div class="cart-product-detail">
                        <div id="product-name-div">
                            <h3 id="product-name"></h3>
                        </div>
                        <p id="product-size">Kích cỡ: </p>
                        <p id="product-quantity">Số lượng: </p>
                        <h3 id="product-price money"></h3>
                    </div>
                    <div class="cart-product-delete">
                        <p>Loại bỏ</p>
                        <div class="under-line"></div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="total-container">
            <h2>Tổng kết đặt hàng</h2>
            <div class="total-div">
                <p>Tổng tiền sản phẩm</p>
                <p id="total" class="money">...</p>
            </div>
            <div class="shipping-fee-div">
                <p>Phí ship</p>
                <p id="shipping-fee" class="money">...</p>
            </div>
            <div id="line"></div>
            <div class="total-pay">
                <p>Tổng</p>
                <p id="total-pay" class="money">...</p>
            </div>
            <div class="pay-button" onclick="window.location.href = '/payment'">
                <p>Tiếp tục thanh toán</p>
            </div>
        </div>
    </div>
    <div id="toast"></div>
@endsection

@section('js')
    {{-- <script src="{{ asset('assets/js/base.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/shared/toast.js') }}"></script> --}}
    <script src="{{ asset('assets/js/user/cart.js') }}"></script>
@endsection