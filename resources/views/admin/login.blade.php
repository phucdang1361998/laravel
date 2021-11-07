<!DOCTYPE html>
<head>
    <title>Đăng nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link href="{{asset('admin/css/style.css')}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet"/>
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('admin/css/font.css')}}" type="text/css"/>
    <link href="{{asset('admin/css/font-awesome.css')}}" rel="stylesheet">
</head>
<body>
<div class="log-w3">
    <div class="w3layouts-main">
        <h2>ĐĂNG NHẬP</h2>
        <form action="{{route('login')}}" method="post">
            @csrf
            <input type="email" class="ggg" name="email" placeholder="E-MAIL" required>
            <input type="password" class="ggg" name="password" placeholder="Mật khẩu" required>
            <span><input type="checkbox"/>Nhớ mật khẩu</span>
            <h6><a href="#">Quên mật khẩu</a></h6>
            <div class="clearfix"></div>
            <input type="submit" value="Đăng nhập" name="login">
        </form>
{{--        <p>Don't Have an Account ?<a href="registration.html">Create an account</a></p>--}}
    </div>
</div>
</body>
<script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    } </script>
<script src="{{asset('admin/js/jquery2.0.3.min.js')}}"></script>
<script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    } </script>

<script src="{{asset('admin/js/bootstrap.js')}}"></script>
<script src="{{asset('admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('admin/js/scripts.js')}}"></script>
<script src="{{asset('admin/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('admin/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]>
<script language="javascript" type="text/javascript" src="{{('admin/js/flot-chart/excanvas.min.js')}}"></script><![endif]-->
<script src="{{asset('admin/js/jquery.scrollTo.js')}}"></script>
</html>
