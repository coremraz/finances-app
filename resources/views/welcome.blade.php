@extends('layouts.base')

@section('content')
    <x-searchSpending totalSum="{{$totalSum}}" todaySpendings="{{$todaySpendings}}"/>
{{--    <x-filters/>--}}
    @foreach($userSpendings as $spending)
        <x-spending :spending="$spending" />
    @endforeach
    {{$userSpendings->links() }}
    <x-addSpending/>
@endsection


