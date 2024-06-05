@props(['name', 'cost', 'date', 'category'])

<div class="flex flex-col items-center w-1/12 bg-gray-800 rounded-xl m-4">
    <div class="flex items-center w-10/12 justify-between"><h1 class="text-amber-50 font-bold pl-7">{{$name}}</h1><span class="text-red-500 cursor-pointer">X</span></div>
    <span class="text-emerald-500 font-bold">{{$cost . "₽"}}</span>
    <span class="text-gray-400 font-bold">{{$category}}</span>
    <span class="text-gray-600 font-bold">{{date('d-m-Y H:i', strtotime($date))}}</span>
</div>
