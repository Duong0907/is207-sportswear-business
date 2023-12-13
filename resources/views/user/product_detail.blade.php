@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/user/product_detail.css') }}">
@endsection
@section('content')
    <div class="product-container">
        <div class="product-imgs">
            <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/jlhsgro2k4kjkczi63qt/killshot-2-leather-shoe-DqWZ4j.png"
                alt="img product" />
        </div>

        <div class="product-details">
            <h1 id="product-name">{{ $data['product']['product_name']}}</h1>
            <p id="product-price">{{ $data['product']['product_price'] }}</p>
            <div id="p-decription">
                <p id="product-decription">
                    {{ $data['product']['product_description'] }}
                </p>
            </div>

            <p class="label">Màu:</p>
            <div class="product-color-option">
            </div>

            <p class="label">Kích thước:</p>
            <div class="product-size-option">
                <label class="radio-button-size">
                    <input type="radio" id="size-s" name="size" value="S" />
                    <span class="label-text">S</span>
                </label>

                <label class="radio-button-size">
                    <input type="radio" id="size-m" name="size" value="M" />
                    <span class="label-text">M</span>
                </label>

                <label class="radio-button-size">
                    <input type="radio" id="size-l" name="size" value="L" />
                    <span class="label-text">L</span>
                </label>

                <label class="radio-button-size">
                    <input type="radio" id="size-xl" name="size" value="XL" />
                    <span class="label-text">XL</span>
                </label>
            </div>

            <p class="label">Số lượng: </p>
            <div class="product-quantity-option">
                <button onclick="handleQuantityButtonClick('-')">-</button>
                <input type="text" id="product-quantity" name="product-quantity" value="1"
                    onchange="handleQuantity()">
                <button onclick="handleQuantityButtonClick('+')">+</button>
            </div>

            <button class="add-to-cart" onclick="handleAddToCartButton()">
                Thêm vào giỏ hàng
            </button>
        </div>

    </div>

    <div class="review-container">

        <div class="review-left">
            <h2>Đánh giá</h2>
            <h3 id="reviews-counter"> đánh giá </h3>
        </div>

        <div class="review-right">

            <select name="comment-select" id="comment-select">
                <option value="All">Tất cả đánh giá</option>
                <option value="Me">Đánh giá của tôi</option>
            </select>

            <div class="review-comments">
                <!-- Chèn components comment vào đây -->
                <div class="cmt-container">

                    <div class="cmt-top">
                        <div class="rating">

                        </div>
                        <p id="date">21 Tháng Mười, 2020</p>
                    </div>

                    <div class="cmt-heading">
                        <h2 id="cmt-title">
                            Phong cách và chất lượng
                        </h2>
                        <p id="cmt-username">RyanM</p>
                    </div>

                    <div class="cmt-main">
                        <div class="cmt-content">
                            <p>Giày Thượng Đình thực sự là một biểu tượng của phong cách và chất lượng. Thiết kế độc đáo và
                                chất liệu chống nước giúp tôi tự tin khi chơi bóng đá. Hoàn hảo cho những người yêu thể thao
                                và muốn nổi bật trên sân.</p>
                        </div>
                        <div class="upvote">
                            <p>Đánh giá hữu ích? </p>
                            <a href="#" id="yes">Có</a>
                            <p id="vote-yes">(1)</p>
                            <a href="#" id="no">Không</a>
                            <p id="vote-no">(1)</p>
                        </div>
                    </div>

                </div>  
            </div>
        </div>
    </div>
@endsection
