@props(['total' => '1337'])

<form class="flex flex-col items-center w-1/12 bg-gray-800 rounded-xl m-4" action="{{route('store')}}" method="post">
    @csrf
    <label class="text-amber-50">Name:</label>
    <input class="border-[2px] border-gray-800 w-11/12 rounded-xl outline-none" type="text" name="name"/>
    @error('name')
    <p class="text-red-500 font-semibold text-xs p-3">{{$message}}</p>
    @enderror
    <label class="text-amber-50">Cost:</label>
    <input class="border-[2px] border-gray-800 w-11/12 rounded-xl outline-none" type="text" name="cost"/>
    @error('cost')
    <p class="text-red-500 font-semibold text-xs p-3">{{$message}}</p>
    @enderror
    <label class="text-amber-50">Category:</label>
    <select class="border-[2px] border-gray-800 w-11/12 rounded-xl outline-none" name="category">
        <option value="Еда">Еда</option>
        <option value="Техника">Техника</option>
        <option value="Напитки">Напитки</option>
    </select>
    <button class="text-amber-50 font-bold">Add</button>
</form>

