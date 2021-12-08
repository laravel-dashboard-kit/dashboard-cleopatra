<li class="page-item page-pre">
    @if ($paginator->onFirstPage())
        <a class="page-link disabled"
            aria-label="previous page"
            href="javascript:void(0)">&laquo;</a>
    @else
        <a wire:click="previousPage"
            id="pagination-desktop-page-previous"
            class="page-link disabled"
            aria-label="previous page"
            href="javascript:void(0)">&laquo;</a>
    @endif
</li>

@foreach ($elements as $element)
    @if (is_string($element))
        <button
            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-700 bg-white"
            disabled>
            <span>{{ $element }}</span>
        </button>
    @endif

    @if (is_array($element))
        @foreach ($element as $page => $url)
            <li class="page-item {{ $page === $paginator->currentPage() ? 'active' : '' }}">
                <a wire:click="gotoPage({{ $page }})"
                    id="pagination-desktop-page-{{ $page }}"
                    class="page-link"
                    aria-label="to page 6"
                    href="javascript:void(0)">
                    {{ $page }}
                </a>
            </li>
        @endforeach
    @endif

@endforeach

<li class="page-item page-next">
    @if ($paginator->hasMorePages())
        <button wire:click="nextPage"
            id="pagination-desktop-page-next"
            class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-red hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500">
            <span>&raquo;</span>
        </button>
    @else
        <a class="page-link disabled"
            aria-label="next page"
            href="javascript:void(0)">&raquo;</a>
    @endif
</li>
