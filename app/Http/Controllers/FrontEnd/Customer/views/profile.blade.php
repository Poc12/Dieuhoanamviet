@extends('layouts.febase')


@section('content')
    <!-- Content -->
<div class="page-content bg-white">
    <!-- contact area -->
    <div class="content-block">
        <!-- Browse Jobs -->
        <section class="content-inner bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 m-b30">
                        <div class="sticky-top">
                            <div class="shop-account">
                                <div class="account-detail text-center">
                                    <div class="my-image hidden-my-img">
                                        <form id="send_file">
                                            <label class="cursor-p" for="file-input">
                                                <img alt="my-images" id="show_my_image" src="{{auth()->user()->avatar ? show_img(auth()->user()->avatar) : show_img()}}">
                                            </label>
                                            <input id="file-input" type="file" hidden name="file">
                                        </form>
                                    </div>
                                    <div class="account-title">
                                        <div class="">
                                            <h4 class="m-b5"><a href="javascript:void(0);">{{auth()->user()->name}}</a></h4>
                                            <p class="m-b0"><span class="cursor-p">{{auth()->user()->email}}</span></p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="account-list">
                                    <li>
                                        <a href="{{route('fe.home')}}" class="active"><i class="far fa-user" aria-hidden="true"></i>
                                            <span>Cá nhân</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="far fa-heart" aria-hidden="true"></i>
                                            <span>Xem sản phẩm yêu thích</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="far fa-bell" aria-hidden="true"></i>
                                            <span>Xem bài viết yêu thích</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void (0)" onclick="show_form_reset()"><i class="fa fa-key" aria-hidden="true"></i>
                                            <span>Đổi mật khẩu</span></a>
                                    </li>
                                    <li>
                                        <form action="{{route('logout')}}" method="post">
                                            @csrf
                                            <button  type="submit" class="btn btn-primary w-100 btnhover btn-sm"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Đăng xuất</span></button>
                                        </form>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 m-b30">
                        <form id="info_customer">
                        <div class="shop-bx shop-profile">
                            <div class="shop-bx-title clearfix">
                                <h5 class="text-uppercase">Thông tin cơ bản</h5>
                            </div>
                                <div class="row m-b30">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput1" class="form-label">Họ và tên:</label>
                                            <input name="name" type="text" class="form-control" value="{{auth()->user()->name}}" id="formcontrolinput1" placeholder="Nhập họ tên của bạn">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput4" class="form-label">Số điện thoại:</label>
                                            <input name="phone" type="text" class="form-control" value="{{auth()->user()->phone}}" id="formcontrolinput4" placeholder="Nhập số điện thoại của bạn">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">

                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea" class="form-label">Mô tả bản thân:</label>
                                            <textarea name="description" class="form-control" id="exampleFormControlTextarea" rows="5">{{auth()->user()->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-bx-title clearfix">
                                    <h5 class="text-uppercase">Thông tin liên hệ</h5>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput9 " class="form-label">Tỉnh/Thành Phố:</label>
                                            <select class="select2" id="city" name="city">
                                                <option value="">Vui lòng chọn thông tin</option>
                                                @foreach($cities as $item)
                                                    <option @if($item['id'] === auth()->user()->city_id) selected
                                                            @endif
                                                            value="{{$item['id']}}">{{value_show($item['name'])}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput10 " class="form-label">Quận/Huyện:</label>
                                            <select class="select2" id="districts" name="districts">
                                                <option value="">Vui lòng chọn thông tin</option>
                                                @if(auth()->user()->city_id)
                                                <option selected class="districts-ap"
                                                        value="{{auth()->user()->city_id}}">{{ auth()->user()['districts']['name'] }}</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput11 " class="form-label">Xã/Phường:</label>
                                            <select class="select2 " id="ward" name="ward">
                                                <option value="">Vui lòng chọn thông tin</option>
                                                @if(auth()->user()->ward_id)
                                                <option selected class="wards-ap" value="{{auth()->user()->ward_id}}">{{ auth()->user()['ward']['name'] }}</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-4">
                                            <label for="formcontrolinput12" class="form-label">Full Address:</label>
                                            <input name="address" value="{{auth()->user()->address}}" type="text" class="form-control" id="formcontrolinput12" placeholder="Địa chỉ chi tiết">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{auth()->id()}}">
                                <input type="hidden" id="avatar-hidden" name="avatar">
                                <input type="hidden" class="token" name="token" value="{{build_token(auth()->id())}}">
                                <button id="send_form_input" type="button" class="btn btn-primary btnhover">Lưu thông tin</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <!-- Browse Jobs END -->
    </div>
</div>
<!-- Content END-->

@endsection

@section('JS')
<script>

    $('#send_form_input').click(function () {
        return _POST_FORM('#info_customer', '{{route($router_current_name, ['cmd' => 'ajax_save'])}}')
    })

    INISELECT2()

    $('#city').change(function () {   // load ra quận/huyện
        $('.districts-ap').remove();
        $('.wards-ap').remove();
        let city_id = $('#city').val();
        let city = $('#city option:selected').text();
        $('#change_city').html(city);
        let url = '{{route($router_current_name, ['cmd' => 'ajax_load_district'])}}';
        url = setUrlParameters(url, 'city_id', city_id);
        return _GET_URL(url, {callback:function (res){
                if(res.status === 200) {
                    let val = res.result;
                    $.map(val, function (val){
                        $('#districts').append(`<option class='districts-ap' value='${val.id}'>${val.name}</option>`)
                    })
                }else {
                    return show_alert_error(res.msg);
                }
            }})
    });


    $('#districts').change(function () {   // load ra quận/huyện
        $('.wards-ap').remove();
        let district_id = $('#districts').val();
        let url = '{{route($router_current_name, ['cmd' => 'ajax_load_ward'])}}';
        url = setUrlParameters(url, 'district_id', district_id);
        return _GET_URL(url, {
            callback: function (res) {
                if (res.status === 200) {
                    let val = res.result
                    $.map(val, function (val) {
                        $('#ward').append(`<option class='wards-ap' value='${val.id}'>${val.name}</option>`)
                    })
                } else {
                    return show_alert_error(res.msg);
                }
            }
        })
    });

    $('#file-input').change(function (){
          _POST_FORM('#send_file', '{{route('fe.upload')}}', {callback:function (res){
                  if (res.status === 200) {
                      let link = res.result.media.url
                      let relative_link = res.result.media.relative_link
                      if(link) {
                          $('#show_my_image').attr('src',link);
                          $('#avatar-hidden').val(relative_link)
                      }
                  }
          }})

    })

    function show_form_reset() {
        let _url = '{{route($router_current_name, ['cmd' => 'ajax_show_form_change_password'])}}'
        return _SHOW_FORM_REMOTE(_url, 'show_modal', 'modal-lg')
    }
</script>
@endsection