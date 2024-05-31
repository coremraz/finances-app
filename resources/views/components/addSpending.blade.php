@props(['total' => '1337'])

<form class="flex flex-col items-center w-1/12 bg-gray-800 rounded-xl m-4" action="/store" method="post">
    @csrf {{ csrf_field() }}
    <label class="text-amber-50">Name:</label>
    <input class="border-[2px] border-gray-800 w-11/12 rounded-xl outline-none" type="text" name="name"/>
    <label class="text-amber-50">Cost:</label>
    <input class="border-[2px] border-gray-800 w-11/12 rounded-xl outline-none" type="text" name="cost"/>
    <button class="text-amber-50 font-bold">Add</button>
</form>
