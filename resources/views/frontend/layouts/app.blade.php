<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - {{ __('title') }}</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">
    @stack('css')
</head>

<body>
    @yield('content')
</body>
    @stack('js')
</html>