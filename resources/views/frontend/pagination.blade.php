@if ($paginator->hasPages())
<nav aria-label="Blog Pagination">
    <ul class="pagination text-center p-t20 style-1 m-b30">
        @if ($paginator->onFirstPage())
            <li class="page-item"><a class="page-link prev" href="javascript:void(0);">Prev</a></li>
        @else
            <li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="changePage({{ $paginator->currentPage()-1 }})" rel="prev">Prev</a></li>
        @endif
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
                            <li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="changePage({{ $page }})">{{ number_format($page) }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="changePage({{ $paginator->currentPage()+1 }})" rel="next">Next</a></li>
            @else
                <li class="page-item"><a class="page-link next" href="javascript:void(0);">Next</a></li>
            @endif

    </ul>
</nav>
@endif

@section('JS')
    <script>
        function changePage(page) {
            let form = $('form');
            form.append('<input type=hidden value="' + page + '" name="page" />');
            form.submit();
        }
    </script>

@endsection