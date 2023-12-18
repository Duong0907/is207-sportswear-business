@extends('layouts.app')
@section('css')
<link rel="stylesheet" href=" {{ asset('assets/css/user/product_list.css') }} ">
@endsection
@section('content')
<header class="show-product-list-header">
    <div>
        <h1>{{ $data['title'] }}</h1>
        <p>{{ $data['subtitle'] }}</p>
    </div>
</header>
<div class="main-container">
    <main class="show-product-list-content">
        <aside class="show-product-list-filter">
            <label>Bộ lọc</label> <button id="show-product-list-clear-filter">Xoá bộ lọc</button><br>

            <div class="show-product-list-filter-option">
                @foreach ($data['filter'] as $filter_key => $filter_values)
                <div class="filter-item">
                    <label class="filter-key">{{ $filter_key }}</label>
                    @foreach ($filter_values as $key => $value)

                    @if (in_array($value['item'], $data['filter_checked']))
                    <div class="filter-values">
                        <input type="checkbox" id="<?= $value['item'] ?>" checked>
                        <label for="<?= $value['item'] ?>">{{ $value['item'] }}</label>
                        <br>
                    </div>
                    @else
                    <div class="filter-values">
                        <input type="checkbox" id="<?= $value['item'] ?>" />
                        <label for="<?= $value['item'] ?>">{{ $value['item'] }}</label>
                        <br>
                    </div>
                    @endif

                    @endforeach
                </div>
                <br>
                @endforeach
                <br>
                <button class="apply-filter-btn">Áp dụng bộ lọc</button>

        </aside>

        <article>
            <div class="show-product-list-sort">
                <label>Sắp xếp theo </label>
                <select>
                    <option value="popular">Phổ biến</option>
                    <option value="newest">Mới nhất</option>
                    <option value="price-ascending">Giá tăng dần</option>
                    <option value="price-decending">Giá giảm dần</option>
                    <option value="sale">Có khuyến mãi</option>
                </select>
            </div>
            <br>

            <div id="show-product-list">
                @foreach ($data['products'] as $product)
                <div class="show-product" onclick="window.location.href='/product/{{ $product->id }}'">
                    <div class="product-img">
                        @if ($product->images->isNotEmpty())
                        @foreach ($product->images as $image)
                        <img class="product-img-inner" src="{{ $image->image_link }}" alt="product-img">
                        @break
                        @endforeach
                        @else
                        <img class="product-img-inner"
                            src="https://st3.depositphotos.com/17828278/33150/v/450/depositphotos_331503262-stock-illustration-no-image-vector-symbol-missing.jpg"
                            alt="product-img">
                        @endif
                    </div>
                    <div class="product-name">{{ $product->product_name }}</div>
                    <div class="product-price">{{ $product->product_price }}</div>
                </div>
                @endforeach
            </div>

            @if ($data['hasNext'])
            <div class="show-product-list-more">
                <button>Hiển thị thêm sản phẩm</button>
            </div>
            @endif
        </article>
    </main>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/js/base.js') }}"></script>
<script src="{{ asset('assets/js/user/product_list.js') }}"></script>
@endsection