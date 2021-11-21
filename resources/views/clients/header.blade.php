<?php
$routeName = \Request::route() ? \Request::route()->getName() : '';
$cart = \Illuminate\Support\Facades\Session::get('cart');
?>

<header id="header" class="htc-header header--3 bg__white">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                    <div class="logo">
                        <a href="{{route('clients.index')}}">
                            <img src="{{asset('images/logo/logo.png')}}" alt="logo">
                        </a>
                    </div>
                </div>
                <!-- Start MAinmenu Ares -->
                <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                    <nav class="mainmenu__nav hidden-xs hidden-sm">
                        <ul class="main__menu">
                            @if($routeName=='clients.index')
                                <li class="active-menu">
                                    <a href="{{route('clients.index')}}">Trang chủ</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{route('clients.index')}}">Trang chủ</a>
                                </li>
                            @endif

                            @if($routeName=='clients.product.index' || $routeName=='clients.product.detail')
                                <li class="active-menu">
                                    <a href="{{route('clients.product.index')}}">Sản phẩm</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{route('clients.product.index')}}">Sản phẩm</a>
                                </li>
                            @endif

                            @if($routeName=='clients.shopping-cart.index' || $routeName=='clients.shopping-cart.detail')
                                <li class="active-menu">
                                    <a href="{{route('clients.shopping-cart.index')}}">Giỏ hàng</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{route('clients.shopping-cart.index')}}">Giỏ hàng</a>
                                </li>
                            @endif

                            @if($routeName=='clients.about.index')
                                <li class="active-menu">
                                    <a href="{{route('clients.about.index')}}">Giới thiệu</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{route('clients.about.index')}}">Giới thiệu</a>
                                </li>
                            @endif

                            @if($routeName=='clients.contact.index')
                                <li class="active-menu">
                                    <a href="{{route('clients.contact.index')}}">Liên hệ</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{route('clients.contact.index')}}">Liên hệ</a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                    <div class="mobile-menu clearfix visible-xs visible-sm">
                        <nav id="mobile_dropdown">
                            <ul>
                                @if($routeName=='clients.index')
                                    <li class="active-menu">
                                        <a href="{{route('clients.index')}}">Trang chủ</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{route('clients.index')}}">Trang chủ</a>
                                    </li>
                                @endif

                                @if($routeName=='clients.product.index' || $routeName=='clients.product.detail')
                                    <li class="active-menu">
                                        <a href="{{route('clients.product.index')}}">Sản phẩm</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{route('clients.product.index')}}">Sản phẩm</a>
                                    </li>
                                @endif

                                @if($routeName=='clients.shopping-cart.index' || $routeName=='clients.shopping-cart.detail')
                                    <li class="active-menu">
                                        <a href="{{route('clients.shopping-cart.index')}}">Giỏ hàng</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{route('clients.shopping-cart.index')}}">Giỏ hàng</a>
                                    </li>
                                @endif

                                @if($routeName=='clients.about.index')
                                    <li class="active-menu">
                                        <a href="{{route('clients.about.index')}}">Giới thiệu</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{route('clients.about.index')}}">Giới thiệu</a>
                                    </li>
                                @endif

                                @if($routeName=='clients.contact.index')
                                    <li class="active-menu">
                                        <a href="{{route('clients.contact.index')}}">Liên hệ</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{route('clients.contact.index')}}">Liên hệ</a>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- End MAinmenu Ares -->
                <div class="col-md-2 col-sm-4 col-xs-3">
                    <ul class="menu-extra">
                        <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
                        <li><a href="{{route('clients.login')}}"><span class="ti-user"></span></a></li>
                        <li class="cart__menu"><span class="ti-shopping-cart icon-header-noti icon-header-item" data-notify="{{$cart ? count($cart) : 0}}"></span></li>
                    </ul>
                </div>
            </div>
            <div class="mobile-menu-area"></div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>
