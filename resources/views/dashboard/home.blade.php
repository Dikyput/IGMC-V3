<!doctype html>
<html class="no-js " lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>XXXX</title>
    <meta name="author" content="Bame">
    <meta name="description" content="Bame - Esports & Gaming HTML Template">
    <meta name="keywords" content="Bame - Esports & Gaming HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    @include('landingpage.public.core')
</head>

<body>
    <div class="cursor-animation cursor-image"></div>

    <div class="preloader ">
        <button class="th-btn preloaderCls">CANCEL PRELOADER </button>
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>
    <div class="sidemenu-wrapper sidemenu-cart ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget woocommerce widget_shopping_cart">
                <h3 class="widget_title">Shopping cart</h3>
                <div class="widget_shopping_cart_content">
                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_1.png"
                                    alt="Cart Image">Gaming Headphone</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>940.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_2.png"
                                    alt="Cart Image">Gaming Mouse</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>899.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_3.png"
                                    alt="Cart Image">Gaming Keyboard</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>756.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_4.png"
                                    alt="Cart Image">Gaming Chair</a>
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
    </div>
    <div class="sidemenu-wrapper sidemenu-info d-none d-lg-block ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget footer-widget">
                <div class="th-widget-about">
                    <div class="about-logo">
                        <a href="index.html">
                            <span data-mask-src="assets/img/logo.svg" class="logo-mask"></span>
                            <img src="assets/img/logo.svg" alt="Bame">
                        </a>
                    </div>
                    <p class="about-text"> Beyond esports tournaments, include a broader calendar of gaming events,
                        conferences, and conventions.</p>
                    <h3 class="widget_title">Follow <span class="text-theme">With Us:</span></h3>
                    <div class="th-widget-contact">
                        <div class="th-social style-mask">
                            <a class="facebook" href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="twitter" href="https://www.twitter.com/"><img
                                    src="assets/img/icon/x-twitter-icon.svg" alt="icon"></a>
                            <a class="instagram" href="https://www.instagram.com/">
                                <img src="assets/img/icon/instagram-icon.svg" alt="icon">
                            </a>
                            <a class="linkedin" href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                            <a class="google-play" href="https://www.google.com/">
                                <img src="assets/img/icon/google-playstore-icon.svg" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget  ">
                <h3 class="widget_title">Recent Posts</h3>
                <div class="recent-post-wrap">
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.jpg"
                                    alt="Blog Image"></a>
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
                <a href="index.html"><span data-mask-src="assets/img/logo.svg" class="logo-mask"></span><img
                        src="assets/img/logo.svg" alt="Bame"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="index.html">HOME</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home Esports</a></li>
                            <li><a href="home-2.html">Home Streaming</a></li>
                            <li><a href="home-3.html">Home Video Gaming</a></li>
                            <li><a href="home-4.html">Home Tournament</a></li>
                            <li><a href="home-5.html">Home Gamer</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">ABOUT US</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">TOURNAMENT</a>
                        <ul class="sub-menu">
                            <li><a href="tournament.html">Tournament</a></li>
                            <li><a href="tournament-details.html">Tournament Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">BLOG</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">PAGES</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="shop-details.html">Shop Details</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href="team.html">Players</a></li>
                            <li><a href="team-details.html">Players Details</a></li>
                            <li><a href="game.html">Game</a></li>
                            <li><a href="game-details.html">Game Details</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="point-table.html">Point Table</a></li>
                            <li><a href="error.html">Error Page</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="contact.html">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="color-scheme-wrap active">
        <button class="switchIcon"><i class="fa-solid fa-palette"></i></button>
        <h4 class="color-scheme-wrap-title"><i class="far fa-palette"></i> Color Switcher</h4>
        <div class="color-switch-btns">
            <button data-color="#3b3433"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#FFBE18"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#24FFF2"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#45F882"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#FF7E02"><i class="fa-solid fa-droplet"></i></button>
        </div>
    </div>
    @include('landingpage.public.header')
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">BLOG STANDARD</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Blog Area
==============================-->
    <section class="th-blog-wrapper space-top space-extra2-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-xxl-8 col-lg-7">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-1.jpg"
                                    alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>By Jonson</a>
                                <a href="blog.html"><i class="fa-light fa-calendar"></i>21 Nov, 2024</a>
                                <a href="blog-details.html"><i class="fa-light fa-comment"></i>3 Comments</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Strategies for Dominating Your Favorite
                                    Game</a>
                            </h2>
                            <p class="blog-text">Successful esports teams exhibit strong communication, strategic
                                coordination, and individual player skills. Team chemistry, effective coaching, and
                                adaptability to changing meats are also crucial factors.</p>
                            <a href="blog-details.html" class="link-btn style2">Read More<i
                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img th-slider" data-slider-options='{"effect":"fade"}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-2.jpg"
                                            alt="Blog Image"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-4.jpg"
                                            alt="Blog Image"></a>
                                </div>
                            </div>
                            <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                            <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>By Jonson</a>
                                <a href="blog.html"><i class="fa-light fa-calendar"></i>22 Dec, 2024</a>
                                <a href="blog-details.html"><i class="fa-light fa-comment"></i>3 Comments</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Influential Figures in the History of
                                    Gaming</a>
                            </h2>
                            <p class="blog-text">Providing opportunities for professional growth a maintaining positive
                                work environment, To enhance online presence, consider optimizing your web utilizing
                                social with your channels. An effective marketing involves market research target
                                audience identification, competitive</p>
                            <a href="blog-details.html" class="link-btn style2">Read More<i
                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <div class="th-blog blog-single">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>By Jonson</a>
                                <a href="blog.html"><i class="fa-light fa-calendar"></i>24 June, 2024</a>
                                <a href="blog-details.html"><i class="fa-light fa-comment"></i>3 Comments</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Must-Visit Gaming Events Worldwide</a>
                            </h2>
                            <p class="blog-text">An effective marketing involves market research target audience
                                identification, competitive. providing opportunities for professional growth a
                                maintaining positive work environment. To enhance online presence, consider optimizing
                                your web utilizing social with your channels</p>
                            <a href="blog-details.html" class="link-btn style2">Read More<i
                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img" data-overlay="black" data-opacity="5">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-3.jpg"
                                    alt="Blog Image"></a>
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i
                                    class="fas fa-play"></i></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>By Jonson</a>
                                <a href="blog.html"><i class="fa-light fa-calendar"></i>09 Sep, 2024</a>
                                <a href="blog-details.html"><i class="fa-light fa-comment"></i>3 Comments</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Behind the Scenes of Your Favorite
                                    Titles</a>
                            </h2>
                            <p class="blog-text">From strategic planning to operational optimization, our business
                                consulting team is committed to guiding you through every stage of development, ensuring
                                sustainable growth.Our seasoned consultants bring a wealth of experience to the table.
                            </p>
                            <a href="blog-details.html" class="link-btn style2">Read More<i
                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-audio">
                            <iframe title="Tell Me U Luv Me (with Trippie Redd) by Juice WRLD"
                                src="https://w.soundcloud.com/player/?visual=true&amp;url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F830279092&amp;show_artwork=true&amp;maxwidth=751&amp;maxheight=1000&amp;dnt=1"></iframe>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>By Jonson</a>
                                <a href="blog.html"><i class="fa-light fa-calendar"></i>10 Sep, 2024</a>
                                <a href="blog-details.html"><i class="fa-light fa-comment"></i>3 Comments</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Discover unparalleled expertise in
                                    market</a>
                            </h2>
                            <p class="blog-text">Take the first step towards a brighter business future. Contact us
                                today to explore how our business consulting services can drive innovation, increase
                                efficiency, and position your company for enduring success. At the core of our business
                                consulting philosophy.</p>
                            <a href="blog-details.html" class="link-btn style2">Read More<i
                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <div class="th-pagination ">
                        <ul>
                            <li><a href="blog.html"><span class="btn-border"></span> 1</a></li>
                            <li><a href="blog.html"><span class="btn-border"></span> 2</a></li>
                            <li><a href="blog.html"><span class="btn-border"></span> 3</a></li>
                            <li><a href="blog.html"><span class="btn-border"></span><i
                                        class="far fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search  ">
                            <form class="search-form">
                                <input type="text" placeholder="Search here...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li>
                                    <a href="blog.html">LIVE GAME</a>
                                    <span>(2)</span>
                                </li>
                                <li>
                                    <a href="blog.html">FANTASY</a>
                                    <span>(2)</span>
                                </li>
                                <li>
                                    <a href="blog.html">GAMING</a>
                                    <span>(2)</span>
                                </li>
                                <li>
                                    <a href="blog.html">MX-XBOX</a>
                                    <span>(2)</span>
                                </li>
                                <li>
                                    <a href="blog.html">SHOOTING</a>
                                    <span>(2)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.jpg"
                                                alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">A Day
                                                in the Life of an Esports Event</a></h4>
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
                                        <h4 class="post-title"><a class="text-inherit"
                                                href="blog-details.html">Influential Figures in the History</a></h4>
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
                                        <h4 class="post-title"><a class="text-inherit"
                                                href="blog-details.html">Behind the Scenes of Your Favorite</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fa-light fa-calendar"></i>09 Sep, 2024</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget_tag_cloud  ">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud">
                                <a href="blog.html">GAME APP</a>
                                <a href="blog.html">E-SPORTS</a>
                                <a href="blog.html">TOURNAMENTS</a>
                                <a href="blog.html">MATCH</a>
                                <a href="blog.html">3D</a>
                                <a href="blog.html">GAME ANIMATION</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    @include('landingpage.public.footer')
    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    @include('landingpage.public.script')
</body>

</html>
