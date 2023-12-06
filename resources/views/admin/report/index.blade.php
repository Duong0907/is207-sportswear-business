@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/admin/report/index.css') }}">
@endsection
@section('content')
    <main class="container">
        <h1>Báo cáo doanh thu</h1>

        <!-- Thanh top bar chứa các input -->
        <div class="time-navbar">
            <a href="#" class="time-navbar__item '.addIfActive('week').'">Tuần</a>
            <a href="#" class="time-navbar__item '.addIfActive('month').'">Tháng</a>
            <a href="#" class="time-navbar__item '.addIfActive('quarter').'">Quý</a>
            <a href="#" class="time-navbar__item '.addIfActive('year').'">Năm</a>
        </div>

        <div class="list-container">
            <table class="customers-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="check-all" />
                        </th>
                        <th>Năm</th>
                        <th class="cell-center">Tháng</th>
                        <th class="hover cell-center">Ngày</th>
                        <th class="hover cell-center">Số lượng sản phẩm bán được</th>
                        <th>Doanh thu</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cell-center">
                            <input type="checkbox" name="check-one" />
                        </td>
                        <td class="cell-center">test 1</td>
                        <td class="cell-center">test 1</td>
                        <td class="cell-center">test 1</td>
                        <td class="cell-center">test 1</td>
                        <td class="cell-center">test 1</td>
                        <td class="cell-center cell-action">
                            <a onclick="openDetailModal(1);">
                                <img class="item-img" src="{{ asset('assets/svg/detail.svg') }}" alt="detail" />
                            </a>
                            <a onclick="handlePrint();">
                                <img class="item-img" src="{{ asset('assets/svg/printer.svg') }}" alt="printer" />
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="cell-center">
                            <input type="checkbox" name="check-one" />
                        </td>
                        <td class="cell-center">test 1</td>
                        <td class="cell-center">test 1</td>
                        <td class="cell-center">test 1</td>
                        <td class="cell-center">test 1</td>
                        <td class="cell-center">test 1</td>
                        <td class="cell-center cell-action">
                            <a onclick="openDetailModal(1);">
                                <img class="item-img" src="{{ asset('assets/svg/detail.svg') }}" alt="detail" />
                            </a>
                            <a onclick="handlePrint();">
                                <img class="item-img" src="{{ asset('assets/svg/printer.svg') }}" alt="printer" />
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="cell-center">
                            <input type="checkbox" name="check-one" />
                        </td>
                        <td class="cell-center">test 1</td>
                        <td class="cell-center">test 1</td>
                        <td class="cell-center">test 1</td>
                        <td class="cell-center">test 1</td>
                        <td class="cell-center">test 1</td>
                        <td class="cell-center cell-action">
                            <a onclick="openDetailModal(1);">
                                <img class="item-img" src="{{ asset('assets/svg/detail.svg') }}" alt="detail" />
                            </a>
                            <a onclick="handlePrint();">
                                <img class="item-img" src="{{ asset('assets/svg/printer.svg') }}" alt="printer" />
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
    {{-- detail --}}
    <div class="detail-report-area disable">
        <div class="detail-report-modal">
            <div class="report-modal__heading">
                <h2>Chi tiết khuyến mãi</h2>
            </div>

            <div class="report-modal__body">
                <table class="report-modal__table">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" id="report-modal__check-all" />
                            </th>
                            <th class="cell-center">Loại sản phẩm</th>
                            <th class="cell-center">
                                Số lượng sản phẩm bán được
                            </th>
                            <th class="cell-center">
                                Doanh thu
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="">
                                <input type="checkbox" id="report-modal__checkbox-01" />
                            </td>
                            <td class="cell-center">
                                Giày nam
                            </td>
                            <td>
                                500
                            </td>
                            <td>
                                4.800.000.000 VNĐ
                            </td>
                        </tr>

                        <tr>
                            <td class="">
                                <input type="checkbox" id="report-modal__checkbox-01" />
                            </td>
                            <td class="cell-center">
                                Giày nam
                            </td>
                            <td>
                                500
                            </td>
                            <td>
                                4.800.000.000 VNĐ
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="report-modal__button-container">
                <button class="report-modal__export-btn">Xuất báo cáo</button>
                <button class="report-modal__exit-btn">Thoát</button>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        document.getElementById('revenue').style.color = '#013CC6';
    </script>
@endsection
