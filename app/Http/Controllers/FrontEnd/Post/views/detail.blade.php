@extends('layouts.febase')


@section('content')

<div class="page-content">
    <!-- blog details area start -->
    <section class="tp-postbox-details-area pb-20 pt-10">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <div class="tp-postbox-details-top">
                        <div class="tp-postbox-details-category">
                           <span>
                              <a href="#">{{$post['category']['name']}}</a>
                           </span>
                        </div>
                        <h3 class="tp-postbox-details-title">{{$post['name']}}</h3>
                        <div class="tp-postbox-details-meta mb-50">
                            <span>
                              <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M15 8.5C15 12.364 11.864 15.5 8 15.5C4.136 15.5 1 12.364 1 8.5C1 4.636 4.136 1.5 8 1.5C11.864 1.5 15 4.636 15 8.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M10.5972 10.7259L8.42721 9.43093C8.04921 9.20693 7.74121 8.66793 7.74121 8.22693V5.35693" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                              {{@$post['created_at']}}
                           </span>
                            <span>
                              <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M12.5287 11.881L12.8017 14.093C12.8717 14.674 12.2487 15.08 11.7517 14.779L8.8187 13.036C8.4967 13.036 8.1817 13.015 7.8737 12.973C8.3917 12.364 8.6997 11.594 8.6997 10.761C8.6997 8.77299 6.9777 7.16302 4.8497 7.16302C4.0377 7.16302 3.2887 7.394 2.6657 7.8C2.6447 7.625 2.6377 7.44999 2.6377 7.26799C2.6377 4.08299 5.4027 1.5 8.8187 1.5C12.2347 1.5 14.9997 4.08299 14.9997 7.26799C14.9997 9.15799 14.0267 10.831 12.5287 11.881Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M8.7 10.7611C8.7 11.5941 8.39201 12.3641 7.87401 12.9731C7.18101 13.8131 6.082 14.3521 4.85 14.3521L3.023 15.437C2.715 15.626 2.323 15.3671 2.365 15.0101L2.54 13.6311C1.602 12.9801 1 11.9371 1 10.7611C1 9.52905 1.658 8.44407 2.666 7.80007C3.289 7.39407 4.038 7.16309 4.85 7.16309C6.978 7.16309 8.7 8.77305 8.7 10.7611Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                              <a href="#">Bình luân ({{$comments->count()}})</a>
                           </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="tp-postbox-details-thumb">
                        <img src="{{show_img(@$post['avatar'])}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="tp-postbox-details-main-wrapper">
                        <div class="tp-postbox-details-content">
                            {!! @$post['content'] !!}
                            <div class="tp-postbox-details-share-wrapper">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-6">
                                        <div class="tp-postbox-details-tags tagcloud">
                                            <span>Tags:</span>
                                            @if(@$tags)
                                                @foreach($tags as $tag)
                                                    <a href="{{show_tag($tag['slug'])}}">{{$tag['name']}}</a>,
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="tp-postbox-details-share text-md-end">
                                            <span>Chia sẻ :</span>
                                            <a class="fab fa-facebook-f" target="_blank" href="http://www.facebook.com/share.php?u={{'https://dieuhoanamviet.com/'.get_link_html(@$post['slug'])}}"></a>
                                            <a class="fa-brands fa-youtube" target="_blank" href="{{@$info['youtube']}}"></a>
                                            <a class="fa-solid fa-envelope" target="_blank" href="mailto:{{@$info['email']}}"></a>
                                            <a class="fa-solid fa-phone-volume" target="_blank" href="tel:{{@$info['phone']}}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($comments)
                                <div class="tp-postbox-details-comment-wrapper">
                                    <h3 class="tp-postbox-details-comment-title">Bình luận ({{$comments->count()}})</h3>

                                    <div class="tp-postbox-details-comment-inner">
                                        <ul>
                                            @foreach( $comments as $k => $comment)
                                                <li>
                                                    <div class="tp-postbox-details-comment-box d-sm-flex align-items-start">
                                                        <div class="tp-postbox-details-comment-thumb">
                                                            <img src="{{url('assets/images/user.jpeg')}}" alt="">
                                                        </div>
                                                        <div class="tp-postbox-details-comment-content">
                                                            <div class="tp-postbox-details-comment-top d-flex justify-content-between align-items-start">
                                                                <div class="tp-postbox-details-comment-avater">
                                                                    <h4 class="tp-postbox-details-comment-avater-title">{{$comment['name']}}</h4>
                                                                </div>
                                                            </div>
                                                            <p>{{$comment['comment']}}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="tp-postbox-details-form">
                                    <h3 class="tp-postbox-details-form-title">BÌnh luận</h3>
                                    <form method="post" id="comments_form" class="comment-form" novalidate>
                                        <div class="tp-postbox-details-form-wrapper">
                                            <div class="tp-postbox-details-form-inner">
                                                <div class="tp-postbox-details-input-box">
                                                    <div class="tp-contact-input">
                                                        <input name="name" id="name" type="text" placeholder="Nhập tên của bạn ">
                                                    </div>
                                                    <div class="tp-postbox-details-input-title">
                                                        <label for="name">Họ & tên </label>
                                                    </div>
                                                </div>
                                                <div class="tp-postbox-details-input-box">
                                                    <div class="tp-contact-input">
                                                        <input name="email" id="email" type="email" placeholder="Nhập email của bạn">
                                                    </div>
                                                    <div class="tp-postbox-details-input-title">
                                                        <label for="email">Email</label>
                                                    </div>
                                                </div>
                                                <div class="tp-postbox-details-input-box">
                                                    <div class="tp-contact-input">
                                                        <textarea name="comment" placeholder="Viết gì đó ..."></textarea>
                                                    </div>
                                                    <div class="tp-postbox-details-input-title">
                                                        <label for="comment">Bình luân</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tp-postbox-details-input-box">
                                                <button class="tp-postbox-details-input-btn" id="submit" type="submit">Gửi bình luận</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="tp-sidebar-wrapper tp-sidebar-ml--24">
                        @include('frontend.sidebar')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog details area end -->
</div>

@endsection


@section('JS')
    <script>
        $('#submit').click(function () {
            return _POST_FORM('#comments_form', '{{route('fe.comment', ['cmd' => 'ajax_save'])}}')
        })
    </script>
@endsection