<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home - My Admin Template</title>

    <!-- Main Styles -->
    <link rel="stylesheet" href="{{asset('admin/styles/style.min.css')}}">

    <!-- Material Design Icon -->
    <link rel="stylesheet" href="{{asset('admin/fonts/material-design/css/materialdesignicons.css')}}">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="{{asset('admin/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css')}}">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="{{asset('admin/plugin/waves/waves.min.css')}}">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{asset('admin/plugin/sweet-alert/sweetalert.css')}}">

    <!-- Morris Chart -->
    <link rel="stylesheet" href="{{asset('admin/plugin/chart/morris/morris.css')}}">

    <!-- FullCalendar -->
    <link rel="stylesheet" href="{{asset('admin/plugin/fullcalendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugin/fullcalendar/fullcalendar.print.css')}}" media='print'>
    <link rel="stylesheet" href="{{asset('admin/plugin/tinymce/skins/lightgray/skin.min.css')}}">
</head>

<body>
<div class="main-menu">
    <header class="header">
        <a href="index.html" class="logo"><i class="ico mdi mdi-cube-outline"></i>MyAdmin</a>
        <button type="button" class="button-close fa fa-times js__menu_close"></button>
        <div class="user">
            <a href="#" class="avatar"><img src="{{asset('admin/images/avatar-sm-5.jpg')}}" alt=""><span
                    class="status online"></span></a>
            <h5 class="name"><a href="profile.html">{{\Illuminate\Support\Facades\Session::get('admin_name')}}</a></h5>
            <h5 class="position">Administrator</h5>
            <!-- /.name -->
            <div class="control-wrap js__drop_down">
                <i class="fa fa-caret-down js__drop_down_button"></i>
                <div class="control-list">
                    <div class="control-item"><a href="profile.html"><i class="fa fa-user"></i> Profile</a></div>
                    <div class="control-item"><a href="#"><i class="fa fa-gear"></i> Settings</a></div>
                    <div class="control-item"><a href="#"><i class="fa fa-sign-out"></i> Log out</a></div>
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
            <h5 class="title">Navigation</h5>
            <!-- /.title -->
            <ul class="menu js__accordion">
                <li class="current">
                    <a class="waves-effect" href="{{route('admin.dashboard')}}">
                        <i class="menu-icon mdi mdi-view-dashboard"></i>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a class="waves-effect" href="{{route('admin.about.index')}}">
                        <i class="menu-icon mdi mdi-desktop-mac"></i>
                        <span>Giới thiệu</span></a>
                </li>
                <li>
                    <a class="waves-effect parent-item" href="{{route('admin.category.index')}}">
                        <i class="menu-icon mdi mdi-cube-outline"></i>
                        <span>Quản lý danh mục sản phẩm</span></a>
                </li>
                <li>
                    <a class="waves-effect" href="{{route('admin.product.index')}}">
                        <i class="menu-icon mdi mdi-calendar"></i>
                        <span>Quản lý sản phẩm</span></a>
                </li>
                <li>
                    <a class="waves-effect parent-item" href="{{route('admin.category.index')}}">
                        <i class="menu-icon mdi mdi-fire"></i>
                        <span>Quản lý Slider</span></a>

                </li>
                <li>
                    <a class="waves-effect" href="{{route('admin.category.index')}}">
                        <i class="menu-icon mdi mdi-email"></i>
                        <span>Quản lý Blog</span></a>
                </li>
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

<div id="notification-popup" class="notice-popup js__toggle" data-space="75">
    <h2 class="popup-title">Your Notifications</h2>
    <!-- /.popup-title -->
    <div class="content">
        <ul class="notice-list">
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{asset('')}}admin/images/avatar-sm-1.jpg" alt=""></span>
                    <span class="name">John Doe</span>
                    <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                    <span class="time">10 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{asset('')}}admin/images/avatar-sm-2.jpg" alt=""></span>
                    <span class="name">Anna William</span>
                    <span class="desc">Like your post: “Facebook Messenger”</span>
                    <span class="time">15 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar bg-warning"><i class="fa fa-warning"></i></span>
                    <span class="name">Update Status</span>
                    <span class="desc">Failed to get available update data. To ensure the please contact us.</span>
                    <span class="time">30 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{asset('')}}admin/images/avatar-1.jpg" alt=""></span>
                    <span class="name">Jennifer</span>
                    <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                    <span class="time">45 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{asset('')}}admin/images/avatar-sm-6.jpg" alt=""></span>
                    <span class="name">Michael Zenaty</span>
                    <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                    <span class="time">50 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{asset('')}}admin/images/avatar-sm-4.jpg" alt=""></span>
                    <span class="name">Simon</span>
                    <span class="desc">Like your post: “Facebook Messenger”</span>
                    <span class="time">1 hour</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar bg-violet"><i class="fa fa-flag"></i></span>
                    <span class="name">Account Contact Change</span>
                    <span class="desc">A contact detail associated with your account has been changed.</span>
                    <span class="time">2 hours</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{asset('')}}admin/images/avatar-sm-7.jpg" alt=""></span>
                    <span class="name">Helen 987</span>
                    <span class="desc">Like your post: “Facebook Messenger”</span>
                    <span class="time">Yesterday</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{asset('')}}admin/images/avatar-2.jpg" alt=""></span>
                    <span class="name">Denise Jenny</span>
                    <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                    <span class="time">Oct, 28</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{asset('')}}admin/images/avatar-sm-8.jpg" alt=""></span>
                    <span class="name">Thomas William</span>
                    <span class="desc">Like your post: “Facebook Messenger”</span>
                    <span class="time">Oct, 27</span>
                </a>
            </li>
        </ul>
        <!-- /.notice-list -->
        <a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
    </div>
    <!-- /.content -->
</div>

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
<script src="{{asset('admin/plugin/sweet-alert/sweetalert.min.js')}}"></script>
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
<script src="{{asset('admin/plugin/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('admin/scripts/tinymce.init.min.js')}}"></script>
<script src="{{asset('admin/plugin/tinymce/plugins/advlist/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/anchor/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/autolink/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/autoresize/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/autosave/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/bbcode/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/charmap/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/code/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/codesample/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/colorpicker/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/contextmenu/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/directionality/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/emoticons/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/example/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/example_dependency/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/fullpage/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/fullscreen/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/hr/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/image/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/imagetools/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/importcss/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/insertdatetime/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/layer/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/legacyoutput/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/link/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/lists/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/media/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/nonbreaking/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/noneditable/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/pagebreak/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/paste/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/preview/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/print/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/save/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/searchreplace/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/spellchecker/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/tabfocus/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/table/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/template/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/textcolor/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/textpattern/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/visualblocks/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/visualchars/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/plugins/wordcount/plugin.min.js')}} "></script>
<script src="{{asset('admin/plugin/tinymce/themes/modern/theme.min.js')}}"></script>
</body>
</html>
