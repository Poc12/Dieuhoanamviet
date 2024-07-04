@extends('layouts.febase')


@section('content')
    <!-- cart area start -->
    <section class="tp-cart-area pb-120">
        <div class="container">
            <div class="row">
                <form id="cart_form">
                    <div class="col-xl-9 col-lg-8">
                        <div class="tp-cart-list mb-25 mr-30">
                            @if(isset($cart))
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th  colspan="2" class="tp-cart-header-product">Hình ảnh </th>
                                        <th  class="tp-cart-header-product">Sản phẩm</th>
                                        <th class="tp-cart-header-price">Giá</th>
                                        <th class="tp-cart-header-quantity">Số lượng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cart as $item)
                                        <tr>
                                            <input type="hidden" name="product_id[]" value="{{$item['item_id']}}">
                                            <!-- img -->
                                            <td class="tp-cart-img" colspan="2"><a href="product-details.html"> <img src="{{images_src($item['item_image'])}}" alt=""></a></td>
                                            <!-- title -->
                                            <td class="tp-cart-title"><a href="product-details.html">{{$item['item_name']}}</a></td>
                                            <!-- price -->
                                            <td class="tp-cart-price"><span>{{$item['item_price']}}</span></td>
                                            <!-- quantity -->
                                            <th class="tp-cart-header-quantity">1</th>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                            @endif
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-cart-checkout-wrapper">
                            <div class="tp-cart-checkout-top d-flex align-items-center justify-content-between">
                                <span class="tp-cart-checkout-top-title">Tổng cộng</span>
                                <span class="tp-cart-checkout-top-price"> {{$total}} Sản phẩm</span>
                            </div>
                            <div class="tp-cart-checkout-proceed">
                                <a id="submit" class="tp-cart-checkout-btn w-100">Đặt đơn</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- cart area end -->
@endsection


@section('JS')
    <script>
        $('#submit').click(function () {
            return _POST_FORM('#cart_form', '{{route('fe.cart', ['cmd' => 'ajax_save_order'])}}')
        })
    </script>
@endsection
