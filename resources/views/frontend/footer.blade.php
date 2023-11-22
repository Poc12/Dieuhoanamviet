<footer class="site-footer footer-dark">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="widget widget_about">
                        <div class="footer-logo logo-white">
                            <a class="fs-5" href="{{route('fe.home')}}"> <img width="130" src="{{url('assets/images/logo_color.png')}}" alt="logo"></a>
                        </div>
                        <p class="text">Bookland is a Book Store Ecommerce Website Template by DexignZone lorem ipsum dolor sit</p>
                        <div class="dz-social-icon style-1">
                            <ul>
                                <li><a href="{{@$info['facebook']}}" target="_blank" ><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="{{@$info['youtobe']}}" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="mailto:{{@$info['email']}}" target="_blank"><i class="fa-solid fa-envelope"></i></a></li>
                                <li><a href="tel:{{@$info['phone']}}" target="_blank"><i class="fa-solid fa-phone-volume"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="widget widget_services">
                        <h5 class="footer-title">Về chúng tôi</h5>
                        <ul>
                            @if(@$menu && $menu[2])
                                @foreach($menu[2] as $item)
                                    @if($item['apply'] === 3)
                                <li><a href="{{@$item['post_static']['slug']}}">{{@$item['name']}}</a></li>
                                    @else
                                        <li><a href="{{get_link_cate(@$item['apply_rele']['slug'])}}">{{@$item['name']}}</a></li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="widget widget_services">
                        <h5 class="footer-title">Bookland ?</h5>
                        <ul>
                            <li>Bookland</li>
                            <li>Services</li>
                            <li>Book Details</li>
                            <li>Blog Details</li>
                            <li>Shop</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="widget widget_services">
                        <h5 class="footer-title">Resources</h5>
                        <ul>
                            <li>Download</li>
                            <li>Help Center</li>
                            <li>Shop Cart</li>
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li>Partner</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="widget widget_getintuch">
                        <h5 class="footer-title">Liên hệ với chúng tôi</h5>
                        <ul>
                            <li>
                                <i class="flaticon-placeholder"></i>
                                <span>{{@$info['address']}}</span>
                            </li>
                            <li>
                                <i class="flaticon-phone"></i>
                                <span> {{@$info['phone']}}<br></span>
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <span> {{@$info['email']}}<br></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top End -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row fb-inner">
                <div class="col-lg-6 col-md-12 text-start">
                    <p class="copyright-text">Cinv Book Store Ecommerce Website -  © 2023 All Rights Reserved</p>
                </div>
                <div class="col-lg-6 col-md-12 text-end">
                    <p>Made with <span class="heart"></span> by <span>Cinv</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->

</footer>
