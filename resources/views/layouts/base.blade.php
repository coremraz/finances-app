<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>
</head>
@guest()
<header><x-button><a  href="{{route('login')}}">login</a></x-button><x-button><a  href="{{route('register')}}">Register</a></x-button></header>
@endguest
@auth()
    <header>Hello {{session()->get('username')}}! <x-button><a  href="{{route('logout')}}">Logout</a></x-button></header>
@endauth
<body class="flex items-center flex-col">
    @yield('content')
</body>
</html>
