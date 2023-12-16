@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/user/cart.css') }}">
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
                <div class="cart-product-container">
                    <div class="cart-product-img">
                        <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/jlhsgro2k4kjkczi63qt/killshot-2-leather-shoe-DqWZ4j.png"
                            alt="Hình ảnh sản phẩm">
                    </div>
                    <div class="cart-product-detail">
                        <div id="product-name-div">
                            <h3 id="product-name">Nike Killshot 2 Leather</h3>
                        </div>
                        <p id="product-size">Kích cỡ: M</p>
                        <p id="product-quantity">Số lượng: 5</p>
                        <h3 id="product-price">12000000 VND</h3>
                    </div>
                    <div class="cart-product-delete">
                        <p>Loại bỏ</p>
                        <div class="under-line"></div>
                    </div>
                </div>
                {{-- <div class="cart-product-container">
                    <div class="cart-product-img">
                        <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/jlhsgro2k4kjkczi63qt/killshot-2-leather-shoe-DqWZ4j.png"
                            alt="Hình ảnh sản phẩm">
                    </div>
                    <div class="cart-product-detail">
                        <div id="product-name-div">
                            <h3 id="product-name">Nike Killshot 2 Leather</h3>
                        </div>
                        <p id="product-size">Kích cỡ: M</p>
                        <p id="product-quantity">Số lượng: 5</p>
                        <h3 id="product-price">12000000 VND</h3>
                    </div>
                    <div class="cart-product-delete">
                        <p>Loại bỏ</p>
                        <div class="under-line"></div>
                    </div>
                </div>
                <div class="cart-product-container">
                    <div class="cart-product-img">
                        <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/jlhsgro2k4kjkczi63qt/killshot-2-leather-shoe-DqWZ4j.png"
                            alt="Hình ảnh sản phẩm">
                    </div>
                    <div class="cart-product-detail">
                        <div id="product-name-div">
                            <h3 id="product-name">Nike Killshot 2 Leather</h3>
                        </div>
                        <p id="product-size">Kích cỡ: M</p>
                        <p id="product-quantity">Số lượng: 5</p>
                        <h3 id="product-price">12000000 VND</h3>
                    </div>
                    <div class="cart-product-delete">
                        <p>Loại bỏ</p>
                        <div class="under-line"></div>
                    </div>
                </div>
                <div class="cart-product-container">
                    <div class="cart-product-img">
                        <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/jlhsgro2k4kjkczi63qt/killshot-2-leather-shoe-DqWZ4j.png"
                            alt="Hình ảnh sản phẩm">
                    </div>
                    <div class="cart-product-detail">
                        <div id="product-name-div">
                            <h3 id="product-name">Nike Killshot 2 Leather</h3>
                        </div>
                        <p id="product-size">Kích cỡ: M</p>
                        <p id="product-quantity">Số lượng: 5</p>
                        <h3 id="product-price">12000000 VND</h3>
                    </div>
                    <div class="cart-product-delete">
                        <p>Loại bỏ</p>
                        <div class="under-line"></div>
                    </div>
                </div>
                <div class="cart-product-container">
                    <div class="cart-product-img">
                        <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/jlhsgro2k4kjkczi63qt/killshot-2-leather-shoe-DqWZ4j.png"
                            alt="Hình ảnh sản phẩm">
                    </div>
                    <div class="cart-product-detail">
                        <div id="product-name-div">
                            <h3 id="product-name">Nike Killshot 2 Leather</h3>
                        </div>
                        <p id="product-size">Kích cỡ: M</p>
                        <p id="product-quantity">Số lượng: 5</p>
                        <h3 id="product-price">12000000 VND</h3>
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
                <p id="total">7800000 đ</p>
            </div>
            <div class="shipping-fee-div">
                <p>Phí ship</p>
                <p id="shipping-fee">30000 đ</p>
            </div>
            <div id="line"></div>
            <div class="total-pay">
                <p>Tổng</p>
                <p id="total-pay">7830000 đ</p>
            </div>
            <div class="pay-button">
                <p>Tiếp tục thanh toán</p>
            </div>
        </div>
    </div>
@endsection
