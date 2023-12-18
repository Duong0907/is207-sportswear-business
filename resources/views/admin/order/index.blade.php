@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/admin/order/index.css') }}">
@endsection
@section('content')
    <main class="container">
        <h1>Quản lý đơn hàng</h1>

        <!-- Thanh top bar chứa các input -->
        <div class="search-customer">
            <div class="search-customer__card">
                <label for="customer-id"> Mã đơn hàng </label>
                <input class="search-customer__input-text" type="text" name="customer-id" id="customer-id"
                    placeholder="Nhập mã sản phẩm" />
            </div>
            <div class="search-customer__card">
                <label for="customer-name"> Mã khách hàng </label>
                <input class="search-customer__input-text" type="text" name="customer-name" id="customer-name"
                    placeholder="Nhập tên khách hàng" />
            </div>
            <div class="search-customer__card">
                <label for="#">Tổng thanh toán</label>
                <div class="flex-row justify-between">
                    <input type="text" name="payment-start" id="payment-start" class="search-customer__input-number"
                        placeholder="0đ" />
                    <input type="text" name="payment-end" id="payment-end" class="search-customer__input-number"
                        placeholder="500đ" />
                </div>
            </div>
            <div class="search-customer__card">
                <label for="#">Ngày mua</label>
                <div class="flex-row justify-between">
                    <input type="text" name="purchase-start" id="purchase-start" class="search-customer__input-number"
                        placeholder="0" />
                    <input type="text" name="purchase-end" id="purchase-end" class="search-customer__input-number"
                        placeholder="100" />
                </div>
            </div>
        </div>

        <div class="list-container">
            <table class="customers-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="check-all" />
                        </th>
                        <th>Mã đơn hàng</th>
                        <th class="cell-center">Mã khách hàng</th>
                        <th class="hover cell-start">Tổng thanh toán</th>
                        <th class="hover cell-start">Ngày mua</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td class="cell-center">
                                <input type="checkbox" name="check-one" />
                            </td>
                            <td class="cell-center"> {{ $order->id }} </td>
                            <td class="list-container__name cell-center"> {{ $order->user_id }} </td>
                            <td> {{ helperConvertPrice($order->total_money) }} </td>
                            <td> {{ helperConvertDate($order->create_at) }} </td>
                            <td class="cell-center">
                                <a href="#" target="_blank">
                                    <img src="{{ asset('assets/svg/detail.svg') }}" alt="detail" />
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td class="cell-center">
                            <input type="checkbox" name="check-one" />
                        </td>
                        <td class="cell-center"> 1 </td>
                        <td class="list-container__name cell-center"> 5 </td>
                        <td> {{ helperConvertPrice(1500000) }}</td>
                        <td> {{ helperConvertDate('2023-12-18 16:59:37') }}</td>
                        <td class="cell-center">
                            <a href="#" target="_blank">
                                <img src="{{ asset('assets/svg/detail.svg') }}" alt="detail" />
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="customers-footer">
            <div class="pagination">
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
            </div>
            <button>Xuất báo cáo</button>
        </div>
    </main>
@endsection
@section('js')
    <script>
        document.getElementById("order").style.color = "#013cc6";
    </script>
@endsection
