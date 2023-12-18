@extends('layouts.febase')


@section('content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb__area include-bg text-center pt-95 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <h5 class="breadcrumb__title">Liên hệ với chúng tôi</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- map area start -->
    <section class="tp-map-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-map-wrapper">
                        <div class="tp-map-hotspot">
                           <span class="tp-hotspot tp-pulse-border">
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <circle cx="6" cy="6" r="6" fill="#821F40"/>
                              </svg>
                           </span>
                        </div>
                        <div class="tp-map-iframe">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.6000581172575!2d106.5065018!3d20.968570399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313581b778ecf2c1%3A0x195ae231776cae42!2zQ8O0bmcgdHkgVE5ISCBUxrAgduG6pW4gdGhp4bq_dCBr4bq_IHbDoCBUaMawxqFuZyBt4bqhaSBk4buLY2ggduG7pSBOYW0gVmnhu4d0!5e0!3m2!1svi!2s!4v1702896416407!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- map area end -->

    <!-- contact area start -->
    <section class="tp-contact-area pb-100">
        <div class="container">
            <div class="tp-contact-inner">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="tp-contact-info-wrapper">
                            <h5 class="tp-contact-title">Công ty TNHH Tư vấn thiết kế và Thương mại dịch vụ Nam Việt</h5>
                            <div class="tp-contact-info-item">
                                <div class="tp-contact-info-icon">
                                 <span>
                                    <img src="{{url('shofy/assets/img/contact/contact-icon-1.png')}}" alt="">
                                 </span>
                                </div>
                                <div class="tp-contact-info-content">
                                    <p data-info="mail"><a href="mailto:{{@$info['email']}}">{{@$info['email']}}</a></p>
                                    <p data-info="phone"><a href="tel:{{@$info['phone']}}">{{@$info['phone']}}</a></p>
                                </div>
                            </div>
                            <div class="tp-contact-info-item">
                                <div class="tp-contact-info-icon">
                                 <span>
                                    <img src="{{url('shofy/assets/img/contact/contact-icon-2.png')}}" alt="">
                                 </span>
                                </div>
                                <div class="tp-contact-info-content">
                                    <p>
                                        <a href="https://www.google.com/maps/place/New+York,+NY,+USA/@40.6976637,-74.1197638,11z/data=!3m1!4b1!4m6!3m5!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62!8m2!3d40.7127753!4d-74.0059728!16zL20vMDJfMjg2" target="_blank">
                                            {{@$info['address']}}
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="tp-contact-info-item">
                                <div class="tp-contact-info-icon">
                                 <span>
                                    <img src="{{url('shofy/assets/img/contact/contact-icon-3.png')}}" alt="">
                                 </span>
                                </div>
                                <div class="tp-contact-info-content">
                                    <div class="tp-contact-social-wrapper mt-5">
                                        <h4 class="tp-contact-social-title">Mạng xã hội</h4>

                                        <div class="tp-contact-social-icon">
                                            <a href="{{@$info['facebook']}}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="{{@$info['youtobe']}}" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                                            <a href="mailto:{{@$info['email']}}" target="_blank"><i class="fa-solid fa-envelope"></i></a>
                                            <a href="tel:{{@$info['phone']}}" target="_blank"><i class="fa-solid fa-phone-volume"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="tp-contact-wrapper">
                            <h5 class="tp-contact-title">Gửi yêu cầu của bạn</h5>

                            <div class="tp-contact-form">
                                <form id="form_contact" method="POST">
                                    <div class="tp-contact-input-wrapper">
                                        <div class="tp-contact-input-box">
                                            <div class="tp-contact-input">
                                                <input required type="text" class="form-control" name="name" placeholder="Vui lòng nhập tên">
                                            </div>
                                            <div class="tp-contact-input-title">
                                                <label for="name">Họ và tên </label>
                                            </div>
                                        </div>
                                        <div class="tp-contact-input-box">
                                            <div class="tp-contact-input">
                                                <input required type="text" class="form-control" name="email" placeholder="Vui lòng nhập địa chỉ email">
                                            </div>
                                            <div class="tp-contact-input-title">
                                                <label for="email">Email</label>
                                            </div>
                                        </div>
                                        <div class="tp-contact-input-box">
                                            <div class="tp-contact-input">
                                                <input id="phone" type="text" name="phone" placeholder="Vui lòng nhập số điện thoại">
                                            </div>
                                            <div class="tp-contact-input-title">
                                                <label for="phone">Số điên thoại</label>
                                            </div>
                                        </div>
                                        <div class="tp-contact-input-box">
                                            <div class="tp-contact-input">
                                                <textarea id="description" name="description" placeholder="Nhập thông tin ..."></textarea>
                                            </div>
                                            <div class="tp-contact-input-title">
                                                <label for="description">Nội dung</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-contact-btn">
                                        <button id="send_form_contact" type="submit">Gửi</button>
                                    </div>
                                </form>
                                <p class="ajax-response"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end -->
    @include('frontend.subscriber')

@endsection


@section('JS')
  <script>
      $('#send_form_contact').click(function () {
          return _POST_FORM('#form_contact', '{{route($router_current_name, ['cmd' => 'ajax_save'])}}')
      })
  </script>
@endsection