<div class="vertical-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ route('fe.home') }}" class="logo logo-dark text-center">
            <span class="logo-sm fw-bold" style="font-size: 20px !important;">
                <img width="60" src="{{ url('assets/images/logo2.png') }}" alt="logo">
            </span>
            <span class="logo-lg fw-bold" style="font-size: 20px !important;">
                <img width="130" src="{{ url('assets/images/logo2.png') }}" alt="logo">
            </span>
        </a>

        <a href="{{ route('fe.home') }}" class="logo logo-light">
            <span class="logo-sm fw-bold" style="font-size: 20px !important;">
                <img width="60" src="{{ url('assets/images/logo2.png') }}" alt="logo">
            </span>
            <span class="logo-lg fw-bold" style="font-size: 20px !important;">
                <img width="60" src="{{ url('assets/images/logo.png') }}" alt="logo">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Khách hàng</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-chat-bubble-user"></i>
                        <span>Quản lý tài khoản</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('fe.customer') }}">Danh sách tài khoản</a></li>
                        <li><a href="{{ route('fe.customer', ['cmd' => 'input']) }}">Thêm mới tài khoản</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-square"></i>
                        <span>Quản lý khách hàng</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('fe.customer') }}">Danh sách khách hàng</a></li>
                        <li><a href="{{ route('fe.customer', ['cmd' => 'input']) }}">Thêm mới khách hàng</a></li>
                    </ul>
                </li>
                <li class="menu-title">Cấu hình</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-cog"></i>
                        <span>Thông tin cơ bản</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('fe.subscriber') }}">Mạng xã hội</a></li>
                        <li><a href="{{ route('fe.subscriber') }}">Subscriber</a></li>
                        <li><a href="{{ route('banner') }}">Banner</a></li>
                        <li><a href="{{ route('banner', ['cmd' => 'input']) }}">Thêm mới banner</a></li>
                        <li><a href="{{ route('menu') }}">Menu website</a></li>
                        <li><a href="{{ route('menu', ['cmd' => 'input']) }}">Thêm mới menu</a></li>
                    </ul>
                </li>
                <li class="menu-title">Video</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-video"></i>
                        <span>Quản lý video</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('video') }}">Danh sách video</a></li>
                        <li><a href="{{ route('video', ['cmd' => 'input']) }}">Thêm mới video</a></li>
                    </ul>
                </li>
                <li class="menu-title">Danh mục & Tags</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-alarm-panel-outline"></i>
                        <span>Quản danh mục</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('fe.category') }}">Danh mục & tags</a></li>
                        <li><a href="{{ route('fe.category', ['cmd' => 'input']) }}">Thêm mới danh mục & tags</a></li>
                    </ul>
                </li>
                <li class="menu-title">Sản phẩm</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-store"></i>
                        <span>Quản lý sản phẩm</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('fe.products', ['cmd' => 1]) }}">Quản lý sản phẩm</a></li>
                        <li><a href="{{ route('fe.products', ['cmd' => 0]) }}">Xem bản nháp</a></li>
                        <li><a href="{{ route('fe.products_action', ['cmd' => 'input']) }}">Thêm mới sản phẩm</a></li>
                    </ul>
                </li>
                <li class="menu-title">Tin tức</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-clipboard-notes"></i>
                        <span>Quản lý tin tức</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('fe.post', ['cmd' => 1]) }}">Danh sách tin</a></li>
                        <li><a href="{{ route('fe.post', ['cmd' => 0]) }}">Xem bản nháp</a></li>
                        <li><a href="{{ route('fe.post', ['cmd' => 'input']) }}">Thêm mới tin</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-clipboard"></i>
                        <span>Quản lý trang tĩnh</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('fe.post') }}">Bài viết trang tĩnh</a></li>
                        <li><a href="{{ route('fe.post', ['cmd' => 'input']) }}">Thêm mới bài viết trang tĩnh</a></li>
                    </ul>
                </li>
                <li class="menu-title">Liên hệ</li>
                <li><a href="{{ route('fe.contact') }}">Khách hàng liên hệ</a></li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
