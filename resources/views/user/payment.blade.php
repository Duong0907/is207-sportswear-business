@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/user/payment.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/shared/toast.css') }}">
@endsection

@section('content')
    <div class="page-content">
        <h1 id="heading">Thanh toán</h1>
        <div class="payment-page-container">
            <div class="payment-page-container-first">
                <form class="payment-form" method="post" action="{{ route('payment') }}">
                    @csrf
                    <p>Thông tin giao hàng</p>
                    <div id='customer-name'>
                        <input type="text" placeholder="Họ" id="first-name" name="shipping_firstname" required>
                        <input type="text" placeholder="Tên" id="last-name" name="shipping_lastname" required>
                    </div>
                    <input type="text" placeholder="Địa chỉ" id="address" name="shipping_address" required>
                    <input type="text" placeholder="Số điện thoại" id="phone-number" name="shipping_phonenumber"
                        required>
                    <input type="text" placeholder="Ghi chú" id="note" name="shipping_note">
                    <div id="save-info-checkbox">
                        <input type="checkbox" name="save-info" id="save-info">
                        <label for="save-info">Lưu thông tin</label>
                    </div>
                    <button type="submit" class="order-button" role="button">
                        <p>Thanh toán</p>
                    </button>
                </form>
                <div style="margin-top: 12px">
                    <form action="{{ route('vn-pay') }}" method="POST">
                        @csrf
                        <button type="submit" class="order-button" role="button" name="redirect">
                            <p>Thanh toán bằng VNPAY</p>
                        </button>
                    </form>
                </div>
            </div>
            <div class="container">
                {{-- từ chối hiểu --}}
                <div class="cart-container">
                    <h2>Giỏ hàng của bạn</h2>
                    <div class="cart-product-list" id="style-3"></div>
                </div>

                <div class="total-container">
                    <h2>Tổng kết đặt hàng</h2>
                    <div class="total-div">
                        <p>Tổng tiền sản phẩm</p>
                        <p id="total" class="money">0</p>
                    </div>
                    <div class="shipping-fee-div">
                        <p>Phí ship</p>
                        <p id="shipping-fee" class="money">0</p>
                    </div>
                    <div id="line"></div>
                    <div class="total-pay">
                        <p>Tổng</p>
                        <p id="total-pay" class="money"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
@endsection
@section('js')
    {{-- <script src="{{ asset('assets/js/base.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/shared/toast.js') }}"></script> --}}
    <script src="{{ asset('assets/js/user/payment.js') }}"></script>
@endsection
