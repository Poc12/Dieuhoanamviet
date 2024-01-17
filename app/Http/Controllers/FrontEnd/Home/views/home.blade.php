@extends('layouts.febase')


@section('content')
    <main>
        <!--Swiper Banner Start -->
        @include('frontend.banner',['banners' => $banners,'trending_product' => $trending_product])
        <!--Swiper Banner End-->
        <div class="tp-header-main tp-header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                    </div>
                    <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                        <div class="tp-header-search pl-70">
                            <form id="searchForm">
                                <div class="tp-header-search-wrapper d-flex align-items-center">
                                    <div class="tp-header-search-box" style="border-radius: 20%">
                                        <input name="search" type="text" placeholder="Nhập tên sản phầm cần tìm ">
                                    </div>
                                    <div class="tp-header-search-btn">
                                        <button type="submit">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M19 19L14.65 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-8 col-6">
                        <div class="tp-header-main-right d-flex align-items-center justify-content-end">
                            <div class="tp-header-login d-none d-lg-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop area start -->
        <section class="tp-shop-area pt-20 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="tp-shop-main-wrapper">

                            <div class="tp-shop-top mb-45">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="tp-shop-top-left d-flex align-items-center ">
                                            <div class="tp-shop-top-tab tp-tab">
                                                <ul class="nav nav-tabs" id="productTab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid-tab-pane" type="button" role="tab" aria-controls="grid-tab-pane" aria-selected="true">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M16.3327 6.01341V2.98675C16.3327 2.04675 15.906 1.66675 14.846 1.66675H12.1527C11.0927 1.66675 10.666 2.04675 10.666 2.98675V6.00675C10.666 6.95341 11.0927 7.32675 12.1527 7.32675H14.846C15.906 7.33341 16.3327 6.95341 16.3327 6.01341Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M16.3327 15.18V12.4867C16.3327 11.4267 15.906 11 14.846 11H12.1527C11.0927 11 10.666 11.4267 10.666 12.4867V15.18C10.666 16.24 11.0927 16.6667 12.1527 16.6667H14.846C15.906 16.6667 16.3327 16.24 16.3327 15.18Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M7.33268 6.01341V2.98675C7.33268 2.04675 6.90602 1.66675 5.84602 1.66675H3.15268C2.09268 1.66675 1.66602 2.04675 1.66602 2.98675V6.00675C1.66602 6.95341 2.09268 7.32675 3.15268 7.32675H5.84602C6.90602 7.33341 7.33268 6.95341 7.33268 6.01341Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M7.33268 15.18V12.4867C7.33268 11.4267 6.90602 11 5.84602 11H3.15268C2.09268 11 1.66602 11.4267 1.66602 12.4867V15.18C1.66602 16.24 2.09268 16.6667 3.15268 16.6667H5.84602C6.90602 16.6667 7.33268 16.24 7.33268 15.18Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="list-tab" data-bs-toggle="tab" data-bs-target="#list-tab-pane" type="button" role="tab" aria-controls="list-tab-pane" aria-selected="false">
                                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15 7.11108H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M15 1H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M15 13.2222H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-shop-items-wrapper tp-shop-item-primary">
                                <div class="tab-content" id="productTabContent">
                                    <div class="tab-pane fade show active" id="grid-tab-pane" role="tabpanel" aria-labelledby="grid-tab" tabindex="0">
                                        <div class="row">
                                            @foreach($product as  $item_pr)
                                                <div class="col-xl-3 col-md-4 col-sm-4 p-1">
                                                <div class="tp-product-item-2 mb-40">
                                                    <div class="tp-product-thumb-2 p-relative z-index-1 fix w-img" onclick="window.location='{{get_link_product($item_pr['slug'])}}'" style="background: url('{{images_src($item_pr['avatar'])}}');height: 12rem;background-size: cover">
                                                        <!-- product action -->
                                                        <div class="tp-product-action-2 tp-product-action-blackStyle">
                                                            <div class="tp-product-action-item-2 d-flex flex-column">
                                                                <button type="button" class="tp-product-action-btn-2 tp-product-add-cart-btn">
                                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.34706 4.53799L3.85961 10.6239C3.89701 11.0923 4.28036 11.4436 4.74871 11.4436H4.75212H14.0265H14.0282C14.4711 11.4436 14.8493 11.1144 14.9122 10.6774L15.7197 5.11162C15.7384 4.97924 15.7053 4.84687 15.6245 4.73995C15.5446 4.63218 15.4273 4.5626 15.2947 4.54393C15.1171 4.55072 7.74498 4.54054 3.34706 4.53799ZM4.74722 12.7162C3.62777 12.7162 2.68001 11.8438 2.58906 10.728L1.81046 1.4837L0.529505 1.26308C0.181854 1.20198 -0.0501969 0.873587 0.00930333 0.526523C0.0705036 0.17946 0.406255 -0.0462578 0.746256 0.00805037L2.51426 0.313534C2.79901 0.363599 3.01576 0.5995 3.04042 0.888012L3.24017 3.26484C15.3748 3.26993 15.4139 3.27587 15.4726 3.28266C15.946 3.3514 16.3625 3.59833 16.6464 3.97849C16.9303 4.35779 17.0493 4.82535 16.9813 5.29376L16.1747 10.8586C16.0225 11.9177 15.1011 12.7162 14.0301 12.7162H14.0259H4.75402H4.74722Z" fill="currentColor"/>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6629 7.67446H10.3067C9.95394 7.67446 9.66919 7.38934 9.66919 7.03804C9.66919 6.68673 9.95394 6.40161 10.3067 6.40161H12.6629C13.0148 6.40161 13.3004 6.68673 13.3004 7.03804C13.3004 7.38934 13.0148 7.67446 12.6629 7.67446Z" fill="currentColor"/>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38171 15.0212C4.63756 15.0212 4.84411 15.2278 4.84411 15.4836C4.84411 15.7395 4.63756 15.9469 4.38171 15.9469C4.12501 15.9469 3.91846 15.7395 3.91846 15.4836C3.91846 15.2278 4.12501 15.0212 4.38171 15.0212Z" fill="currentColor"/>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38082 15.3091C4.28477 15.3091 4.20657 15.3873 4.20657 15.4833C4.20657 15.6763 4.55592 15.6763 4.55592 15.4833C4.55592 15.3873 4.47687 15.3091 4.38082 15.3091ZM4.38067 16.5815C3.77376 16.5815 3.28076 16.0884 3.28076 15.4826C3.28076 14.8767 3.77376 14.3845 4.38067 14.3845C4.98757 14.3845 5.48142 14.8767 5.48142 15.4826C5.48142 16.0884 4.98757 16.5815 4.38067 16.5815Z" fill="currentColor"/>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9701 15.0212C14.2259 15.0212 14.4333 15.2278 14.4333 15.4836C14.4333 15.7395 14.2259 15.9469 13.9701 15.9469C13.7134 15.9469 13.5068 15.7395 13.5068 15.4836C13.5068 15.2278 13.7134 15.0212 13.9701 15.0212Z" fill="currentColor"/>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9692 15.3092C13.874 15.3092 13.7958 15.3874 13.7958 15.4835C13.7966 15.6781 14.1451 15.6764 14.1443 15.4835C14.1443 15.3874 14.0652 15.3092 13.9692 15.3092ZM13.969 16.5815C13.3621 16.5815 12.8691 16.0884 12.8691 15.4826C12.8691 14.8767 13.3621 14.3845 13.969 14.3845C14.5768 14.3845 15.0706 14.8767 15.0706 15.4826C15.0706 16.0884 14.5768 16.5815 13.969 16.5815Z" fill="currentColor"/>
                                                                    </svg>
                                                                    <span class="tp-product-tooltip tp-product-tooltip-right">Thêm vào giỏ</span>
                                                                </button>
                                                                <button type="button" class="tp-product-action-btn-2 tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal{{$item_pr['sku']}}">
                                                                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99948 5.06828C7.80247 5.06828 6.82956 6.04044 6.82956 7.23542C6.82956 8.42951 7.80247 9.40077 8.99948 9.40077C10.1965 9.40077 11.1703 8.42951 11.1703 7.23542C11.1703 6.04044 10.1965 5.06828 8.99948 5.06828ZM8.99942 10.7482C7.0581 10.7482 5.47949 9.17221 5.47949 7.23508C5.47949 5.29705 7.0581 3.72021 8.99942 3.72021C10.9407 3.72021 12.5202 5.29705 12.5202 7.23508C12.5202 9.17221 10.9407 10.7482 8.99942 10.7482Z" fill="currentColor"/>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.41273 7.2346C3.08674 10.9265 5.90646 13.1215 8.99978 13.1224C12.0931 13.1215 14.9128 10.9265 16.5868 7.2346C14.9128 3.54363 12.0931 1.34863 8.99978 1.34773C5.90736 1.34863 3.08674 3.54363 1.41273 7.2346ZM9.00164 14.4703H8.99804H8.99714C5.27471 14.4676 1.93209 11.8629 0.0546754 7.50073C-0.0182251 7.33091 -0.0182251 7.13864 0.0546754 6.96883C1.93209 2.60759 5.27561 0.00288103 8.99714 0.000185582C8.99894 -0.000712902 8.99894 -0.000712902 8.99984 0.000185582C9.00164 -0.000712902 9.00164 -0.000712902 9.00254 0.000185582C12.725 0.00288103 16.0676 2.60759 17.945 6.96883C18.0188 7.13864 18.0188 7.33091 17.945 7.50073C16.0685 11.8629 12.725 14.4676 9.00254 14.4703H9.00164Z" fill="currentColor"/>
                                                                    </svg>
                                                                    <span class="tp-product-tooltip tp-product-tooltip-right">Xem </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tp-product-content-2 pt-15">
                                                        <div class="tp-product-tag-2">
                                                            <a href="{{get_link_cate($item_pr->category->slug)}}">{{@$item_pr->category->name}}</a>
                                                        </div>
                                                        <div class="mt-1" style="min-height: 48px">
                                                            <h4 class="tp-product-title-2 sp-line-2">
                                                                <a href="{{get_link_product($item_pr['slug'])}}">{{$item_pr['name']}}</a>
                                                            </h4>
                                                        </div>

                                                        <div class="tp-product-price-wrapper-2 mt-4">
                                                            <div class="tp-blog-btn">
                                                                <a href="{{route('fe.contact')}}" class="tp-btn-2 tp-btn-border-2">Liên hệ</a>
                                                            </div>
{{--                                                            <span class="tp-product-price-2 new-price">{{format_money_vnd($item_pr['sell_price'])}}</span>--}}
{{--                                                            <span class="tp-product-price-2 old-price">{{format_money_vnd($item_pr['price'])}}</span>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-tab-pane" role="tabpanel" aria-labelledby="list-tab" tabindex="0">
                                        <div class="tp-shop-list-wrapper tp-shop-item-primary mb-70">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    @foreach($product as  $item_pr)
                                                    <div class="tp-product-list-item d-md-flex">
                                                        <div class="tp-product-thumb-2 tp-product-thumb-2 p-relative fix"
                                                             onclick="window.location='{{get_link_product($item_pr['slug'])}}'"
                                                             style="background: url('{{images_src($item_pr['avatar'])}}');height: 12rem;background-size: cover">
                                                            <!-- product action -->
                                                            <div class="tp-product-action-2 tp-product-action-blackStyle">
                                                                <div class="tp-product-action-item-2 d-flex flex-column">
                                                                    <button type="button" class="tp-product-action-btn-2 tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                                        <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99948 5.06828C7.80247 5.06828 6.82956 6.04044 6.82956 7.23542C6.82956 8.42951 7.80247 9.40077 8.99948 9.40077C10.1965 9.40077 11.1703 8.42951 11.1703 7.23542C11.1703 6.04044 10.1965 5.06828 8.99948 5.06828ZM8.99942 10.7482C7.0581 10.7482 5.47949 9.17221 5.47949 7.23508C5.47949 5.29705 7.0581 3.72021 8.99942 3.72021C10.9407 3.72021 12.5202 5.29705 12.5202 7.23508C12.5202 9.17221 10.9407 10.7482 8.99942 10.7482Z" fill="currentColor"/>
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.41273 7.2346C3.08674 10.9265 5.90646 13.1215 8.99978 13.1224C12.0931 13.1215 14.9128 10.9265 16.5868 7.2346C14.9128 3.54363 12.0931 1.34863 8.99978 1.34773C5.90736 1.34863 3.08674 3.54363 1.41273 7.2346ZM9.00164 14.4703H8.99804H8.99714C5.27471 14.4676 1.93209 11.8629 0.0546754 7.50073C-0.0182251 7.33091 -0.0182251 7.13864 0.0546754 6.96883C1.93209 2.60759 5.27561 0.00288103 8.99714 0.000185582C8.99894 -0.000712902 8.99894 -0.000712902 8.99984 0.000185582C9.00164 -0.000712902 9.00164 -0.000712902 9.00254 0.000185582C12.725 0.00288103 16.0676 2.60759 17.945 6.96883C18.0188 7.13864 18.0188 7.33091 17.945 7.50073C16.0685 11.8629 12.725 14.4676 9.00254 14.4703H9.00164Z" fill="currentColor"/>
                                                                        </svg>
                                                                        <span class="tp-product-tooltip tp-product-tooltip-right">Xem nhanh</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tp-product-list-content">
                                                            <div class="tp-product-content-2 pt-15">
                                                                <h3 class="tp-product-title-2">
                                                                    <a href="{{get_link_product($item_pr['slug'])}}"
                                                                    >{{$item_pr['name']}}</a>
                                                                </h3>
                                                                <div class="tp-product-price-wrapper-2">
                                                                    <div class="tp-blog-btn">
                                                                        <a href="{{route('fe.contact')}}" class="tp-btn-2 tp-btn-border-2">Liên hệ</a>
                                                                    </div>
{{--                                                                    <span class="tp-product-price-2 new-price">{{format_money_vnd($item_pr['sell_price'])}}</span>--}}
{{--                                                                    <span class="tp-product-price-2 old-price">{{format_money_vnd($item_pr['price'])}}</span>--}}
                                                                </div>
                                                                <h5 class="title sp-line-2">{!! $item_pr['description'] !!}</h5>
                                                                <div class="tp-product-list-add-to-cart">
                                                                    <button class="tp-product-list-add-to-cart-btn">Thêm vào giỏ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(!empty($product) && !$product->isEmpty())
                                {!! $product->links('components.paginate') !!}
                            @endif
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="tp-shop-sidebar tp-shop-sidebar-right mr-10">
                            <!-- filter -->
{{--                            <div class="tp-shop-widget mb-35">--}}
{{--                                <h3 class="tp-shop-widget-title no-border">Giá bán</h3>--}}

{{--                                <div class="tp-shop-widget-content">--}}
{{--                                    <div class="tp-shop-widget-filter">--}}
{{--                                        <div id="slider-range" class="mb-10"></div>--}}
{{--                                        <div class="tp-shop-widget-filter-info d-flex align-items-center justify-content-between">--}}
{{--                                        <span class="input-range">--}}
{{--                                           <input type="text" id="amount" readonly>--}}
{{--                                        </span>--}}
{{--                                            <button class="tp-shop-widget-filter-btn" onclick="searchByPrice()" type="button">Tìm kiếm</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <!-- status -->
                            <!-- categories -->
                            <div class="tp-shop-widget mb-50">
                                <h3 class="tp-shop-widget-title">Danh mục</h3>

                                <div class="tp-shop-widget-content">
                                    <div class="tp-shop-widget-categories">
                                        <ul>
                                            @if(isset($category))
                                                @foreach($category as $item_c)
                                                    <li><a href="{{get_link_cate($item_c['slug'])}}">{{$item_c['name']}}<span>10</span></a></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=61555199346797&amp;mibextid=LQQJ4d" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/profile.php?id=61555199346797&amp;mibextid=LQQJ4d" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/profile.php?id=61555199346797&amp;mibextid=LQQJ4d">Công ty TNHH Tư Vấn Thiết Kế &amp; Thương Mại Dịch Vụ Nam Việt</a></blockquote></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- shop area end -->

        <!-- banner area start -->
        <section class="tp-banner-area pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="tp-banner-item tp-banner-height p-relative mb-30 z-index-1 fix">
                            <div class="tp-banner-thumb include-bg transition-3" data-background="{{url('assets/images/banner1.png')}}"></div>
                            <div class="tp-banner-content">
                                <span>Giao hàng nhanh chóng</span>
                                <h4 class="tp-banner-title">
                                    <a href="{{route('fe.contact')}}">Cam kết chất lượng sản phẩm </a>
                                </h4>
                                <div class="tp-banner-btn">
                                    <a href="{{route('fe.contact')}}" class="tp-link-btn">Liên hệ
                                        <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.9998 6.19656L1 6.19656" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8.75674 0.975394L14 6.19613L8.75674 11.4177" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="tp-banner-item tp-banner-item-sm tp-banner-height p-relative mb-30 z-index-1 fix">
                            <div class="tp-banner-thumb include-bg transition-3" data-background="{{url('assets/images/Artboard.png')}}"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner area end -->


        <!-- product arrival area start -->
        <section class="tp-product-arrival-area pb-5">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-5 col-sm-6">
                        <div class="tp-section-title-wrapper mb-40">
                            <h4 class="tp-section-title">SẢN PHẨM KHUYẾN MẠI</h4>
                        </div>
                    </div>
                    <div class="col-xl-7 col-sm-6">
                        <div class="tp-product-arrival-more-wrapper d-flex justify-content-end">
                            <div class="tp-product-arrival-arrow tp-swiper-arrow mb-40 text-end tp-product-arrival-border">
                                <button type="button" class="tp-arrival-slider-button-prev">
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <button type="button" class="tp-arrival-slider-button-next">
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-product-arrival-slider fix">
                            <div class="tp-product-arrival-active swiper-container">
                                <div class="swiper-wrapper">
                                    @if(isset($trending_product))
                                       @foreach($trending_product as $item)
                                            <div class="tp-product-item transition-3 mb-25 swiper-slide">
                                                <div class="tp-product-thumb p-relative fix m-img" style="background: url('{{images_src($item['avatar'])}}');height: 12rem;background-size: cover">
                                                    <a href="{{get_link_product($item['slug'])}}">
                                                    </a>
                                                    <!-- product action -->
                                                    <div class="tp-product-action">
                                                        <div class="tp-product-action-item d-flex flex-column">
                                                            <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>

                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>

                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                                </svg>
                                                                <span class="tp-product-tooltip">Thêm vào giỏ</span>
                                                            </button>
                                                            <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                                <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                                    <g mask="url(#mask0_1211_721)">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                                    </g>
                                                                </svg>
                                                                <span class="tp-product-tooltip">Xem</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product content -->
                                                <div class="tp-product-content">
                                                    <div class="tp-product-category">
                                                        <a href="{{get_link_cate($item->category['slug'])}}">{{@$item->category['name']}}</a>
                                                    </div>
                                                    <div class="mt-1" style="min-height: 48px">
                                                        <h3 class="tp-product-title">
                                                            <a href="{{get_link_product($item['slug'])}}">{{$item['name']}}
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="tp-product-price-wrapper">
                                                        <div class="tp-blog-btn">
                                                            <a href="{{route('fe.contact')}}" class="tp-btn-2 tp-btn-border-2">Liên hệ</a>
                                                        </div>
{{--                                                        <span class="tp-product-price old-price">{{format_money_vnd($item['price'])}}</span>--}}
{{--                                                        <span class="tp-product-price new-price">{{format_money_vnd($item['price_sell'])}}</span>--}}
                                                    </div>
                                                </div>
                                            </div>
                                       @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product arrival area end -->
        <!-- product banner area start -->
        <div class="tp-product-banner-area pb-20">
            <div class="container">
                <div class="tp-product-banner-slider fix">
                    <div class="tp-product-banner-slider-active swiper-container">
                        <div class="swiper-wrapper">
                            @if(isset($new_product))
                                @foreach($new_product as $item)
                                    <div class="tp-product-banner-inner bg-color p-relative z-index-1 fix swiper-slide">
                                        <h4 class="tp-product-banner-bg-text">tablet</h4>
                                        <div class="row align-items-center">
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="tp-product-banner-content p-relative z-index-1">
                                                    <h5 class="tp-product-banner-title">{{$item['name']}}</h5>
{{--                                                    <div class="tp-product-banner-price mb-40">--}}
{{--                                                        <span class="old-price">{{format_money_vnd($item['price'])}}</span>--}}
{{--                                                        <p class="new-price">{{format_money_vnd($item['price_sell'])}}</p>--}}
{{--                                                    </div>--}}
                                                    <div class="tp-product-banner-btn">
                                                        <a href="{{route('fe.contact')}}" class="tp-btn tp-btn-2">Liên hệ </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="tp-product-banner-thumb-wrapper p-relative">
                                                    <div class="tp-product-banner-thumb text-end p-relative z-index-1">
                                                        <img src="{{images_src($item['avatar'])}}" width="200" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                        <div class="tp-product-banner-slider-dot tp-swiper-dot"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product banner area end -->

        <!-- blog area start -->
        <section class="tp-blog-area pt-10 pb-10">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-4 col-md-6">
                        <div class="tp-section-title-wrapper mb-50">
                            <h4 class="tp-section-title">Tin Sản phẩm</h4>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-6">
                        <div class="tp-blog-more-wrapper d-flex justify-content-md-end">
                            <div class="tp-blog-more mb-50 text-md-end">
                                <a href="blog-grid.html" class="tp-btn tp-btn-2 tp-btn-blue">Xem thêm
                                    <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <span class="tp-blog-more-border"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-blog-main-slider">
                            <div class="tp-blog-main-slider-active swiper-container">
                                <div class="swiper-wrapper">
                                    @if(isset($posts))
                                        @foreach($posts as $item_p)
                                            <div class="tp-blog-item mb-30 swiper-slide">
                                                <div class="tp-blog-thumb p-relative fix">
                                                    <a href="{{get_link_html($item_p['slug'])}}">
                                                        <img src="{{images_src($item_p['avatar'])}}" alt="">
                                                    </a>
                                                    <div class="tp-blog-meta tp-blog-meta-date">
                                                        <span>{{show_int_date($item_p['created_at'],'d/m/Y')}}</span>
                                                    </div>
                                                </div>
                                                <div class="tp-blog-content">
                                                    <h5 class="tp-blog-title">
                                                        <a href="{{get_link_html($item_p['slug'])}}">{{$item_p['name']}}</a>
                                                    </h5>
                                                    <div class="mt-1" style="min-height: 48px">
                                                        <p class="sp-line-2">{!! $item_p['description'] !!}</p>
                                                    </div>

                                                    <div class="tp-blog-btn" >
                                                        <a href="{{get_link_html($item_p['slug'])}}" class="tp-btn-2 tp-btn-border-2">
                                                            Đọc thêm
                                                            <span>
                                                             <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M16 7.5L1 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M9.9502 1.47541L16.0002 7.49941L9.9502 13.5244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                             </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog area end -->
        <!-- subscribe area start -->
{{--        @include('frontend.subscriber')--}}
        <!-- subscribe area end -->


    </main>
@endsection
@push('JS')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v18.0&appId=907341210482344" nonce="mhpUz0tO"></script>
    <script>
        function searchByPrice(){
            let amount = $('#amount').val();
            let form = $('form');
            if(form.length > 1) {
                form = $('#searchForm');
            }
            form.append('<input type=hidden value="' + amount + '" name="price" />');
            form.submit();
        }
    </script>
@endpush
