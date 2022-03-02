<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - {{ __('title') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">

</head>
<body>
<div class="fb-content">
    <div class="content-wrap">
        <div class="content-left">
            <img src="{{ asset('assets/images/logo.svg') }}" alt="logo">
            <div class="desc">
                Facebook giúp bạn kết nối và chia sẻ với mọi người trong cuộc sống của bạn.
            </div>
        </div>
        <div class="content-right">
            <form class="login-form" action="{{ route('login.store') }}" method="post">
                @csrf
                <input name="username" type="text" placeholder="Email hoặc số điện thoại">
                <input name="password" type="password" placeholder="Mật khẩu">
                <button type="submit" name="login">Đăng nhập</button>
                <div class="forgot-pass">
                    <a href="#">Quên mật khẩu?</a>
                </div>
                <a class="register-btn">Tạo tài khoản mới</a>
            </form>
            <div class="note-form"><a href="#">Tạo Trang</a> dành cho người nổi tiếng, thương hiệu hoặc doanh nghiệp.</div>
        </div>
    </div>
</div>
</body>
</html>