<!DOCTYPE html>
<head>
    <title>Đăng nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    @extends('admin.link')
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
</html>
