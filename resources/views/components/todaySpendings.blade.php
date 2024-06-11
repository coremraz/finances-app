@props(['todaySpendings' => '337'])

<span {{$attributes->merge(['class' => 'text-red-500'])}}> -{{$todaySpendings}}₽ today</span>
