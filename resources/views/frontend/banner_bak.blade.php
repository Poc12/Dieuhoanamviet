<div class="swiper-container">
        <div class="swiper-wrapper swiper-slide">
            @if(isset($banners))
                @foreach($banners as $item)
                    <div class="swiper-slide" style="background-image: url('{{url('books/images/background/waveelement2-2.png')}}');">
                        <div class="container">
                            <div class="banner-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="swiper-content mt-6">
                                            <div class="content-info">
                                                <h1 class="title mb-0" data-swiper-parallax="-20">{{$item['name']}}</h1>
                                                <p class="text mb-0" data-swiper-parallax="-40">
                                                    {!! $item['description'] !!}
                                                </p>
                                                <div class="content-btn" data-swiper-parallax="-60">
                                                    <a class="btn btn-primary btnhover" href="{{@$info['zalo']}}">Liên hệ </a>
                                                    <a class="btn btn-outline-secondary btnhover ms-4" href="{{ get_link_cate(@$recommended[0]['category']['slug']) }}">Xem chi tiết</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="banner-media" data-swiper-parallax="-100">
                                            <img src="{{images_src($item['avatar'])}}" alt="media">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
</div>
