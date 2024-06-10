@props(['total' => '1337'])

<form class="flex flex-col items-center w-1/12 bg-gray-800 rounded-xl m-4" action="{{route('store')}}" method="post">
    @csrf {{ csrf_field() }}
    <label class="text-amber-50">Name:</label>
    <x-input type="text" name="name"/>
    <x-error error="name"/>
    <label class="text-amber-50">Cost:</label>
    <x-input type="text" name="cost"/>
    <x-error error="cost"/>
    <label class="text-amber-50">Category:</label>
    <select class="border-[2px] border-gray-800 w-11/12 rounded-xl outline-none" name="category">
        <option value="Еда">Еда</option>
        <option value="Техника">Техника</option>
        <option value="Напитки">Напитки</option>
    </select>
    <x-button type="submit">Add</x-button>
</form>

