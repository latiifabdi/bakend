@if ($paginator->hasPages())
    <ul class="flex justify-round ml-16 mb-20 list-reset" role="navigation">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="mr-8 page-item disabled" aria-disabled="true">
                <span class="bg-white opacity-50 rounded text-black py-2 px-4 cursor-not-allowed">@lang('pagination.previous')</span>
            </li>
        @else
            <li class="page-item mr-8">
                <a class="bg-white rounded text-black py-2 px-4" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="bg-white rounded text-black py-2 px-4 no-underline" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true">
                <span class="bg-white opacity-50 cursor-not-allowed rounded text-black py-2 px-4">@lang('pagination.next')</span>
            </li>
        @endif
    </ul>
@endif
