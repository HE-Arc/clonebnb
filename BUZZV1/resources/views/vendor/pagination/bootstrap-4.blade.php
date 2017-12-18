@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
        @else
<<<<<<< HEAD
            <li class="page-item"><a class="page-link" href="{{ secure_asset('{{ $paginator->previousPageUrl() '" rel="prev">&laquo;</a></li>
=======
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}'" rel="prev">&laquo;</a></li>
>>>>>>> master
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                    @else
<<<<<<< HEAD
                        <li class="page-item"><a class="page-link" href="{{ secure_asset('{{ $url '">{{ $page }}</a></li>
=======
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
>>>>>>> master
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
<<<<<<< HEAD
            <li class="page-item"><a class="page-link" href="{{ secure_asset('{{ $paginator->nextPageUrl() '" rel="next">&raquo;</a></li>
=======
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
>>>>>>> master
        @else
            <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
        @endif
    </ul>
@endif
