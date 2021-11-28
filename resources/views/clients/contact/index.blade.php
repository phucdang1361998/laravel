<?php
$cart = \Illuminate\Support\Facades\Session::get('cart');
?>
<!doctype html>
<html class="no-js" lang="en">
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
<!-- End Header Style -->
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
    <!-- Start Bradcaump area -->
    @foreach($slider as $slDtl)
        <div class="ht__bradcaump__area"
             style="background: rgba(0, 0, 0, 0) url({{asset($slDtl['image'])}}) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Liên hệ</h2>
                                <nav class="bradcaump-inner">
                                    <a class="breadcrumb-item" href="index.html">Trang chủ</a>
                                    <span class="brd-separetor">/</span>
                                    <span class="breadcrumb-item active">Liên hệ</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
<!-- End Bradcaump area -->
    <!-- Start Contact Area -->
    <section class="htc__contact__area ptb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="htc__contact__container">
                        <div class="htc__contact__address">
                            <h2 class="contact__title">Thông tin liên hệ</h2>
                            <div class="contact__address__inner">
                                <!-- Start Single Adress -->
                                <div class="single__contact__address">
                                    <div class="contact__icon">
                                        <span class="ti-location-pin"></span>
                                    </div>
                                    <div class="contact__details">
                                        <p>Địa chỉ : <br> 77, seventh avenue, Brat road USA.</p>
                                    </div>
                                </div>
                                <!-- End Single Adress -->
                            </div>
                            <div class="contact__address__inner">
                                <!-- Start Single Adress -->
                                <div class="single__contact__address">
                                    <div class="contact__icon">
                                        <span class="ti-mobile"></span>
                                    </div>
                                    <div class="contact__details">
                                        <p>Số điện thoại : <br>+012 345 678 102</p>
                                    </div>
                                </div>
                                <!-- End Single Adress -->
                                <!-- Start Single Adress -->
                                <div class="single__contact__address">
                                    <div class="contact__icon">
                                        <span class="ti-email"></span>
                                    </div>
                                    <div class="contact__details">
                                        <p>Email :<br>info@example.com</p>
                                    </div>
                                </div>
                                <!-- End Single Adress -->
                            </div>
                        </div>
                        @if($message)
                            @if(is_array($message))
                                @foreach($message as $detailMes)
                                    <p style="color: red">{{$detailMes}}</p>
                                @endforeach
                            @else
                                <p style="color: green">{{$message}}</p>
                            @endif
                        @endif
                        <div class="contact-form-wrap">
                            <div class="contact-title">
                                <h2 class="contact__title">Bạn cần hỗ trợ? Hãy gửi thông tin cho chúng tôi</h2>
                            </div>
                            <form action="{{route('admin.support.store')}}" method="post">
                                @csrf
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="text" name="name" placeholder="Tên của bạn">
                                        <input type="email" name="email" placeholder="Email của bạn">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box subject">
                                        <input type="number" name="phone" placeholder="Số điện thoại của bạn">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box message">
                                        <textarea name="description" placeholder="Nội dung"></textarea>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit" class="fv-btn">SEND</button>
                                </div>
                            </form>
                        </div>
                        <div class="form-output">
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 smt-30 xmt-30">
                    <div class="map-contacts">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d411.7905635629731!2d106.7069876067998!3d10.915384244087292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d7a74d240e29%3A0x633497fe01250a0d!2sNAPOLI%20COFFEE!5e0!3m2!1svi!2ssg!4v1635686949987!5m2!1svi!2ssg"
                            width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('clients.footer')
<!-- End Footer Area -->
</div>
<!-- Body main wrapper end -->
<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal__container" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <!-- Start product images -->
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="big images" src="images/product/big-img/1.jpg">
                            </div>
                        </div>
                        <!-- end product images -->
                        <div class="product-info">
                            <h1>Simple Fabric Bags</h1>
                            <div class="rating__and__review">
                                <ul class="rating">
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                </ul>
                                <div class="review">
                                    <a href="#">4 customer reviews</a>
                                </div>
                            </div>
                            <div class="price-box-3">
                                <div class="s-price-box">
                                    <span class="new-price">$17.20</span>
                                    <span class="old-price">$45.00</span>
                                </div>
                            </div>
                            <div class="quick-desc">
                                Designed for simplicity and made from high quality materials. Its sleek geometry and
                                material combinations creates a modern look.
                            </div>
                            <div class="select__color">
                                <h2>Select color</h2>
                                <ul class="color__list">
                                    <li class="red"><a title="Red" href="#">Red</a></li>
                                    <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                    <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                    <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                </ul>
                            </div>
                            <div class="select__size">
                                <h2>Select size</h2>
                                <ul class="color__list">
                                    <li class="l__size"><a title="L" href="#">L</a></li>
                                    <li class="m__size"><a title="M" href="#">M</a></li>
                                    <li class="s__size"><a title="S" href="#">S</a></li>
                                    <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                    <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                                </ul>
                            </div>
                            <div class="social-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Share this product</h3>
                                    <ul class="social-icons">
                                        <li><a target="_blank" title="rss" href="#" class="rss social-icon"><i
                                                    class="zmdi zmdi-rss"></i></a></li>
                                        <li><a target="_blank" title="Linkedin" href="#" class="linkedin social-icon"><i
                                                    class="zmdi zmdi-linkedin"></i></a></li>
                                        <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i
                                                    class="zmdi zmdi-pinterest"></i></a></li>
                                        <li><a target="_blank" title="Tumblr" href="#" class="tumblr social-icon"><i
                                                    class="zmdi zmdi-tumblr"></i></a></li>
                                        <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i
                                                    class="zmdi zmdi-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="addtocart-btn">
                                <a href="#">Add to cart</a>
                            </div>
                        </div><!-- .product-info -->
                    </div><!-- .modal-product -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- END Modal -->
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
