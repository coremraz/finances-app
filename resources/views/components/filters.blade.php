<div class="flex">
    <form action="{{ route('sort') }}" method="get">
        <x-select name="filter">
            <option value="desc">Sort by price⬇️</option>
            <option value="asc">Sort by price⬆️</option>
            <option value="dateAsc">Date⬇️</option>
            <option value="dateDesc">Date⬆️</option>
        </x-select>
        <div class="flex flex-col">
            <label>From:</label>
            <x-input type="date" name="startDate"></x-input>
            <label>To:</label>
            <x-input type="date" name="endDate"></x-input>
        </div>
        <x-button type="submit">Filter</x-button>
    </form>
</div>
