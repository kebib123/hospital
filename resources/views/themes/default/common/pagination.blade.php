@if ($paginator->hasPages())
<nav aria-label=" " class="mt-4 mb-4">
<ul class="pagination justify-content-center">
        @if ($paginator->onFirstPage())
            <li class="page-item"><a class="page-link" disabled>Previous</a></li>
        @else
            <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="page-link">Prev</a></li>
        @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item"><span class="pagination-ellipsis"><span>{{ $element }}</span></span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item"><a class="page-link current">{{ $page }}</a></li>
                        @else
                            <li class="page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

        @if ($paginator->hasMorePages())
           <li class="page-item"> <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a></li>
        @else
            <li class="page-item">  <a class="page-link" disabled>Next page</a></li>
        @endif 
        </ul>
    </nav>
@endif

<style>
.pagination a.current{
    background: #0C80CF;
    color: #FFF;
}
</style>