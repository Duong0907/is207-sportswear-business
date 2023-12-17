@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/user/profile.css') }}">
@endsection
@section('content')
    <div class="page-container">
        <div id="header">
            <h1>Hồ sơ của tôi</h1>
        </div>
        <div class="profile-container">
            <div class="profile-left">
                <div class="avatar">
                    <img src="" alt="User avatar">
                </div>
                <div class="bio">
                    <h2 id="name"></h2>
                    <p id="biography"></p>
                </div>
                <div class="statistics">
                    <div class="total-paid">
                        <h4></h4>
                        <p>Đã chi</p>
                    </div>
                    <div class="line-y"></div>
                    <div class="purchased">
                        <h4></h4>
                        <p>Đơn hàng</p>
                    </div>
                </div>
            </div>
            <div class="line-y"></div>
            <div class="profile-right">
                <div>
                    <h2>Thông tin chi tiết</h2>
                    <div class="line"></div>
                </div>
                <form>
                    <label for="address">
                        <h4>Địa chỉ</h4>
                        <textarea class="text-content" name="address" id="address" cols="70" rows="3" disabled>
                           
                        </textarea>
                    </label>

                    <label for="email">
                        <h4>Email</h4>
                        <input class="text-content" type="text" value="" disabled>
                    </label>

                    <label for="phone-number">
                        <h4>Số điện thoại</h4>
                        <input class="text-content" type="text" value="" disabled>
                    </label>
                    <br>
                    <div class="btn">
                        <input id="save" type="submit" value="Lưu">
                        <button type="button" id="edit">Sửa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('assets/js/profile.js') }}"></script>
@endsection