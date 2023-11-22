@extends('layouts.febase')


@section('content')

<div class="page-content">
    <!-- inner page banner -->
    @if($agent->isDesktop())
    <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url('{{url('books/images/background/bg3.jpg')}}');">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Blog Details</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('fe.home')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item">Chi tiết bài viết</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
   @endif
    <!-- inner page banner End-->
    <!-- Blog Large -->
    <section class="content-inner-1 bg-img-fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <!-- blog start -->
                    <div class="dz-blog blog-single style-1">
                        <div class="dz-media rounded-md">
                            <img src="{{show_img(@$post['avatar'])}}" alt="avatar">
                        </div>
                        <div class="dz-info">
                            <div class="dz-meta  border-0 py-0 mb-2">
                                <ul class="border-0 pt-0">
                                    <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>{{@$post['created_at']}}</li>
                                    <li class="post-author"><i class="far fa-user fa-fw m-r10"></i>By <a href="javascript:void(0);">{{$post['user']['name'] ?? 'Bookstrore'}}</a></li>
                                </ul>
                            </div>
                            <h4 class="dz-title">{{@$post['name']}}</h4>
                            <div class="dz-post-text">
                                {!! @$post['content'] !!}
                            </div>
                            <div class="dz-meta meta-bottom border-top">
                                <div class="post-tags">
                                    <strong>Tags:</strong>
                                    @if(@$tags)
                                        @foreach($tags as $tag)
                                        <a href="{{show_tag($tag['slug'])}}">{{$tag['name']}}</a>,
                                        @endforeach
                                    @endif
                                </div>
                                <div class="dz-social-icon primary-light">
                                    <ul>
                                        <li><a class="fab fa-facebook-f" target="_blank" href="{{@$info['facebook']}}"></a></li>
                                        <li><a class="fa-brands fa-youtube" target="_blank" href="{{@$info['youtobe']}}"></a></li>
                                        <li><a class="fa-solid fa-envelope" target="_blank" href="mailto:{{@$info['email']}}"></a></li>
                                        <li><a class="fa-solid fa-phone-volume" target="_blank" href="tel:{{@$info['phone']}}"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row extra-blog style-1">
                        <div class="col-lg-12">
                            <h4 class="blog-title">Bài viết liên quan</h4>
                        </div>
                        @if($lwpost)
                        @foreach($lwpost as $k => $item)
                            <div class="col-lg-6 col-md-6">
                                <div class="dz-blog style-1 bg-white m-b30">
                                    <div class="dz-media">
                                        <a href="{{get_link_html($item['slug'])}}"><img src="{{show_img(@$item['avatar'])}}" alt="lwpost-{{$k}}"></a>
                                    </div>
                                    <div class="dz-info">
                                        <h5 class="dz-title">
                                            <a href="{{get_link_html($item['slug'])}}">{{$item['name']}}</a>
                                        </h5>
                                        <p class="m-b0 sp-line-4">{{$item['description']}}</p>
                                        <div class="dz-meta meta-bottom">
                                            <ul class="">
                                                <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>{{$item['created_at']}}</li>
                                                <li class="post-author"><i class="far fa-user fa-fw m-r10"></i>{{$item['user']['name'] ?? 'Bookstrore'}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @endif
                    </div>
                    @if($comments)
                        <div class="clear" id="comment-list">
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
                                        <form method="post" id="comments_form" class="comment-form" novalidate>
                                            <p class="comment-form-author"><input id="name" placeholder="Nhập tên" name="name" type="text" value=""></p>
                                            <p class="comment-form-email"><input id="email" required="required" placeholder="Email" name="email" type="email" value=""></p>
                                            <p class="comment-form-comment"><textarea id="comments" placeholder="Bình luận" class="form-control4" name="comment" cols="45" rows="3" required="required"></textarea></p>
                                            <input type="hidden" name="check" value="{{$check}}">
                                            <input type="hidden" name="post_id" value="{{$post['id']}}">
                                            <p class="col-md-12 col-sm-12 col-xs-12 form-submit">
                                                <button id="submit" type="button" class="submit btn btn-primary btnhover3 filled">
                                                   Gửi bình luận <i class="fa fa-angle-right m-l10"></i>
                                                </button>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- blog END -->
                </div>
                @include('frontend.sidebar')
            </div>
        </div>
    </section>
    <!-- Feature Box -->
</div>

@endsection


@section('JS')
    <script>
        $('#submit').click(function () {
            return _POST_FORM('#comments_form', '{{route('fe.comment', ['cmd' => 'ajax_save'])}}')
        })
    </script>
@endsection