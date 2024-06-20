@extends('layouts.base')

@section('content')
    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="flex flex-col w-72">
            <x-input type="text" placeholder="You paid for this" :value="old('username')" name="name" />
            <x-error error="name"/>
            <x-input type="text" placeholder="" name="password"/>
            <x-error error="password"/>
            <x-button type="submit">Login</x-button>
        </div>
    </form>
@endsection

