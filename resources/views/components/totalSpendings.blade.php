@props(['total' => '1337'])

<div class="flex flex-col w-1/6 bg-gray-50 drop-shadow-lg rounded-xl m-4 p-5">
    <span class="mx-auto">Total:</span>
    <h1 class="text-gray-700 mx-auto text-2xl font-bold">{{"₽" . $total}}</h1>
</div>
