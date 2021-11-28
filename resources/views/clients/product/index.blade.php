<?php
$cart = \Illuminate\Support\Facades\Session::get('cart');
?>
    <!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MAP MAP STORE | Sản phẩm</title>
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
        <!-- End Search Popap -->
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
                                <h2 class="bradcaump-title">Sản Phẩm</h2>
                                <nav class="bradcaump-inner">
                                    <a class="breadcrumb-item" href="{{route('clients.index')}}">Trang chủ</a>
                                    <span class="brd-separetor">/</span>
                                    <span class="breadcrumb-item active">Sản phẩm</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
<!-- End Bradcaump area -->
    <!-- Start Our Product Area -->
    <section class="htc__product__area shop__page ptb--130 bg__white">
        <div class="container">
            <div class="htc__product__container">
                <!-- Start Product MEnu -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter__menu__container">
                            <div class="product__menu">
                                <button data-filter="*" class="is-checked">All</button>
                                @foreach($category as $cateDtl)
                                    <button data-filter="{{'.'.$cateDtl['code']}}">{{$cateDtl['name']}}</button>
                                @endforeach
                            </div>
                            <div class="filter__box">
                                <a class="filter__menu" href="#">filter</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Filter Menu -->
                <div class="filter__wrap">
                    <div class="filter__cart">
                        <div class="filter__cart__inner">
                            <div class="filter__menu__close__btn">
                                <a href="#"><i class="zmdi zmdi-close"></i></a>
                            </div>
                            <div class="filter__content">
                                <!-- Start Single Content -->
                                <div class="fiter__content__inner">
                                    <div class="single__filter">
                                        <h2>Sort By</h2>
                                        <ul class="filter__list">
                                            <li><a href="#default">Default</a></li>
                                            <li><a href="#accessories">Accessories</a></li>
                                            <li><a href="#bags">Bags</a></li>
                                            <li><a href="#chair">Chair</a></li>
                                            <li><a href="#decoration">Decoration</a></li>
                                            <li><a href="#fashion">Fashion</a></li>
                                        </ul>
                                    </div>
                                    <div class="single__filter">
                                        <h2>Size</h2>
                                        <ul class="filter__list">
                                            <li><a href="#xxl">XXL</a></li>
                                            <li><a href="#xl">XL</a></li>
                                            <li><a href="#x">X</a></li>
                                            <li><a href="#l">L</a></li>
                                            <li><a href="#m">M</a></li>
                                            <li><a href="#s">S</a></li>
                                        </ul>
                                    </div>
                                    <div class="single__filter">
                                        <h2>Tags</h2>
                                        <ul class="filter__list">
                                            <li><a href="#">All</a></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Chair</a></li>
                                            <li><a href="#">Decoration</a></li>
                                            <li><a href="#">Fashion</a></li>
                                        </ul>
                                    </div>
                                    <div class="single__filter">
                                        <h2>Price</h2>
                                        <ul class="filter__list">
                                            <li><a href="#">$0.00 - $50.00</a></li>
                                            <li><a href="#">$50.00 - $100.00</a></li>
                                            <li><a href="#">$100.00 - $150.00</a></li>
                                            <li><a href="#">$150.00 - $200.00</a></li>
                                            <li><a href="#">$300.00 - $500.00</a></li>
                                            <li><a href="#">$500.00 - $700.00</a></li>
                                        </ul>
                                    </div>
                                    <div class="single__filter">
                                        <h2>Color</h2>
                                        <ul class="filter__list sidebar__list">
                                            <li class="black"><a href="#"><i class="zmdi zmdi-circle"></i>Black</a></li>
                                            <li class="blue"><a href="#"><i class="zmdi zmdi-circle"></i>Blue</a></li>
                                            <li class="brown"><a href="#"><i class="zmdi zmdi-circle"></i>Brown</a></li>
                                            <li class="red"><a href="#"><i class="zmdi zmdi-circle"></i>Red</a></li>
                                            <li class="orange"><a href="#"><i class="zmdi zmdi-circle"></i>Orange</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Content -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Filter Menu -->
                <!-- End Product MEnu -->
                <div class="row">
                    <div class="product__list another-product-style">
                        @foreach($product as $proDtl)
                            <div class="col-md-3 single__pro col-lg-3 {{$proDtl->type->code}} col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="{{route('clients.product.detail',['id' => $proDtl['id']])}}">
                                                <img src="{{asset($proDtl['image'])}}" alt="product images">
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a onclick="" data-toggle="modal" data-target="#productModal"
                                                       title="Quick View"
                                                       class="quick-view modal-view detail-link" href="#"  data-product="{{$proDtl}}"><span
                                                            class="ti-plus"></span></a></li>
                                                <li><a title="Add TO Cart"
                                                       href="{{route('clients.shopping-cart.insert',['id' => $proDtl])}}"><span
                                                            class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Wishlist" href="wishlist.html"><span
                                                            class="ti-heart"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2>
                                            <a href="{{route('clients.product.detail',['id' => $proDtl['id']])}}">{{$proDtl['name']}}</a>
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
            <!-- Start Load More BTn -->
            <div class="row mt--60">
                <div class="col-md-12">
                    <div class="row">{{ $product->links('vendor.pagination.clients') }}</div>
                </div>
            </div>
            <!-- End Load More BTn -->
        </div>
    </section>
    @include('clients.footer')
</div>
<!-- Body main wrapper end -->
<!-- QUICKVIEW PRODUCT -->
@if($proDtl)
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
                                <img alt="big images" src="{{asset($proDtl['image'])}}">
                            </div>
                        </div>
                        <!-- end product images -->
                        <div class="product-info">
                            <h1>{{$proDtl['name']}}</h1>
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
                                    <span class="new-price">{{$proDtl['price']}}</span>
                                    <span class="old-price">$45.00</span>
                                </div>
                            </div>
                            <div class="quick-desc">
                                Designed for simplicity and made from high quality materials. Its sleek geometry and
                                material combinations creates a modern look.
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
@endif
<script src="{{asset('js/vendor/jquery-1.12.0.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

</body>

</html>
