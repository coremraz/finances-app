<form action="{{route('search')}}" method="GET">
    <div class="flex flex-col w-56 bg-gray-50 drop-shadow-lg rounded-xl m-4 p-2">
        <x-input type="text" name="by"/>
        <x-button type="submit">Search</x-button>
    </div>
</form>
