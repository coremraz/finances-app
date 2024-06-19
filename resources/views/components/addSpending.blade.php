@props(['total' => '1337'])

<form class="flex flex-col items-center w-56 bg-gray-50 drop-shadow-lg rounded-xl m-4" action="{{route('store')}}" method="post">
    @csrf
    <label class="text-gray-700">Name:</label>
    <x-input type="text" name="name"/>
    <x-error error="name"/>
    <label class="text-gray-700">Cost:</label>
    <x-input type="text" name="cost"/>
    <x-error error="cost"/>
    <label class="text-gray-700">Category:</label>
    <x-select name="category">
        <option value="Еда">Еда</option>
        <option value="Техника">Техника</option>
        <option value="Напитки">Напитки</option>
    </x-select>
    <x-button type="submit">Add</x-button>
</form>

