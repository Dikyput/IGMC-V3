@extends('layouts.app')
@section('content')
    <div class="overflow-hidden space position-relative z-index-common">
        <div class="gr-bg1 overlay"></div>
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title style2"># Welcome to The eSports & Gaming Site</span>
                <h2 class="sec-title text-white">Forging Legends in the Gaming Universe</h2>
            </div>
            <div class="row">
                <div class="col-xl-7 mb-50 mb-xl-0">
                    <div class="img-box2">
                        <div class="img1">
                            <img src="{{ asset('assets/img/normal/about1-1.png') }}" alt="About">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="about-feature-wrap">
                        <div class="slider-area">
                            <div class="swiper th-slider about-feature-slider1" id="aboutfeature1"
                                data-slider-options='{"breakpoints":{"0":{"slidesPerView":2,"mousewheel":false},"576":{"slidesPerView":"2","mousewheel":false},"768":{"slidesPerView":"3","mousewheel":false},"992":{"slidesPerView":"3","mousewheel":false},"1200":{"slidesPerView":"3"}},"direction":"vertical","mousewheel":true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="about-feature">
                                            <div class="about-feature-icon icon-masking">
                                                <span class="mask-icon"
                                                    data-mask-src="assets/img/icon/about_feature_2_1.svg"></span>
                                                <img src="assets/img/icon/about_feature_2_1.svg" alt="Icon">
                                            </div>
                                            <div class="about-feature-content">
                                                <h3 class="about-feature-title">Live Streaming</h3>
                                                <p class="about-feature-text">Integration with popular streaming
                                                    platforms for live coverage of esports.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="about-feature">
                                            <div class="about-feature-icon icon-masking">
                                                <span class="mask-icon"
                                                    data-mask-src="assets/img/icon/about_feature_2_2.svg"></span>
                                                <img src="assets/img/icon/about_feature_2_2.svg" alt="Icon">
                                            </div>
                                            <div class="about-feature-content">
                                                <h3 class="about-feature-title">Gaming News</h3>
                                                <p class="about-feature-text">Keep users informed about the gaming
                                                    industry with news articles.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="about-feature">
                                            <div class="about-feature-icon icon-masking">
                                                <span class="mask-icon"
                                                    data-mask-src="assets/img/icon/about_feature_2_3.svg"></span>
                                                <img src="assets/img/icon/about_feature_2_3.svg" alt="Icon">
                                            </div>
                                            <div class="about-feature-content">
                                                <h3 class="about-feature-title">Great Tournament</h3>
                                                <p class="about-feature-text">Display a calendar of upcoming tournament
                                                    with dates, times, and game.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="about-feature">
                                            <div class="about-feature-icon icon-masking">
                                                <span class="mask-icon"
                                                    data-mask-src="assets/img/icon/about_feature_2_1.svg"></span>
                                                <img src="assets/img/icon/about_feature_2_1.svg" alt="Icon">
                                            </div>
                                            <div class="about-feature-content">
                                                <h3 class="about-feature-title">Live Streaming</h3>
                                                <p class="about-feature-text">Integration with popular streaming
                                                    platforms for live coverage of esports.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="about-feature">
                                            <div class="about-feature-icon icon-masking">
                                                <span class="mask-icon"
                                                    data-mask-src="assets/img/icon/about_feature_2_2.svg"></span>
                                                <img src="assets/img/icon/about_feature_2_2.svg" alt="Icon">
                                            </div>
                                            <div class="about-feature-content">
                                                <h3 class="about-feature-title">Gaming News</h3>
                                                <p class="about-feature-text">Keep users informed about the gaming
                                                    industry with news articles.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="about-feature">
                                            <div class="about-feature-icon icon-masking">
                                                <span class="mask-icon"
                                                    data-mask-src="assets/img/icon/about_feature_2_3.svg"></span>
                                                <img src="assets/img/icon/about_feature_2_3.svg" alt="Icon">
                                            </div>
                                            <div class="about-feature-content">
                                                <h3 class="about-feature-title">Great Tournament</h3>
                                                <p class="about-feature-text">Display a calendar of upcoming tournament
                                                    with dates, times, and game.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==============================
    Counter Area
    ==============================-->
    <div class="space-bottom counter-area-1">
        <div class="container">
            <div class="counter-card-wrap">
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">1.6</span>K<span
                                class="text-theme fw-medium">+</span></h2>
                        <p class="box-text">Our Daily Game Users</p>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">50</span>M</h2>
                        <p class="box-text">Game Downloads</p>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">200</span><span
                                class="text-theme fw-medium">+</span></h2>
                        <p class="box-text">Game Launched</p>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">3.6</span>M</h2>
                        <p class="box-text">Gaming Project Delivered</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
    Tournament Area
    ==============================-->
    <section class="tournament-sec-v3 space bg-black3" data-mask-src="assets/img/bg/tournament-sec3-bg.png">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <div class="title-area text-center custom-anim-top wow animated" data-wow-duration="1.5s"
                        data-wow-delay="0.2s">
                        <span class="sub-title style2"># History of IGMCV3 Trophy </span>
                        <h2 class="sec-title">Our All Tournaments History <span class="text-theme">!</span></h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30">
                <div class="col-12">
                    <div class="tournament-card style3">
                        <div class="tournament-card-content">
                            <div class="tournament-card-details">
                                <p class="tournament-year">2015-2016</p>
                                <img src="assets/img/tournament/cup.png" alt="img">
                                <p class="tournament-tag">CHAMPION CUP</p>
                            </div>
                        </div>
                        <div class="tournament-card-inner">
                            <div class="tournament-card-img">
                                <img src="assets/img/tournament/1-1.png" alt="tournament image">
                                <div class="card-title-wrap">
                                    <h3 class="tournament-card-title"><a href="tournament-details.html">Pro Player</a>
                                    </h3>
                                    <h6 class="tournament-card-subtitle">Runner Up Team</h6>
                                </div>
                            </div>

                            <div class="tournament-card-img">
                                <div class="card-title-wrap text-md-end">
                                    <h3 class="tournament-card-title"><a href="tournament-details.html">The Lion
                                            King</a></h3>
                                    <h6 class="tournament-card-subtitle">Champion Team</h6>
                                </div>
                                <img src="assets/img/tournament/1-2.png" alt="tournament image">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12">
                    <div class="tournament-card style3">
                        <div class="tournament-card-content">
                            <div class="tournament-card-details">
                                <p class="tournament-year">2017-2018</p>
                                <img src="assets/img/tournament/cup.png" alt="img">
                                <p class="tournament-tag">CHAMPION CUP</p>
                            </div>
                        </div>
                        <div class="tournament-card-inner">
                            <div class="tournament-card-img">
                                <img src="assets/img/tournament/1-3.png" alt="tournament image">
                                <div class="card-title-wrap">
                                    <h3 class="tournament-card-title"><a href="tournament-details.html">Assassin
                                            Team</a></h3>
                                    <h6 class="tournament-card-subtitle">Champion Team</h6>
                                </div>
                            </div>

                            <div class="tournament-card-img">
                                <div class="card-title-wrap text-md-end">
                                    <h3 class="tournament-card-title"><a href="tournament-details.html">Cyberpunk
                                            King</a></h3>
                                    <h6 class="tournament-card-subtitle">Runner Up Team</h6>
                                </div>
                                <img src="assets/img/tournament/1-4.png" alt="tournament image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="tournament-card style3">
                        <div class="tournament-card-content">
                            <div class="tournament-card-details">
                                <p class="tournament-year">2019-2020</p>
                                <img src="assets/img/tournament/cup.png" alt="img">
                                <p class="tournament-tag">CHAMPION CUP</p>
                            </div>
                        </div>
                        <div class="tournament-card-inner">
                            <div class="tournament-card-img">
                                <img src="assets/img/tournament/1-12.png" alt="tournament image">
                                <div class="card-title-wrap">
                                    <h3 class="tournament-card-title"><a href="tournament-details.html">Cools
                                            Gamer</a></h3>
                                    <h6 class="tournament-card-subtitle">Runner Up Team</h6>
                                </div>
                            </div>

                            <div class="tournament-card-img">
                                <div class="card-title-wrap text-md-end">
                                    <h3 class="tournament-card-title"><a href="tournament-details.html">X-XBO
                                            Ninja</a></h3>
                                    <h6 class="tournament-card-subtitle">Champion Team</h6>
                                </div>
                                <img src="assets/img/tournament/1-7.png" alt="tournament image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="about-sec-3 overflow-hidden space-top position-relative z-index-common"
        data-bg-src="{{ asset('assets/img/bg/about-bg1.png') }}">
        <div class="gr-bg1 overlay"></div>
        <div class="container">
            <div class="about-wrap3">
                <div class="row gy-40">
                    <div class="col-xl-6">
                        <div class="title-area custom-anim-left wow animated" data-wow-duration="1.5s"
                            data-wow-delay="0.2s">
                            <span class="sub-title"># Why Choose Our Gaming Site</span>
                            <h2 class="sec-title">Our Values Inspire And Drive Our Every Move <span
                                    class="text-theme">!</span></h2>
                            <div class="checklist">
                                <ul>
                                    <li><i class="fas fa-circle-check"></i> Duis scelerisque nunc ac massa efficitur
                                        pulvinar.</li>
                                    <li><i class="fas fa-circle-check"></i> Vivamus eget nisi scelerisque, iaculis
                                        risus vel, molestie risus.</li>
                                    <li><i class="fas fa-circle-check"></i> Aliquam nec sapien vitae dui dapibus
                                        blandit.</li>
                                    <li><i class="fas fa-circle-check"></i> Sed non ipsum ut mauris dictum ullamcorper
                                        ac at nibh.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="img-box3">
                            <div class="img1">
                                <img src="{{ asset('assets/img/normal/about3-2.png') }}" alt="About">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="img-box3">
                            <div class="img1">
                                <img src="{{ asset('assets/img/normal/about3-1.png') }}" alt="About">
                            </div>
                        </div>
                        <div class="about-content custom-anim-left wow animated" data-wow-duration="1.5s"
                            data-wow-delay="0.2s">
                            <p>Gamers can join local gaming meetups, participate in gaming events, or connect with
                                like-minded individuals through online forums and social media groups. Engaging with the
                                community helps build connections and creates opportunities for collaborative gaming
                                experiences.</p>
                            <p class="mb-0">Storytelling is a crucial element in modern video game design, creating
                                immersive and engaging experiences. Games with compelling narratives often resonate more
                                with players, adding depth to the overall gaming experience.</p>
                        </div>
                    </div>
                </div>
                <div class="about-tag">
                    <div class="about-experience-tag">
                        <span class="circle-title-anime">24 YEARS EXPERIENCE OF GAMING</span>
                    </div>
                    <div class="about-tag-icon">
                        <img src="assets/img/logo-icon.svg" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
    Team Area
    ==============================-->
    <section class="team-sec-1 space-top">
        <div class="team-shape1-1 shape-mockup" data-top="0" data-right="0"><img src="assets/img/bg/team-sec1-bg.png"
                alt="img"></div>
        <div class="container th-container3">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <div class="title-area text-center custom-anim-top wow animated" data-wow-duration="1.5s"
                        data-wow-delay="0.2s">
                        <span class="sub-title"># Top World Class Gamer</span>
                        <h2 class="sec-title">Let’s See Our Pro Players</h2>
                    </div>
                </div>
            </div>
            <div class="slider-area team-slider1">
                <div class="swiper th-slider has-shadow" id="teamSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"}}}'>
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/1-1.png" alt="Team">
                                    </div>
                                    <img class="game-logo" src="assets/img/team/game-logo1-1.png" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Max Alexis</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/1-2.png" alt="Team">
                                    </div>
                                    <img class="game-logo" src="assets/img/team/game-logo1-2.png" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Wilium Lili</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/1-3.png" alt="Team">
                                    </div>
                                    <img class="game-logo" src="assets/img/team/game-logo1-3.png" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Mac Marsh</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/1-4.png" alt="Team">
                                    </div>
                                    <img class="game-logo" src="assets/img/team/game-logo1-4.png" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Eva Raina</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/1-5.png" alt="Team">
                                    </div>
                                    <img class="game-logo" src="assets/img/team/game-logo1-5.png" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Robin Cloth</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/1-1.png" alt="Team">
                                    </div>
                                    <img class="game-logo" src="assets/img/team/game-logo1-1.png" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Max Alexis</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/1-2.png" alt="Team">
                                    </div>
                                    <img class="game-logo" src="assets/img/team/game-logo1-2.png" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Wilium Lili</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/1-3.png" alt="Team">
                                    </div>
                                    <img class="game-logo" src="assets/img/team/game-logo1-3.png" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Mac Marsh</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/1-4.png" alt="Team">
                                    </div>
                                    <img class="game-logo" src="assets/img/team/game-logo1-4.png" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Eva Raina</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/1-5.png" alt="Team">
                                    </div>
                                    <img class="game-logo" src="assets/img/team/game-logo1-5.png" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Robin Cloth</a></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button data-slider-prev="#teamSlider1" class="slider-arrow slider-prev"><i
                        class="far fa-arrow-left"></i></button>
                <button data-slider-next="#teamSlider1" class="slider-arrow slider-next"><i
                        class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section>
    <!--==============================
    Client Area
    ==============================-->
    <div class="client-area-1 overflow-hidden space">
        <div class="container-fluid p-0">
            <div class="swiper th-slider client-slider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"400":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"7"},"1300":{"slidesPerView":"9"}}, "spaceBetween": "0", "loop": "true"}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/client/1-1.png" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/client/1-2.png" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/client/1-3.png" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/client/1-4.png" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/client/1-5.png" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/client/1-6.png" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/client/1-7.png" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/client/1-8.png" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/client/1-9.png" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/client/1-1.png" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/client/1-2.png" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/client/1-3.png" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/client/1-4.png" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/client/1-5.png" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/client/1-6.png" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/client/1-7.png" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/client/1-8.png" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/client/1-9.png" alt="Image">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
