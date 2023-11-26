<div class="tp-shop-top-result">
    <p>Tổng cộng: <b>{{ number_format($paginator->total()) }}</b> sản phẩm / <b>{{ number_format($paginator->lastPage()) }}</b> trang</p>
</div>
<div class="tp-shop-pagination mt-20">
    @if ($paginator->hasPages())
        <div class="tp-pagination">
            <nav>
                <ul>
                    @if (!$paginator->onFirstPage())
                        <li>
                            <a href="javascript:void(0)" onclick="changePage({{ $paginator->currentPage()-1 }})" class="tp-pagination-prev prev page-numbers">
                                <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.00017 6.77879L14 6.77879" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6.24316 11.9999L0.999899 6.77922L6.24316 1.55762" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </li>
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
                            <li>
                                <a href="javascript:void(0)" onclick="changePage({{ $paginator->currentPage()+1 }})" class="next page-numbers">
                                    <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.9998 6.77883L1 6.77883" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M8.75684 1.55767L14.0001 6.7784L8.75684 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </li>
                        @endif
                </ul>
            </nav>
        </div>
    @endif
</div>

<script>
    function changePage(page) {
        var form = $('form');
        if(form.length > 1) {
            form = $('#searchForm');
        }
        form.append('<input type=hidden value="' + page + '" name="page" />');
        form.submit();
    }
    document.addEventListener("DOMContentLoaded", () => {
        $('#clonePaginateToTop').html($('.count-paginate').clone())
    });

</script>
