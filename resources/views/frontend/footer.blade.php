<footer>
    <div class="tp-footer-area" data-bg-color="footer-bg-grey">
        <div class="tp-footer-top pt-95 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-1 mb-50">
                            <div class="tp-footer-widget-content">
                                <div class="tp-footer-logo">
                                    <a href="/">
                                        <img width="86" height="68" src="{{url('assets/images/logo.jpg') }}" alt="logo">
                                    </a>
                                </div>
                                <p class="tp-footer-desc">Chúng tôi đảm bảo đem tới khách hàng chất lượng dịch vụ tốt nhất</p>
                                <div class="tp-footer-social">
                                    <a href="{{@$info['facebook']}}"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="http://zalo.me/{{trim(@$info['phone'])}}">
                                        <svg id="changeColor" fill="#DC7633" xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="39" viewBox="0 0 375 374.9999"
                                                             height="39" version="1.0"><defs><path id="pathAttribute"
                                                                                                   d="M 7.773438 7.773438 L 368.523438 7.773438 L 368.523438 366.273438 L 7.773438 366.273438 Z M 7.773438 7.773438 " fill="#ffffff"></path>
                                                </defs><g><path id="pathAttribute" d="M 7.773438 7.773438 L 368.523438 7.773438 L 368.523438 366.273438 L 7.773438 366.273438 L 7.773438 7.773438 " fill-opacity="1" fill-rule="nonzero" fill="#ffffff"></path></g><g id="inner-icon" class="svgg" transform="translate(90,70) "> <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="IconChangeColor" height="223" width="223"><title>Zalo</title><path d="M12.49 10.2722v-.4496h1.3467v6.3218h-.7704a.576.576 0 01-.5763-.5729l-.0006.0005a3.273 3.273 0 01-1.9372.6321c-1.8138 0-3.2844-1.4697-3.2844-3.2823 0-1.8125 1.4706-3.2822 3.2844-3.2822a3.273 3.273 0 011.9372.6321l.0006.0005zM6.9188 7.7896v.205c0 .3823-.051.6944-.2995 1.0605l-.03.0343c-.0542.0615-.1815.206-.2421.2843L2.024 14.8h4.8948v.7682a.5764.5764 0 01-.5767.5761H0v-.3622c0-.4436.1102-.6414.2495-.8476L4.8582 9.23H.1922V7.7896h6.7266zm8.5513 8.3548a.4805.4805 0 01-.4803-.4798v-7.875h1.4416v8.3548H15.47zM20.6934 9.6C22.52 9.6 24 11.0807 24 12.9044c0 1.8252-1.4801 3.306-3.3066 3.306-1.8264 0-3.3066-1.4808-3.3066-3.306 0-1.8237 1.4802-3.3044 3.3066-3.3044zm-10.1412 5.253c1.0675 0 1.9324-.8645 1.9324-1.9312 0-1.065-.865-1.9295-1.9324-1.9295s-1.9324.8644-1.9324 1.9295c0 1.0667.865 1.9312 1.9324 1.9312zm10.1412-.0033c1.0737 0 1.945-.8707 1.945-1.9453 0-1.073-.8713-1.9436-1.945-1.9436-1.0753 0-1.945.8706-1.945 1.9436 0 1.0746.8697 1.9453 1.945 1.9453z" id="mainIconPathAttribute" fill="#000000" filter="url(#shadow)"></path><filter id="shadow"><feDropShadow id="shadowValue" stdDeviation=".5" dx="0" dy="0" flood-color="black"></feDropShadow></filter></svg> </g></svg>
                                    </a>
                                    <a href="mailto:{{@$info['email']}}"><i class="fa-solid fa-envelope"></i></a>
                                    <a href="tel:{{@$info['phone']}}"><i class="fa-solid fa-phone-volume"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(isset($menu_footer))
                        @foreach($menu_footer as $item)
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="tp-footer-widget footer-col-2 mb-50">
                                <h4 class="tp-footer-widget-title">{{@$item['name']}}</h4>
                                <div class="tp-footer-widget-content">
                                    <ul>
                                        @if($item['child'])
                                            @foreach($item['child'] as $item_child)
                                                @if($item_child['apply'] === 3)
                                                    <li><a href="{{@get_link_html($item_child['post_static']['slug'])}}">{{@$item_child['name']}}</a></li>
                                                @else
                                                    <li><a href="{{get_link_cate(@$item_child['apply_rele']['slug'])}}">{{@$item_child['name']}}</a></li>
                                                @endif
                                             @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-4 mb-50">
                            <h4 class="tp-footer-widget-title">Liên hệ đặt hàng</h4>
                            <div class="tp-footer-widget-content">
                                <div class="tp-footer-talk mb-20">
                                    <h4><a href="tel:{{@$info['phone']}}">{{@$info['phone']}}</a></h4>
                                </div>
                                <div class="tp-footer-contact">
                                    <div class="tp-footer-contact-item d-flex align-items-start">
                                        <div class="tp-footer-contact-icon">
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M1 5C1 2.2 2.6 1 5 1H13C15.4 1 17 2.2 17 5V10.6C17 13.4 15.4 14.6 13 14.6H5" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M13 5.40039L10.496 7.40039C9.672 8.05639 8.32 8.05639 7.496 7.40039L5 5.40039" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M1 11.4004H5.8" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M1 8.19922H3.4" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                       </span>
                                        </div>
                                        <div class="tp-footer-contact-content">
                                            <p><a href="mailto:shofy@support.com">{{@$info['email']}}</a></p>
                                        </div>
                                    </div>
                                    <div class="tp-footer-contact-item d-flex align-items-start">
                                        <div class="tp-footer-contact-icon">
                                       <span>
                                          <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M8.50001 10.9417C9.99877 10.9417 11.2138 9.72668 11.2138 8.22791C11.2138 6.72915 9.99877 5.51416 8.50001 5.51416C7.00124 5.51416 5.78625 6.72915 5.78625 8.22791C5.78625 9.72668 7.00124 10.9417 8.50001 10.9417Z" stroke="currentColor" stroke-width="1.5"/>
                                             <path d="M1.21115 6.64496C2.92464 -0.887449 14.0841 -0.878751 15.7889 6.65366C16.7891 11.0722 14.0406 14.8123 11.6313 17.126C9.88298 18.8134 7.11704 18.8134 5.36006 17.126C2.95943 14.8123 0.210885 11.0635 1.21115 6.64496Z" stroke="currentColor" stroke-width="1.5"/>
                                          </svg>
                                       </span>
                                        </div>
                                        <div class="tp-footer-contact-content">
                                            <p><a href="https://www.google.com/maps/place/Sleepy+Hollow+Rd,+Gouverneur,+NY+13642,+USA/@44.3304966,-75.4552367,17z/data=!3m1!4b1!4m6!3m5!1s0x4cccddac8972c5eb:0x56286024afff537a!8m2!3d44.3304928!4d-75.453048!16s%2Fg%2F1tdsjdj4" target="_blank">
                                                    {{@$info['address']}}</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-footer-bottom">
            <div class="container">
                <div class="tp-footer-bottom-wrapper">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="tp-footer-copyright">
                                <p>© 2023 Công ty TNHH Nam Việt </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>