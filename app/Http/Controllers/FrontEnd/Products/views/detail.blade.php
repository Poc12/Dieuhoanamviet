@extends('layouts.febase')


@section('content')

    <div class="page-content bg-grey">
        <section class="content-inner-1">
            <div class="container">
                <div class="row book-grid-row style-4 m-b60">
                    <div class="col">
                        <div class="dz-box">
                            <div class="dz-media">
                                <img src="{{show_img($product['avatar'])}}" alt="{{$product['name']}}">
                            </div>
                            <div class="dz-content">
                                <div class="dz-header">
                                    <h3 class="title">{{$product['name']}}</h3>
                                    <div class="shop-item-rating">
                                        <div class="d-lg-flex d-sm-inline-flex d-flex align-items-center">
                                            <ul class="dz-rating">
                                                <li><i class="flaticon-star text-yellow"></i></li>
                                                <li><i class="flaticon-star text-yellow"></i></li>
                                                <li><i class="flaticon-star text-yellow"></i></li>
                                                <li><i class="flaticon-star text-yellow"></i></li>
                                                <li><i class="flaticon-star text-yellow"></i></li>
                                            </ul>
                                            <h6 class="m-b0">5.0</h6>
                                        </div>
                                        <div class="social-area">
                                            <ul class="dz-social-icon style-3">
                                                <li><a href="{{@$info['facebook']}}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="{{@$info['youtobe']}}" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                                <li><a href="mailto:{{@$info['email']}}" target="_blank"><i class="fa-solid fa-envelope"></i></a></li>
                                                <li><a href="tel:{{@$info['phone']}}" target="_blank"><i class="fa-solid fa-phone-volume"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="dz-body">
                                    <div class="book-detail">
                                        <ul class="book-info">
                                            <li>
                                                <div class="writer-info">
                                                    <img width="50" src="{{url('assets/images/logo.png')}}" alt="logo">
                                                    <div>
                                                        <span>Tác giả</span>{{$product['writen_by']}}
                                                    </div>
                                                </div>
                                            </li>
                                            <li><span>Nhà phát hành</span>{{$product['publisher']}}</li>
                                            <li><span>Năm phát hành</span>{{$product['year']}}</li>
                                        </ul>
                                    </div>
                                    <p class="text-1">{{$product['description']}}</p>
                                    <div class="book-footer">
                                        @if($product['check_off'])
                                        <div class="price">
                                            <h5>{{$product['sell_price']}}</h5>
                                            <p class="p-lr10">{{$product['price']}}</p>
                                        </div>
                                        @endif
                                        <div class="product-num">
                                            <a href="{{$info['zalo']}}" class="btn btn-primary btnhover btnhover2"><i class="flaticon-shopping-cart-1"></i> <span>Liên hệ ngay</span></a>
                                            <div class="bookmark-btn style-1 d-none d-sm-block">
                                                <input class="form-check-input" type="checkbox" id="flexCheckDefault1">
                                                <label class="form-check-label" for="flexCheckDefault1">
                                                    <i class="flaticon-heart"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-8">
                        <div class="product-description tabs-site-button">
                            <ul class="nav nav-tabs">
                                <li><a data-bs-toggle="tab" href="#graphic-design-1" class="active">Chi tiết sản phẩm</a></li>
                                <li><a data-bs-toggle="tab" href="#developement-1">Bình luận đánh giá</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="graphic-design-1" class="tab-pane show active">
                                    <table class="table border book-overview">
                                        <tr>
                                            <th>Tên Sách</th>
                                            <td>{{$product['name']}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tác giả</th>
                                            <td>{{$product['writen_by']}}</td>
                                        </tr>
                                        <tr>
                                            <th>Ngôn ngữ</th>
                                            <td>English</td>
                                        </tr>
                                        <tr>
                                            <th>Ngày phát hành</th>
                                            <td>{{$product['year']}}</td>
                                        </tr>
                                        <tr>
                                            <th>Nhà phát hành</th>
                                            <td>{{$product['publisher']}}</td>
                                        </tr>
                                        <tr class="tags">
                                            <th>Tags</th>
                                            <td>
                                                <span class="badge">Sách tiếng anh</span>
                                                <span class="badge">Sách cho bé</span>
                                                <span class="badge">Sách giáo dục</span>
                                                <span class="badge">Sách giao tiếp</span>
                                                <span class="badge">Trending 2023</span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div id="developement-1" class="tab-pane">
                                    <div class="clear" id="comment-list">
                                        @if($comments)
                                            <div class="post-comments comments-area style-1 clearfix">
                                                <h4 class="comments-title">{{$comments->count()}} COMMENTS</h4>
                                                <div id="comment">
                                                    <ol class="comment-list">
                                                        @foreach( $comments as $k => $comment)
                                                            <li class="comment even thread-even depth-1 comment" id="comment-{{$k}}">
                                                                <div class="comment-body">
                                                                    <div class="comment-author vcard">
                                                                        <img src="{{url('assets/images/user.jpeg')}}" alt="user-{{$k}}" class="avatar"/>
                                                                        <cite class="fn">{{$comment['name']}}</cite>
                                                                    </div>
                                                                    <div class="comment-content dz-page-text">
                                                                        <p>{{$comment['comment']}}</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ol>
                                                </div>
                                                <div class="default-form comment-respond style-1" id="respond">
                                                    <h4 class="comment-reply-title" id="reply-title">BÌnh luận</h4>
                                                    <div class="clearfix">
                                                        <form id="comments_form_product" class="comment-form" novalidate>
                                                            <p class="comment-form-author"><input id="name" placeholder="Nhập tên" name="name" type="text" value=""></p>
                                                            <p class="comment-form-email"><input id="email" required="required" placeholder="Email" name="email" type="email" value=""></p>
                                                            <p class="comment-form-comment"><textarea id="comments" placeholder="Bình luận" class="form-control4" name="comment" cols="45" rows="3" required="required"></textarea></p>
                                                            <input type="hidden" name="product_id" value="{{$product['id']}}">
                                                            <p class="col-md-12 col-sm-12 col-xs-12 form-submit">
                                                                <button id="submit_comment_product" type="button" class="submit btn btn-primary btnhover3 filled">
                                                                    Gửi bình luận <i class="fa fa-angle-right m-l10"></i>
                                                                </button>
                                                            </p>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 mt-5 mt-xl-0">
                        <div class="widget">
                            <h4 class="widget-title">Sách mới nhất</h4>
                            <div class="row">
                                @if($product_new)
                                    @foreach($product_new as $product)
                                <div class="col-xl-12 col-lg-6">
                                    <div class="dz-shop-card style-5">
                                        <div class="dz-media">
                                            <img src="{{show_img($product['avatar'])}}" alt="{{$product['name']}}">
                                        </div>
                                        <div class="dz-content">
                                            <h5 class="subtitle"><a href="{{get_link_product($product['slug'])}}">{{$product['name']}}</a></h5>
                                            <ul class="dz-tags">
                                                <li>{{$product['yerd']}}</li>
                                                <li>{{$product['writen_by']}}</li>
                                            </ul>
                                           @if($product['check_off'])
                                                <div class="price">
                                                    <span class="price-num">{{$product['sell_price']}}</span>
                                                    <del>{{$product['price']}}</del>
                                                </div>
                                            @endif
                                            <a href="{{$info['zalo']}}" class="btn btn-outline-primary btn-sm btnhover btnhover2"><i class="flaticon-shopping-cart-1 me-2"></i> Liên hệ</a>
                                        </div>
                                    </div>
                                </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter -->
           @include('frontend.subscriber')
        <!-- Newsletter End -->
    </div>

@endsection


@push('JS')
    <script>
        $('#submit_comment_product').click(function () {
            return _POST_FORM('#comments_form_product', '{{route('fe.cmp', ['cmd' => 'ajax_save'])}}')
        })
    </script>
@endpush