@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/user/product_detail.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/shared/toast.css') }}">

@endsection

@section('content')
    <div class="product-container">
        <div class="product-imgs">
            @if($product->images->count() > 0)
                @foreach($product->images as $image)
                    <img src="{{ $image->image_link }}" alt="img product" />
                @endforeach
            @else 
                <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/jlhsgro2k4kjkczi63qt/killshot-2-leather-shoe-DqWZ4j.png"
                alt="img product" />
            @endif
        </div>

        <div class="product-details">
            <h1 id="product-name">{{$product->product_name}}</h1>
            <p id="product-price" product-price="{{ $product->product_price }}">{{ $product->product_price }}</p>
            <div id="p-decription">
                <p id="product-decription">
                    {{$product->product_description }}
                </p>
            </div>

            <p class="label">Màu:</p>
            <div class="product-color-option">  
                @foreach($product->colors as $color)
                <label class="radio-button-color" name="color" style="background-color: {{ $color->hex_code }};" value="{{ $color->hex_code }}" data-checked="false"></label>
                @endforeach
            </div>

            <p class="label">Kích thước:</p>
            <div class="product-size-option">
                @foreach($product->sizes as $size)
                <label class="radio-button-size">
                    <input type="radio" id="size-{{ $size->size_name }}" name="size" value="{{ $size->size_name }}" />
                    <span class="label-text">{{ $size->size_name }}</span>
                </label>
                @endforeach
            </div>

            <p class="label">Số lượng: </p>
            <div class="product-quantity-option">
                <button class="quantity-btn">-</button>
                <input type="text" id="product-quantity" name="product-quantity" value="1"
                    onchange="handleQuantity()">
                <button class="quantity-btn">+</button>
            </div>

            <button class="add-to-cart" onclick="handleAddToCartButton()">
                Thêm vào giỏ hàng
            </button>
        </div>

    </div>

    <div class="review-container">

        <div class="review-left">
            <h2>Đánh giá</h2>
            <h3 id="reviews-counter"> {{ $product->comments->count() }} đánh giá </h3>
        </div>

        <div class="review-right">

            <select name="comment-select" id="comment-select">
                <option value="All">Tất cả đánh giá</option>
                <option value="Me">Đánh giá của tôi</option>
            </select>

            <div class="review-comments">
                <!-- Chèn components comment vào đây -->
                @if ($product->comments->count() > 0)
                @foreach ($product->comments as $comment)
                <div class="cmt-container">

                    <div class="cmt-top">
                        <div class="rating">

                        </div>
                        <p class="date">{{ $comment->created_at }}</p>
                    </div>

                    <div class="cmt-heading">
                        <h2 id="cmt-title">
                            {{ $comment->title }}
                        </h2>
                        <p id="cmt-username">{{ $comment->user->username }}</p>
                    </div>

                    <div class="cmt-main">
                        <div class="cmt-content">
                            <p>{{ $comment->content }}</p>
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
                @endforeach
                @endif
            </div>
        </div>
    </div>
    <div id="toast"></div>
@endsection

@section('js')
    <script src="{{ asset('assets/js/base.js') }}"></script>
    <script src="{{ asset('assets/js/user/product_detail.js') }}"></script>
    <script src="{{ asset('assets/js/shared/toast.js') }}"></script>
@endsection