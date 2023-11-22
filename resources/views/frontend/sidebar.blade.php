<div class="col-xl-4 col-lg-4">
    <aside class="side-bar sticky-top">
        <div class="widget">
            <div class="search-bx">
                <form role="search" method="post">
                    <div class="input-group">
                        <input name="text" class="form-control" placeholder="Search" type="text">
                        <span class="input-group-btn">
												<button type="submit" class="btn btn-primary "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
											</span>
                    </div>
                </form>
            </div>
        </div>
        <div class="widget widget_categories">
            <h4 class="widget-title">Danh mục</h4>
            <ul>
                @if($categories)
                    @foreach($categories as $item)
                        <li class="cat-item cat-item-26"><a href="{{get_link_cate($item['slug'])}}">{{$item['name']}}</a></li>
                    @endforeach
                @endif
            </ul>
        </div>
        @if($postNew)
            <div class="widget recent-posts-entry">
                <h4 class="widget-title">Bài viết mới nhất</h4>
                <div class="widget-post-bx">
                    @foreach($postNew as $postItem)
                        <div class="widget-post clearfix">
                            <div class="dz-media">
                                <a href=""><img src="{{get_link_html($postItem['slug'])}}" alt="{{$postItem['name']}}"></a>
                            </div>
                            <div class="dz-info">
                                <h6 class="title"><a href="{{get_link_html($postItem['slug'])}}">{{$postItem['name']}}</a></h6>
                                <div class="dz-meta">
                                    <ul>
                                        <li class="post-date">{{$postItem['created_at']}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="widget widget_tag_cloud">
            <h4 class="widget-title">Tags</h4>
            <div class="tagcloud">
                @if($alltag)
                    @foreach($alltag as $tag)
                        <a href="{{show_tag($tag['slug'])}}">{{$tag['name']}}</a>
                    @endforeach
                @endif
            </div>
        </div>
    </aside>
</div>