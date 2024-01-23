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

                                <!-- price -->
                                <div class="tp-product-details-price-wrapper mb-20">
                                    <div class="tp-blog-btn">
                                        <a href="{{route('fe.contact')}}" class="tp-btn-2 tp-btn-border-2">Liên hệ</a>
                                    </div>
{{--                                    <span class="tp-product-details-price old-price">{{format_money_vnd($product['price'])}}</span>--}}
{{--                                    <span class="tp-product-details-price new-price">{{format_money_vnd($product['sell_price'])}}</span>--}}
                                </div>

                                <!-- actions -->\
                                <div class="tp-product-details-query">
                                    <div class="tp-product-details-query-item d-flex align-items-center">
                                        <span>Mã sản phẩm:  </span>
                                        <p>{{$product['sku']}}</p>
                                    </div>
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
                                <div class="tp-product-details-msg mb-15">
                                    <ul>
                                        <li>Tình trạng: Mới 100%</li>
                                        <li>Hỗ trợ kỹ thuật, tư vấn (trực tiếp hoặc từ xa) miễn phí</li>
                                        <li>Cung cấp dịch vụ bảo trì, bảo dưỡng, đảm bảo vật tư phụ thay thế (nếu khách hàng có yêu cầu)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-product-details-bottom pb-140">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tp-product-details-tab-nav tp-tab">
                                <nav>
                                    <div class="nav nav-tabs justify-content-center p-relative tp-product-tab" id="navPresentationTab" role="tablist">
                                        <button class="nav-link" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description" aria-selected="true">Mô tả</button>
{{--                                        <button class="nav-link active" id="nav-addInfo-tab" data-bs-toggle="tab" data-bs-target="#nav-addInfo" type="button" role="tab" aria-controls="nav-addInfo" aria-selected="false">Thông số kỹ thuật</button>--}}
                                        <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Đánh giá</button>

                                        <span id="productTabMarker" class="tp-product-details-tab-line"></span>
                                    </div>
                                </nav>
                                <div class="tab-content" id="navPresentationTabContent">
                                    <div class="tab-pane fade" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab" tabindex="0">
                                        <div class="tp-product-details-desc-wrapper pt-80">
                                            <div class="row justify-content-center">
                                                <div class="col-xl-10">
                                                    <div class="tp-product-details-desc-item pb-105">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="tp-product-details-desc-content pt-25">
                                                                    <span>{{$product['name']}}</span>
                                                                    <p> {!! $product['description'] !!}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="nav-addInfo" role="tabpanel" aria-labelledby="nav-addInfo-tab" tabindex="0">

                                        <div class="tp-product-details-additional-info ">
                                            <div class="row justify-content-center">
                                                <div class="col-xl-10">
                                                    <table>
                                                        <tbody>
                                                        @if($product_attribute)
                                                            @foreach($product_attribute as $item)
                                                                <tr>
                                                                    <td>{{$item['name']}}</td>
                                                                    <td>{{$item['value']}}</td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab" tabindex="0">
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
                    <h3 class="tp-section-title-6">Sản phẩm liên quan</h3>
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