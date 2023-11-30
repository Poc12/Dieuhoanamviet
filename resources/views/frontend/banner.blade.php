<!-- slider area start -->
<section class="tp-slider-area p-relative z-index-1">
    <div class="tp-slider-active tp-slider-variation swiper-container">
        <div class="swiper-wrapper">
            @if(isset($banners))
                @foreach($banners as $item)
                    <div class="tp-slider-item tp-slider-height d-flex align-items-center swiper-slide green-dark-bg" >
                        <div class="tp-slider-shape">
                            <img class="tp-slider-shape-1" src="{{url('shofy/assets/img/slider/shape/slider-shape-1.png')}}" alt="slider-shape">
                            <img class="tp-slider-shape-2" src="{{url('shofy/assets/img/slider/shape/slider-shape-2.png')}}" alt="slider-shape">
                            <img class="tp-slider-shape-3" src="{{url('shofy/assets/img/slider/shape/slider-shape-3.png')}}" alt="slider-shape">
                            <img class="tp-slider-shape-4" src="{{url('shofy/assets/img/slider/shape/slider-shape-4.png')}}" alt="slider-shape">
                        </div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-5 col-lg-6 col-md-6">
                                    <div class="tp-slider-content p-relative z-index-1">
                                        <span>{{$item['name']}}</span>
                                        <h3 class="tp-slider-title">{!! $item['description'] !!}</h3>
                                        <div class="tp-slider-btn">
                                            <a href="{{@$info['zalo']}}" class="tp-btn tp-btn-2 tp-btn-white">Liên hệ
                                                <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-6 col-md-6">
                                    <div class="tp-slider-thumb text-end">
                                        <img src="{{images_src($item['avatar'])}}" alt="slider-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
        <div class="tp-slider-arrow tp-swiper-arrow d-none d-lg-block">
            <button type="button" class="tp-slider-button-prev">
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button type="button" class="tp-slider-button-next">
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
        <div class="tp-slider-dot tp-swiper-dot"></div>
    </div>
</section>
<!-- slider area end -->