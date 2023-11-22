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
{{--                                <div class="accordion-item">--}}
{{--                                    <button class="accordion-button collapsed" id="headingTwo" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
{{--                                        Choose Publisher--}}
{{--                                    </button>--}}
{{--                                    <div id="collapseTwo" class="accordion-collapse collapse accordion-body" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">--}}
{{--                                        <div class="widget dz-widget_services">--}}
{{--                                            <div class="form-check search-content">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="productCheckBox15">--}}
{{--                                                <label class="form-check-label" for="productCheckBox15">--}}
{{--                                                    Action--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-check search-content">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="productCheckBox16">--}}
{{--                                                <label class="form-check-label" for="productCheckBox16">--}}
{{--                                                    Advanture--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-check search-content">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="productCheckBox17">--}}
{{--                                                <label class="form-check-label" for="productCheckBox17">--}}
{{--                                                    Animation--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-check search-content">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="productCheckBox18">--}}
{{--                                                <label class="form-check-label" for="productCheckBox18">--}}
{{--                                                    Biography--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-check search-content">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="productCheckBox19">--}}
{{--                                                <label class="form-check-label" for="productCheckBox19">--}}
{{--                                                    Comedy--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-check search-content">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="productCheckBox20">--}}
{{--                                                <label class="form-check-label" for="productCheckBox20">--}}
{{--                                                    Crime--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-check search-content">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="productCheckBox21">--}}
{{--                                                <label class="form-check-label" for="productCheckBox21">--}}
{{--                                                    Documentary--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="accordion-item">--}}
{{--                                    <button class="accordion-button collapsed" id="headingThree" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
{{--                                        Select Year--}}
{{--                                    </button>--}}
{{--                                    <div id="collapseThree" class="accordion-collapse collapse accordion-body" aria-labelledby="headingThree" data-bs-parent="#accordionExample">--}}
{{--                                        <div class="widget dz-widget_services col d-flex justify-content-between">--}}
{{--                                            <div class="">--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox22">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox22">--}}
{{--                                                        2020--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox23">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox23">--}}
{{--                                                        2021--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox24">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox24">--}}
{{--                                                        2022--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox25">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox25">--}}
{{--                                                        2019--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox26">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox26">--}}
{{--                                                        2018--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox27">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox27">--}}
{{--                                                        2017--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox28">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox28">--}}
{{--                                                        2016--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox29">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox29">--}}
{{--                                                        2015--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox30">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox30">--}}
{{--                                                        2014--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox31">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox31">--}}
{{--                                                        2013--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox32">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox32">--}}
{{--                                                        2012--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="">--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox33">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox33">--}}
{{--                                                        2011--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox34">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox34">--}}
{{--                                                        2010--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox35">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox35">--}}
{{--                                                        2009--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox36">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox36">--}}
{{--                                                        2008--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox37">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox37">--}}
{{--                                                        2007--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox38">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox38">--}}
{{--                                                        2006--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox39">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox39">--}}
{{--                                                        2005--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox40">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox40">--}}
{{--                                                        2004--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox41">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox41">--}}
{{--                                                        2003--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox42">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox42">--}}
{{--                                                        2002--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check search-content">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" id="productCheckBox43">--}}
{{--                                                    <label class="form-check-label" for="productCheckBox43">--}}
{{--                                                        2001--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="accordion accordion-inner" id="filter-inner">--}}
{{--                                    <div class="accordion-item">--}}
{{--                                        <button class="accordion-button" id="headingOne_inner" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_inner" aria-expanded="true" aria-controls="collapseOne_inner">Best Sales (105)</button>--}}
{{--                                        <div id="collapseOne_inner" class="accordion-collapse collapse show accordion-body" aria-labelledby="headingOne_inner" data-bs-parent="#filter-inner">--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="javascript:void(0);">Alone Here</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Alien Invassion</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Bullo The Cat</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Cut That Hair!</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Dragon Of The King</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="accordion-item">--}}
{{--                                        <button class="accordion-button collapsed" id="headingTwo_inner" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo_inner" aria-expanded="false" aria-controls="collapseTwo_inner">--}}
{{--                                            Most Commented (21)--}}
{{--                                        </button>--}}
{{--                                        <div id="collapseTwo_inner" class="accordion-collapse collapse accordion-body" aria-labelledby="headingTwo_inner" data-bs-parent="#filter-inner">--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="javascript:void(0);">Alone Here</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Alien Invassion</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Bullo The Cat</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Cut That Hair!</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Dragon Of The King</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="accordion-item">--}}
{{--                                        <button class="accordion-button collapsed" id="headingThree_inner" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree_inner" aria-expanded="false" aria-controls="collapseThree_inner">--}}
{{--                                            Newest Books (32)--}}
{{--                                        </button>--}}
{{--                                        <div id="collapseThree_inner" class="accordion-collapse collapse accordion-body" aria-labelledby="headingThree_inner" data-bs-parent="#filter-inner">--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="javascript:void(0);">Alone Here</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Alien Invassion</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Bullo The Cat</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Cut That Hair!</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Dragon Of The King</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="accordion-item">--}}
{{--                                        <button class="accordion-button collapsed" id="headingFour_inner" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour_inner" aria-expanded="false" aria-controls="collapseFour_inner">--}}
{{--                                            Featured (129)--}}
{{--                                        </button>--}}
{{--                                        <div id="collapseFour_inner" class="accordion-collapse collapse accordion-body" aria-labelledby="headingFour_inner" data-bs-parent="#filter-inner">--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="javascript:void(0);">Alone Here</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Alien Invassion</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Bullo The Cat</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Cut That Hair!</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Dragon Of The King</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="accordion-item">--}}
{{--                                        <button class="accordion-button collapsed" id="headingFive_inner" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive_inner" aria-expanded="false" aria-controls="collapseFive_inner">--}}
{{--                                            Watch History (21)--}}
{{--                                        </button>--}}
{{--                                        <div id="collapseFive_inner" class="accordion-collapse collapse accordion-body" aria-labelledby="headingFive_inner" data-bs-parent="#filter-inner">--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="javascript:void(0);">Alone Here</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Alien Invassion</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Bullo The Cat</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Cut That Hair!</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Dragon Of The King</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="accordion-item">--}}
{{--                                        <button class="accordion-button collapsed" id="headingSix_inner" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix_inner" aria-expanded="false" aria-controls="collapseSix_inner">--}}
{{--                                            Best Books (44)--}}
{{--                                        </button>--}}
{{--                                        <div id="collapseSix_inner" class="accordion-collapse collapse accordion-body" aria-labelledby="headingSix_inner" data-bs-parent="#filter-inner">--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="javascript:void(0);">Alone Here</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Alien Invassion</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Bullo The Cat</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Cut That Hair!</a></li>--}}
{{--                                                <li><a href="javascript:void(0);">Dragon Of The King</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                            </div>
{{--                            <div class="row filter-buttons">--}}
{{--                                <div>--}}
{{--                                    <a href="javascript:void(0);" class="btn btn-secondary btnhover mt-4 d-block">Tìm kiếm</a>--}}
{{--                                    <a href="javascript:void(0);" class="btn btn-outline-secondary btnhover mt-3 d-block">Reset</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="title">Danh sách sản phẩm</h4>
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
                                @if(!empty($products) && !$products->isEmpty())
                                    {!! $products->links() !!}
                                @endif
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