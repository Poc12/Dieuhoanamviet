@extends('layouts.febase')


@section('content')


    <!--Swiper Banner Start -->
    @include('frontend.banner',['banners' => $banners,'trending_book' => $trending_book])
    <!--Swiper Banner End-->

    <section class="content-inner-2 overlay-white-middle">
        <div class="container">
            <div class="row about-style1 align-items-center">
                <div class="col-lg-6 m-b30 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row sp10 about-thumb">
                        <div class="col-sm-6 aos-item ">
                            <div class="split-box">
                                <div>
                                    <img class="m-b30" src="{{url('books/images/about/about1.jpg')}}" alt="/">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="split-box ">
                                <div>
                                    <img class="m-b20 aos-item" src="{{url('books/images/about/about2.jpg')}}" alt="/">
                                </div>
                            </div>
                            <div class="exp-bx aos-item">
                                <div class="exp-head">
                                    <div class="counter-num">
                                        <h2><span class="counter">50</span><small>+</small></h2>
                                    </div>
                                    <h6 class="title">Ấn phẩm bán chạy nhất</h6>
                                </div>
                                <div class="exp-info">
                                    <ul class="list-check primary">
                                        <li>Truyện tranh & Đồ họa</li>
                                        <li>Sách giáo dục</li>
                                        <li>Bộ sưu tập văn học</li>
                                        <li>Truyện thiếu nhi</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 m-b30 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-content px-lg-4">
                        <div class="section-head style-1">
                            <h2 class="title">Giới thiệu về <strong class="text-danger">Book Kids</strong></h2>
                            <p><strong>Book Kids</strong> là một đơn vị chuyên cung cấp các <strong> <a href="{{ get_link_cate(@$recommended[0]['category']['slug']) }}">giáo trình tiếng Anh</a></strong> đa dạng cho các em học sinh mầm non và tiểu học. Chúng tôi cam kết đem đến cho các em một môi trường học tập tiếng Anh hiệu quả, thú vị và đầy tính sáng tạo.

                                Để đáp ứng nhu cầu của các em, chúng tôi đã tạo ra một loạt sản phẩm tiên tiến, bao gồm các giáo trình được in màu hoặc đen trắng, in sticker khen thưởng, hashtag, thiệp cảm ơn, tờ rơi, và nhiều hơn nữa. Chúng tôi luôn nỗ lực để đưa ra những sản phẩm giáo trình mới và cập nhật, phù hợp với từng độ tuổi và nhu cầu của các em.

                                Với phương châm "Khởi đầu tốt đẹp, thành công tuyệt đối", Book Kids tự hào là một trong những đơn vị hàng đầu trong lĩnh vực giáo dục tiếng Anh cho trẻ em. Chúng tôi cam kết sẽ đồng hành cùng các em trên con đường học tập và phát triển bản thân, giúp các em trở thành những công dân toàn cầu thông thạo tiếng Anh.</p>
                        </div>
                        <a href="{{@$info['zalo']}}" class="btn btn-primary shadow-primary btnhover">Liên hệ mua</a>
                    </div>
                </div>
            </div>
            <!--Client Swiper -->

        </div>
    </section>
    <section class="content-inner-2 bg-grey reccomend ">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title">Đề xuất cho bạn</h2>
                <p>Danh sách sản phẩm bán chạy nhất tháng này !</p>
            </div>
            <!-- Swiper -->
            <div class="swiper-container swiper-two">
                <div class="swiper-wrapper">
                    @if($trending_book)
                        @foreach($trending_book as $item)
                            <div class="swiper-slide">
                                <div class="books-card style-1 wow fadeInUp col-12" data-wow-delay="0.1s">
                                    <div class="dz-media">
                                        <img src="{{images_src($item['avatar'])}}" alt="book">
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title sp-line-2 "><a href="{{get_link_product($item['slug'])}}">{{$item['name']}}</a></h5>
                                       @if(isset($item['check_off']) && $item['check_off'])
                                        <span class="price">{{show_money($item['price'])}}</span>
                                        @else
                                        <a href="{{@$info['zalo']}}" class="btn btn-secondary btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i>Liên hệ</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Book Sale -->
    <section class="content-inner-2">
        <div class="container">
            <div class="section-head book-align">
                <h2 class="title mb-0">Giá sốc hôm nay</h2>
                <div class="pagination-align style-1">
                    <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                    <div class="swiper-pagination-two"></div>
                    <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                </div>
            </div>
            <div class="swiper-container books-wrapper-3 swiper-four">
                <div class="swiper-wrapper">
                    @if($recommended)
                        @foreach($recommended as $item)
                            <div class="swiper-slide">
                                <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="dz-media">
                                        <img src="{{images_src($item['avatar'])}}" alt="book">
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title font-size-12 sp-line-2"><a href="{{get_link_product($item['slug'])}}">{{$item['name']}}</a></h5>
                                        <div class="book-footer">
                                            <div class="rate">
                                                <i class="flaticon-star">{{$item['like_count']}}</i>
                                            </div>
                                            <div class="price font-13">
                                                @if(isset($item['check_off']) && $item['check_off'])
                                                    <span class="price-num">{{show_money($item['price_sale'])}}</span>
                                                    <del>{{show_money($item['price'])}}</del>
                                                @else
                                                    <span class="cursor-p text-danger" onclick="_POST_FORM('','{{route('fe.products_action',['cmd' => 'like_action','product_id' => $item['id']])}}')" ><i class="flaticon-like icon-cell"></i> Yêu thích</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Book Sale End -->

    <!-- icon-box1 -->
    @if($agent->isDesktop())
    <section class="content-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-bx-wraper style-1 m-b30 text-center">
                        <div class="icon-bx-sm m-b10">
                            <i class="flaticon-power icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h5 class="dz-title m-b10">Giao hàng siêu tốc</h5>
                            <p>Giao hàng nhanh chóng tin cậy ngay khi tiếp nhận đơn hàng, tiết kiệm thời gian cho khách hàng.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon-bx-wraper style-1 m-b30 text-center">
                        <div class="icon-bx-sm m-b10">
                            <i class="flaticon-shield icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h5 class="dz-title m-b10">Chính sách trả hàng</h5>
                            <p>Khách hàng có thể trả lại sản phẩm và được hoàn lại tiền trong trường hợp sản phẩm không đúng theo mô tả hoặc lỗi do nhà in.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="icon-bx-wraper style-1 m-b30 text-center">
                        <div class="icon-bx-sm m-b10">
                            <i class="flaticon-like icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h5 class="dz-title m-b10">Giá cả cạnh tranh</h5>
                            <p>Giá cả cạnh tranh nhất thị trường, khách hàng lấy số lượng nhiều được áp dụng chính sách giá sỉ.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="icon-bx-wraper style-1 m-b30 text-center">
                        <div class="icon-bx-sm m-b10">
                            <i class="flaticon-star icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h5 class="dz-title m-b10">Đặt hàng theo yêu cầu</h5>
                            <p>Cung cấp dịch vụ in sách giáo trình tiếng Anh cho trẻ em theo yêu cầu của khách hàng để đáp ứng nhu cầu đa dạng và đem lại sự tiện lợi và hài lòng cho khách hàng.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- icon-box1 End-->

    <!--icon-box3 section-->
    <section class="content-inner">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title">Bài viết mới nhất</h2>
                <p>Tin tức được cập nhật hằng ngày.</p>
            </div>
            <div class="swiper-container blog-swiper">
                <div class="swiper-wrapper">
                    @if($posts)
                        @foreach($posts as $post)
                    <div class="swiper-slide">
                        <div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.1s" >
                            <div class="dz-media">
                                <a href="{{get_link_html($post['slug'])}}"><img src="{{show_img($post['avatar'])}}" alt="{{$post['name']}}"></a>
                            </div>
                            <div class="dz-info p-3">
                                <h6 class="dz-title sp-line-2">
                                    <a href="{{get_link_html($post['slug'])}}">{{$post['name']}}</a>
                                </h6>
                                <p class="m-b0 sp-line-3">{{$post['description']}}</p>
                                <div class="dz-meta meta-bottom mt-3 pt-3">
                                    <ul class="post">
                                        <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>{{$post['created_at']}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>



    <!-- Feature Box -->
{{--    <section class="content-inner-2">--}}
{{--        <div class="container">--}}
{{--            <div class="section-head text-center">--}}
{{--                <h2 class="title">Video nổi bật</h2>--}}
{{--                <p> Video được cập nhật hằng ngày.</p>--}}
{{--            </div>--}}
{{--            <div class="swiper-container blog-swiper">--}}
{{--                <div class="swiper-wrapper">--}}
{{--                    @if($videos)--}}
{{--                        @foreach($videos as $k => $video)--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.1s" >--}}
{{--                                    <div class="dz-media">--}}
{{--                                        <a data-fancybox="gallery"  href="{{$video['link']}}">--}}
{{--                                            <img style="object-fit: cover;" src="{{value_show(@$video['image'])}}" alt="img">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="dz-info p-3">--}}
{{--                                        <h6 class="dz-title sp-line-2">--}}
{{--                                            <a href="{{$video['link']}}" data-fancybox="gallery">{{$video['name']}}</a>--}}
{{--                                        </h6>--}}
{{--                                        <div class="dz-meta meta-bottom mt-3 pt-3">--}}
{{--                                            <ul class="post">--}}
{{--                                                <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>{{$video['created_at']}}</li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Feature Box End -->

    <!-- Newsletter -->
    @include('frontend.subscriber')
    <!-- Newsletter End -->
@endsection
