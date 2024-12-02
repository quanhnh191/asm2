<header class="header-area header-responsive-padding header-height-1">
    <div class="header-top d-none d-lg-block bg-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-6">
                    <div class="welcome-text">
                        <p>Default Welcome Msg! </p>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="language-currency-wrap">
                        <div class="currency-wrap border-style">
                            <a class="currency-active" href="#">$ Dollar (US) <i class=" ti-angle-down "></i></a>
                            <div class="currency-dropdown">
                                <ul>
                                    <li><a href="#">Taka (BDT) </a></li>
                                    <li><a href="#">Riyal (SAR) </a></li>
                                    <li><a href="#">Rupee (INR) </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="language-wrap">
                            <a class="language-active" href="#"><img src="{{asset("client/assets/images/icon-img/flag.png")}}" alt=""> English <i class=" ti-angle-down "></i></a>
                            <div class="language-dropdown">
                                <ul>
                                    <li><a href="#"><img src="{{asset("client/assets/images/icon-img/flag.png")}}" alt="">English </a></li>
                                    <li><a href="#"><img src="{{asset("client/assets/images/icon-img/spanish.png")}}" alt="">Spanish</a></li>
                                    <li><a href="#"><img src="{{asset("client/assets/images/icon-img/arabic.png")}}" alt="">Arabic </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{asset('client/assets/images/logo/logo.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block d-flex justify-content-center">
                    <div class="main-menu text-center">
                        <nav>
                            <ul>
                                <li><a href="{{route('home')}}">HOME</a>
                                </li>
                                <li><a href="{{route('list')}}">SHOP</a>
                                    <ul class="mega-menu-style mega-menu-mrg-1">
                                        <li>
                                            <ul>
                                                <li>
                                                    <ul>
                                                        @foreach ($categories as $cate)
                                                            <li><a href="{{ route('listShop', $cate->id) }}">{{ $cate->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="{{asset('client/assets/images/banner/menu.png')}}}" alt=""></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('blog')}}">BLOG</a>
                                </li>
                                <li><a href="{{route('about')}}">ABOUT</a></li>
                                <li><a href="{{route('contact')}}">CONTACT US</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="header-action-wrap">
                        <div class="header-action-style header-search-1">
                            <a class="search-toggle" href="#">
                                <i class="pe-7s-search s-open"></i>
                                <i class="pe-7s-close s-close"></i>
                            </a>
                            <div class="search-wrap-1">
                                <form action="#">
                                    <input placeholder="Search products…" type="text">
                                    <button class="button-search"><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="header-action-style">
                            <a title="Login Register" href="{{ route('admin.index') }}"><i class="pe-7s-user"></i></a>
                        </div>
                        <div class="header-action-style">
                            <a title="Wishlist" href="{{ route('admin.categories.index') }}"><i class="pe-7s-like"></i></a>
                        </div>
                        <div class="header-action-style header-action-cart">
                            <a class="cart-active" href="#"><i class="pe-7s-shopbag"></i>
                                <span class="product-count bg-black">01</span>
                            </a>
                        </div>
                        <div class="header-action-style d-block d-lg-none">
                            <a class="mobile-menu-active-button" href="#"><i class="pe-7s-menu"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
