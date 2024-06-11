<div class="flex">
    <div>
        <x-button><a href="{{ route('sort', ['filter' => 'desc']) }}">⬇️</a></x-button>
        <x-button><a href="{{ route('sort', ['filter' => 'asc']) }}">⬆️</a>️</x-button>
    </div>
    <div>
        <x-button><a href="{{ route('sort', ['filter' => 'dateAsc']) }}">Date ⬆️</a>️</x-button>
        <x-button><a href="{{ route('sort', ['filter' => 'dateDesc']) }}">Date ⬇️️</a>️</x-button>
    </div>
</div>
