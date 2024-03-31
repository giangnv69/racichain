<li class="header">TRANG QUẢN TRỊ</li>

<li class="{{ Request::segment(2) == 'home' ? 'active' : null  }}">
    <a href="{{ route('backend.home') }}">
        <i class="fa fa-home"></i> <span>Trang chủ</span>
    </a>
</li>
<li class="{{ Request::segment(2) == 'users' ? 'active' : null  }}">
    <a href="{{ route('users.index') }}">
        <i class="fa fa-user"></i> <span>Tài khoản</span>
    </a>
</li>
<li class="treeview {{ Request::segment(2) === 'products' || Request::segment(2) === 'productservice' || Request::segment(2) === 'level' ? 'active' : null }}">
    <a href="#">
        <i class="fa fa-building" aria-hidden="true"></i> <span>Khóa học</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ (Request::segment(2) === 'products') ? 'active' : null }}">
            <a href="{{ route('products.index') }}"><i class="fa fa-circle-o"></i>Danh sách</a>
        </li>
    </ul>
</li>
<li class="treeview {{ Request::segment(2) === 'hocvien' || Request::segment(2) === 'productservice' || Request::segment(2) === 'level' ? 'active' : null }}">
    <a href="#">
        <i class="fa fa-building" aria-hidden="true"></i> <span>Chia sẻ học viên</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ (Request::segment(2) === 'hocvien') ? 'active' : null }}">
            <a href="{{ route('hocvien.index') }}"><i class="fa fa-circle-o"></i>Danh sách</a>
        </li>
    </ul>
</li>
{{--<li class="treeview {{ Request::segment(2) === 'category' || Request::segment(2) === 'projects' ? 'active' : null }}">--}}
    {{--<a href="#">--}}
        {{--<i class="fa fa-building" aria-hidden="true"></i> <span>Khóa học</span>--}}
        {{--<span class="pull-right-container">--}}
        {{--<i class="fa fa-angle-left pull-right"></i>--}}
        {{--</span>--}}
    {{--</a>--}}
    {{--<ul class="treeview-menu">--}}
        {{--<li class="{{ Request::segment(2) === 'projects' ? 'active' : null }}">--}}
            {{--<a href="{{ route('projects.index') }}"><i class="fa fa-circle-o"></i> Danh sách khóa học</a>--}}
        {{--</li>--}}
    {{--</ul>--}}
{{--</li>--}}

{{--<li class="treeview {{ (!Request::segment(3) && Request::segment(2) === 'category' && request()->type == 'blog') || Request::segment(2) === 'posts' ? 'active' : null }}">--}}
    {{--<a href="#">--}}
        {{--<i class="fa fa-building" aria-hidden="true"></i> <span>Tin tức</span>--}}
        {{--<span class="pull-right-container">--}}
        {{--<i class="fa fa-angle-left pull-right"></i>--}}
        {{--</span>--}}
    {{--</a>--}}
    {{--<ul class="treeview-menu">--}}
        {{--<li class="{{ Request::segment(2) === 'posts' ? 'active' : null }}">--}}
            {{--<a href="{{ route('posts.index', ['type'=> 'blog']) }}"><i class="fa fa-circle-o"></i> Danh sách tin tức</a>--}}
        {{--</li>--}}
    {{--</ul>--}}
{{--</li>--}}
<li class="{{ Request::segment(2) == 'sub-source' ? 'active' : null  }}">
    <a href="{{ route('sub-source.index') }}">
        <i class="fa fa-user"></i> <span>Danh sách đăng kí</span>
    </a>
</li>
<li class="{{ Request::segment(2) == 'sub' ? 'active' : null  }}">
    <a href="{{ route('sub.index') }}">
        <i class="fa fa-user"></i> <span>Đăng kí tư vấn</span>
    </a>
</li>
<li class="{{ Request::segment(2) == 'pages' ? 'active' : null  }}">
    <a href="{{ route('pages.list') }}">
        <i class="fa fa-paper-plane" aria-hidden="true"></i> <span>Cài đặt trang</span>
    </a>
</li>

{{--<li class="{{ Request::segment(2) == 'contact' ? 'active' : null  }}">--}}
    {{--<a href="{{ route('get.list.contact') }}">--}}
        {{--<i class="fa fa-bell" aria-hidden="true"></i> <span>Liên hệ--}}
        {{--</span>--}}
    {{--</a>--}}
{{--</li>--}}

{{--<li class="header">Cấu hình hệ thống</li>--}}
{{--<li class="treeview {{ Request::segment(2) === 'options' || Request::segment(2) === 'images' || Request::segment(2) === 'menu' || Request::segment(2) === 'banks' ? 'active' : null }}">--}}
    {{--<a href="#">--}}
        {{--<i class="fa fa-cog" aria-hidden="true"></i> <span>Cấu hình</span>--}}
        {{--<span class="pull-right-container">--}}
        {{--<i class="fa fa-angle-left pull-right"></i>--}}
        {{--</span>--}}
    {{--</a>--}}
    {{--<ul class="treeview-menu">--}}

        {{--<li class="{{ Request::segment(3) === 'general' ? 'active' : null }}">--}}
            {{--<a href="{{ route('backend.options.general') }}"><i class="fa fa-circle-o"></i> Cấu hình chung</a>--}}
        {{--</li>--}}

        {{--<li class="{{ Request::segment(2) === 'menu' ? 'active' : null }}">--}}
            {{--<a href="{{ route('setting.menu') }}"><i class="fa fa-circle-o"></i> Menu</a>--}}
        {{--</li>--}}

    {{--</ul>--}}
{{--</li>--}}
{{--<div style="display: none;">--}}
	{{--<li class="header">Cấu hình hệ thống</li>--}}
	{{--<li class="treeview {{ Request::segment(2) == 'options' ? 'active' : null  }}">--}}
		{{--<a href="#">--}}
			{{--<i class="fa fa-folder"></i> <span>Setting (Developer)</span>--}}
			{{--<span class="pull-right-container">--}}
				{{--<i class="fa fa-angle-left pull-right"></i>--}}
			{{--</span>--}}
		{{--</a>--}}
		{{--<ul class="treeview-menu">--}}
			{{--<li class="{{ Request::segment(3) == 'developer-config' ? 'active' : null  }}">--}}
				{{--<a href="{{ route('backend.options.developer-config') }}"><i class="fa fa-circle-o"></i> Developer - Config</a>--}}
			{{--</li>--}}
		{{--</ul>--}}
	{{--</li>--}}
{{--</div>--}}
