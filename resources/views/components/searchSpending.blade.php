<form action="{{route('search')}}" method="GET">
    <div class="flex flex-col w-56 bg-gray-50 drop-shadow-lg rounded-xl m-4 p-2">
        <input type="text" class="rounded-xl border-2 border-gray-700" name="by"/>
        <button type="submit" class="ml-2 font-bold text-gray-700">Search</button>
    </div>
</form>
