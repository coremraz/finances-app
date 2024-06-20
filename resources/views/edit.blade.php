@extends('layouts.base')
@props(['spending'])

@section('content')
    <form action="{{route('update', $spending->id)}}" method="post">
        @csrf
        @method("PATCH")
        <div class="flex flex-col w-72">
            <label>Name:</label>
            <x-input type="text" placeholder="You paid for this" value="{{$spending->name}}" name="name" />
            <x-error error="name"/>
            <label>Cost:</label>
            <x-input name="cost" value="{{$spending->cost}}"/>
            <label>Category:</label>
            <x-categories/>
            <x-button type="submit">Save</x-button>
        </div>
    </form>
@endsection

