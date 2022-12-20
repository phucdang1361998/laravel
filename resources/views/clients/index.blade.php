<?php
$cart = \Illuminate\Support\Facades\Session::get('cart');
?>
    <!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Store Clothes</title>
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
                            <form action="{{route('clients.product.index')}}" method="get">
                                <input placeholder="Tìm kiếm sản phẩm" type="text" name="name">
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
                                    <a href="{{route('clients.shopping-cart.insert',['id' => $cartDtl,'delete' => 1])}}"
                                       title="Remove this item"><i class="zmdi zmdi-close"></i></a>
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
    <!-- Start Feature Product -->
    <section class="categories-slider-area bg__white">
        <div class="container">
            <div class="row">
                <!-- Start Left Feature -->
                <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12 float-left-style">
                    <!-- Start Slider Area -->
                    <div class="slider__container slider--one">
                        <div class="slider__activation__wrap owl-carousel owl-theme">
                            <!-- Start Single Slide -->
                            @foreach($slider as $sliDtl)
                                <div class="slide slider__full--screen slider-height-inherit slider-text-right"
                                     style="background: rgba(0, 0, 0, 0) url({{$sliDtl['image']}}) no-repeat scroll center center / cover ;">
                                    <div class="container">
                                        <div class="row">
                                            <div
                                                class="col-md-10 col-lg-8 col-md-offset-2 col-lg-offset-4 col-sm-12 col-xs-12">
                                                <div class="slider__inner">
                                                    <h1>{{$sliDtl['title1']}}<span
                                                            class="text--theme">{{$sliDtl['title2']}}</span></h1>
                                                    <div class="slider__btn">
                                                        <a class="htc__btn" href="{{route('clients.product.index')}}">shop
                                                            now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Start Slider Area -->
                </div>
                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 float-right-style">
                    <div class="categories-menu mrg-xs">
                        <div class="category-heading">
                            <h3> Browse Categories</h3>
                        </div>
                        <div class="category-menu-list">
                            <ul>
                                <li><a href="#"><img alt="" src="images/icons/thum2.png"> Women’s Clothing <i
                                            class="zmdi zmdi-chevron-right"></i></a>
                                    <div class="category-menu-dropdown">
                                        <div class="category-part-1 category-common mb--30">
                                            <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                            <ul>
                                                <li><a href="#"> Men’s Clothing</a></li>
                                                <li><a href="#"> Computer & Office</a></li>
                                                <li><a href="#"> Jewelry & Watches</a></li>
                                                <li><a href="#"> Bags & Shoes</a></li>
                                                <li><a href="#"> Phones & Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="category-part-2 category-common mb--30">
                                            <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                            <ul>
                                                <li><a href="#"> Men’s Clothing</a></li>
                                                <li><a href="#"> Computer & Office</a></li>
                                                <li><a href="#"> Jewelry & Watches</a></li>
                                                <li><a href="#"> Bags & Shoes</a></li>
                                                <li><a href="#"> Phones & Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="category-part-3 category-common">
                                            <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                            <ul>
                                                <li><a href="#"> Men’s Clothing</a></li>
                                                <li><a href="#"> Computer & Office</a></li>
                                                <li><a href="#"> Jewelry & Watches</a></li>
                                                <li><a href="#"> Bags & Shoes</a></li>
                                                <li><a href="#"> Phones & Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="category-part-4 category-common">
                                            <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                            <ul>
                                                <li><a href="#"> Men’s Clothing</a></li>
                                                <li><a href="#"> Computer & Office</a></li>
                                                <li><a href="#"> Jewelry & Watches</a></li>
                                                <li><a href="#"> Bags & Shoes</a></li>
                                                <li><a href="#"> Phones & Accessories</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img alt="" src="images/icons/thum3.png"> Man Fashion <i
                                            class="zmdi zmdi-chevron-right"></i></a>
                                    <div class="category-menu-dropdown">
                                        <div class="category-part-1 category-common2 mb--30">
                                            <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                            <ul>
                                                <li><a href="#"> Men’s Clothing</a></li>
                                                <li><a href="#"> Computer & Office</a></li>
                                                <li><a href="#"> Jewelry & Watches</a></li>
                                                <li><a href="#"> Bags & Shoes</a></li>
                                                <li><a href="#"> Phones & Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="category-part-2 category-common2 mb--30">
                                            <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                            <ul>
                                                <li><a href="#"> Men’s Clothing</a></li>
                                                <li><a href="#"> Computer & Office</a></li>
                                                <li><a href="#"> Jewelry & Watches</a></li>
                                                <li><a href="#"> Bags & Shoes</a></li>
                                                <li><a href="#"> Phones & Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="category-part-3 category-common2 mb--30">
                                            <h4 class="categories-subtitle">dress</h4>
                                            <ul>
                                                <li><a href="#"> Men’s Clothing</a></li>
                                                <li><a href="#"> Computer & Office</a></li>
                                                <li><a href="#"> Jewelry & Watches</a></li>
                                                <li><a href="#"> Bags & Shoes</a></li>
                                                <li><a href="#"> Phones & Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-banner-img">
                                            <a href="single-product.html">
                                                <img src="images/feature-img/5.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img alt="" src="images/icons/thum4.png"> Computer & Office <i
                                            class="zmdi zmdi-chevron-right"></i></a>
                                    <div class="category-menu-dropdown">
                                        <div class="category-menu-dropdown-top">
                                            <div class="category-part-1 category-common2 mb--30">
                                                <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer & Office</a></li>
                                                    <li><a href="#"> Jewelry & Watches</a></li>
                                                    <li><a href="#"> Bags & Shoes</a></li>
                                                    <li><a href="#"> Phones & Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-2 category-common2 mb--30">
                                                <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer & Office</a></li>
                                                    <li><a href="#"> Jewelry & Watches</a></li>
                                                    <li><a href="#"> Bags & Shoes</a></li>
                                                    <li><a href="#"> Phones & Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-3 category-common2 mb--30">
                                                <h4 class="categories-subtitle">Jewelry & Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer & Office</a></li>
                                                    <li><a href="#"> Jewelry & Watches</a></li>
                                                    <li><a href="#"> Bags & Shoes</a></li>
                                                    <li><a href="#"> Phones & Accessories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="category-menu-dropdown-bottom">
                                            <div class="single-category-brand">
                                                <a href="#"><img src="images/brand/6.png" alt=""></a>
                                            </div>
                                            <div class="single-category-brand">
                                                <a href="#"><img src="images/brand/7.png" alt=""></a>
                                            </div>
                                            <div class="single-category-brand">
                                                <a href="#"><img src="images/brand/8.png" alt=""></a>
                                            </div>
                                            <div class="single-category-brand">
                                                <a href="#"><img src="images/brand/9.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img alt="" src="images/icons/thum5.png"> Jewelry & Watches <i
                                            class="zmdi zmdi-chevron-right"></i></a>
                                    <div class="category-menu-dropdown">
                                        <div class="category-menu-dropdown-left">
                                            <div class="category-part-1 category-common mb--30">
                                                <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer & Office</a></li>
                                                    <li><a href="#"> Jewelry & Watches</a></li>
                                                    <li><a href="#"> Bags & Shoes</a></li>
                                                    <li><a href="#"> Phones & Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-2 category-common mb--30">
                                                <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer & Office</a></li>
                                                    <li><a href="#"> Jewelry & Watches</a></li>
                                                    <li><a href="#"> Bags & Shoes</a></li>
                                                    <li><a href="#"> Phones & Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-3 category-common">
                                                <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer & Office</a></li>
                                                    <li><a href="#"> Jewelry & Watches</a></li>
                                                    <li><a href="#"> Bags & Shoes</a></li>
                                                    <li><a href="#"> Phones & Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-4 category-common">
                                                <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer & Office</a></li>
                                                    <li><a href="#"> Jewelry & Watches</a></li>
                                                    <li><a href="#"> Bags & Shoes</a></li>
                                                    <li><a href="#"> Phones & Accessories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="category-menu-dropdown-right">
                                            <div class="menu-right-img">
                                                <a href="#"><img src="images/feature-img/2.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img alt="" src="images/icons/thum6.png"> Men’s Clothing <i
                                            class="zmdi zmdi-chevron-right"></i></a>
                                    <div class="category-menu-dropdown">
                                        <div class="category-menu-dropdown-left">
                                            <div class="category-part-1 category-common">
                                                <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer & Office</a></li>
                                                    <li><a href="#"> Jewelry & Watches</a></li>
                                                    <li><a href="#"> Bags & Shoes</a></li>
                                                    <li><a href="#"> Phones </a></li>
                                                    <li><a href="#"> Computer & Office</a></li>
                                                    <li><a href="#"> Phones & Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-2 category-common">
                                                <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                                                <ul>
                                                    <li><a href="#"> Men’s Clothing</a></li>
                                                    <li><a href="#"> Computer & Office</a></li>
                                                    <li><a href="#"> Jewelry & Watches</a></li>
                                                    <li><a href="#"> Bags & Shoes</a></li>
                                                    <li><a href="#"> Phones </a></li>
                                                    <li><a href="#"> Computer & Office</a></li>
                                                    <li><a href="#"> Phones & Accessories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="category-menu-dropdown-right">
                                            <div class="menu-right-img">
                                                <a href="#"><img src="images/feature-img/1.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img alt="" src="images/icons/thum7.png"> Bags & Shoes</a></li>
                                <li><a href="#"><img alt="" src="images/icons/thum8.png"> Toys & Kids & Baby</a></li>
                                <li><a href="#"><img alt="" src="images/icons/thum9.png"> Automobiles </a></li>
                                <li><a href="#"><img alt="" src="images/icons/thum10.png"> Jewelry & Watches</a></li>
                                <li><a href="#"><img alt="" src="images/icons/thum2.png"> Consumer Electronics</a></li>
                                <li><a href="#"><img alt="" src="images/icons/thum3.png"> all Accessories</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Left Feature -->
            </div>
        </div>
    </section>

    @foreach($category as $cateDtl)
        <div class="only-banner ptb--40 bg__white">
        </div>
        <section class="htc__product__area bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="product-categories-all">
                            <div class="product-categories-title">
                                <h3>{{$cateDtl['name']}}</h3>
                            </div>
                            <div class="product-categories-menu">
                                <ul>
                                    @foreach($category as $detail)
                                        <li><a href="#">{{$detail['name']}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="product-style-tab">
                            <div class="product-tab-list">
                                <!-- Nav tabs -->
                                <ul class="tab-style" role="tablist">
                                    <li class="active">
                                        <a href="#home1" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>latest </h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#home2" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>best sale </h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#home3" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>top rated</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#home4" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>on sale</h4>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content another-product-style jump">
                                <div class="tab-pane active" id="home1">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">
                                            @foreach($product->where('product_type_id', $cateDtl['id']) as $proDtl)
                                                <div
                                                    class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                    <div class="product">
                                                        <div class="product__inner">
                                                            <div class="pro__thumb">
                                                                <a href="#">
                                                                    <img src="{{$proDtl['image']}}"
                                                                         alt="product images">
                                                                </a>
                                                            </div>
                                                            <div class="product__hover__info">
                                                                <ul class="product__action">
                                                                    <li><a data-toggle="modal"
                                                                           data-target="#productModal"
                                                                           title="Quick View"
                                                                           class="quick-view modal-view detail-link"
                                                                           href="#"><span
                                                                                class="ti-plus"></span></a>
                                                                    </li>
                                                                    <li><a title="Add TO Cart"
                                                                           href="cart.html"><span
                                                                                class="ti-shopping-cart"></span></a>
                                                                    </li>
                                                                    <li><a title="Wishlist"
                                                                           href="wishlist.html"><span
                                                                                class="ti-heart"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product__details">
                                                            <h2>
                                                                <a href="product-details.html">{{$proDtl['name']}}</a>
                                                            </h2>
                                                            <ul class="product__price">
                                                                @if($proDtl['sale_off'])
                                                                    <li class="old__price">{{number_format($proDtl['price'])}}</li>
                                                                    <li class="new__price">{{number_format($proDtl['price_sale'])}}</li>
                                                                @else
                                                                    <li class="new__price">{{number_format($proDtl['price'])}}</li>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
    <section class="htc__blog__area bg__white pb--130"></section>
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
