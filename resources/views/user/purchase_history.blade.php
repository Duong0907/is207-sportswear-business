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
                        <a class="filter__link filter__link--number" href="#">
                            TỔNG TIỀN
                        </a>
                    </div>
                    <div class="header__item" id="wide">
                        <p>THÔNG TIN NGƯỜI NHẬN</p>
                    </div>
                </div>
                <div class="table-content" id="style-3">
                    <!-- Generate data from database -->
                    <div class="table-row">
                        <div class="table-data narrow">TS0047</div>
                        <div class="table-data narrow">27/11/2023</div>
                        <div class="table-data narrow" id="total-money">1.200.000 ₫</div>
                        <div class="table-data">
                            Ký túc xá khu B: Đường Mạc Đĩnh Chi, Khu phố Tân Hòa, Phường Đông Hòa,
                            Thành phố Dĩ An, Tỉnh Bình Dương
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-data narrow">FS0028</div>
                        <div class="table-data narrow">27/10/2023</div>
                        <div class="table-data narrow" id="total-money">2.500.000 ₫</div>
                        <div class="table-data">
                            Ký túc xá khu B: Đường Mạc Đĩnh Chi, Khu phố Tân Hòa, Phường Đông Hòa, Thành phố Dĩ An, Tỉnh
                            Bình Dương
                        </div>
                    </div>

                    <div class="table-row">
                        <div class="table-data narrow">FS0028</div>
                        <div class="table-data narrow">27/10/2023</div>
                        <div class="table-data narrow" id="total-money">2.500.000 ₫</div>
                        <div class="table-data">
                            Ký túc xá khu B: Đường Mạc Đĩnh Chi, Khu phố Tân Hòa, Phường Đông Hòa, Thành phố Dĩ An, Tỉnh
                            Bình Dương
                        </div>
                    </div>

                    <div class="table-row">
                        <div class="table-data narrow">FS0028</div>
                        <div class="table-data narrow">27/10/2023</div>
                        <div class="table-data narrow" id="total-money">2.500.000 ₫</div>
                        <div class="table-data">
                            Ký túc xá khu B: Đường Mạc Đĩnh Chi, Khu phố Tân Hòa, Phường Đông Hòa, Thành phố Dĩ An, Tỉnh
                            Bình Dương
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-data narrow">FS0028</div>
                        <div class="table-data narrow">27/10/2023</div>
                        <div class="table-data narrow" id="total-money">2.500.000 ₫</div>
                        <div class="table-data">
                            Ký túc xá khu B: Đường Mạc Đĩnh Chi, Khu phố Tân Hòa, Phường Đông Hòa, Thành phố Dĩ An, Tỉnh
                            Bình Dương
                        </div>
                    </div>

                    <div class="table-row">
                        <div class="table-data narrow">FS0028</div>
                        <div class="table-data narrow">27/10/2023</div>
                        <div class="table-data narrow" id="total-money">2.500.000 ₫</div>
                        <div class="table-data">
                            Ký túc xá khu B: Đường Mạc Đĩnh Chi, Khu phố Tân Hòa, Phường Đông Hòa, Thành phố Dĩ An, Tỉnh
                            Bình Dương
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-data narrow">FS0028</div>
                        <div class="table-data narrow">27/10/2023</div>
                        <div class="table-data narrow" id="total-money">2.500.000 ₫</div>
                        <div class="table-data">
                            Ký túc xá khu B: Đường Mạc Đĩnh Chi, Khu phố Tân Hòa, Phường Đông Hòa, Thành phố Dĩ An, Tỉnh
                            Bình Dương
                        </div>
                    </div>

                    <div class="table-row">
                        <div class="table-data narrow">FS0028</div>
                        <div class="table-data narrow">27/10/2023</div>
                        <div class="table-data narrow" id="total-money">2.500.000 ₫</div>
                        <div class="table-data">
                            Ký túc xá khu B: Đường Mạc Đĩnh Chi, Khu phố Tân Hòa, Phường Đông Hòa, Thành phố Dĩ An, Tỉnh
                            Bình Dương
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
