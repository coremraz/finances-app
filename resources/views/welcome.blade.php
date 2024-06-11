@extends('layouts.base');

@section('content')
    <x-searchSpending/>
    <x-totalSpendings total="{{$totalSum}}"/>
    <x-filters/>
    @foreach($allSpendings as $spending)
        <x-spending name="{{ $spending->name }}" cost="{{ $spending->cost }}" date="{{ $spending->created_at }}"
                    category="{{$spending->category}}" id="{{$spending->id}}"/>
    @endforeach
    <x-addSpending/>
@endsection


