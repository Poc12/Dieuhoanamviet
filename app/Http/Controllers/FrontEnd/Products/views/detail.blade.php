@extends('layouts.febase')
@section('content')
    <!-- product details area start -->
    @if(isset($product))
        <section class="tp-product-details-area pt-20">
            <div class="tp-product-details-top pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="tp-product-details-thumb-wrapper tp-tab d-sm-flex">
                                <nav>
                                    <div class="nav nav-tabs flex-sm-column " id="productDetailsNavThumb" role="tablist">
                                        <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="true">
                                            <img src="{{images_src($product['avatar'])}}" alt="">
                                        </button>
                                        @if($product['media'])
                                            @php $media = json_decode($product['media']) @endphp
                                            @foreach($media as $k =>  $item)
                                                <button class="nav-link" id="nav-{{$k+2}}-tab" data-bs-toggle="tab" data-bs-target="#nav-{{$k+2}}" type="button" role="tab" aria-controls="nav-{{$k++}}" aria-selected="false">
                                                    <img src="{{images_src($item)}}" alt="">
                                                </button>
                                            @endforeach
                                        @endif
                                    </div>
                                </nav>
                                <div class="tab-content m-img" id="productDetailsNavContent">
                                    <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab" tabindex="0">
                                        <div class="tp-product-details-nav-main-thumb">
                                            <img src="{{images_src($product['avatar'])}}" alt="">
                                        </div>
                                    </div>
                                    @if($product['media'])
                                        @php $media = json_decode($product['media']) @endphp
                                        @foreach($media as $k => $item)
                                            <div class="tab-pane fade" id="nav-{{$k+2}}" role="tabpanel" aria-labelledby="nav-{{$k+2}}-tab" tabindex="0">
                                                <div class="tp-product-details-nav-main-thumb">
                                                    <img src="{{images_src($item)}}" alt="">
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                        </div> <!-- col end -->
                        <div class="col-xl-5 col-lg-6">
                            <div class="tp-product-details-wrapper">
                                <div class="tp-product-details-category">
                                    <span>{{@$product->category->name}}</span>
                                </div>
                                <h3 class="tp-product-details-title">{{$product['name']}}</h3>

                                <!-- inventory details -->
                                <div class="tp-product-details-inventory d-flex align-items-center mb-10">
                                    <div class="tp-product-details-rating-wrapper d-flex align-items-center mb-10">
                                        <div class="tp-product-details-rating">
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                        </div>
                                        <div class="tp-product-details-reviews">
                                            <span>(36 Reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="sp-line-2">{!! $product['description'] !!}</h5>

                                @if($product_attribute)
                                    @foreach($product_attribute as $item)
                                        <p> * {{$item['name']}} : {{$item['value']}}</p>
                                    @endforeach
                                @endif
                                <!-- price -->
                                <!-- actions -->
                                <div class="tp-product-details-query">
                                    <div class="tp-product-details-query-item d-flex align-items-center">
                                        <span>Danh mục:  </span>
                                        <p>{{@$product->category->name}}</p>
                                    </div>
                                </div>
                                <div class="tp-product-details-social">
                                    <span>Chia sẻ: </span>
                                    <a href="{{get_link_share_facebook(@$product['slug'])}}"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                </div>
                                <button class="tp-product-details-buy-now-btn w-100 tp-blog-btn" style="border-radius: 10px">Liên hệ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feature area start -->
            <section class="tp-feature-area tp-feature-border-radius pb-20">
                <div class="container">
                    <div class="row gx-1 gy-1 gy-xl-0">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="tp-feature-item d-flex align-items-start">
                                <div class="tp-feature-icon mr-15">
                           <span>
                              <svg width="33" height="27" viewBox="0 0 33 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.7222 1H31.5555V19.0556H10.7222V1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M10.7222 7.94446H5.16667L1.00001 12.1111V19.0556H10.7222V7.94446Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M25.3055 26C23.3879 26 21.8333 24.4454 21.8333 22.5278C21.8333 20.6101 23.3879 19.0555 25.3055 19.0555C27.2232 19.0555 28.7778 20.6101 28.7778 22.5278C28.7778 24.4454 27.2232 26 25.3055 26Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M7.25001 26C5.33235 26 3.77778 24.4454 3.77778 22.5278C3.77778 20.6101 5.33235 19.0555 7.25001 19.0555C9.16766 19.0555 10.7222 20.6101 10.7222 22.5278C10.7222 24.4454 9.16766 26 7.25001 26Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </span>
                                </div>
                                <div class="tp-feature-content">
                                    <h3 class="tp-feature-title">Giao nhận tiện lợi</h3>
                                    <p>Nhanh chóng, an toàn</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="tp-feature-item d-flex align-items-start">
                                <div class="tp-feature-icon mr-15">
                            <span>
                              <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.5 24.3333V15C1.5 11.287 2.975 7.72602 5.60051 5.10051C8.22602 2.475 11.787 1 15.5 1C19.213 1 22.774 2.475 25.3995 5.10051C28.025 7.72602 29.5 11.287 29.5 15V24.3333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M29.5 25.8889C29.5 26.714 29.1722 27.5053 28.5888 28.0888C28.0053 28.6722 27.214 29 26.3889 29H24.8333C24.0082 29 23.2169 28.6722 22.6335 28.0888C22.05 27.5053 21.7222 26.714 21.7222 25.8889V21.2222C21.7222 20.3971 22.05 19.6058 22.6335 19.0223C23.2169 18.4389 24.0082 18.1111 24.8333 18.1111H29.5V25.8889ZM1.5 25.8889C1.5 26.714 1.82778 27.5053 2.41122 28.0888C2.99467 28.6722 3.78599 29 4.61111 29H6.16667C6.99179 29 7.78311 28.6722 8.36656 28.0888C8.95 27.5053 9.27778 26.714 9.27778 25.8889V21.2222C9.27778 20.3971 8.95 19.6058 8.36656 19.0223C7.78311 18.4389 6.99179 18.1111 6.16667 18.1111H1.5V25.8889Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </span>
                                </div>
                                <div class="tp-feature-content">
                                    <h3 class="tp-feature-title">Hậu mãi chu đáo</h3>
                                    <p>Bảo hành trên 2 năm</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="tp-feature-item d-flex align-items-start">
                                <div class="tp-feature-icon mr-15">
                           <span>
                              <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <mask id="mask0_1211_583" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="31" height="30">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H30.0024V29.9998H0V0Z" fill="white"/>
                                 </mask>
                                 <g mask="url(#mask0_1211_583)">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4168 27.1116C14.3017 27.9756 15.7266 27.9651 16.6056 27.0816L17.6885 26.0017C18.5285 25.1632 19.6894 24.6848 20.8728 24.6848H22.4178C23.6687 24.6848 24.6856 23.6678 24.6856 22.4184V20.875C24.6856 19.6736 25.1506 18.5441 25.9995 17.6937L27.0795 16.6122C27.519 16.1713 27.7544 15.5998 27.7529 14.9938C27.7514 14.3894 27.513 13.8209 27.0825 13.3919L26.001 12.309C25.1506 11.4525 24.6856 10.3246 24.6856 9.12318V7.58277C24.6856 6.33184 23.6687 5.3149 22.4178 5.3149H20.8758C19.6744 5.3149 18.545 4.84842 17.6945 4.00397L16.6116 2.91954C15.7101 2.02709 14.2717 2.03159 13.3913 2.91804L12.3128 3.99947C11.4519 4.84992 10.3225 5.3149 9.12553 5.3149H7.58212C6.33269 5.3164 5.31575 6.33334 5.31575 7.58277V9.12018C5.31575 10.3216 4.84927 11.451 4.00332 12.303L2.93839 13.3694C2.92789 13.3814 2.91739 13.3904 2.90689 13.4009C2.02644 14.2874 2.03094 15.7258 2.91739 16.6062L4.00032 17.6892C4.84927 18.5411 5.31575 19.6706 5.31575 20.872V22.4184C5.31575 23.6678 6.33119 24.6848 7.58212 24.6848H9.12253C10.3255 24.6863 11.4549 25.1527 12.3053 26.0002L13.3868 27.0786C13.3958 27.0891 13.4063 27.0996 13.4168 27.1116ZM14.9972 30.0002C13.8468 30.0002 12.6963 29.5652 11.8159 28.6923C11.8039 28.6803 11.7919 28.6683 11.7799 28.6548L10.715 27.5914C10.2905 27.1699 9.72352 26.9359 9.12055 26.9344H7.58164C5.09029 26.9344 3.06541 24.908 3.06541 22.4182V20.8717C3.06541 20.2688 2.82992 19.7033 2.40694 19.2773L1.32851 18.2004C-0.423392 16.4575 -0.444391 13.6197 1.27601 11.8498C1.28951 11.8363 1.30301 11.8228 1.31651 11.8093L2.40844 10.7143C2.82992 10.2899 3.06541 9.72139 3.06541 9.11993V7.58252C3.06541 5.09266 5.09029 3.06628 7.58014 3.06478H9.12505C9.72652 3.06478 10.2935 2.82929 10.724 2.40482L11.7964 1.32938C13.5498 -0.436017 16.4161 -0.445016 18.1845 1.31288L19.281 2.40932C19.7054 2.83079 20.2724 3.06478 20.8754 3.06478H22.4173C24.9086 3.06478 26.935 5.09116 26.935 7.58252V9.12293C26.935 9.72439 27.169 10.2929 27.5935 10.7203L28.6704 11.7988C29.5239 12.6462 29.9978 13.7787 30.0023 14.9861C30.0068 16.1935 29.5404 17.329 28.6899 18.1854L27.5905 19.2818C27.169 19.7063 26.935 20.2718 26.935 20.8747V22.4182C26.935 24.908 24.9086 26.9344 22.4188 26.9344H20.8724C20.2784 26.9344 19.6979 27.1744 19.2765 27.5929L18.1995 28.6698C17.3191 29.5562 16.1581 30.0002 14.9972 30.0002Z" fill="currentColor"/>
                                 </g>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M11.145 19.9811C10.857 19.9811 10.569 19.8716 10.3501 19.6511C9.91058 19.2116 9.91058 18.5006 10.3501 18.0612L18.0596 10.3501C18.4991 9.91064 19.2115 9.91064 19.651 10.3501C20.0905 10.7896 20.0905 11.502 19.651 11.9415L11.94 19.6511C11.721 19.8716 11.433 19.9811 11.145 19.9811Z" fill="currentColor"/>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7544 20.2476C17.925 20.2476 17.247 19.5772 17.247 18.7477C17.247 17.9183 17.9115 17.2478 18.7409 17.2478H18.7544C19.5839 17.2478 20.2543 17.9183 20.2543 18.7477C20.2543 19.5772 19.5839 20.2476 18.7544 20.2476Z" fill="currentColor"/>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2548 12.748C10.4254 12.748 9.74744 12.0775 9.74744 11.2481C9.74744 10.4186 10.4119 9.74817 11.2413 9.74817H11.2548C12.0843 9.74817 12.7548 10.4186 12.7548 11.2481C12.7548 12.0775 12.0843 12.748 11.2548 12.748Z" fill="currentColor"/>
                              </svg>
                           </span>
                                </div>
                                <div class="tp-feature-content">
                                    <h3 class="tp-feature-title">Lắp đặt chuyên nghiệp</h3>
                                    <p>Đội ngũ giàu kinh nghiệm</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="tp-feature-item d-flex align-items-start">
                                <div class="tp-feature-icon mr-15">
                           <span>
                              <svg width="21" height="35" viewBox="0 0 21 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.3636 1V34" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M17.8636 7H6.61365C5.22126 7 3.8859 7.55312 2.90134 8.53769C1.91677 9.52226 1.36365 10.8576 1.36365 12.25C1.36365 13.6424 1.91677 14.9777 2.90134 15.9623C3.8859 16.9469 5.22126 17.5 6.61365 17.5H14.1136C15.506 17.5 16.8414 18.0531 17.826 19.0377C18.8105 20.0223 19.3636 21.3576 19.3636 22.75C19.3636 24.1424 18.8105 25.4777 17.826 26.4623C16.8414 27.4469 15.506 28 14.1136 28H1.36365" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </span>
                                </div>
                                <div class="tp-feature-content">
                                    <h3 class="tp-feature-title">Thanh toán linh hoạt</h3>
                                    <p>Đa dạng, tiện lợi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- feature area end -->
            <div class="tp-product-details-bottom pb-140">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tp-product-details-tab-nav tp-tab">
                                <div class="tab-content" id="navPresentationTabContent">
                                    <div class="tp-product-details-desc-wrapper pt-80">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-10">
                                                <div class="tp-product-details-desc-item pb-105">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="tp-section-title-wrapper-6 text-center">
                                                                    <h6 class="tp-section-title-5">Mô tả</h6>
                                                                </div>
                                                            </div>
                                                            <div class="tp-product-details-desc-content">
                                                                <p> {!! $product['description'] !!}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-product-details-review-wrapper pt-60">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="tp-product-details-review-statics">

                                                    <!-- reviews -->
                                                    <div class="tp-product-details-review-list pr-110">
                                                        <h3 class="tp-product-details-review-title">Đánh giá của khách hàng </h3>
                                                        @if(isset($comments))
                                                            @foreach( $comments as $k => $comment)
                                                                <div class="tp-product-details-review-avater d-flex align-items-start" id="comment-{{$k}}">
                                                                    <div class="tp-product-details-review-avater-thumb">
                                                                        <a href="#">
                                                                            <img src="{{url('assets/images/user.jpeg')}}" alt="user-{{$k}}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="tp-product-details-review-avater-content">
                                                                        <div class="tp-product-details-review-avater-rating d-flex align-items-center">
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                        </div>
                                                                        <h3 class="tp-product-details-review-avater-title">{{$comment['name']}}</h3>
                                                                        <div class="tp-product-details-review-avater-comment">
                                                                            <p>{{$comment['comment']}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="tp-product-details-review-form">
                                                    <h3 class="tp-product-details-review-form-title">Đánh giá về sản phẩm </h3>
                                                    <p>Đánh giá của bạn giúp sẽ giúp chúng tôi cải thiện về chất lượng sản phẩm và dịch vụ </p>
                                                    <form id="comments_form_product">
                                                        <div class="tp-product-details-review-input-wrapper">
                                                            <div class="tp-product-details-review-input-box">
                                                                <div class="tp-product-details-review-input">
                                                                    <textarea id="comments" name="comments" placeholder="Viết đánh giá ..."></textarea>
                                                                </div>
                                                                <div class="tp-product-details-review-input-title">
                                                                    <label for="comments">Đánh giá</label>
                                                                </div>
                                                            </div>
                                                            <div class="tp-product-details-review-input-box">
                                                                <div class="tp-product-details-review-input">
                                                                    <input name="name" id="name" type="text" placeholder="Nhập họ tên của bạn .. ">
                                                                </div>
                                                                <div class="tp-product-details-review-input-title">
                                                                    <label for="name">Họ và tên</label>
                                                                </div>
                                                            </div>
                                                            <div class="tp-product-details-review-input-box">
                                                                <div class="tp-product-details-review-input">
                                                                    <input name="email" id="email" type="email" placeholder="Nhập email của bạn ..">
                                                                </div>
                                                                <div class="tp-product-details-review-input-title">
                                                                    <label for="email">Email của bạn</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tp-product-details-review-btn-wrapper">
                                                            <button id="submit_comment_product" type="button" class="tp-product-details-review-btn">Gửi</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="tp-error-area pt-110 pb-110">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="tp-error-content text-center">
                            <div class="tp-error-thumb">
                                <img src="{{url('shofy/assets/img/error/error.png')}}" alt="">
                            </div>
                            <h4 class="tp-error-title">Không có thông tin sản phẩm </h4>
                            <a href="/" class="tp-error-btn">Trang chủ</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- error area end -->
    @endif
    <!-- product details area end -->

    <!-- related product area start -->
    <section class="tp-related-product pt-95 pb-120">
        <div class="container">
            <div class="row">
                <div class="tp-section-title-wrapper-6 text-center mb-40">
                    <h4 class="tp-section-title-6">Sản phẩm liên quan</h4>
                </div>
            </div>
            <div class="row">
                <div class="tp-product-related-slider">
                    <div class="tp-product-related-slider-active swiper-container  mb-10">
                        <div class="swiper-wrapper">
                            @if(isset($trending_product))
                                @foreach($trending_product as $item)
                                <div class="swiper-slide">
                                <div class="tp-product-item-3 tp-product-style-primary mb-50">
                                    <div class="tp-product-thumb-3 mb-15 fix p-relative z-index-1" onclick="window.location='{{get_link_product($item['slug'])}}'" style="background: url('{{images_src($item['avatar'])}}');height: 12rem;background-size: cover" >
                                        <!-- product action -->
                                        <div class="tp-product-action-3 tp-product-action-4 has-shadow tp-product-action-primaryStyle">
                                            <div class="tp-product-action-item-3 d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn-3 tp-product-add-cart-btn">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.34706 4.53799L3.85961 10.6239C3.89701 11.0923 4.28036 11.4436 4.74871 11.4436H4.75212H14.0265H14.0282C14.4711 11.4436 14.8493 11.1144 14.9122 10.6774L15.7197 5.11162C15.7384 4.97924 15.7053 4.84687 15.6245 4.73995C15.5446 4.63218 15.4273 4.5626 15.2947 4.54393C15.1171 4.55072 7.74498 4.54054 3.34706 4.53799ZM4.74722 12.7162C3.62777 12.7162 2.68001 11.8438 2.58906 10.728L1.81046 1.4837L0.529505 1.26308C0.181854 1.20198 -0.0501969 0.873587 0.00930333 0.526523C0.0705036 0.17946 0.406255 -0.0462578 0.746256 0.00805037L2.51426 0.313534C2.79901 0.363599 3.01576 0.5995 3.04042 0.888012L3.24017 3.26484C15.3748 3.26993 15.4139 3.27587 15.4726 3.28266C15.946 3.3514 16.3625 3.59833 16.6464 3.97849C16.9303 4.35779 17.0493 4.82535 16.9813 5.29376L16.1747 10.8586C16.0225 11.9177 15.1011 12.7162 14.0301 12.7162H14.0259H4.75402H4.74722Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6629 7.67446H10.3067C9.95394 7.67446 9.66919 7.38934 9.66919 7.03804C9.66919 6.68673 9.95394 6.40161 10.3067 6.40161H12.6629C13.0148 6.40161 13.3004 6.68673 13.3004 7.03804C13.3004 7.38934 13.0148 7.67446 12.6629 7.67446Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38171 15.0212C4.63756 15.0212 4.84411 15.2278 4.84411 15.4836C4.84411 15.7395 4.63756 15.9469 4.38171 15.9469C4.12501 15.9469 3.91846 15.7395 3.91846 15.4836C3.91846 15.2278 4.12501 15.0212 4.38171 15.0212Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38082 15.3091C4.28477 15.3091 4.20657 15.3873 4.20657 15.4833C4.20657 15.6763 4.55592 15.6763 4.55592 15.4833C4.55592 15.3873 4.47687 15.3091 4.38082 15.3091ZM4.38067 16.5815C3.77376 16.5815 3.28076 16.0884 3.28076 15.4826C3.28076 14.8767 3.77376 14.3845 4.38067 14.3845C4.98757 14.3845 5.48142 14.8767 5.48142 15.4826C5.48142 16.0884 4.98757 16.5815 4.38067 16.5815Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9701 15.0212C14.2259 15.0212 14.4333 15.2278 14.4333 15.4836C14.4333 15.7395 14.2259 15.9469 13.9701 15.9469C13.7134 15.9469 13.5068 15.7395 13.5068 15.4836C13.5068 15.2278 13.7134 15.0212 13.9701 15.0212Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9692 15.3092C13.874 15.3092 13.7958 15.3874 13.7958 15.4835C13.7966 15.6781 14.1451 15.6764 14.1443 15.4835C14.1443 15.3874 14.0652 15.3092 13.9692 15.3092ZM13.969 16.5815C13.3621 16.5815 12.8691 16.0884 12.8691 15.4826C12.8691 14.8767 13.3621 14.3845 13.969 14.3845C14.5768 14.3845 15.0706 14.8767 15.0706 15.4826C15.0706 16.0884 14.5768 16.5815 13.969 16.5815Z" fill="currentColor"/>
                                                    </svg>
                                                    <span class="tp-product-tooltip">Liên hệ </span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn-3 tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99948 5.06828C7.80247 5.06828 6.82956 6.04044 6.82956 7.23542C6.82956 8.42951 7.80247 9.40077 8.99948 9.40077C10.1965 9.40077 11.1703 8.42951 11.1703 7.23542C11.1703 6.04044 10.1965 5.06828 8.99948 5.06828ZM8.99942 10.7482C7.0581 10.7482 5.47949 9.17221 5.47949 7.23508C5.47949 5.29705 7.0581 3.72021 8.99942 3.72021C10.9407 3.72021 12.5202 5.29705 12.5202 7.23508C12.5202 9.17221 10.9407 10.7482 8.99942 10.7482Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.41273 7.2346C3.08674 10.9265 5.90646 13.1215 8.99978 13.1224C12.0931 13.1215 14.9128 10.9265 16.5868 7.2346C14.9128 3.54363 12.0931 1.34863 8.99978 1.34773C5.90736 1.34863 3.08674 3.54363 1.41273 7.2346ZM9.00164 14.4703H8.99804H8.99714C5.27471 14.4676 1.93209 11.8629 0.0546754 7.50073C-0.0182251 7.33091 -0.0182251 7.13864 0.0546754 6.96883C1.93209 2.60759 5.27561 0.00288103 8.99714 0.000185582C8.99894 -0.000712902 8.99894 -0.000712902 8.99984 0.000185582C9.00164 -0.000712902 9.00164 -0.000712902 9.00254 0.000185582C12.725 0.00288103 16.0676 2.60759 17.945 6.96883C18.0188 7.13864 18.0188 7.33091 17.945 7.50073C16.0685 11.8629 12.725 14.4676 9.00254 14.4703H9.00164Z" fill="currentColor"/>
                                                    </svg>
                                                    <span class="tp-product-tooltip">Xem nhanh</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-product-content-3">
                                        <div class="tp-product-tag-3">
                                            <span>{{$item->category->name}}</span>
                                        </div>
                                        <h3 class="tp-product-title-3">
                                            <a href="{{get_link_product($item['slug'])}}"> {{$item['name']}}</a>
                                        </h3>
                                    </div>
                                </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="tp-related-swiper-scrollbar tp-swiper-scrollbar"></div>
                </div>
            </div>
        </div>
    </section>

@endsection


@push('JS')
    <script>
        $('#submit_comment_product').click(function () {
            return _POST_FORM('#comments_form_product', '{{route('fe.cmp', ['cmd' => 'ajax_save'])}}')
        })
    </script>
@endpush