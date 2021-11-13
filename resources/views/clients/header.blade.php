<?php $routeName = \Request::route() ? \Request::route()->getName() : ''; ?>
<header class="header-v4">
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->

        <div class="wrap-menu-desktop how-shadow1">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="{{route('clients.index')}}" class="logo">
                    <img src="{{asset('images/icons/logo-01.png')}}" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
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
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>

                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                         data-notify="2">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="{{route('clients.index')}}"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
                 data-notify="2">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
            </div>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="main-menu-m">
            <li>
                <a href="{{route('clients.index')}}">Trang chủ</a>
            </li>

            <li class="active-menu">
                <a href="{{route('clients.product.index')}}">Sản phẩm</a>
            </li>

            <li class="label1" data-label1="hot">
                <a href="{{route('clients.shopping-cart.index')}}">Giỏ hàng</a>
            </li>

            {{--            <li>--}}
            {{--                <a href="{{route('clients.blog.index')}}">Bài viết</a>--}}
            {{--            </li>--}}

            <li>
                <a href="{{route('clients.about.index')}}">Giới thiệu</a>
            </li>

            <li>
                <a href="{{route('clients.contact.index')}}">Liên hệ</a>
            </li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="images/icons/icon-close2.png" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15" method="GET" action="{{route('clients.product.index')}}">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="name" placeholder="Nhập tên sản phẩm">
            </form>
        </div>
    </div>
</header>
