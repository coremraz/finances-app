<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>

    </head>
    <body>
    <x-totalSpendings total="{{$totalSum}}"/>
    <x-button><a href="/desc">⬇️</a></x-button>
    <x-button><a href="/asc">⬆️</a>️</x-button>
    @foreach($allSpendings as $spending)
        <x-spending name="{{ $spending->name }}" cost="{{ $spending->cost }}" date="{{ $spending->created_at }}" category="{{$spending->category}}"/>
    @endforeach
    <x-addSpending/>
    </body>
</html>
