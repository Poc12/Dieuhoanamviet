<section class="py-5 newsletter-wrapper" style="background-image: url('{{url('books/images/background/bg1.jpg')}}'); background-size: cover;">
    <div class="container">
        <div class="subscride-inner">
            <div class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
                <div class="col-xl-7 col-lg-12">
                    <div class="section-head mb-0">
                        <h2 class="title text-white my-lg-3 mt-0">Theo dõi bản tin của chúng tôi để cập nhật thông tin sách mới nhất</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <form class="dzSubscribe style-1" id="form_subscriber">
                        <div class="dzSubscribeMsg"></div>
                        <div class="form-group">
                            <div class="input-group mb-0">
                                <input name="email" required="required" type="email" class="form-control bg-transparent text-white" placeholder="Vui lòng nhập email của bạn">
                                <div class="input-group-addon">
                                    <button name="submit" type="button" id="send_form_subscriber" class="btn btn-primary btnhover">
                                        <span>Đăng ký</span>
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
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