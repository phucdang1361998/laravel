<?php
$cart = \Illuminate\Support\Facades\Session::get('cart');
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tmart-Minimalist eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/core.css')}}">
    <link rel="stylesheet" href="{{asset('css/shortcode/shortcodes.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class="wrapper fixed__footer">
    @include('clients.header')
    <div class="body__overlay"></div>
    <!-- Start Offset Wrapper -->
    <div class="offset__wrapper">
        <!-- Start Search Popap -->
        <div class="search__area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search__inner">
                            <form action="#" method="get">
                                <input placeholder="Search here... " type="text">
                                <button type="submit"></button>
                            </form>
                            <div class="search__close__btn">
                                <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Cart Panel -->
        <div class="shopping__cart">
            <div class="shopping__cart__inner">
                <div class="offsetmenu__close__btn">
                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                </div>
                <div class="shp__cart__wrap">
                    @if($cart)
                        <?php
                        $total = array_reduce($cart, function ($total, $value) {
                            return $total + $value['price'];
                        }, 0)
                        ?>
                        @foreach($cart as $cartDtl)
                            <div class="shp__single__product">
                                <div class="shp__pro__thumb">
                                    <a href="#">
                                        <img src="{{asset($cartDtl['image'])}}" alt="product images">
                                    </a>
                                </div>
                                <div class="shp__pro__details">
                                    <h2>
                                        <a href="{{route('clients.product.detail',['id'=>$cartDtl['id']])}}">{{$cartDtl['name']}}</a>
                                    </h2>
                                    <span class="quantity">{{$cartDtl['quantity']}}</span>
                                    <span class="shp__price">{{number_format($cartDtl['price'])}}</span>
                                </div>
                                <div class="remove__btn">
                                    <a href="{{route('clients.shopping-cart.insert',['id' => $cartDtl,'delete' => 1])}}" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                                </div>
                            </div>
                        @endforeach
                </div>
                <ul class="shoping__total">
                    <li class="subtotal">Tổng tiền:</li>
                    <li class="total__price">{{number_format($total)}}</li>
                </ul>
                @endif
                <ul class="shopping__btn">
                    <li><a href="{{route('clients.shopping-cart.index')}}">Giỏ hàng</a></li>
                    <li class="shp__checkout"><a href="{{route('clients.checkout.index')}}">Thanh toán</a></li>
                </ul>
            </div>
        </div>
        <!-- End Cart Panel -->
    </div>
    <!-- End Offset Wrapper -->
    @foreach($slider as $slDtl)
        <div class="ht__bradcaump__area"
             style="background: rgba(0, 0, 0, 0) url({{asset($slDtl['image'])}}) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Giới thiệu</h2>
                                <nav class="bradcaump-inner">
                                    <a class="breadcrumb-item" href="{{route('clients.index')}}">Trang chủ</a>
                                    <span class="brd-separetor">/</span>
                                    <span class="breadcrumb-item active">About Us</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
<!-- End Bradcaump area -->
    <!-- Start Our Store Area -->
    <section class="htc__store__area ptb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section__title section__title--2 text-center">
                        <h2 class="title__line">{{$about['title']}}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore gna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat.</p>
                    </div>
                    <div class="store__btn">
                        <a href="#">contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Store Area -->
    <!-- Start Choose Us Area -->
    <section class="htc__choose__us__ares bg__white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="video__wrap bg--3" data--black__overlay="5">
                        <div class="video__inner">
                            <a class="video__trigger video-popup" href="https://www.youtube.com/watch?v=cDDWvj_q-o8">
                                <i class="zmdi zmdi-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="htc__choose__wrap bg__cat--4">
                        <h2 class="choose__title">Why Choose Us?</h2>
                        <div class="choose__container">
                            <div class="single__chooose">
                                <div class="choose__us">
                                    <div class="choose__icon">
                                        <span class="ti-heart"></span>
                                    </div>
                                    <div class="choose__details">
                                        <h4>Free Gift Box</h4>
                                        <p>Lorem ipsum dolor sit amet consect adipisic elit sed do. </p>
                                    </div>
                                </div>
                                <div class="choose__us">
                                    <div class="choose__icon">
                                        <span class="ti-truck"></span>
                                    </div>
                                    <div class="choose__details">
                                        <h4>Free Delivery</h4>
                                        <p>Lorem ipsum dolor sit amet consect adipisic elit sed do. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="single__chooose">
                                <div class="choose__us">
                                    <div class="choose__icon">
                                        <span class="ti-reload"></span>
                                    </div>
                                    <div class="choose__details">
                                        <h4>Money Back</h4>
                                        <p>Lorem ipsum dolor sit amet consect adipisic elit sed do. </p>
                                    </div>
                                </div>
                                <div class="choose__us">
                                    <div class="choose__icon">
                                        <span class="ti-time"></span>
                                    </div>
                                    <div class="choose__details">
                                        <h4>Support 24/7</h4>
                                        <p>Lorem ipsum dolor sit amet consect adipisic elit sed do. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Choose Us Area -->
    <!-- Start Our Team Area -->
    <section class="htc__team__area bg__white ptb--120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section__title section__title--2 text-center">
                        <h2 class="title__line">Our Staff</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut
                            labo.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team__wrap clearfix mt--60">
                    <!-- Start Single Team -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="team foo">
                            <div class="team__thumb">
                                <a href="#">
                                    <img src="images/team/1.jpg" alt="team images">
                                </a>
                            </div>
                            <div class="team__bg__color"></div>
                            <div class="team__hover__info">
                                <div class="team__hover__action">
                                    <h2><a href="#">Robiul siddikee</a></h2>
                                    <ul class="social__icon">
                                        <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Team -->
                    <!-- Start Single Team -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 xmt-30">
                        <div class="team foo">
                            <div class="team__thumb">
                                <a href="#">
                                    <img src="images/team/2.jpg" alt="team images">
                                </a>
                            </div>
                            <div class="team__bg__color"></div>
                            <div class="team__hover__info">
                                <div class="team__hover__action">
                                    <h2><a href="#">Robiul siddikee</a></h2>
                                    <ul class="social__icon">
                                        <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Team -->
                    <!-- Start Single Team -->
                    <div class="col-md-4 col-lg-4 hidden-sm col-xs-12 xmt-30">
                        <div class="team foo">
                            <div class="team__thumb">
                                <a href="#">
                                    <img src="images/team/4.jpg" alt="team images">
                                </a>
                            </div>
                            <div class="team__bg__color"></div>
                            <div class="team__hover__info">
                                <div class="team__hover__action">
                                    <h2><a href="#">Robiul siddikee</a></h2>
                                    <ul class="social__icon">
                                        <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Team -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Team Area -->
    <!-- Start Testimonial Area -->
    <div class="htc__testimonial__area ptb--120"
         style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;"
         data--black__overlay="6">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="testimonial__wrap owl-carousel owl-theme clearfix">
                        <!-- Start Single Testimonial -->
                        <div class="testimonial">
                            <div class="testimonial__thumb">
                                <img src="images/test/client/1.png" alt="testimonial images">
                            </div>
                            <div class="testimonial__details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod teincidi dunt
                                    ut labore et dolore gna aliqua. Ut enim ad minim veniam,</p>
                                <div class="test__info">
                                    <span><a href="#">Robiul siddikee</a></span>
                                    <span> - </span>
                                    <span>Customer</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial -->
                        <!-- Start Single Testimonial -->
                        <div class="testimonial">
                            <div class="testimonial__thumb">
                                <img src="images/test/client/2.png" alt="testimonial images">
                            </div>
                            <div class="testimonial__details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod teincidi dunt
                                    ut labore et dolore gna aliqua. Ut enim ad minim veniam,</p>
                                <div class="test__info">
                                    <span><a href="#">Robiul siddikee</a></span>
                                    <span> - </span>
                                    <span>Customer</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial -->
                        <!-- Start Single Testimonial -->
                        <div class="testimonial">
                            <div class="testimonial__thumb">
                                <img src="images/test/client/3.png" alt="testimonial images">
                            </div>
                            <div class="testimonial__details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod teincidi dunt
                                    ut labore et dolore gna aliqua. Ut enim ad minim veniam,</p>
                                <div class="test__info">
                                    <span><a href="#">Robiul siddikee</a></span>
                                    <span> - </span>
                                    <span>Customer</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Area -->
    <!-- Start brand Area -->
    <div class="htc__brand__area bg__white ptb--120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="brand__list">
                        <li><a href="#">
                                <img src="images/brand/1.png" alt="brand images">
                            </a></li>
                        <li><a href="#">
                                <img src="images/brand/2.png" alt="brand images">
                            </a></li>
                        <li><a href="#">
                                <img src="images/brand/3.png" alt="brand images">
                            </a></li>
                        <li><a href="#">
                                <img src="images/brand/4.png" alt="brand images">
                            </a></li>
                        <li class="hidden-sm"><a href="#">
                                <img src="images/brand/5.png" alt="brand images">
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End brand Area -->
    <!-- Start Footer Area -->
    <footer class="htc__foooter__area gray-bg">
        <div class="container">
            <div class="row">
                <div class="footer__container clearfix">
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-lg-3 col-sm-6">
                        <div class="ft__widget">
                            <div class="ft__logo">
                                <a href="index.html">
                                    <img src="images/logo/logo.png" alt="footer logo">
                                </a>
                            </div>
                            <div class="footer-address">
                                <ul>
                                    <li>
                                        <div class="address-icon">
                                            <i class="zmdi zmdi-pin"></i>
                                        </div>
                                        <div class="address-text">
                                            <p>194 Main Rd T, FS Rayed <br> VIC 3057, USA</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-icon">
                                            <i class="zmdi zmdi-email"></i>
                                        </div>
                                        <div class="address-text">
                                            <a href="#"> info@example.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-icon">
                                            <i class="zmdi zmdi-phone-in-talk"></i>
                                        </div>
                                        <div class="address-text">
                                            <p>+012 345 678 102 </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <ul class="social__icon">
                                <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-lg-2 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">Categories</h2>
                            <ul class="footer-categories">
                                <li><a href="shop-sidebar.html">Men</a></li>
                                <li><a href="shop-sidebar.html">Women</a></li>
                                <li><a href="shop-sidebar.html">Accessories</a></li>
                                <li><a href="shop-sidebar.html">Shoes</a></li>
                                <li><a href="shop-sidebar.html">Dress</a></li>
                                <li><a href="shop-sidebar.html">Denim</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-lg-2 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">Infomation</h2>
                            <ul class="footer-categories">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Returns & Exchanges</a></li>
                                <li><a href="#">Shipping & Delivery</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-lg-3 col-lg-offset-1 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">Newsletter</h2>
                            <div class="newsletter__form">
                                <p>Subscribe to our newsletter and get 10% off your first purchase .</p>
                                <div class="input__box">
                                    <div id="mc_embed_signup">
                                        <form action="#" method="post" id="mc-embedded-subscribe-form"
                                              name="mc-embedded-subscribe-form" class="validate" target="_blank"
                                              novalidate>
                                            <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                                <div class="news__input">
                                                    <input type="email" value="" name="EMAIL" class="email"
                                                           id="mce-EMAIL" placeholder="Email Address" required>
                                                </div>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                                    <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef"
                                                           tabindex="-1" value=""></div>
                                                <div class="clearfix subscribe__btn"><input type="submit" value="Send"
                                                                                            name="subscribe"
                                                                                            id="mc-embedded-subscribe"
                                                                                            class="bst__btn btn--white__color">

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                </div>
            </div>
            <!-- Start Copyright Area -->
            <div class="htc__copyright__area">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="copyright__inner">
                            <div class="copyright">
                                <p>© 2017 <a href="https://freethemescloud.com/">Free themes Cloud</a>
                                    All Right Reserved.</p>
                            </div>
                            <ul class="footer__menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop.html">Product</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area -->
        </div>
    </footer>
    <!-- End Footer Area -->
</div>
<script src="{{asset('js/vendor/jquery-1.12.0.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

</body>

</html>
