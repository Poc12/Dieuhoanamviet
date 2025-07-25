<section class="tp-subscribe-area pt-70 pb-65 bg-color p-relative z-index-1">
    <div class="tp-subscribe-shape">
        <img class="tp-subscribe-shape-1" src="{{url('shofy/assets/img/subscribe/subscribe-shape-1.png')}}" alt="">
        <img class="tp-subscribe-shape-2" src="{{url('shofy/assets/img/subscribe/subscribe-shape-2.png')}}" alt="">
        <img class="tp-subscribe-shape-3" src="{{url('shofy/assets/img/subscribe/subscribe-shape-3.png')}}" alt="">
        <img class="tp-subscribe-shape-4" src="{{url('shofy/assets/img/subscribe/subscribe-shape-4.png')}}" alt="">
        <!-- plane shape -->
        <div class="tp-subscribe-plane">
            <img class="tp-subscribe-plane-shape" src="{{url('shofy/assets/img/subscribe/plane.png')}}" alt="">
            <svg width="399" height="110" class="d-none d-sm-block" viewBox="0 0 399 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.499634 1.00049C8.5 20.0005 54.2733 13.6435 60.5 40.0005C65.6128 61.6426 26.4546 130.331 15 90.0005C-9 5.5 176.5 127.5 218.5 106.5C301.051 65.2247 202 -57.9188 344.5 40.0003C364 53.3997 384 22 399 22" stroke="white" stroke-opacity="0.5" stroke-dasharray="3 3"/>
            </svg>
            <svg class="d-sm-none" width="193" height="110" viewBox="0 0 193 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1C4.85463 20.0046 26.9085 13.6461 29.9086 40.0095C32.372 61.6569 13.5053 130.362 7.98637 90.0217C-3.57698 5.50061 85.7981 127.53 106.034 106.525C145.807 65.2398 98.0842 -57.9337 166.742 40.0093C176.137 53.412 185.773 22.0046 193 22.0046" stroke="white" stroke-opacity="0.5" stroke-dasharray="3 3"/>
            </svg>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-7">
                <div class="tp-subscribe-content">
                    <span>Cập nhật thông tin sản phẩm mới nhất</span>
                    <h3 class="tp-subscribe-title">Đăng ký ngay</h3>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="tp-subscribe-form">
                    <form action="#" id="form_subscriber">
                        <div class="tp-subscribe-input">
                            <input name="email" required="required" type="email" placeholder="Vui lòng nhập email của bạn">
                            <button type="submit" id="send_form_subscriber">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@section('JS')
<script>
    $('#send_form_subscriber').click(function () {
        return _POST_FORM('#form_subscriber', '{{route('fe.subscriber', ['cmd' => 'ajax_save'])}}')
    })
</script>
@endsection