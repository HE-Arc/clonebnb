@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>&laquo;</span></li>
        @else
<<<<<<< HEAD
            <li><a href="{{ secure_asset('{{ $paginator->previousPageUrl() '" rel="prev">&laquo;</a></li>
=======
            <li><a href="{{ $paginator->previousPageUrl() }}'" rel="prev">&laquo;</a></li>
>>>>>>> master
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><span>{{ $page }}</span></li>
                    @else
<<<<<<< HEAD
                        <li><a href="{{ secure_asset('{{ $url '">{{ $page }}</a></li>
=======
                        <li><a href="'{{ $url }}">{{ $page }}</a></li>
>>>>>>> master
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
<<<<<<< HEAD
            <li><a href="{{ secure_asset('{{ $paginator->nextPageUrl() '" rel="next">&raquo;</a></li>
=======
            <li><a href="{{ paginator->nextPageUrl() }}'" rel="next">&raquo;</a></li>
>>>>>>> master
        @else
            <li class="disabled"><span>&raquo;</span></li>
        @endif
    </ul>
@endif
