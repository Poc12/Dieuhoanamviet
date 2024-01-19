
<!-- categories start -->
<div class="tp-sidebar-widget widget_categories mb-35">
    <h3 class="tp-sidebar-widget-title">Danh mục</h3>
    <div class="tp-sidebar-widget-content">
        <ul>
            @if($categories)
                @foreach($categories as $item)
                    <li><a href="{{get_link_cate($item['slug'])}}">{{$item['name']}}</a></li>
                @endforeach
            @endif
        </ul>
    </div>
</div>
<!-- categories end -->

<!-- latest post start -->
<div class="tp-sidebar-widget mb-35">
    <h3 class="tp-sidebar-widget-title">Bài viết mới nhất</h3>
    <div class="tp-sidebar-widget-content">
        <div class="tp-sidebar-blog-item-wrapper">
            @foreach($postNew as $postItem)
                <div class="tp-sidebar-blog-item d-flex align-items-center">
                    <div class="tp-sidebar-blog-thumb">
                        <a href="{{get_link_html($postItem['slug'])}}">
                            <img src="{{show_img($postItem['avatar'])}}" alt="{{$postItem['name']}}">
                        </a>
                    </div>
                    <div class="tp-sidebar-blog-content">
                        <div class="tp-sidebar-blog-meta">
                            <span>{{$postItem['created_at']}}</span>
                        </div>
                        <h4 class="tp-sidebar-blog-title">
                            <a href="{{get_link_html($postItem['slug'])}}">{{$postItem['name']}}</a>
                        </h4>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</div>

<div class="tp-sidebar-widget mb-35">
    <h3 class="tp-sidebar-widget-title">Phổ biến</h3>
    <div class="tp-sidebar-widget-content tagcloud">
        @if($alltag)
            @foreach($alltag as $tag)
                <a href="{{show_tag($tag['slug'])}}">{{$tag['name']}}</a>
            @endforeach
        @endif
    </div>
</div>
<!-- latest post end -->