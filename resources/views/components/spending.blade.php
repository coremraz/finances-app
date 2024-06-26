@props(['spending'])

<div class="flex flex-col items-center w-59 bg-gray-50 drop-shadow-lg rounded-xl m-4 p-2">
    <div class="flex justify-between">
        <h1 class="text-gray-700 font-bold mx-auto">{{$spending->name}}</h1>
        <div class="flex justify-between ml-auto">
{{--            Do it yesterday--}}
            <form action="{{route("delete",$spending)}}" method="get">
                @csrf
                <x-button class="text-red-500 cursor-pointer" type="submit">✏️</x-button>
            </form>
            <form action="{{route("delete",$spending)}}" method="post">
                @csrf
                @method("DELETE")
                <x-button class="text-red-500 cursor-pointer" type="submit">X</x-button>
            </form>
        </div>
    </div>
    <span class="text-emerald-500 font-bold">{{$spending->cost . "₽"}}</span>
    <span class="text-gray-400 font-bold"><a href="{{route('sort', ['category' => $spending->category])}}">{{$spending->category}}</a></span>
    <span class="text-gray-600 font-bold">{{date('d-m-Y H:i', strtotime($spending->created_at))}}</span>
</div>
