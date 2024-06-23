@extends('layouts.base')

@section('content')
    <form action="{{route('register')}}" method="post">
        @csrf
        <div class="flex flex-col w-72">
            <x-input type="text" placeholder="Username" name="username" />
            <x-error error="username"/>
            <x-input type="password" placeholder="Password" name="password"/>
            <x-error error="password"/>
            <x-button type="submit">Register</x-button>
        </div>
    </form>
@endsection
