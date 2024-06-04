@props(['name', 'cost', 'date'])

<div class="flex flex-col items-center w-1/12 bg-gray-800 rounded-xl m-4">
    <h1 class="text-amber-50 font-bold">{{$name}}</h1>
    <span class="text-emerald-500 font-bold">{{$cost . "₽"}}</span>
    <span class="text-gray-500 font-bold">{{date('d-m-Y H:i', strtotime($date))}}</span>
</div>
