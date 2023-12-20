@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/user/purchase_history.css') }}">
@endsection

@section('content')
    <div class="page-container">
        <h1>Lịch sử mua hàng</h1>
        <div class="select-div">
            <select name="recent-time-select" id="recent-time">
                <option value="all-time">Toàn bộ lịch sử</option>
                <option value="day">Hôm nay</option>
                <option value="week">Tuần này</option>
                <option value="month">Tháng này</option>
                <option value="3-month">3 tháng gần đây</option>
                <option value="year">Năm này</option>
            </select>
        </div>
        <div class="table-container">
            <div class="table">
                <div class="table-header">
                    <div class="header__item" id="narrow">
                        <p>MÃ ĐƠN HÀNG</p>
                    </div>
                    <div class="header__item" id="narrow"><a class="filter__link" href="#">NGÀY ĐẶT HÀNG</a>
                    </div>
                    <div class="header__item" id="narrow">
                        <a class="filter__link filter__link--number" href="#" name='redirect'>
                            TỔNG TIỀN
                        </a>
                    </div>
                    <div class="header__item" id="wide">
                        <p>THÔNG TIN NGƯỜI NHẬN</p>
                    </div>
                </div>

                <div class="table-content" id="style-3">
                    <!-- Generate data from database -->
                    @foreach ($orders as $order)
                        <div class="table-row">
                            <div class="table-data narrow">{{ $order->id }}</div>
                            <div class="table-data narrow order-date">{{ $order->created_at }}</div>
                            <div class="table-data narrow total-money">{{ $order->total_money }}</div>
                            <div class="table-data">{{ $order->shipping_address }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('assets/js/user/purchase_history.js') }}"></script>
@endsection
