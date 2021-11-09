<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
    <link rel="stylesheet" href="{{asset('admin/styles/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugin/waves/waves.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/fonts/material-design/css/materialdesignicons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugin/sweet-alert/sweetalert.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugin/toastr/toastr.css')}}">

</head>

<body>

<div id="single-wrapper">
    <form action="{{route('login')}}" method="post" class="frm-single">
        @csrf
        <div class="inside">
            <div class="title"><strong>Admin</strong></div>
            <!-- /.title -->
            <div class="frm-title">Login</div>
        <!-- /.frm-title -->
            <?php
            $message = \Illuminate\Support\Facades\Session::get('message');
            ?>
            @if($message)
                <tr>
                    <td id="showToast">
                        {{$message}}
                    </td>
                </tr>
            @endif
            <div class="frm-input"><input type="text" placeholder="Username" name="email" class="frm-inp"><i
                    class="fa fa-user frm-ico"></i></div>
            <!-- /.frm-input -->
            <div class="frm-input"><input type="password" placeholder="Password" name="password" class="frm-inp"><i
                    class="fa fa-lock frm-ico"></i></div>
            <!-- /.frm-input -->
            <div class="clearfix margin-bottom-20">
                <div class="pull-left">
                    <div class="checkbox primary"><input type="checkbox" id="rememberme"><label for="rememberme">Remember
                            me</label></div>
                    <!-- /.checkbox -->
                </div>
                <!-- /.pull-left -->
                <div class="pull-right"><a href="page-recoverpw.html" class="a-link"><i class="fa fa-unlock-alt"></i>Forgot
                        password?</a></div>
                <!-- /.pull-right -->
            </div>
            <!-- /.clearfix -->
            <button type="submit" class="frm-submit">Login<i class="fa fa-arrow-circle-right"></i></button>
            <!-- .inside -->
    </form>
    <!-- /.frm-single -->
</div><!--/#single-wrapper -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="{{asset('assets/script/html5shiv.min.js')}}"></script>
    <script src="{{asset('assets/script/respond.min.js')}}"></script>
<![endif]-->
<!--
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('assets/scripts/jquery.min.js')}}"></script>
<script src="{{asset('assets/scripts/modernizr.min.js')}}"></script>
<script src="{{asset('assets/plugin/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugin/nprogress/nprogress.js')}}"></script>
<script src="{{asset('assets/plugin/waves/waves.min.js')}}"></script>

<script src="{{asset('assets/scripts/main.min.js')}}"></script>
</body>
</html>
