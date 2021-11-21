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
                @if($cart)
                    <div class="shp__cart__wrap">
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
                                    <span class="quantity">{{0}}</span>
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
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area"
         style="background: rgba(0, 0, 0, 0) url(images/bg/2.jpg) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Thanh toán</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="index.html">Trang chủ</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb-item active">Thanh toán</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Checkout Area -->
    <section class="our-checkout-area ptb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <div class="ckeckout-left-sidebar">
                        <!-- Start Checkbox Area -->
                        <form class="checkout-form" action="{{route('admin.orders.store',['total' => $total])}}"
                              method="post">
                            @if($message)
                                @if(is_array($message))
                                    @foreach($message as $detailMes)
                                        <p style="color: red">{{$detailMes}}</p>
                                    @endforeach
                                @else
                                    <p style="color: green">{{$message}}</p>
                                @endif
                            @endif
                            @csrf
                            <h2 class="section-title-3" style="margin-bottom: 20px">Thông tin giao hàng</h2>
                            <div class="single-checkout-box">
                                <input type="text" name="customer_name" placeholder="Họ và tên">
                            </div>
                            <div class="single-checkout-box">
                                <input type="number" name="customer_phone" placeholder="Số điện thoại">
                            </div>
                            <div class="single-checkout-box">
                                <input type="text" name="customer_address" placeholder="Địa chỉ">
                            </div>
                            <div class="single-checkout-box">
                                <textarea name="description" placeholder="Ghi chú"></textarea>
                            </div>

                            <h2 class="section-title-3" style="margin-bottom: 20px">Phương thức thanh toán</h2>
                            @foreach($payment as $detail)
                                  <input type="radio" id="payment" name="payment_method" value="{{$detail['id']}}">
                                  <label for="payment">{{$detail['name']}}</label><br>
                            @endforeach
                            <button type="submit" class="coupon">Đặt hàng</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="checkout-right-sidebar">
                        <div class="our-important-note">
                            <h2 class="section-title-3" style="margin-bottom: 20px">Sản phẩm</h2>
                            @if($cart)
                                <div class="shp__cart__wrap">
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
                                                <span class="quantity">{{0}}</span>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('clients.footer')
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
