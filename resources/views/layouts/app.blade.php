<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sportswear</title>
    <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.png">

    <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/shared/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/shared/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/shared/scroll_top_btn.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/themify-icons/themify-icons.css') }}">
    {{-- dung de load scroll to top btn --}}
    <script src="https://kit.fontawesome.com/34f5218fc0.js" crossorigin="anonymous"></script>
    @yield('css')
</head>

<body>
    <div class="root-main">
        @include('shared.navbar')
        @yield('content')
        @include('shared.footer')
    </div>
    <script src="{{ asset('assets/js/shared/navbar.js')}}"></script>
    @yield('js')
</body>

</html>
