@extends('layouts.base')

@section('content')
    <x-searchSpending/>
    <x-totalSpendings total="{{$totalSum}}" todaySpendings="{{$todaySpendings}}"/>
    <x-filters/>
    @foreach($userSpendings as $spending)
        <x-spending :spending="$spending" />
    @endforeach
    {{$userSpendings->appends(request()->query())->links() }}
    <x-addSpending/>
@endsection


