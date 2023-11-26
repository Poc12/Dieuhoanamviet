<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="_token" content="{{ csrf_token() }}">
    <meta name="author" content="bookstore" />
    <meta name="robots" content=”noodp,index,follow” />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="revisit-after" content="1 days" />
    <meta http-equiv="content-language" content=”vi” />
    <meta http-equiv="Content-Type" content=”text/html; charset=utf-8″ />
    <meta name="google" content=”nositelinkssearchbox” />
    <meta property="og:title" content="Bookland-Book Store Ecommerce Website"/>
    <meta property="og:description" content="IBookland-Book Store Ecommerce Website"/>
    <meta name="format-detection" content="telephone=no">
    {!! \SEO::generate(true) !!}
    <link rel="shortcut icon" href="{{url('assets/images/logoc.png')}}">
    <link rel="sitemap" type="application/xml" href="{{url('sitemap.xml')}}" />

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{url('books/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('books/icons/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('books/vendors/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('books/vendors/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('books/vendors/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link href="{{url('assets/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/css/jquery.fancybox.min.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{url('shofy/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('shofy/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{url('shofy/assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{url('shofy/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{url('shofy/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('shofy/assets/css/font-awesome-pro.css')}}">
    <link rel="stylesheet" href="{{url('shofy/assets/css/flaticon_shofy.css')}}">
    <link rel="stylesheet" href="{{url('shofy/assets/css/spacing.css')}}">
    <link rel="stylesheet" href="{{url('shofy/assets/css/main.css')}}">
    <!-- GOOGLE FONTS-->
    <link href="{{url('books/css/style.css')}}" type="text/css" rel="stylesheet">

    <link href="{{url('core/io.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    @yield('CSS')

</head>
<body>

<div class="page-wraper">
    <!-- LOADING-->
{{--    <div id="loading-area" class="preloader-wrapper-1">--}}
{{--        <div class="preloader-inner">--}}
{{--            <div class="preloader-shade"></div>--}}
{{--            <div class="preloader-wrap"></div>--}}
{{--            <div class="preloader-wrap wrap2"></div>--}}
{{--            <div class="preloader-wrap wrap3"></div>--}}
{{--            <div class="preloader-wrap wrap4"></div>--}}
{{--            <div class="preloader-wrap wrap5"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- END LOADING-->

    <!-- Header -->
    @include('frontend.header')
    <!-- Header End -->

    <div class="page-content bg-white">

         @yield('content')

    </div>

    <!-- Footer -->
     @include('frontend.footer')
    <!-- Footer End -->
    <button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
</div>

<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{url('books/js/jquery.min.js')}}"></script><!-- JQUERY MIN JS -->
<script src="{{url('assets/js/select2.min.js')}}"></script>
<script src="{{url('books/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script><!-- BOOTSTRAP MIN JS -->
<script src="{{url('books/vendors/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="{{url('books/vendors/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
<script src="{{url('books/vendors/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src="{{url('books/vendors/wow/wow.min.js')}}"></script><!-- WOW JS -->
<script src="{{url('books/vendors/swiper/swiper-bundle.min.js')}}"></script><!-- SWIPER JS -->
<script src="{{url('books/js/dz.carousel.js')}}"></script><!-- DZ CAROUSEL JS -->
<script src="{{url('books/js/dz.ajax.js')}}"></script><!-- AJAX -->
{{--<script src="{{url('books/js/custom.js')}}"></script><!-- CUSTOM JS -->--}}
<script src="{{url('assets/js/bootstrap-notify.min.js')}}"></script>
<script src="{{url('assets/js/jquery.fancybox.min.js')}}"></script>

<script src="{{url('core/io.js')}}"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-X2LLK2513F"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-X2LLK2513F');
</script>

@yield('JS')

@stack('JS')

</body>
</html>