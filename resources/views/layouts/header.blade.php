<div class="sidemenu-wrapper sidemenu-cart ">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget woocommerce widget_shopping_cart">
            <h3 class="widget_title">Shopping cart</h3>
            <div class="widget_shopping_cart_content">
                <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/product/product_thumb_1_1.png" alt="Cart Image">Gaming
                            Headphone</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>940.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/product/product_thumb_1_2.png" alt="Cart Image">Gaming
                            Mouse</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>899.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/product/product_thumb_1_3.png" alt="Cart Image">Gaming
                            Keyboard</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>756.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/product/product_thumb_1_4.png" alt="Cart Image">Gaming
                            Chair</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>723.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/product/product_thumb_1_5.png"
                                alt="Cart Image">Microphone G9000</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>1080.00</span>
                        </span>
                    </li>
                </ul>
                <p class="woocommerce-mini-cart__total total">
                    <strong>Subtotal:</strong>
                    <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">$</span>4398.00</span>
                </p>
                <p class="woocommerce-mini-cart__buttons buttons">
                    <a href="cart.html" class="th-btn wc-forward">View cart <span class="icon"><i
                                class="fa-solid fa-arrow-up-right ms-3"></i></span></a>
                    <a href="checkout.html" class="th-btn checkout wc-forward">Checkout <span class="icon"><i
                                class="fa-solid fa-arrow-up-right ms-3"></i></span></a>
                </p>
            </div>
        </div>
    </div>
</div><!--==============================
Sidemenu
============================== -->
<div class="sidemenu-wrapper sidemenu-info d-none d-lg-block ">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget footer-widget">
            <div class="th-widget-about">
                <div class="about-logo">
                    @auth
                        @if (Auth::check())
                            @php
                                $user = Auth::user();
                                $id = $user->id_discord;
                                $username = $user->username;
                                $avatar = $user->avatar;
                                $saldo = $user->tokendiscord;
                            @endphp
                        @endif
                        <img class="rounded-20"
                            src="https://cdn.discordapp.com/avatars/{{ $id }}/{{ $avatar }}.png">
                        <br>
                        <br>
                        <h3 class="widget_title">Username <span class="text-theme">{{ $username }}</span></h3>
                        <h3 class="widget_title">BALANCE <i class="fa-solid fa-money-bill"></i> <span
                                class="text-theme">{{ \App\Helpers\Rupiah::formatRupiah($saldo->nominal) }}</span></h3>
                    @else
                        <span data-mask-src="assets/img/IGMCV3.svg" class="logo-mask"></span>
                        <img src="assets/img/IGMCV3.svg" alt="IGMC">
                    @endauth
                </div>
            </div>
        </div>
        <div class="widget  ">
            <h3 class="widget_title">Recent Posts</h3>
            <div class="recent-post-wrap">
                <div class="recent-post">
                    <div class="media-img">
                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                    </div>
                    <div class="media-body">
                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">A Day in the Life
                                of an Esports Event & Enjoy</a></h4>
                        <div class="recent-post-meta">
                            <a href="blog.html"><i class="fa-light fa-calendar"></i>30 Nov, 2024</a>
                        </div>
                    </div>
                </div>
                <div class="recent-post">
                    <div class="media-img">
                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-2.jpg"
                                alt="Blog Image"></a>
                    </div>
                    <div class="media-body">
                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Strategies for
                                Dominating Your Favorite Game</a></h4>
                        <div class="recent-post-meta">
                            <a href="blog.html"><i class="fa-light fa-calendar"></i>05 Dec, 2024</a>
                        </div>
                    </div>
                </div>
                <div class="recent-post">
                    <div class="media-img">
                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-3.jpg"
                                alt="Blog Image"></a>
                    </div>
                    <div class="media-body">
                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Behind the Scenes
                                of Your Favorite Game</a></h4>
                        <div class="recent-post-meta">
                            <a href="blog.html"><i class="fa-light fa-calendar"></i>09 Sep, 2024</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget newsletter-widget  ">
            <h3 class="widget_title">Newsletter</h3>
            <p class="footer-text">Subscribe to our newsletter to get our
                latest update & news consenter</p>
            <form class="newsletter-form">
                <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email Address" required="">
                    <button type="submit" class="th-btn"><i class="far fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="popup-search-box d-none d-lg-block">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
        <input type="text" placeholder="What are you looking for?">
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div><!--==============================
Mobile Menu
============================== -->
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="index.html"><span data-mask-src="assets/img/IGMCV3.svg" class="logo-mask"></span><img
                    src="assets/img/IGMCV3.svg" alt="igmcv3"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li><a href="{{ route('show') }}">HOME</a></li>
                @auth
                    <li><a href="{{ route('dashboard') }}">DASHBOARD</a></li>
                @endauth
                <li><a href="{{ route('about') }}">ABOUT US</a></li>
                @auth
                    <li class="menu-item-has-children">
                        <a href="#">PAGES</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="#">TOURNAMENT</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('tournament') }}">Tournament</a></li>
                                    <li><a href="{{ route('tournamentdetails') }}">Tournament Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('shop') }}">Shop</a></li>
                                    <li><a href="{{ route('mycart') }}">My Cart</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('myinventory') }}">My Inventory</a></li>
                            <li><a href="#">Players</a></li>
                            <li><a href="#">Players Detail</a></li>
                            <li><a href="#">Ranking</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('topup-saldo') }}">TOP-UP SALDO</a></li>
                @endauth
            </ul>
        </div>
    </div>
</div>
<div class="color-scheme-wrap active">
    <button class="switchIcon"><i class="fa-solid fa-palette"></i></button>
    <h4 class="color-scheme-wrap-title"><i class="far fa-palette"></i> Color Switcher</h4>
    <div class="color-switch-btns">
        <button data-color="#6240CF"><i class="fa-solid fa-droplet"></i></button>
        <button data-color="#FFBE18"><i class="fa-solid fa-droplet"></i></button>
        <button data-color="#24FFF2"><i class="fa-solid fa-droplet"></i></button>
        <button data-color="#45F882"><i class="fa-solid fa-droplet"></i></button>
        <button data-color="#FF7E02"><i class="fa-solid fa-droplet"></i></button>
    </div>
</div><!--==============================
Header Area
==============================-->
<header class="th-header header-default">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <p class="header-notice"></p>
                    <div class="header-links">
                        <ul>
                            <li>
                                @auth
                                    <div class="header-notice">YOUR BALANCE <i class="fa-solid fa-money-bill"></i> <a
                                            href="#">
                                            @if (Auth::check())
                                                @php
                                                    $user = Auth::user();
                                                    $saldo = $user->tokendiscord;
                                                @endphp

                                                @if ($saldo)
                                                    {{ \App\Helpers\Rupiah::formatRupiah($saldo->nominal) }}
                                                @endif
                                            @endif
                                        </a></div>
                                @else
                                    <div class="header-notice">Welcome to our <a href="#">IGMC</a></div>
                                @endauth
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li><a target="_blank" href="https://discord.gg/GrgJSJB94Y">Discord</a></li>
                            <li><a target="_blank" href="https://www.tiktok.com/@igmc2024">Tiktok</a></li>
                            <li><a target="_blank" href="https://www.youtube.com/@IGMC2024">Youtube</a></li>
                            <li><a target="_blank" href="https://www.instagram.com/igmc2024/">Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="/">
                                <span data-mask-src="assets/img/IGMCV3.svg" class="logo-mask"></span>
                                <img src="assets/img/IGMCV3.svg" alt="IGMCV3">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li><a href="{{ route('show') }}">HOME</a></li>
                                @auth
                                    <li><a href="{{ route('dashboard') }}">DASHBOARD</a></li>
                                @endauth
                                <li><a href="{{ route('about') }}">ABOUT US</a></li>
                                @auth
                                    <li class="menu-item-has-children">
                                        <a href="#">PAGES</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="#">TOURNAMENT</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('tournament') }}">Tournament</a></li>
                                                    <li><a href="{{ route('tournamentdetails') }}">Tournament Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Shop</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('shop') }}">Shop</a></li>
                                                    <li><a href="{{ route('mycart') }}">My Cart</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('myinventory') }}">My Inventory</a></li>
                                            <li><a href="#">Players</a></li>
                                            <li><a href="#">Players Detail</a></li>
                                            <li><a href="#">Ranking</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('topup-saldo') }}">TOP-UP SALDO</a></li>
                                @endauth
                            </ul>
                        </nav>
                        <div class="header-button d-flex d-lg-none">
                            <button type="button" class="th-menu-toggle"><span class="btn-border"></span><i
                                    class="far fa-bars"></i></button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <button type="button" class="simple-icon searchBoxToggler"><i
                                    class="far fa-search"></i></button>
                            <button type="button" class="simple-icon sideMenuInfo">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <div class="d-xxl-block d-none">
                                @auth
                                    <a href="/keluar" class="th-btn">
                                        LOGOUT</a>
                                    <!-- https://discord.com/oauth2/authorize?client_id=1229900010385313842&response_type=code&redirect_uri=http%3A%2F%2F127.0.0.1%3A8000%2Fapi%2Flogin&scope=identify+guilds -->
                                @else
                                    <a href="https://discord.com/oauth2/authorize?client_id=1180166852702372001&response_type=code&redirect_uri=http%3A%2F%2Flocalhost%3A8000%2Fapi%2Flogin&scope=identify+guilds"
                                        class="th-btn">
                                        {{-- <a href="https://discord.com/oauth2/authorize?client_id=1180166852702372001&response_type=code&redirect_uri=https%3A%2F%2Figmcv3.com%2Fapi%2Flogin&scope=identify+guilds"
                                        class="th-btn"> --}}
                                        LOGIN WITH DISCORD</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-bg"></div>
        </div>
    </div>
