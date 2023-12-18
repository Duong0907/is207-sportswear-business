<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/auth/login.css') }}">
    <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/css/shared/toast.css') }}">
</head>

<body>
    @csrf
    <div class="wrap">
        <form action="{{ route('post-login') }}" class="form" method="POST">
            @csrf
            <div class="headForm">
                <h2>Đăng nhập</h2>
                <p>Chưa có tài khoản? <a href="{{ route('register') }}" class="registerText">Đăng ký</a></p>
            </div>
            <div class="bodyForm">
                <div class="firstRow">
                    <label for="phoneNumber">Số điện thoại</label>
                    <br>
                    <input type="text" id="phoneNumber" name='phoneNumber' required>
                </div>
                <div class="secondRow">
                    <label for="password">Mật khẩu</label>
                    <br>
                    <input type="password" id="password" name='password' required>
                </div>
                <div class="thirdRow">
                    <div>
                        <input type="checkbox" id="check">
                        <label for="check">Ghi nhớ đăng nhập</label>
                    </div>
                    <div>
                        <a class="forgetPass" href="">Quên mật khẩu</a>
                    </div>
                </div>
            </div>
            <button class="loginButton">Đăng nhập</button>
        </form>
        <div class="logo-container">
            <div class="logo">
                <img src="{{ asset('/assets/images/logo/logo-removebg-preview.png') }}" alt="Store's logo">
            </div>
        </div>
    </div>
    <div id="toast"></div>
    <script src="{{ asset('assets/js/shared/toast.js') }}"></script>
    
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
    @if ($message = Session::get('success'))
        <script>
            toast({
                title: 'Thành công',
                message: '{{ $message }}',
                type: 'success',
                duration: 5000
            })
        </script>
    @endif
</body>

</html>
