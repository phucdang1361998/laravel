<?php
$routeName = \Request::route() ? \Request::route()->getName() : '';
$image = \Illuminate\Support\Facades\Session::get('image');
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - MAPMAPSTORE</title>
    <link rel="stylesheet" href="{{asset('admin/styles/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/fonts/material-design/css/materialdesignicons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugin/waves/waves.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugin/sweet-alert/sweetalert.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugin/chart/morris/morris.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugin/fullcalendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugin/fullcalendar/fullcalendar.print.css')}}" media='print'>
    <link rel="icon" href="https://media.geeksforgeeks.org/wp-content/cdn-uploads/gfg_200X200.png" type="image/x-icon">
</head>

<body>
<div class="main-menu">
    <header class="header">
        <a href="{{route('admin.dashboard')}}" class="logo"><i class="ico mdi mdi-cube-outline"></i>Quản trị</a>
        <button type="button" class="button-close fa fa-times js__menu_close"></button>
        <div class="user">
            <a href="#" class="avatar"><img src="{{asset($image)}}" alt=""><span
                    class="status online"></span></a>
            <h5 class="name"><a href="profile.html">{{\Illuminate\Support\Facades\Session::get('admin_name')}}</a></h5>
            <h5 class="position">Quản trị viên</h5>
            <!-- /.name -->
            <div class="control-wrap js__drop_down">
                <i class="fa fa-caret-down js__drop_down_button"></i>
                <div class="control-list">
                    <div class="control-item"><a href="{{route('admin.profile')}}"><i class="fa fa-user"></i>Profile</a>
                    </div>
                    <div class="control-item"><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i>Đăng xuất</a>
                    </div>
                </div>
                <!-- /.control-list -->
            </div>
            <!-- /.control-wrap -->
        </div>
        <!-- /.user -->
    </header>
    <!-- /.header -->
    <div class="content">

        <div class="navigation">
            <!-- /.title -->
            <ul class="menu js__accordion">
                @if($routeName == 'admin.dashboard')
                    <li class="current">
                        <a class="waves-effect" href="{{route('admin.dashboard')}}">
                            <i class="menu-icon mdi mdi-view-dashboard"></i>
                            <span>Dashboard</span></a>
                    </li>
                @else
                    <li>
                        <a class="waves-effect" href="{{route('admin.dashboard')}}">
                            <i class="menu-icon mdi mdi-view-dashboard"></i>
                            <span>Dashboard</span></a>
                    </li>
                @endif

                @if($routeName == 'admin.about.index' || $routeName == 'admin.about.create' || $routeName == 'admin.about.edit')
                    <li class="current">
                        <a class="waves-effect" href="{{route('admin.about.index')}}">
                            <i class="menu-icon mdi mdi-desktop-mac"></i>
                            <span>Giới thiệu</span></a>
                    </li>
                @else
                    <li>
                        <a class="waves-effect" href="{{route('admin.about.index')}}">
                            <i class="menu-icon mdi mdi-desktop-mac"></i>
                            <span>Giới thiệu</span></a>
                    </li>
                @endif

                @if($routeName == 'admin.category.index' || $routeName == 'admin.category.create' || $routeName == 'admin.category.edit')
                    <li class="current">
                        <a class="waves-effect parent-item" href="{{route('admin.category.index')}}">
                            <i class="menu-icon mdi mdi-cube-outline"></i>
                            <span>Quản lý danh mục sản phẩm</span></a>
                    </li>
                @else
                    <li>
                        <a class="waves-effect parent-item" href="{{route('admin.category.index')}}">
                            <i class="menu-icon mdi mdi-cube-outline"></i>
                            <span>Quản lý danh mục sản phẩm</span></a>
                    </li>
                @endif

                @if($routeName == 'admin.product.index' || $routeName == 'admin.product.create' || $routeName == 'admin.product.edit')
                    <li class="current">
                        <a class="waves-effect" href="{{route('admin.product.index')}}">
                            <i class="menu-icon mdi mdi-calendar"></i>
                            <span>Quản lý sản phẩm</span></a>
                    </li>
                @else
                    <li>
                        <a class="waves-effect" href="{{route('admin.product.index')}}">
                            <i class="menu-icon mdi mdi-calendar"></i>
                            <span>Quản lý sản phẩm</span></a>
                    </li>
                @endif


                @if($routeName == 'admin.slider.index' || $routeName == 'admin.slider.create' || $routeName == 'admin.slider.edit')
                    <li class="current">
                        <a class="waves-effect parent-item" href="{{route('admin.slider.index')}}">
                            <i class="menu-icon mdi mdi-fire"></i>
                            <span>Quản lý Slider</span></a>

                    </li>
                @else
                    <li>
                        <a class="waves-effect parent-item" href="{{route('admin.slider.index')}}">
                            <i class="menu-icon mdi mdi-fire"></i>
                            <span>Quản lý Slider</span></a>

                    </li>
                @endif

                @if($routeName == 'admin.blog.index' || $routeName == 'admin.blog.create' || $routeName == 'admin.blog.edit')
                    <li class="current">
                        <a class="waves-effect" href="{{route('admin.category.index')}}">
                            <i class="menu-icon mdi mdi-email"></i>
                            <span>Quản lý Blog</span></a>
                    </li>
                @else
                    <li>
                        <a class="waves-effect" href="{{route('admin.category.index')}}">
                            <i class="menu-icon mdi mdi-email"></i>
                            <span>Quản lý Blog</span></a>
                    </li>
                @endif

                @if($routeName == 'admin.order.index' || $routeName == 'admin.order.create' || $routeName == 'admin.order.edit')
                    <li class="current">
                        <a class="waves-effect" href="{{route('admin.orders.index')}}">
                            <i class="menu-icon mdi mdi-email"></i>
                            <span>Quản lý đơn hàng</span></a>
                    </li>
                @else
                    <li>
                        <a class="waves-effect" href="{{route('admin.orders.index')}}">
                            <i class="menu-icon mdi mdi-email"></i>
                            <span>Quản lý đơn hàng</span></a>
                    </li>
                @endif

                    @if($routeName == 'admin.support.index' || $routeName == 'admin.support.create' || $routeName == 'admin.order.edit')
                        <li class="current">
                            <a class="waves-effect" href="{{route('admin.support.index')}}">
                                <i class="menu-icon mdi mdi-email"></i>
                                <span>Hỗ trợ</span></a>
                        </li>
                    @else
                        <li>
                            <a class="waves-effect" href="{{route('admin.support.index')}}">
                                <i class="menu-icon mdi mdi-email"></i>
                                <span>Hỗ trợ</span></a>
                        </li>
                    @endif
            </ul>
        </div>
        <!-- /.navigation -->
    </div>
    <!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar">
    <div class="pull-left">
        <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
        <h1 class="page-title">Home</h1>
        <!-- /.page-title -->
    </div>
    <!-- /.pull-left -->
    <div class="pull-right">
        <div class="ico-item">
            <a href="#" class="ico-item mdi mdi-magnify js__toggle_open" data-target="#searchform-header"></a>
            <form action="#" id="searchform-header" class="searchform js__toggle"><input type="search"
                                                                                         placeholder="Search..."
                                                                                         class="input-search">
                <button class="mdi mdi-magnify button-search" type="submit"></button>
            </form>
            <!-- /.searchform -->
        </div>
        <!-- /.ico-item -->
        <a href="#" class="ico-item mdi mdi-email notice-alarm js__toggle_open" data-target="#message-popup"></a>
        <a href="#" class="ico-item pulse"><span class="ico-item mdi mdi-bell notice-alarm js__toggle_open"
                                                 data-target="#notification-popup"></span></a>
        <a href="#" class="ico-item mdi mdi-logout js__logout"></a>
    </div>
    <!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->


@yield('content')


<!--[if lt IE 9]>
<script src="{{asset('admin/script/html5shiv.min.js')}}"></script>
<script src="{{asset('admin/script/respond.min.js')}}"></script>
<![endif]-->
<!--
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('admin/scripts/jquery.min.js')}}"></script>
<script src="{{asset('admin/scripts/modernizr.min.js')}}"></script>
<script src="{{asset('admin/plugin/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('admin/plugin/nprogress/nprogress.js')}}"></script>
<script src="{{asset('admin/plugin/waves/waves.min.js')}}"></script>

<!-- Morris Chart -->
<script src="{{asset('admin/plugin/chart/morris/morris.min.js')}}"></script>
<script src="{{asset('admin/plugin/chart/morris/raphael-min.js')}}"></script>
<script src="{{asset('admin/scripts/chart.morris.init.min.js')}}"></script>

<!-- Flot Chart -->
<script src="{{asset('admin/plugin/chart/plot/jquery.flot.min.js')}}"></script>
<script src="{{asset('admin/plugin/chart/plot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('admin/plugin/chart/plot/jquery.flot.categories.min.js')}}"></script>
<script src="{{asset('admin/plugin/chart/plot/jquery.flot.pie.min.js')}}"></script>
<script src="{{asset('admin/plugin/chart/plot/jquery.flot.stack.min.js')}}"></script>
<script src="{{asset('admin/scripts/chart.flot.init.min.js')}}"></script>

<!-- Sparkline Chart -->
<script src="{{asset('admin/plugin/chart/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('admin/scripts/chart.sparkline.init.min.js')}}"></script>

<!-- FullCalendar -->
<script src="{{asset('admin/plugin/moment/moment.js')}}"></script>
<script src="{{asset('admin/plugin/fullcalendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('admin/scripts/fullcalendar.init.js')}}"></script>

<script src="{{asset('admin/scripts/main.min.js')}}"></script>

</body>
</html>
