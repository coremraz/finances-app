<div class="flex">
    <form action="{{ route('sort') }}" method="get">
        <x-select name="filter">
            <option value="default">Default</option>
{{--        First - what to sort, Second - asc/desc--}}
            <option value="cost,desc">Sort by price⬇️</option>
            <option value="cost,asc">Sort by price⬆️</option>
            <option value="created_at,desc">Date⬇️</option>
            <option value="created_at,asc">Date⬆️</option>
        </x-select>
        <div class="flex flex-col">
            <label>Specific day:</label>
            <x-input type="date" name="day"></x-input>
        </div>
        <x-button type="submit">Filter</x-button>
    </form>
</div>
