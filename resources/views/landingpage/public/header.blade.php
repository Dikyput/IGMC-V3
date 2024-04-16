<header class="th-header header-layout1">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <p class="header-notice"></p>
                    <div class="header-links">
                        <ul>
                            <li>
                                <div class="header-notice">Welcome to our <a href="#">IGMC</a>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-link">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-solid fa-globe"></i> English</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                        <li>
                                            <a href="#">German</a>
                                            <a href="#">French</a>
                                            <a href="#">Italian</a>
                                            <a href="#">Latvian</a>
                                            <a href="#">Spanish</a>
                                            <a href="#">Greek</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li><a href="https://discord.gg/GrgJSJB94Y">Discord</a></li>
                            <li><a href="https://www.tiktok.com/@igmc2024">Tiktok</a></li>
                            <li><a href="https://www.youtube.com/@IGMC2024">Youtube</a></li>
                            <li><a href="https://www.instagram.com/igmc2024/">Instagram</a></li>
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
                            <a href="index.html">
                                <span data-mask-src="assets/img/logo.svg" class="logo-mask"></span>
                                <img src="assets/img/logo.svg" alt="Bame">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li><a href="{{ route('show') }}">HOME</a></li>
                                <li><a href="{{ route('about') }}">ABOUT US</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">TOURNAMENT</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('tournament') }}">Tournament</a></li>
                                        <li><a href="{{ route('tournamentdetails') }}">Tournament Details</a></li>
                                    </ul>
                                </li>
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
                                @else
                                    <a href="https://discord.com/oauth2/authorize?client_id={{ env('DISCORD_CLIENT_ID') }}&redirect_uri={{ env('DISCORD_REDIRECT_URI') }}&response_type=code&redirect_uri=http%3A%2F%2Flocalhost%3A8000%2Fapi%2Flogin&scope=identify+guilds+guilds.join"
                                        class="th-btn">
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
</header>
