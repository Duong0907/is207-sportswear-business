@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/admin/customer/index.css') }}">
@endsection
@section('content')
    <main class="container">
        <h1>Quản lý khách hàng</h1>

        <!-- Thanh top bar chứa các input -->
        <div class="search-customer">
            <div class="search-customer__card">
                <label for="customer-id"> Mã khách hàng </label>
                <input class="search-customer__input-text" type="text" name="customer-id" id="customer-id"
                    placeholder="Nhập mã sản phẩm" />
            </div>
            <div class="search-customer__card">
                <label for="customer-name"> Tên khách hàng </label>
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
                <label for="#">Số lượt mua</label>
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
                        <th>Mã khách hàng</th>
                        <th class="cell-start">Tên khách hàng</th>
                        <th class="hover cell-start">Tổng thanh toán</th>
                        <th class="hover cell-start">Số lượng mua</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cell-center">
                            <input type="checkbox" name="check-one" />
                        </td>
                        <td class="cell-center">khach hang 01</td>
                        <td class="list-container__name">khach hang 01</td>
                        <td>khach hang 01</td>
                        <td>khach hang 01</td>
                        <td class="cell-center">
                            <a href="#" target="_blank" style="text-decoration: none">
                                <img src="{{ asset('assets/svg/detail.svg') }}" alt="detail" />
                            </a>
                            <a href="#" target="_blank" style="text-decoration: none">
                                <img src="{{ asset('assets/svg/delete.svg') }}" alt="detail" />
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="cell-center">
                            <input type="checkbox" name="check-one" />
                        </td>
                        <td class="cell-center">khach hang 01</td>
                        <td class="list-container__name">khach hang 01</td>
                        <td>khach hang 01</td>
                        <td>khach hang 01</td>
                        <td class="cell-center">
                            <a href="#" target="_blank" style="text-decoration: none">
                                <img src="{{ asset('assets/svg/detail.svg') }}" alt="detail" />
                            </a>
                            <a href="#" target="_blank" style="text-decoration: none">
                                <img src="{{ asset('assets/svg/delete.svg') }}" alt="detail" />
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="cell-center">
                            <input type="checkbox" name="check-one" />
                        </td>
                        <td class="cell-center">khach hang 01</td>
                        <td class="list-container__name">khach hang 01</td>
                        <td>khach hang 01</td>
                        <td>khach hang 01</td>
                        <td class="cell-center">
                            <a href="#" target="_blank" style="text-decoration: none">
                                <img src="{{ asset('assets/svg/detail.svg') }}" alt="detail" />
                            </a>
                            <a href="#" target="_blank" style="text-decoration: none">
                                <img src="{{ asset('assets/svg/delete.svg') }}" alt="detail" />
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
        document.getElementById('customer').style.color = '#013CC6';
    </script>
@endsection
