@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        @else
            <x-button> <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                {!! __('pagination.previous') !!}
            </a></x-button>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <x-button >  <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                {!! __('pagination.next') !!}
            </a></x-button>
        @endif
    </nav>
@endif
