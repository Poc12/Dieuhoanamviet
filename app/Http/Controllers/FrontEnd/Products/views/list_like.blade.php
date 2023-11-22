@extends('layouts.febase')


@section('content')
    <div class="page-content bg-grey">
        <div class="content-inner-1 border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="shop-filter">
                            <div class="d-flex justify-content-between">
                                <h4 class="title">Tìm kiếm</h4>
                                <a href="javascript:void(0);" class="panel-close-btn"><i class="flaticon-close"></i></a>
                            </div>
                            <div class="accordion accordion-filter" id="accordionExample">
                                <div class="accordion-item">
                                    <button class="accordion-button" id="headingOne" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Danh mục sản phẩm</button>
                                    <div id="collapseOne" class="accordion-collapse collapse show accordion-body" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="widget dz-widget_services d-flex justify-content-between">
                                            <div class="categorry">
                                                @if($categories)
                                                    @foreach($categories as $k => $category)
                                                        <div class="form-check search-content">
                                                            <input class="form-check-input" @if($_SERVER['REQUEST_URI'] == '/'.get_link_cate($category['slug']))  checked  @endif onchange="search_cate('{{get_link_cate($category['slug'])}}')" type="checkbox" value="{{$category['id']}}" id="productCheckBox-{{$k}}">
                                                            <label class="form-check-label" onclick="search_cate('{{get_link_cate($category['slug'])}}')" for="productCheckBox-{{$k}}">
                                                                {{$category['name']}}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="title">Mục yêu thích</h4>
                        </div>
                        <div class="row book-grid-row">
                            @if($products)
                                @foreach($products as $product)
                                    <div class="col-book style-2">
                                        <div class="dz-shop-card style-1">
                                            <div class="dz-media">
                                                <img src="{{show_img($product['avatar'])}}" alt="{{$product['name']}}">
                                            </div>
                                            <div class="bookmark-btn style-2">
                                                <input class="form-check-input" name="like" value="{{$product['id']}}" type="checkbox" id="{{$product['id']}}">
                                                <label id="like" class="form-check-label like @if($product['user_like']) like_o @endif" data-id="{{$product['id']}}" for="{{$product['id']}}">
                                                    <i class="flaticon-heart"></i>
                                                </label>
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title sp-line-2"><a href="{{get_link_product($product['slug'])}}">{{$product['name']}}</a></h5>
                                                <ul class="dz-tags">
                                                    <li>{{$product['yerd']}}</li>
                                                    <li>{{$product['writen_by']}}</li>
                                                </ul>
                                                <ul class="dz-rating my-2">
                                                    <li><i class="flaticon-star text-yellow"></i></li>
                                                    <li><i class="flaticon-star text-yellow"></i></li>
                                                    <li><i class="flaticon-star text-yellow"></i></li>
                                                    <li><i class="flaticon-star text-yellow"></i></li>
                                                    <li><i class="flaticon-star text-yellow"></i></li>
                                                </ul>
                                                <div class="book-footer ">
                                                    <a href="{{$info['zalo']}}" class="btn btn-secondary box-btn btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i>Liên hệ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="row page mt-0">
                            <div class="col-md-6">
                                <p class="page-text">Showing {{$products->count()}} from {{$count}} data</p>
                            </div>
                            <div class="pagination text-center p-t20 style-1 m-b30">
{{--                                @if(!empty($products) && !$products->isEmpty())--}}
{{--                                    {!! $products->links() !!}--}}
{{--                                @endif--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter -->
    @include('frontend.subscriber')
    <!-- Newsletter End -->

    </div>
@endsection

@push('JS')
    <script>
        $('#like').click(function (){
            let id = $('#like').data('id')
            let url = '{{route('fe.products_action', ['cmd' => 'like_action'])}}'
            url = setUrlParametersHref(url, 'id', id)
            return _GET_URL(url)
        })

        function search_cate(url) {
            return  location.replace(url);
        }

    </script>

@endpush