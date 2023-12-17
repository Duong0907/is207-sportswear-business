@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/user/payment.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/shared/toast.css') }}">
@endsection
@section('content')
    <div class="page-content">
        <h1 id="heading">Thanh toán</h1>
        <div class="payment-page-container">
            <form class="payment-form">
                <p>Thông tin giao hàng</p>
                <div id='customer-name'>
                    <input type="text" placeholder="Họ" id="first-name" required>
                    <input type="text" placeholder="Tên" id="last-name" required>
                </div>
                <input type="text" placeholder="Địa chỉ" id="address" required>
                <input type="text" placeholder="Số điện thoại" id="phone-number" required>
                <input type="text" placeholder="Ghi chú" id="note">
                <div id="save-info-checkbox">
                    <input type="checkbox" name="save-info" id="save-info" required>
                    <label for="save-info">Lưu thông tin</label>
                </div>
                <div type="submit" class="order-button" role="button">
                    <p>Thanh toán</p>
                </div>
            </form>
            <div class="container">
                <div class="cart-container">
                    <h2>Giỏ hàng của bạn</h2>
                    <div class="cart-product-list" id="style-3">
                        <!-- Generate cart-product-item từ cartProductItem components -->
                        {{-- <div class="cart-product-container">
                            <div class="cart-product-img">
                                <img src="" alt="Hình ảnh sản phẩm">
                            </div>
                            <div class="cart-product-detail">
                                <div id="product-name-div">
                                    <h3 id="product-name"></h3>
                                </div>
                                <p id="product-size">Kích cỡ: </p>
                                <p id="product-quantity">Số lượng: </p>
                                <h3 id="product-price" class="money"></h3>
                            </div>
                        </div> --}}

                    </div>
                </div>

                <div class="total-container">
                    <h2>Tổng kết đặt hàng</h2>
                    <div class="total-div">
                        <p>Tổng tiền sản phẩm</p>
                        <p id="total" class="money">0</p>
                    </div>
                    <div class="shipping-fee-div">
                        <p>Phí ship</p>
                        <p id="shipping-fee" class="money">0</p>
                    </div>
                    <div id="line"></div>
                    <div class="total-pay">
                        <p>Tổng</p>
                        <p id="total-pay" class="money"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="toast"></div>
@endsection
@section('js')
    <script src="{{ asset('assets/js/base.js') }}"></script>
    <script src="{{ asset('assets/js/shared/toast.js') }}"></script>
    <script src="{{ asset('assets/js/user/payment.js') }}"></script>
@endsection
