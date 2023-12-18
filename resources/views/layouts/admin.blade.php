<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin/sidebar.css') }}">
    @yield('css')
</head>

<body>
    <div class="sidebar-container">
        <header>
            <div class="logo">
                <a href="#">
                    <img class="sidebar-icon" src="{{ asset('assets/svg/logo.svg') }}" alt="Logo">
                </a>
            </div>
            <div class="search-box">
                <div class="search-icon">
                    <img class="sidebar-icon" src="{{ asset('assets/svg/search-normal.svg') }}">
                </div>
                <input id="search-box-input" type="text" placeholder="Tìm kiếm">
            </div>
            <div class="right">
                <div class="notify">
                    <i class="fa-solid fa-bell"></i>
                </div>
                <div class="admin-button">
                    <i class="fa-regular fa-user"></i>
                </div>
            </div>
        </header>
        <main class="admin-layout">
            <div class="sidebar">
                <a href="{{ route('error') }}" class="sidebar-item">
                    <div class="sidebar-item-container" id="account">
                        <div class="sidebar-item-icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <p>Dash Board</p>
                    </div>
                </a>
                <a href="{{ route('admin-order') }}" class="sidebar-item">
                    <div class="sidebar-item-container" id="order">
                        <div class="sidebar-item-icon">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <p>Đơn hàng</p>
                    </div>
                </a>
                <a href="{{ route('admin-product') }}" class="sidebar-item">
                    <div class="sidebar-item-container" id="product">
                        <div class="sidebar-item-icon">
                            <i class="fa-solid fa-bag-shopping"></i>
                        </div>
                        <p>Sản phẩm</p>
                    </div>
                </a>
                <a href="{{ route('admin-customer') }}" class="sidebar-item">
                    <div class="sidebar-item-container" id="customer">
                        <div class="sidebar-item-icon">
                            <i class="fa-solid fa-person"></i>
                        </div>
                        <p>Khách hàng</p>
                    </div>
                </a>
                <a href="{{ route('admin-category') }}" class="sidebar-item">
                    <div class="sidebar-item-container" id="category">
                        <div class="sidebar-item-icon">
                            <i class="fa-solid fa-shapes"></i>
                        </div>
                        <p>Hạng mục</p>
                    </div>
                </a>
                <a href="{{ route('admin-coupon') }}" class="sidebar-item">
                    <div class="sidebar-item-container" id="discount">
                        <div class="sidebar-item-icon">
                            <i class="fa-solid fa-piggy-bank"></i>
                        </div>
                        <p>Giảm giá</p>
                    </div>
                </a>
                <a href="{{ route('admin-report') }}" class="sidebar-item">
                    <div class="sidebar-item-container" id="revenue">
                        <div class="sidebar-item-icon">
                            <i class="fa-solid fa-dollar-sign"></i>
                        </div>
                        <p>Doanh thu</p>
                    </div>
                </a>
            </div>

            <div class="content">
                @yield('content')
            </div>
        </main>
    </div>
    <script src="https://kit.fontawesome.com/34f5218fc0.js" crossorigin="anonymous" defer></script>;
    @yield('js')
</body>

</html>
