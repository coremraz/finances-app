@props(['name', 'cost', 'date', 'category', 'id'])

<div class="flex flex-col items-center w-52 bg-gray-50 drop-shadow-lg rounded-xl m-4 p-2">
    <div class="flex justify-between">
        <h1 class="text-gray-700 font-bold mx-auto">{{$name}}</h1>
        <div class="flex justify-between ml-auto">
            <form action="/{{$id}}/delete" >
                @method("DELETE")
                <button class="text-red-500 cursor-pointer">✏️</button>
            </form>
            <form action="{{route("delete", $id)}}"  method="post">
                @csrf
                @method("DELETE")
                <button class="text-red-500 cursor-pointer">X</button>
            </form>
        </div>
    </div>
    <span class="text-emerald-500 font-bold">{{$cost . "₽"}}</span>
    <span class="text-gray-400 font-bold">{{$category}}</span>
    <span class="text-gray-600 font-bold">{{date('d-m-Y H:i', strtotime($date))}}</span>
</div>
