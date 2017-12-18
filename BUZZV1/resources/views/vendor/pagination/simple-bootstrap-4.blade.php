@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link">@lang('pagination.previous')</span></li>
        @else
<<<<<<< HEAD
            <li class="page-item"><a class="page-link" href="{{ secure_asset('{{ $paginator->previousPageUrl() '" rel="prev">@lang('pagination.previous')</a></li>
=======
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
>>>>>>> master
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
<<<<<<< HEAD
            <li class="page-item"><a class="page-link" href="{{ secure_asset('{{ $paginator->nextPageUrl() '" rel="next">@lang('pagination.next')</a></li>
=======
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
>>>>>>> master
        @else
            <li class="page-item disabled"><span class="page-link">@lang('pagination.next')</span></li>
        @endif
    </ul>
@endif
