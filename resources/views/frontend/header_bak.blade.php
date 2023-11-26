<header class="site-header mo-left header style-1">
    <!-- Main Header -->
    <div class="header-info-bar">
        <div class="container clearfix">
            <!-- Website Logo -->
            <div class="logo-header logo-dark">
                <a class="fs-5" href="{{route('fe.home')}}"> <img width="130" src="{{url('assets/images/logo.png')}}" alt="logo"></a>
            </div>

        <!-- EXTRA NAV -->
            <div class="extra-nav">
                <div class="extra-cell">
                    <ul class="navbar-nav header-right">
                        @if(auth()->user())
                            <li class="nav-item dropdown profile-dropdown  ms-4">
                                <a class="nav-link" href="{{route('fe.customer')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ show_img(auth('web')->user()->avatar) ?? show_img()}}" alt="user">
                                    <div class="profile-info">
                                        <h6 class="title">{{auth()->user()->name}}</h6>
                                        <span>{{auth()->user()->email}}</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu py-0 dropdown-menu-end">
                                    <div class="dropdown-header">
                                        <h6 class="m-0">{{auth()->user()->name}}</h6>
                                        <span>{{auth()->user()->email}}</span>
                                    </div>
                                    <div class="dropdown-body">
                                        <a href="{{route('fe.customer')}}" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                                                <span class="ms-2">Cá nhân</span>
                                            </div>
                                        </a>
                                        <a href="{{route('fe.products_action',['cmd' => 'ls_like'])}}" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
                                                <span class="ms-2">Sản phẩm yêu thích</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-footer">
                                        <form action="{{route('logout')}}" method="post">
                                            @csrf
                                            <button  type="submit" class="btn btn-primary w-100 btnhover btn-sm"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Đăng xuất</span></button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @else
                            <a href="{{route('login')}}" class="cls_login"> Đăng nhập</a>

                            <a href="{{route('register')}}" class="ms-2"> Đăng ký</a>
                        @endif
                    </ul>
                </div>
            </div>

            <!-- header search nav -->
            <div class="header-search-nav">
                <form class="header-item-search">
                    <div class="input-group search-input">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Nhập thông tin tìm kiếm">
                        <button class="btn" type="button"><i class="flaticon-loupe"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Main Header End -->

    <!-- Main Header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix">
            <div class="container clearfix">
                <!-- Website Logo -->
                <div class="logo-header logo-dark">
                    <a class="fs-5" href="{{route('fe.home')}}"><img src="{{url('assets/images/logo.png')}}" alt="logo-mobile"></a>
                </div>

                <!-- Nav Toggle Button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <!-- EXTRA NAV -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <a href="{{route('fe.contact')}}" class="btn btn-primary btnhover">Liên hệ</a>
                    </div>
                </div>

                <!-- Main Nav -->
                <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                    <div class="logo-header logo-dark">
                        <a class="fs-5" href="{{route('fe.home')}}"><img src="{{url('assets/images/logo.png')}}" alt="logo-dark"></a>
                    </div>
                    <form class="search-input">
                        <div class="input-group">
                            <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Nhập thông tin tìm kiếm">
                            <button class="btn" type="button"><i class="flaticon-loupe"></i></button>
                        </div>
                    </form>

                    <ul class="nav navbar-nav">
                        @if(@$menu && $menu[1])
                            @php
                                $plug_menu = $menu[1]->where('parent_id', '<>', 0)->pluck('parent_id')->toArray();
                                $get_menu = $menu[1]->where('parent_id', '<>', 0)->groupBy('parent_id')->toArray()
                            @endphp
                            @foreach($menu[1] as $item)
                                @if(!$item['parent_id'] && !in_array($item['id'], $plug_menu))
                                    @if(!$item['apply'])
                                    <li><a href="{{route('fe.home')}}"><span>{{$item['name']}}</span></a></li>
                                    @elseif($item['apply'] === 3)
                                        <li><a href="{{get_link_html(@$item['post_static']['slug'])}}"><span>{{$item['name']}}</span></a></li>
                                        @else
                                        <li><a href="{{get_link_cate(@$item['apply_rele']['slug'])}}"><span>{{@$item['name']}}</span></a></li>
                                    @endif
                                @else
                                    @if(!$item['parent_id'])
                                        <li class="sub-menu-down"><a href="{{@$item['apply'] === 3 ? get_link_html(@$item['post_static']['slug']) : get_link_cate(@$item['apply_rele']['slug'])}}"><span>{{@$item['name']}}</span></a>
                                            <ul class="sub-menu">
                                                @if(isset($get_menu[$item['id']]))
                                                    @foreach($get_menu[$item['id']] as $val)
                                                   <li><a href="{{@$val['apply'] === 3 ? get_link_html(@$val['post_static']['slug']) : get_link_cate(@$val['apply_rele']['slug'])}}">{{@$val['name']}}</a></li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </li>
                                    @endif
                                @endif
                            @endforeach
                        @endif
                    </ul>
                    <div class="dz-social-icon">
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
    </div>
    <!-- Main Header End -->

</header>
