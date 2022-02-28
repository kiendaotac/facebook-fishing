<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://tailwindui.com/js/components-v2.js?id=c08ed7087921a2a8b1bfe052e9ed5b36"></script>
    <script src="https://tailwindui.com/js/iframe.js?id=165e0af3d723efd6d5d88c7ff17ca86a"></script>
    <script src="https://tailwindui.com/js/alpine.js?id=aec657470ad97cbba5c2659fd719c2de"></script>
    @livewireStyles
</head>
<body>
    <x-navbars />
    {{ $slot }}
    @livewireScripts
</body>
</html>
