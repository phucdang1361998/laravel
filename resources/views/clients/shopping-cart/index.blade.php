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
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area"
         style="background: rgba(0, 0, 0, 0) url({{asset($slider['image'])}}) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Giỏ hàng</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{route('clients.index')}}">Trang chủ</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb-item active">Giỏ hàng</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- cart-main-area start -->
    <div class="cart-main-area ptb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">Hình ảnh</th>
                                    <th class="product-name">Sản phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Tổng tiền</th>
                                    <th class="product-remove">Xóa sản phẩm</th>
                                </tr>
                                @if(!$cart)
                                    <tr>
                                        <td colspan="6">Giỏ hàng chưa có sản phẩm</td>
                                    </tr>
                                @endif
                                </thead>
                                <tbody>
                                @if($cart)
                                    @foreach($cart as $cartDtl)
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img
                                                        src="{{asset($cartDtl['image'])}}"
                                                        alt="product img"/></a></td>
                                            <td class="product-name"><a href="#">{{$cartDtl['name']}}</a></td>
                                            <td class="product-price"><span
                                                    class="amount">{{number_format($cartDtl['price'])}}</span></td>
                                            <td class="product-quantity">{{$cartDtl['quantity']}}</td>
                                            <td class="product-subtotal">{{number_format($cartDtl['price'])}}</td>
                                            <td class="product-remove"><a
                                                    href="{{route('clients.shopping-cart.insert',['id' => $cartDtl,'delete' => 1])}}">X</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                        @if(isset($message))
                            <p style="color: red">{{$message}}</p>
                        @endif
                        <div class="row">
                            <div class="col-md-8 col-sm-7 col-xs-12">
                                <div class="buttons-cart">
                                    {{--                                    <input type="submit" value="Update Cart"/>--}}
                                    <a href="{{route('clients.product.index')}}">Tiếp tục mua hàng</a>
                                    <a href="{{route('clients.checkout.index')}}">Thanh toán</a>
                                </div>
                                {{--                                <div class="coupon">--}}
                                {{--                                    <h3>Coupon</h3>--}}
                                {{--                                    <p>Enter your coupon code if you have one.</p>--}}
                                {{--                                    <input type="text" placeholder="Coupon code"/>--}}
                                {{--                                    <input type="submit" value="Apply Coupon"/>--}}
                                {{--                                </div>--}}
                            </div>
                            <div class="col-md-4 col-sm-5 col-xs-12">
                                <div class="cart_totals">
                                    <h2>Tổng đơn hàng</h2>
                                    <table>
                                        <tbody>
                                        <tr class="order-total">
                                            <th>Tổng tiền:</th>
                                            <td>
                                                <strong><span
                                                        class="amount">{{($cart ? number_format($total) : 0)}} <sup>đ</sup></span></strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
