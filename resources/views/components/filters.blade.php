<div class="flex">
    <form action="{{ route('sort') }}" method="get">
    <x-select name="filter">
        <option value="desc">Sort by price⬇️</option>
        <option value="asc">Sort by price⬆️</option>
        <option value="dateAsc">Date⬇️</option>
        <option value="dateDesc">Date⬆️</option>
    </x-select>
        <x-button type="submit">Filter</x-button>
    </form>
</div>
