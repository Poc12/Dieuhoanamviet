
<section class="tp-slider-area p-relative z-index-1">
    <div class="tp-slider-active-3 swiper-container">
        <div class="swiper-wrapper">
            @if(isset($banners))
                @foreach($banners as $item)
                    <div class="tp-slider-item-3 tp-slider-height-3 p-relative swiper-slide black-bg d-flex align-items-center" >
                    <div class="tp-slider-thumb-3 include-bg" data-background="{{images_src($item['avatar'])}}"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="tp-slider-content-3">
                                    <span>{{$item['name']}}</span>
                                    <h5 class="tp-slider-title-3">{!! $item['description'] !!}</h5>
                                    <div class="tp-slider-btn-3">
                                        <a href="{{@$info['zalo']}}" class="tp-btn tp-btn-border tp-btn-border-white">Liên hệ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
        <!-- dot style -->
        <div class="tp-swiper-dot tp-slider-3-dot d-sm-none"></div>
        <!-- arrow style -->
        <div class="tp-slider-arrow-3 d-none d-sm-block">
            <button type="button" class="tp-slider-3-button-prev">
                <svg width="22" height="42" viewBox="0 0 22 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 0.999999L1 21L21 41" stroke="currentColor" stroke-opacity="0.3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button type="button" class="tp-slider-3-button-next">
                <svg width="22" height="42" viewBox="0 0 22 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 0.999999L21 21L1 41" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </div>
</section>
<!-- slider area end -->