<header>
    <div class="tp-header-area p-relative z-index-11">
        <!-- header top start  -->
        <div class="tp-header-top black-bg p-relative z-index-1 d-none d-md-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="tp-header-welcome d-flex align-items-center">
                           <span>
                              <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M14.6364 1H1V12.8182H14.6364V1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M14.6364 5.54545H18.2727L21 8.27273V12.8182H14.6364V5.54545Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M5.0909 17.3636C6.3461 17.3636 7.36363 16.3461 7.36363 15.0909C7.36363 13.8357 6.3461 12.8182 5.0909 12.8182C3.83571 12.8182 2.81818 13.8357 2.81818 15.0909C2.81818 16.3461 3.83571 17.3636 5.0909 17.3636Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M16.9091 17.3636C18.1643 17.3636 19.1818 16.3461 19.1818 15.0909C19.1818 13.8357 18.1643 12.8182 16.9091 12.8182C15.6539 12.8182 14.6364 13.8357 14.6364 15.0909C14.6364 16.3461 15.6539 17.3636 16.9091 17.3636Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </span>
                            <p>Vận chuyển tận nhà 24/24</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tp-header-top-right d-flex align-items-center justify-content-end">
                            <div class="tp-header-top-menu d-flex align-items-center justify-content-end">
                                <div class="tp-header-top-menu-item tp-header-setting">
                                    <span class="tp-header-setting-toggle" id="tp-header-setting-toggle">Setting</span>
                                    <ul>
                                        <li>
                                            <a href="profile.html">Tài khoản của tôi</a>
                                        </li>
                                        <li>
                                            <a href="login.html">Đăng xuất</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- header main start -->
        <div class="tp-header-main tp-header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/img/logo/logo.svg" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                        <div class="tp-header-search pl-70">
                            <form method="POST" id="searchForm">
                                <div class="tp-header-search-wrapper d-flex align-items-center">
                                    <div class="tp-header-search-box">
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
                                <a href="{{route('login')}}" class="d-flex align-items-center">
                                    <div class="tp-header-login-icon">
                                    <span>
                                       <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <circle cx="8.57894" cy="5.77803" r="4.77803" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00002 17.2014C0.998732 16.8655 1.07385 16.5337 1.2197 16.2311C1.67736 15.3158 2.96798 14.8307 4.03892 14.611C4.81128 14.4462 5.59431 14.336 6.38217 14.2815C7.84084 14.1533 9.30793 14.1533 10.7666 14.2815C11.5544 14.3367 12.3374 14.4468 13.1099 14.611C14.1808 14.8307 15.4714 15.27 15.9291 16.2311C16.2224 16.8479 16.2224 17.564 15.9291 18.1808C15.4714 19.1419 14.1808 19.5812 13.1099 19.7918C12.3384 19.9634 11.5551 20.0766 10.7666 20.1304C9.57937 20.2311 8.38659 20.2494 7.19681 20.1854C6.92221 20.1854 6.65677 20.1854 6.38217 20.1304C5.59663 20.0773 4.81632 19.9641 4.04807 19.7918C2.96798 19.5812 1.68652 19.1419 1.2197 18.1808C1.0746 17.8747 0.999552 17.5401 1.00002 17.2014Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                    </span>
                                    </div>
                                    <div class="tp-header-login-content d-none d-xl-block">
                                        <span>Đăng nhập</span>
                                        <h5 class="tp-header-login-title">Tài khoản của tôi</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- header bottom start -->
        <div class="tp-header-bottom tp-header-bottom-border d-none d-lg-block">
            <div class="container">
                <div class="tp-mega-menu-wrapper p-relative">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="tp-header-category tp-category-menu tp-header-category-toggle">
                                <button class="tp-category-menu-btn tp-category-menu-toggle">
                                 <span>
                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1C0 0.447715 0.447715 0 1 0H15C15.5523 0 16 0.447715 16 1C16 1.55228 15.5523 2 15 2H1C0.447715 2 0 1.55228 0 1ZM0 7C0 6.44772 0.447715 6 1 6H17C17.5523 6 18 6.44772 18 7C18 7.55228 17.5523 8 17 8H1C0.447715 8 0 7.55228 0 7ZM1 12C0.447715 12 0 12.4477 0 13C0 13.5523 0.447715 14 1 14H11C11.5523 14 12 13.5523 12 13C12 12.4477 11.5523 12 11 12H1Z" fill="currentColor"/>
                                    </svg>
                                 </span>
                                    Tất cả danh mục
                                </button>
                                <nav class="tp-category-menu-content">
                                    <ul>
                                        @if(isset($categories))
                                            @foreach($categories as $item)
                                            <li class="has-dropdown">
                                            <a href="{{get_link_cate(@$item['slug'])}}" class="has-mega-menu">
                                             <span>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M2.6856 4.54975C2.6856 3.52014 3.51984 2.6859 4.54945 2.68508H5.3977C5.88984 2.68508 6.36136 2.48971 6.71089 2.14348L7.30359 1.54995C8.02984 0.819578 9.21031 0.816281 9.94068 1.54253L9.9415 1.54336L9.94892 1.54995L10.5425 2.14348C10.892 2.49053 11.3635 2.68508 11.8556 2.68508H12.7031C13.7327 2.68508 14.5677 3.51932 14.5677 4.54975V5.39636C14.5677 5.88849 14.7623 6.36084 15.1093 6.71037L15.7029 7.3039C16.4332 8.03015 16.4374 9.21061 15.7111 9.94098L15.7103 9.94181L15.7029 9.94923L15.1093 10.5428C14.7623 10.8915 14.5677 11.363 14.5677 11.8551V12.7034C14.5677 13.733 13.7335 14.5672 12.7039 14.5672H12.7031H11.854C11.3619 14.5672 10.8895 14.7626 10.5408 15.1096L9.94727 15.7024C9.22185 16.4327 8.04221 16.4368 7.31183 15.7122C7.31101 15.7114 7.31019 15.7106 7.30936 15.7098L7.30194 15.7024L6.70924 15.1096C6.36054 14.7626 5.88819 14.568 5.39605 14.5672H4.54945C3.51984 14.5672 2.6856 13.733 2.6856 12.7034V11.8535C2.6856 11.3613 2.49023 10.8898 2.14318 10.5411L1.55047 9.94758C0.820097 9.22215 0.815976 8.04251 1.5414 7.31214C1.5414 7.31132 1.54223 7.31049 1.54305 7.30967L1.55047 7.30225L2.14318 6.70872C2.49023 6.35919 2.6856 5.88767 2.6856 5.39471V4.54975" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M6.50787 10.7453L10.745 6.50812" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M10.6823 10.6862H10.6897" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M6.56053 6.56446H6.56795" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                                {{@$item['name']}}</a>
                                                    <ul class="mega-menu tp-submenu">
                                                        @if(isset($item['product']))
                                                            <li>
                                                                <a href="shop.html" class="mega-menu-title">Featured</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop.html">New Arrivals</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop.html">Best Seller</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop.html">Top Rated</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        @endif
                                                    </ul>
                                            </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu menu-style-1">
                                <nav class="tp-main-menu-content">
                                    <ul>
                                        @if(@$menu && $menu[\App\Models\Menu::getMenuHeader()])
                                            @php
                                            $header_menu = $menu[\App\Models\Menu::getMenuHeader()];
                                            $plug_menu = $header_menu->where('parent_id', '<>', 0)->pluck('parent_id')->toArray();
                                            $get_menu = $header_menu->where('parent_id', '<>', 0)->groupBy('parent_id')->toArray()
                                            @endphp
                                            @foreach($menu[1] as $item)
                                                @if(!$item['parent_id'] && !in_array($item['id'], $plug_menu))
                                                    @if(!$item['apply'])
                                                        <li><a href="{{route('fe.home')}}">{{$item['name']}}</a></li>
                                                    @elseif($item['apply'] === 3)
                                                        <li><a href="{{get_link_html(@$item['post_static']['slug'])}}">{{$item['name']}}</a></li>
                                                    @else
                                                        <li><a href="{{get_link_cate(@$item['apply_rele']['slug'])}}">{{@$item['name']}}</a></li>
                                                    @endif
                                                @else
                                                    @if(!$item['parent_id'])
                                                        <li  class="has-dropdown has-mega-menu">
                                                            <a href="shop.html">{{$item['name']}}</a>
                                                            <div class="shop-mega-menu tp-submenu tp-mega-menu">
                                                                <div class="row">
                                                                    <div class="col-lg-2">
                                                                        <div class="shop-mega-menu-list">
                                                                            <a href="{{@$item['apply'] === 3 ? get_link_html(@$item['post_static']['slug']) : get_link_cate(@$item['apply_rele']['slug'])}}" class="shop-mega-menu-title">{{@$item['name']}}</a>
                                                                            <ul>
                                                                                @if(isset($get_menu[$item['id']]))
                                                                                    @foreach($get_menu[$item['id']] as $val)
                                                                                        <li><a href="{{@$val['apply'] === 3 ? get_link_html(@$val['post_static']['slug']) : get_link_cate(@$val['apply_rele']['slug'])}}">{{@$val['name']}}</a></li>
                                                                                    @endforeach
                                                                                @endif
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="shop-mega-menu-img">
                                                                            <img src="assets/img/menu/product/menu-product-img-1.jpg" alt="">
                                                                            <div class="shop-mega-menu-btn">
                                                                                <a href="shop-category.html" class="tp-menu-showcase-btn tp-menu-showcase-btn-2">Phones</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="shop-mega-menu-img">
                                                                            <img src="assets/img/menu/product/menu-product-img-2.jpg" alt="">
                                                                            <div class="shop-mega-menu-btn">
                                                                                <a href="shop-category.html" class="tp-menu-showcase-btn tp-menu-showcase-btn-2">Cameras</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                            <div class="tp-header-contact d-flex align-items-center justify-content-end">
                                <div class="tp-header-contact-icon">
                                 <span>
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M1.96977 3.24859C2.26945 2.75144 3.92158 0.946726 5.09889 1.00121C5.45111 1.03137 5.76246 1.24346 6.01544 1.49057H6.01641C6.59631 2.05874 8.26011 4.203 8.35352 4.65442C8.58411 5.76158 7.26378 6.39979 7.66756 7.5157C8.69698 10.0345 10.4707 11.8081 12.9908 12.8365C14.1058 13.2412 14.7441 11.9219 15.8513 12.1515C16.3028 12.2459 18.4482 13.9086 19.0155 14.4894V14.4894C19.2616 14.7414 19.4757 15.0537 19.5049 15.4059C19.5487 16.6463 17.6319 18.3207 17.2583 18.5347C16.3767 19.1661 15.2267 19.1544 13.8246 18.5026C9.91224 16.8749 3.65985 10.7408 2.00188 6.68096C1.3675 5.2868 1.32469 4.12906 1.96977 3.24859Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M12.936 1.23685C16.4432 1.62622 19.2124 4.39253 19.6065 7.89874" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M12.936 4.59337C14.6129 4.92021 15.9231 6.23042 16.2499 7.90726" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                 </span>
                                </div>
                                <div class="tp-header-contact-content">
                                    <h5>Hotline:</h5>
                                    <p><a href="tel:402-763-282-46">+(402) 763 282 46</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>