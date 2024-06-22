@props(['spending'])

<div class="flex flex-col items-center w-59 bg-gray-50 drop-shadow-lg rounded-xl m-4 p-2">
    <div class="flex justify-between">
        <h1 class="text-gray-700 font-bold mx-auto">{{$spending->name}}</h1>
        <div class="flex justify-between ml-auto">
            <form action="{{route("edit", $spending)}}" method="get">
                <button class="text-red-500 cursor-pointer">✏️</button>
            </form>
            <form action="{{route("delete",$spending)}}" method="post">
                @csrf
                @method("DELETE")
                <button class="text-red-500 cursor-pointer">X</button>
            </form>
        </div>
    </div>
    <span class="text-emerald-500 font-bold">{{$spending->cost . "₽"}}</span>
    <span class="text-gray-400 font-bold">{{$spending->category}}</span>
    <span class="text-gray-600 font-bold">{{date('d-m-Y H:i', strtotime($spending->created_at))}}</span>
</div>
