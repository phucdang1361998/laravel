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

        <div class="shopping__cart">
            <div class="shopping__cart__inner">
                <div class="offsetmenu__close__btn">
                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                </div>
                <div class="shp__cart__wrap">
                    <div class="shp__single__product">
                        <div class="shp__pro__thumb">
                            <a href="#">
                                <img src="images/product/sm-img/1.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="shp__pro__details">
                            <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                            <span class="quantity">QTY: 1</span>
                            <span class="shp__price">$105.00</span>
                        </div>
                        <div class="remove__btn">
                            <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                        </div>
                    </div>
                    <div class="shp__single__product">
                        <div class="shp__pro__thumb">
                            <a href="#">
                                <img src="images/product/sm-img/2.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="shp__pro__details">
                            <h2><a href="product-details.html">Brone Candle</a></h2>
                            <span class="quantity">QTY: 1</span>
                            <span class="shp__price">$25.00</span>
                        </div>
                        <div class="remove__btn">
                            <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                        </div>
                    </div>
                </div>
                <ul class="shoping__total">
                    <li class="subtotal">Subtotal:</li>
                    <li class="total__price">$130.00</li>
                </ul>
                <ul class="shopping__btn">
                    <li><a href="cart.html">View Cart</a></li>
                    <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
                </ul>
            </div>
        </div>
        <!-- End Cart Panel -->
    </div>
    <!-- End Offset Wrapper -->
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area"
         style="background: rgba(0, 0, 0, 0) url(images/bg/2.jpg) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Chi tiết sản phẩm</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{route('clients.index')}}">Trang chủ</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb-item active">Chi tiết sản phẩm</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Product Details -->
    <section class="htc__product__details pt--120 pb--100 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="product__details__container">
                        <!-- Start Small images -->
                        <ul class="product__small__images" role="tablist">
                            <li role="presentation" class="pot-small-img active">
                                <a href="#img-tab-1" role="tab" data-toggle="tab">
                                    <img src="images/product-details/small-img/1.jpg" alt="small-image">
                                </a>
                            </li>
                        </ul>
                        <!-- End Small images -->
                        <div class="product__big__images">
                            <div class="portfolio-full-image tab-content">
                                <div role="tabpanel" class="tab-pane fade in active product-video-position"
                                     id="img-tab-1">
                                    <img src="{{asset($product['image'])}}" alt="full-image">
                                </div>
                                <div role="tabpanel" class="tab-pane fade product-video-position" id="img-tab-2">
                                    <img src="images/product-details/big-img/12.jpg" alt="full-image">
                                    <div class="product-video">
                                        <a class="video-popup" href="https://www.youtube.com/watch?v=cDDWvj_q-o8">
                                            <i class="zmdi zmdi-videocam"></i> View Video
                                        </a>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade product-video-position" id="img-tab-3">
                                    <img src="images/product-details/big-img/11.jpg" alt="full-image">
                                    <div class="product-video">
                                        <a class="video-popup" href="https://www.youtube.com/watch?v=cDDWvj_q-o8">
                                            <i class="zmdi zmdi-videocam"></i> View Video
                                        </a>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade product-video-position" id="img-tab-4">
                                    <img src="images/product-details/big-img/12.jpg" alt="full-image">
                                    <div class="product-video">
                                        <a class="video-popup" href="https://www.youtube.com/watch?v=cDDWvj_q-o8">
                                            <i class="zmdi zmdi-videocam"></i> View Video
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 smt-30 xmt-30">
                    <div class="htc__product__details__inner">
                        <div class="pro__detl__title">
                            <h2>{{$product['name']}}</h2>
                        </div>
                        <ul class="pro__dtl__prize">
                            <li class="old__prize">$15.21</li>
                            <li>$10.00</li>
                        </ul>
                        <div class="product-action-wrap">
                            <div class="prodict-statas"><span>Quantity :</span></div>
                            <div class="product-quantity">
                                <form id='myform' method='POST' action='#'>
                                    <div class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <ul class="pro__dtl__btn">
                            <li class="buy__now__btn"><a href="#">buy now</a></li>
                            <li><a href="#"><span class="ti-heart"></span></a></li>
                            <li><a href="#"><span class="ti-email"></span></a></li>
                        </ul>
                        <div class="pro__social__share">
                            <h2>Share :</h2>
                            <ul class="pro__soaial__link">
                                <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Details -->
    <!-- Start Product tab -->
    <section class="htc__product__details__tab bg__white pb--120">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <ul class="product__deatils__tab mb--60" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#description" role="tab" data-toggle="tab">Description</a>
                        </li>
                        <li role="presentation">
                            <a href="#sheet" role="tab" data-toggle="tab">Data sheet</a>
                        </li>
                        <li role="presentation">
                            <a href="#reviews" role="tab" data-toggle="tab">Reviews</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="product__details__tab__content">
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="description" class="product__tab__content fade in active">
                            <div class="product__description__wrap">
                                <div class="product__desc">
                                    <h2 class="title__6">Details</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        noexercit ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                        qui officia deserunt mollit anim id.</p>
                                </div>
                                <div class="pro__feature">
                                    <h2 class="title__6">Features</h2>
                                    <ul class="feature__list">
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Duis aute irure dolor in
                                                reprehenderit in voluptate velit esse</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Irure dolor in
                                                reprehenderit in voluptate velit esse</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Sed do eiusmod tempor
                                                incididunt ut labore et </a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Nisi ut aliquip ex ea
                                                commodo consequat.</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="sheet" class="product__tab__content fade">
                            <div class="pro__feature">
                                <h2 class="title__6">Data sheet</h2>
                                <ul class="feature__list">
                                    <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Duis aute irure dolor in
                                            reprehenderit in voluptate velit esse</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Irure dolor in reprehenderit in
                                            voluptate velit esse</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Irure dolor in reprehenderit in
                                            voluptate velit esse</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Sed do eiusmod tempor
                                            incididunt ut labore et </a></li>
                                    <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Sed do eiusmod tempor
                                            incididunt ut labore et </a></li>
                                    <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Nisi ut aliquip ex ea commodo
                                            consequat.</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Nisi ut aliquip ex ea commodo
                                            consequat.</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="reviews" class="product__tab__content fade">
                            <div class="review__address__inner">
                                <!-- Start Single Review -->
                                <div class="pro__review">
                                    <div class="review__thumb">
                                        <img src="images/review/1.jpg" alt="review images">
                                    </div>
                                    <div class="review__details">
                                        <div class="review__info">
                                            <h4><a href="#">Gerald Barnes</a></h4>
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star-half"></i></li>
                                                <li><i class="zmdi zmdi-star-half"></i></li>
                                            </ul>
                                            <div class="rating__send">
                                                <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                                <a href="#"><i class="zmdi zmdi-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="review__date">
                                            <span>27 Jun, 2016 at 2:30pm</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan
                                            egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget
                                            eni Praesent et messages in con sectetur posuere dolor non.</p>
                                    </div>
                                </div>
                                <!-- End Single Review -->
                                <!-- Start Single Review -->
                                <div class="pro__review ans">
                                    <div class="review__thumb">
                                        <img src="images/review/2.jpg" alt="review images">
                                    </div>
                                    <div class="review__details">
                                        <div class="review__info">
                                            <h4><a href="#">Gerald Barnes</a></h4>
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star-half"></i></li>
                                                <li><i class="zmdi zmdi-star-half"></i></li>
                                            </ul>
                                            <div class="rating__send">
                                                <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                                <a href="#"><i class="zmdi zmdi-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="review__date">
                                            <span>27 Jun, 2016 at 2:30pm</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan
                                            egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget
                                            eni Praesent et messages in con sectetur posuere dolor non.</p>
                                    </div>
                                </div>
                                <!-- End Single Review -->
                            </div>
                            <!-- Start RAting Area -->
                            <div class="rating__wrap">
                                <h2 class="rating-title">Write A review</h2>
                                <h4 class="rating-title-2">Your Rating</h4>
                                <div class="rating__list">
                                    <!-- Start Single List -->
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                    </ul>
                                    <!-- End Single List -->
                                    <!-- Start Single List -->
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                    </ul>
                                    <!-- End Single List -->
                                    <!-- Start Single List -->
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                    </ul>
                                    <!-- End Single List -->
                                    <!-- Start Single List -->
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                    </ul>
                                    <!-- End Single List -->
                                    <!-- Start Single List -->
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                    </ul>
                                    <!-- End Single List -->
                                </div>
                            </div>
                            <!-- End RAting Area -->
                            <div class="review__box">
                                <form id="review-form">
                                    <div class="single-review-form">
                                        <div class="review-box name">
                                            <input type="text" placeholder="Type your name">
                                            <input type="email" placeholder="Type your email">
                                        </div>
                                    </div>
                                    <div class="single-review-form">
                                        <div class="review-box message">
                                            <textarea placeholder="Write your review"></textarea>
                                        </div>
                                    </div>
                                    <div class="review-btn">
                                        <a class="fv-btn" href="#">submit review</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Single Content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('clients.footer')
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
