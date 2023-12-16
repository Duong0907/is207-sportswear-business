<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register </title>
    <link rel="stylesheet" href="{{ asset('assets/css/auth/register.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}">
    <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/css/shared/toast.css') }}">
</head>

<body>
    <form action="{{ route('post-register') }}" method="POST">
        @csrf
        <div class="wrap">
            <div class="form">
                <div class="headForm">
                    <h2>Đăng ký</h2>
                    <p>Đã có tài khoản? <a href="{{ route('login') }}" class="loginText">Đăng nhập</a></p>
                </div>
                <div class="bodyForm">
                    <div class="secondRow">
                        <label for="username">Tên đăng nhập</label>
                        <br>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="thirdRow">
                        <label for="phoneNumber">Số điện thoại</label>
                        <br>
                        <input type="text" id="phoneNumber" name="phoneNumber" required>
                    </div>
                    <div class="fourthRow">
                        <div>
                            <label for="password">Mật khẩu</label>
                            <br>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div>
                            <label for="verify">Xác nhận mật khẩu</label>
                            <br>
                            <input type="password" id="verify" name="verify" required>
                        </div>
                    </div>
                    <p style="margin: 16px 0px">Sử dụng 8 ký tự trở lên kết hợp chữ cái, chữ số và ký hiệu đặc biệt !
                    </p>
                    <div class="fifthRow">
                        <input type="checkbox" id="check">
                        <label for="check">Hiển thị mật khẩu</label>
                    </div>
                </div>
                <button class="registerButton">Tạo tài khoản</button>
            </div>
            <div class="logo">
                <img src="{{ asset('assets/images/logo/logo-removebg-preview.png') }}" alt="Store's logo">
            </div>
        </div>
    </form>
    <script src="{{ asset('assets/js/auth/register.js') }}"></script>
    <script src="{{ asset('assets/js/shared/toast.js') }}"></script>

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
