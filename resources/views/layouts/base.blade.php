<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>
</head>
@guest()
<header>Register now!</header>
@endguest
<body class="flex items-center flex-col">
    @yield('content')
</body>
</html>
