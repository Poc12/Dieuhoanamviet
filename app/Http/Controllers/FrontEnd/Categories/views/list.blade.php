@extends('layouts.febase')


@section('content')
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url('{{url('books/images/background/bg3.jpg')}}');">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <h1>Danh sách bài viết</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('fe.home')}}"> Home</a></li>
                            <li class="breadcrumb-item">Danh sách bài viết</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- inner page banner End-->

        <!-- Blog Large -->
        <section class="content-inner-1 bg-img-fix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        @foreach($posts as $item)
                        <div class="dz-blog style-1 bg-white m-b30 blog-half">
                            <div class="dz-media dz-img-effect zoom">
                                <img src="{{show_img($item['avatar'])}}" alt="{{$item['name']}}">
                            </div>
                            <div class="dz-info">
                                <h4 class="dz-title">
                                    <a href="{{get_link_html($item['slug'])}}">{{$item['name']}}</a>
                                </h4>
                                <p class="m-b0 sp-line-4">{{$item['description']}}</p>
                                <div class="dz-meta meta-bottom">
                                    <ul class="border-0 pt-0">
                                        <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>{{$item['created_at']}}</li>
                                        <li class="post-author"><i class="far fa-user fa-fw m-r10"></i>By <a href="javascript:void(0);">{{$item['user']['name']}} </a></li>
                                        <li class="post-comment"><a href="javascript:void(0);"><i class="far fa-comment-alt fa-fw"></i><span>{{$item['comment_count']}}</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                         <div class="pagination text-center p-t20 style-1 m-b30">
                             @if(!empty($posts) && !$posts->isEmpty())
                                 {!! $posts->links() !!}
                             @endif
                         </div>
                    </div>
                    @include('frontend.sidebar')
                </div>
            </div>
        </section>
    </div>
@endsection