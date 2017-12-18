@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>@lang('pagination.previous')</span></li>
        @else
<<<<<<< HEAD
            <li><a href="{{ secure_asset('{{ $paginator->previousPageUrl() '" rel="prev">@lang('pagination.previous')</a></li>
=======
            <li><a href="{{ $paginator->previousPageUrl() }}'" rel="prev">@lang('pagination.previous')</a></li>
>>>>>>> master
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
<<<<<<< HEAD
            <li><a href="{{ secure_asset('{{ $paginator->nextPageUrl() '" rel="next">@lang('pagination.next')</a></li>
=======
            <li><a href="{{ $paginator->nextPageUrl() }}'" rel="next">@lang('pagination.next')</a></li>
>>>>>>> master
        @else
            <li class="disabled"><span>@lang('pagination.next')</span></li>
        @endif
    </ul>
@endif
