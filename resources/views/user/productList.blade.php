@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href=" {{ asset('assets/css/user/productList.css') }} ">
@endsection
@section('content')
    <header class="show-product-list-header">
        <div>
            <h1>Sản phẩm mới</h1>
            <p>Đắm chìm trong thế giới thể thao với những sản phẩm mới nhất tại cửa hàng của chúng tôi!
                Dòng sản phẩm mới này bao gồm đủ phụ kiện để bạn có thể chuẩn bị cho mọi hoạt động thể thao của mình.</p>
        </div>
    </header>
    <div class="main-container">
        <main class="show-product-list-content">
            <aside class="show-product-list-filter">
                <label>Bộ lọc</label> <button id="show-product-list-clear-filter">Xoá bộ lọc</button><br>

                <div class="show-product-list-filter-option">
                    <label>Hạng mục</label>
                    <br>

                    <div>
                        <input type="checkbox">
                        <label>Giày</label>
                        <br>
                    </div>

                    <div>
                        <input type="checkbox">
                        <label>Áo</label>
                        <br>
                    </div>
                    <div>
                        <input type="checkbox">
                        <label>Quần</label>
                        <br>
                    </div>

                    <div>
                        <input type="checkbox">
                        <label>Tất</label>
                        <br>
                    </div>

                    <div>
                        <input type="checkbox">
                        <label>Mũ</label>
                        <br>
                    </div>
                </div>


                <br>

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
                    @foreach ($products as $product)
                        <div class="show-product">
                            <div class="product-img">
                                <img class="product-img-inner" src="{{ $product->product_image }}" alt="product-img">
                            </div>
                            <div class="product-name"> {{ $product->product_name }} </div>
                            <div class="product-price"> {{ $product->product_price }} </div>
                        </div>
                    @endforeach
                </div>
                <div class="show-product-list-more">
                    <button>Hiển thị thêm sản phẩm</button>
                </div>
            </article>
        </main>
    </div>
@endsection
