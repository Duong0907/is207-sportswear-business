@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/admin/product/index.css') }}">
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
                <input type="text" id="product-min-sale-number" class="product-management-filter-text" value="0">
                <input type="text" id="product-max-sale-number" class="product-management-filter-text" value="200">
            </div>
        </div>
    </div>

    <div>
        <table class="product-management-table">
            <tr class="product-management-table-row">
                <th><input type="checkbox"></th>
                <th><label>Mã sản phẩm</label></th>
                <th><label>Tên sản phẩm</label></th>
                <th><label>Giá sản phẩm</label></th>
                <th><label>Số lượt mua</label></th>
                <th><label>Hành động</label></th>
            </tr>

            <tr class="product-management-table-row">
                <th><input type="checkbox" class="product-row"></th>
                <th><label class="product-row">SP001</label></th>
                <th><label class="product-row">giay thuong dinh</label></th>
                <th><label class="product-row">100000 vnd</label></th>
                <th><label class="product-row">100</label></th>
                <th>
                    <a href=""><img src="{{ asset('assets/svg/detail.svg') }}" alt="detail"></a>
                    <a href=""><img src="{{ asset('assets/svg/delete.svg') }}" alt="detail"></a>
                </th>
            </tr>
            <tr class="product-management-table-row">
                <th><input type="checkbox" class="product-row"></th>
                <th><label class="product-row">SP001</label></th>
                <th><label class="product-row">giay thuong dinh</label></th>
                <th><label class="product-row">100000 vnd</label></th>
                <th><label class="product-row">100</label></th>
                <th>
                    <a href=""><img src="{{ asset('assets/svg/detail.svg') }}" alt="detail"></a>
                    <a href=""><img src="{{ asset('assets/svg/delete.svg') }}" alt="detail"></a>
                </th>
            </tr>
            <tr class="product-management-table-row">
                <th><input type="checkbox" class="product-row"></th>
                <th><label class="product-row">SP001</label></th>
                <th><label class="product-row">giay thuong dinh</label></th>
                <th><label class="product-row">100000 vnd</label></th>
                <th><label class="product-row">100</label></th>
                <th>
                    <a href=""><img src="{{ asset('assets/svg/detail.svg') }}" alt="detail"></a>
                    <a href=""><img src="{{ asset('assets/svg/delete.svg') }}" alt="detail"></a>
                </th>
            </tr>
            <tr class="product-management-table-row">
                <th><input type="checkbox" class="product-row"></th>
                <th><label class="product-row">SP001</label></th>
                <th><label class="product-row">giay thuong dinh</label></th>
                <th><label class="product-row">100000 vnd</label></th>
                <th><label class="product-row">100</label></th>
                <th>
                    <a href=""><img src="{{ asset('assets/svg/detail.svg') }}" alt="detail"></a>
                    <a href=""><img src="{{ asset('assets/svg/delete.svg') }}" alt="detail"></a>
                </th>
            </tr>
        </table>

        <div class="product-management-add-product">
            <a href="./create/index.php">
                <button>Thêm sản phẩm</button>
            </a>
        </div>
    </div>
</main>
@endsection
@section('js')
<script>
    document.getElementById('product').style.color = '#013CC6';
</script>
@endsection