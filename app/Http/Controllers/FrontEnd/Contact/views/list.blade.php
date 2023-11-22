@extends('layouts.febase')


@section('content')
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url({{url('books/images/background/bg3.jpg')}});">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <h1>Liên hệ</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('fe.home')}}"> Trang chủ</a></li>
                            <li class="breadcrumb-item">Liên hệ</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="content-inner-2 pt-0">
            <div class="map-iframe-1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14922.810745275678!2d106.20174927425215!3d20.76284134140586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135944a2398275f%3A0x5fef69c904f39343!2zQ2FvIFRo4bqvbmcsIFRoYW5oIE1p4buHbiwgSOG6o2kgRMawxqFuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1678161174253!5m2!1svi!2s" width="600" height="200" style="border:0; width:100%;  margin-bottom: -8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <section class="contact-wraper1" style="background-image: url({{url('books/images/background/bg2.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-info">
                            <div class="section-head text-white style-1">
                                <h3 class="title text-white">Liên hệ với chúng tôi.</h3>
                                <p>Mọi sự quan tâm và thắc mắc của bạn vui lòng liên hệ để được giải đáp.</p>
                            </div>
                            <ul class="no-margin">
                                <li class="icon-bx-wraper text-white left m-b30">
                                    <div class="icon-md">
											<span class="icon-cell text-primary">
												<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
											</span>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class=" dz-tilte text-white">Địa chỉ</h5>
                                        <p>{{@$info['address']}}</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper text-white left m-b30">
                                    <div class="icon-md">
											<span class="icon-cell text-primary">
												<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
											</span>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="dz-tilte text-white">Email</h5>
                                        <p>{{@$info['email']}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 m-b40">
                        <div class="contact-area1 m-r20 m-md-r0">
                            <div class="section-head style-1">
                                <h6 class="sub-title text-primary">Liên hệ</h6>
                                <h3 class="title m-b20">Liên hệ với chúng tôi</h3>
                            </div>
                            <form class="dz-form dzForm" id="form_contact">
                                <div class="input-group">
                                    <input required type="text" class="form-control" name="name" placeholder="Vui lòng nhập tên">
                                </div>
                                <div class="input-group">
                                    <input required type="text" class="form-control" name="email" placeholder="Vui lòng nhập địa chỉ email">
                                </div>
                                <div class="input-group">
                                    <input required type="text" class="form-control" name="phone" placeholder="Vui lòng nhập số điện thoại">
                                </div>
                                <div class="input-group">
                                    <textarea required name="description" rows="5" class="form-control">Nội dung</textarea>
                                </div>
                                <div>
                                    <button id="send_form_contact" type="button" class="btn w-100 btn-primary btnhover">Liên hệ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Feature Box -->
{{--        <section class="content-inner">--}}
{{--            <div class="container">--}}
{{--                <div class="row sp15">--}}
{{--                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">--}}
{{--                        <div class="icon-bx-wraper style-2 m-b30 text-center">--}}
{{--                            <div class="icon-bx-lg">--}}
{{--                                <i class="fa-solid fa-users icon-cell"></i>--}}
{{--                            </div>--}}
{{--                            <div class="icon-content">--}}
{{--                                <h2 class="dz-title counter m-b0">125,663</h2>--}}
{{--                                <p class="font-20">Happy Customers</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class=" col-lg-3 col-md-6 col-sm-6 col-6">--}}
{{--                        <div class="icon-bx-wraper style-2 m-b30 text-center">--}}
{{--                            <div class="icon-bx-lg">--}}
{{--                                <i class="fa-solid fa-book icon-cell"></i>--}}
{{--                            </div>--}}
{{--                            <div class="icon-content">--}}
{{--                                <h2 class="dz-title counter m-b0">50,672</h2>--}}
{{--                                <p class="font-20">Book Collections</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">--}}
{{--                        <div class="icon-bx-wraper style-2 m-b30 text-center">--}}
{{--                            <div class="icon-bx-lg">--}}
{{--                                <i class="fa-solid fa-store icon-cell"></i>--}}
{{--                            </div>--}}
{{--                            <div class="icon-content">--}}
{{--                                <h2 class="dz-title counter m-b0">1,562</h2>--}}
{{--                                <p class="font-20">Our Stores</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">--}}
{{--                        <div class="icon-bx-wraper style-2 m-b30 text-center">--}}
{{--                            <div class="icon-bx-lg">--}}
{{--                                <i class="fa-solid fa-leaf icon-cell"></i>--}}
{{--                            </div>--}}
{{--                            <div class="icon-content">--}}
{{--                                <h2 class="dz-title counter m-b0">457</h2>--}}
{{--                                <p class="font-20">Famous Writers</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- Feature Box End -->

        <!-- Newsletter -->
     @include('frontend.subscriber')
        <!-- Newsletter End -->

    </div>
@endsection


@section('JS')
  <script>
      $('#send_form_contact').click(function () {
          return _POST_FORM('#form_contact', '{{route($router_current_name, ['cmd' => 'ajax_save'])}}')
      })
  </script>
@endsection