<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>

</head>
<body>
<form action="{{route('register')}}" method="post">
    @csrf
    <div class="flex flex-col w-72">
        <x-input type="text" placeholder="Username" name="username" />
        <x-error error="username"/>
        <x-input type="password" placeholder="Password" name="password"/>
        <x-error error="password"/>
        <x-button type="submit">Let's count your finances</x-button>
    </div>
</form>
</body>
</html>
