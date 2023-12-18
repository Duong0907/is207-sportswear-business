@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/admin/product/index.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/css/shared/toast.css') }}">
@endsection
@section('content')
    <main class="product-management-content">
        <div class="product-management-title">
            <h1>Quản lí sản phẩm</h1>
        </div>

        <div class="product-management-filter">
            <div class="product-management-filter-option">
                <label>Mã sản phẩm</label>
                <input type="text" id="product-id" class="product-management-filter-text" placeholder="Mã sản phẩm">
            </div>
            <div class="product-management-filter-option">
                <label>Tên sản phẩm</label>
                <input type="text" id="product-name" class="product-management-filter-text" placeholder="Tên sản phẩm">
            </div>
            <div class="product-management-filter-option">
                <label>Giá sản phẩm</label>
                <div class="product-management-filter-option-range">
                    <input type="text" id="product-min-price" class="product-management-filter-text" value="0">
                    <input type="text" id="product-max-price" class="product-management-filter-text" value="500.000">
                </div>
            </div>
            <div class="product-management-filter-option">
                <label>Số lượt mua</label>
                <div class="product-management-filter-option-range">
                    <input type="text" id="product-min-sale-number" class="product-management-filter-text"
                        value="0">
                    <input type="text" id="product-max-sale-number" class="product-management-filter-text"
                        value="200">
                </div>
            </div>
        </div>

        <div class="product-management-list">
            <table class="product-management-table">
                <tr class="product-management-table-row">
                    <th><input type="checkbox"></th>
                    <th><label>Mã sản phẩm</label></th>
                    <th><label>Tên sản phẩm</label></th>
                    <th><label>Giá sản phẩm</label></th>
                    <th><label>Số lượt mua</label></th>
                    <th><label>Hành động</label></th>
                </tr>
                @foreach ($products as $product)
                    <tr class="product-management-table-row">
                        <th><input type="checkbox" class="product-row"></th>
                        <th><label class="product-row">{{ $product->id }}</label></th>
                        <th><label class="product-row"> {{ $product->product_name }} </label></th>
                        <th><label class="product-row"> {{ helperConvertPrice($product->product_price) }} </label></th>
                        <th><label class="product-row">5</label></th>
                        <th>
                            <a href="/admin/product/edit/{{ $product->id }}">
                                <img src="{{ asset('assets/svg/detail.svg') }}" alt="detail">
                            </a>
                            <form action="/admin/product/delete/{{ $product->id }}" method="POST"
                                onsubmit="return confirm('are you sure you want to delete this product?')"
                                style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn">
                                    <img src="{{ asset('assets/svg/delete.svg') }}" alt="detail">
                                </button>
                            </form>
                        </th>
                    </tr>
                @endforeach
            </table>
        </div>

        <div class="product-management-add-product">
            <a href="{{ route('admin-product-create') }}">
                <button>Thêm sản phẩm</button>
            </a>
        </div>
    </main>
@endsection
@section('js')
    <script>
        document.getElementById('product').style.color = '#013CC6';
    </script>
    <script src="{{ asset('assets/js/shared/toast.js') }}"></script>
    <div id="toast"></div>
    @if ($message = Session::get('error'))
        <script>
            toast({
                title: 'Lỗi',
                message: '{{ $message }}',
                type: 'error',
                duration: 5000
            })
        </script>
    @endif
    @if ($message = Session::get('success'))
        <script>
            toast({
                title: 'Thành công',
                message: '{{ $message }}',
                type: 'success',
                duration: 5000
            })
        </script>
    @endif
@endsection
