@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href=" {{ asset('assets/css/admin/category/index.css') }} ">
@endsection
@section('content')
    <main class="category-management-content">
        <div class="category-management-title">
            <h1>Quản lí hạng mục</h1>
        </div>

        <div class="category-management-filter">
            <div class="category-management-filter-option">
                <label>Mã loại sản phẩm</label>
                <input type="text" id="product_type_id" class="category-management-filter-text">
            </div>
            <div class="category-management-filter-option">
                <label>Tên loại sản phẩm</label>
                <input type="text" id="product_type_name" class="category-management-filter-text">
            </div>
            <div class="category-management-filter-option">
                <label>Trạng thái</label>
                <select class="category-management-filter-combobox">
                    <option value="-- Trạng thái --">-- Trạng thái --</option>
                    <option value="Chưa có sản phẩm">Chưa có sản phẩm</option>
                    <option value="Đã có sản phẩm">Đã có sản phẩm</option>
                </select>
            </div>
        </div>

        <div>
            <table class="category-management-table">
                <tr class="category-management-table-row">
                    <th><input type="checkbox"></th>
                    <th><label>Mã loại sản phẩm</label></th>
                    <th><label>Tên loại sản phẩm</label></th>
                    <th><label>Số lượng SP</label></th>
                    {{-- <th><label>Ngày tạo</label></th>
                    <th><label>Ngày sửa đổi gần nhất</label></th> --}}
                    {{-- <th><label>Hành động</label></th> --}}
                </tr>

                @foreach ($productTypes as $productType)
                    <tr class="category-management-table-row">
                        <th><input type="checkbox" class="category-row"></th>
                        <th><label class="category-row"> {{ $productType->id }} </label></th>
                        <th><label class="category-row"> {{ $productType->type_name }} </label></th>
                        <th><label class="category-row"> {{ $productType->count }} </label></th>
                        {{-- <th><label class="category-row">trungggggg</label></th>
                        <th><label class="category-row">trungggggg</label></th> --}}
                        {{-- <th>
                            <img src="{{ asset('assets/svg/detail.svg') }} " alt="edit">
                            <img src="{{ asset('assets/svg/delete.svg') }} " alt="delete">
                        </th> --}}
                    </tr>
                @endforeach
            </table>

            {{-- <div class="category-management-add-category">
                <button>Thêm loại sản phẩm</button>
            </div> --}}
        </div>
    </main>
@endsection
@section('js')
    <script>
        document.getElementById('category').style.color = '#013CC6';
    </script>
@endsection
