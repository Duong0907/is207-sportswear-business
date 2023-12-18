@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href=" {{ asset('assets/css/admin/coupon/index.css') }} ">
@endsection
@section('content')
    <main class="container">
        <h1>Quản lý khuyến mãi</h1>

        <!-- Thanh top bar chứa các input -->
        <div class="search-customer">
            <div class="search-customer__card">
                <label for="coupon-id"> Mã khuyến mãi </label>
                <input class="search-customer__input-text" type="text" name="coupon-id" id="coupon-id"
                    placeholder="Nhập mã sản phẩm" />
            </div>
            <div class="search-customer__card">
                <label for="coupon-percent"> % khuyến mãi </label>
                <input class="search-customer__input-text" type="text" name="percent-coupon" id="percent-coupon"
                    placeholder="Nhập mã sản phẩm" />
            </div>
            <div class="search-customer__card">
                <label for="coupon-start-date"> Ngày bắt đầu </label>
                <input class="search-customer__input-text" type="text" name="coupon-start-date" id="coupon-start-date"
                    placeholder="Nhập mã sản phẩm" />
            </div>
            <div class="search-customer__card">
                <label for="coupon-end-date"> Ngày kết thúc </label>
                <input class="search-customer__input-text" type="text" name="coupon-end-date" id="coupon-end-date"
                    placeholder="Nhập mã sản phẩm" />
            </div>
            <div class="search-customer__card">
                <label for="coupon-status"> Trạng thái </label>
                <select class="search-customer__select" name="coupon-status" id="coupon-status">
                    <option value="pending">Chưa bắt đầu</option>
                    <option value="started">Đã bắt đầu</option>
                    <option value="ended">Đã kết thúc</option>
                </select>
            </div>
        </div>

        <div class="list-container">
            <table class="customers-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="check-all" />
                        </th>
                        <th>Mã khuyến mãi</th>
                        <th class="">% khuyến mãi</th>
                        <th class="">Loại sản phẩm áp dụng</th>
                        <th class="">Ngày bắt đầu</th>
                        <th class="">Ngày kết thúc</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($coupons as $coupon)
                        <tr>
                            <td class="cell-center">
                                <input type="checkbox" name="check-one" />
                            </td>
                            <td class="cell-center"> {{ $coupon->id }} </td>
                            <td class="cell-center"> {{ $coupon->discount_percent }}% </td>
                            <td class="list-container__name cell-center"> Giày nam</td>
                            <td class="cell-center"> {{ helperConvertDate($coupon->start_date) }} </td>
                            <td class="cell-center"> {{ helperConvertDate($coupon->end_date) }} </td>
                            <td class="cell-center cell-action">
                                <a onclick="openUpdateModal()">
                                    <img src="{{ asset('assets/svg/detail.svg') }}" alt="customer infomation detail" />
                                </a>
                                <a onclick="alert('Tính năng chưa được hỗ trợ');">
                                    <img src="{{ asset('assets/svg/delete.svg') }}" alt="customer infomation delete" />
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="customers-footer">
            <div class="pagination">
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
            </div>
            <button id="add-coupon-button"> Thêm khuyến mãi </button>
        </div>
    </main>
    @include('admin.coupon.create')
    @include('admin.coupon.detail')
@endsection
@section('js')
    <script src="{{ asset('assets/js/admin/coupon.js') }}"></script>
    <script>
        document.getElementById('discount').style.color = '#013CC6';
    </script>
@endsection
