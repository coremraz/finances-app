@extends('layouts.base')

@section('content')
    <x-searchSpending :totalSum="$totalSum"
                      :todaySpendings="$todaySpendings"
                      :userSpendings="$userSpendings"/>
    <x-filters/>
    {{$userSpendings->links() }}
    <x-addSpending/>
@endsection


