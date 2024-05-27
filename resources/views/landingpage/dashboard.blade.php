@extends('layouts.app')
@section('content')
    <div class="th-hero-wrapper hero-1" id="hero" data-bg-src="{{ asset('assets/img/hero/hero-bg1-1.png') }}">
        <div class="container">
            <div class="hero-style1 text-center">
                <span class="sub-title custom-anim-top wow animated" data-wow-duration="1.2s" data-wow-delay="0.1s">#
                    Every One Can Be Ontop & #IGMC</span>
                <h1 class="hero-title">
                    <span class="title1 custom-anim-top wow animated" data-wow-duration="1.1s" data-wow-delay="0.3s"
                        data-bg-src="{{ asset('assets/img/hero/hero-title-bg-shape1.svg') }}">INDONESIA GTA V MASTER
                        CHAMPIONSHIP</span>
                    <span class="title2 custom-anim-top wow animated" data-wow-duration="1.1s"
                        data-wow-delay="0.4s">IGMC</span>
                </h1>
                <div class="btn-group custom-anim-top wow animated" data-wow-duration="1.2s" data-wow-delay="0.7s">
                    <div href="#" class="th-btn">PLAYER 0 / 100000</div>
                </div>
            </div>
        </div>
    </div>

    <div class="swiper th-slider hero-cta-slider1" id="heroSlider1" data-slider-options='{"effect":"fade"}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-cta-inner">
                    <div class="container th-container2">
                        <div class="hero-shape-area">
                            <div class="hero-bg-shape">
                                <div class="hero-bg-border-anime"
                                    data-mask-src="{{ asset('assets/img/hero/hero-slider-bg-shape4-1.png') }}">
                                </div>
                                <svg viewBox="0 0 1600 520" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1599 30V490C1599 506.016 1586.02 519 1570 519H1062.43C1054.74 519 1047.36 515.945 1041.92 510.506L1009.49 478.08C1003.68 472.266 995.795 469 987.574 469H612.426C604.205 469 596.32 472.266 590.506 478.08L558.08 510.506C552.641 515.945 545.265 519 537.574 519H30C13.9837 519 1 506.016 1 490V30C1 13.9837 13.9837 1 30 1H400H537.574C545.265 1 552.641 4.05535 558.08 9.4939L590.506 41.9203C596.32 47.7339 604.205 51 612.426 51H987.574C995.795 51 1003.68 47.7339 1009.49 41.9203L1041.92 9.4939C1047.36 4.05535 1054.74 1 1062.43 1H1200H1570C1586.02 1 1599 13.9837 1599 30Z"
                                        fill="black" stroke="url(#paint0_linear1_47_22)" stroke-width="2" />
                                    <mask id="mask0_47_22" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0">
                                        <path
                                            d="M1600 490V30C1600 13.4315 1586.57 0 1570 0H1200H1062.43C1054.47 0 1046.84 3.1607 1041.21 8.7868L1008.79 41.2132C1003.16 46.8393 995.53 50 987.574 50H612.426C604.47 50 596.839 46.8393 591.213 41.2132L558.787 8.7868C553.161 3.16071 545.53 0 537.574 0H400H30C13.4315 0 0 13.4314 0 30V490C0 506.569 13.4315 520 30 520H537.574C545.53 520 553.161 516.839 558.787 511.213L591.213 478.787C596.839 473.161 604.47 470 612.426 470H987.574C995.53 470 1003.16 473.161 1008.79 478.787L1041.21 511.213C1046.84 516.839 1054.47 520 1062.43 520H1570C1586.57 520 1600 506.569 1600 490Z"
                                            fill="black" />
                                    </mask>
                                    <g mask="url(#mask0_47_22)">
                                        <g filter="url(#filter0_f_47_22)">
                                            <circle cx="1413" cy="314" r="287" fill="var(--theme-color2)"
                                                fill-opacity="0.2" />
                                        </g>
                                        <g filter="url(#filter01_f_47_22)">
                                            <circle cx="231" cy="172" r="229" fill="var(--theme-color)"
                                                fill-opacity="0.5" />
                                        </g>
                                    </g>

                                </svg>
                                <div class="verses-thumb d-xl-none d-block">
                                    <img src="{{ asset('assets/img/tournament/game-vs1.svg') }}" alt="tournament image">
                                </div>
                                <div class="hero-img1 z-index-common" data-ani="slideinleft" data-ani-delay="0.4s">
                                    <img src="{{ asset('assets/img/hero/hero-1-1.png') }}" alt="Image">
                                </div>
                                <div class="hero-img2 z-index-common" data-ani="slideinright" data-ani-delay="0.4s">
                                    <img src="{{ asset('assets/img/hero/hero-1-2.png') }}" alt="Image">
                                </div>
                            </div>
                            <div class="title-area mb-0">
                                <h2 class="sec-title text-white custom-anim-top wow animated" data-wow-duration="1.3s"
                                    data-wow-delay="0.1s">Join The Big Tournaments</h2>
                                <p class="mt-30 mb-30 custom-anim-top wow animated" data-wow-duration="1.3s"
                                    data-wow-delay="0.2s">Beyond esports tournaments, include a broader calendar of
                                    gaming events, conferences, and conventions. and connect with each other.</p>
                                <div class="btn-group custom-anim-top wow animated" data-wow-duration="1.3s"
                                    data-wow-delay="0.2s">
                                    <a href="about.html" class="th-btn style-border">
                                        <span class="btn-border">
                                            JOIN NOW <i class="fa-solid fa-arrow-right ms-2"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-cta-inner">
                    <div class="container th-container2">
                        <div class="hero-shape-area">
                            <div class="hero-bg-shape">
                                <div class="hero-bg-border-anime"
                                    data-mask-src="{{ asset('assets/img/hero/hero-slider-bg-shape4-1.png') }}">
                                </div>
                                <svg viewBox="0 0 1600 520" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1599 30V490C1599 506.016 1586.02 519 1570 519H1062.43C1054.74 519 1047.36 515.945 1041.92 510.506L1009.49 478.08C1003.68 472.266 995.795 469 987.574 469H612.426C604.205 469 596.32 472.266 590.506 478.08L558.08 510.506C552.641 515.945 545.265 519 537.574 519H30C13.9837 519 1 506.016 1 490V30C1 13.9837 13.9837 1 30 1H400H537.574C545.265 1 552.641 4.05535 558.08 9.4939L590.506 41.9203C596.32 47.7339 604.205 51 612.426 51H987.574C995.795 51 1003.68 47.7339 1009.49 41.9203L1041.92 9.4939C1047.36 4.05535 1054.74 1 1062.43 1H1200H1570C1586.02 1 1599 13.9837 1599 30Z"
                                        fill="black" stroke="url(#paint0_linear2_47_22)" stroke-width="2" />
                                    <mask id="mask1_47_22" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0">
                                        <path
                                            d="M1600 490V30C1600 13.4315 1586.57 0 1570 0H1200H1062.43C1054.47 0 1046.84 3.1607 1041.21 8.7868L1008.79 41.2132C1003.16 46.8393 995.53 50 987.574 50H612.426C604.47 50 596.839 46.8393 591.213 41.2132L558.787 8.7868C553.161 3.16071 545.53 0 537.574 0H400H30C13.4315 0 0 13.4314 0 30V490C0 506.569 13.4315 520 30 520H537.574C545.53 520 553.161 516.839 558.787 511.213L591.213 478.787C596.839 473.161 604.47 470 612.426 470H987.574C995.53 470 1003.16 473.161 1008.79 478.787L1041.21 511.213C1046.84 516.839 1054.47 520 1062.43 520H1570C1586.57 520 1600 506.569 1600 490Z"
                                            fill="black" />
                                    </mask>
                                    <g mask="url(#mask1_47_22)">
                                        <g filter="url(#filter1_f_47_22)">
                                            <circle cx="1413" cy="314" r="287" fill="var(--theme-color2)"
                                                fill-opacity="0.2" />
                                        </g>
                                        <g filter="url(#filter02_f_47_22)">
                                            <circle cx="231" cy="172" r="229" fill="var(--theme-color)"
                                                fill-opacity="0.5" />
                                        </g>
                                    </g>
                                    <defs>
                                        <filter id="filter1_f_47_22" x="566" y="-533" width="1694" height="1694"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                result="shape" />
                                            <feGaussianBlur stdDeviation="280" result="effect1_foregroundBlur_47_22" />
                                        </filter>
                                        <filter id="filter02_f_47_22" x="-558" y="-617" width="1578" height="1578"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                result="shape" />
                                            <feGaussianBlur stdDeviation="280" result="effect1_foregroundBlur_47_22" />
                                        </filter>
                                        <linearGradient id="paint0_linear2_47_22" x1="0" y1="0"
                                            x2="1600" y2="520" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="var(--theme-color)" />
                                            <stop offset="1" stop-color="var(--theme-color2)" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <div class="verses-thumb d-xl-none d-block">
                                    <img src="assets/img/tournament/game-vs1.svg" alt="tournament image">
                                </div>
                                <div class="hero-img1 z-index-common" data-ani="slideinleft" data-ani-delay="0.4s">
                                    <img src="assets/img/hero/hero-1-3.png" alt="Image">
                                </div>
                                <div class="hero-img2 z-index-common" data-ani="slideinright" data-ani-delay="0.4s">
                                    <img src="assets/img/hero/hero-1-4.png" alt="Image">
                                </div>
                            </div>
                            <div class="title-area mb-0">
                                <h2 class="sec-title text-white custom-anim-top wow animated" data-wow-duration="1.3s"
                                    data-wow-delay="0.1s">Join The Big Tournaments</h2>
                                <p class="mt-30 mb-30 custom-anim-top wow animated" data-wow-duration="1.3s"
                                    data-wow-delay="0.2s">Beyond esports tournaments, include a broader calendar of
                                    gaming events, conferences, and conventions. and connect with each other.</p>
                                <div class="btn-group custom-anim-top wow animated" data-wow-duration="1.3s"
                                    data-wow-delay="0.2s">
                                    <a href="about.html" class="th-btn style-border">
                                        <span class="btn-border">
                                            JOIN NOW <i class="fa-solid fa-arrow-right ms-2"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-cta-inner">
                    <div class="container th-container2">
                        <div class="hero-shape-area">
                            <div class="hero-bg-shape">
                                <div class="hero-bg-border-anime"
                                    data-mask-src="{{ asset('assets/img/hero/hero-slider-bg-shape4-1.png') }}">
                                </div>
                                <svg viewBox="0 0 1600 520" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1599 30V490C1599 506.016 1586.02 519 1570 519H1062.43C1054.74 519 1047.36 515.945 1041.92 510.506L1009.49 478.08C1003.68 472.266 995.795 469 987.574 469H612.426C604.205 469 596.32 472.266 590.506 478.08L558.08 510.506C552.641 515.945 545.265 519 537.574 519H30C13.9837 519 1 506.016 1 490V30C1 13.9837 13.9837 1 30 1H400H537.574C545.265 1 552.641 4.05535 558.08 9.4939L590.506 41.9203C596.32 47.7339 604.205 51 612.426 51H987.574C995.795 51 1003.68 47.7339 1009.49 41.9203L1041.92 9.4939C1047.36 4.05535 1054.74 1 1062.43 1H1200H1570C1586.02 1 1599 13.9837 1599 30Z"
                                        fill="black" stroke="url(#paint0_linear3_47_22)" stroke-width="2" />
                                    <mask id="mask2_47_22" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="0">
                                        <path
                                            d="M1600 490V30C1600 13.4315 1586.57 0 1570 0H1200H1062.43C1054.47 0 1046.84 3.1607 1041.21 8.7868L1008.79 41.2132C1003.16 46.8393 995.53 50 987.574 50H612.426C604.47 50 596.839 46.8393 591.213 41.2132L558.787 8.7868C553.161 3.16071 545.53 0 537.574 0H400H30C13.4315 0 0 13.4314 0 30V490C0 506.569 13.4315 520 30 520H537.574C545.53 520 553.161 516.839 558.787 511.213L591.213 478.787C596.839 473.161 604.47 470 612.426 470H987.574C995.53 470 1003.16 473.161 1008.79 478.787L1041.21 511.213C1046.84 516.839 1054.47 520 1062.43 520H1570C1586.57 520 1600 506.569 1600 490Z"
                                            fill="black" />
                                    </mask>
                                    <g mask="url(#mask2_47_22)">
                                        <g filter="url(#filter3_f_47_22)">
                                            <circle cx="1413" cy="314" r="287" fill="var(--theme-color2)"
                                                fill-opacity="0.2" />
                                        </g>
                                        <g filter="url(#filter03_f_47_22)">
                                            <circle cx="231" cy="172" r="229" fill="var(--theme-color)"
                                                fill-opacity="0.5" />
                                        </g>
                                    </g>
                                    <defs>
                                        <filter id="filter3_f_47_22" x="566" y="-533" width="1694" height="1694"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                result="shape" />
                                            <feGaussianBlur stdDeviation="280" result="effect1_foregroundBlur_47_22" />
                                        </filter>
                                        <filter id="filter03_f_47_22" x="-558" y="-617" width="1578" height="1578"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                result="shape" />
                                            <feGaussianBlur stdDeviation="280" result="effect1_foregroundBlur_47_22" />
                                        </filter>
                                        <linearGradient id="paint0_linear3_47_22" x1="0" y1="0"
                                            x2="1600" y2="520" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="var(--theme-color)" />
                                            <stop offset="1" stop-color="var(--theme-color2)" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <div class="verses-thumb d-xl-none d-block">
                                    <img src="{{ asset('assets/img/tournament/game-vs1.svg') }}" alt="tournament image">
                                </div>
                                <div class="hero-img1 z-index-common" data-ani="slideinleft" data-ani-delay="0.4s">
                                    <img src="{{ asset('assets/img/hero/hero-1-5.png') }}" alt="Image">
                                </div>
                                <div class="hero-img2 z-index-common" data-ani="slideinright" data-ani-delay="0.4s">
                                    <img src="{{ asset('assets/img/hero/hero-1-6.png') }}" alt="Image">
                                </div>
                            </div>
                            <div class="title-area mb-0">
                                <h2 class="sec-title text-white custom-anim-top wow animated" data-wow-duration="1.3s"
                                    data-wow-delay="0.1s">Join The Big Tournaments</h2>
                                <p class="mt-30 mb-30 custom-anim-top wow animated" data-wow-duration="1.3s"
                                    data-wow-delay="0.2s">Beyond esports tournaments, include a broader calendar of
                                    gaming events, conferences, and conventions. and connect with each other.</p>
                                <div class="btn-group custom-anim-top wow animated" data-wow-duration="1.3s"
                                    data-wow-delay="0.2s">
                                    <a href="about.html" class="th-btn style-border">
                                        <span class="btn-border">
                                            JOIN NOW <i class="fa-solid fa-arrow-right ms-2"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="slider-pagination"></div>
    </div>


    <!--==============================
                Marquee Area
                ==============================-->
    <div class="marquee-area-1 bg-repeat  overflow-hidden" data-bg-src="assets/img/bg/jiji-bg.png">
        <div class="container-fluid">
            <div class="swiper th-slider" id="marqueeSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},"autoplay":{"delay":1500,"disableOnInteraction":false},"spaceBetween":50}'>
                <div class="swiper-wrapper">
                    <!-- Single Item -->
                    <div class="marquee-item swiper-slide">
                        <div class="marquee_icon">
                            <img src="assets/img/normal/star.png" alt="Icon">
                        </div>
                        <h3 class="marquee-title"><a href="#">THE BIGGEST TOURNAMENT</a></h3>
                    </div>

                    <!-- Single Item -->
                    <div class="marquee-item swiper-slide">
                        <div class="marquee_icon">
                            <img src="assets/img/normal/star.png" alt="Icon">
                        </div>
                        <h3 class="marquee-title"><a href="#">IGMC - RGMC</a></h3>
                    </div>

                    <!-- Single Item -->
                    <div class="marquee-item swiper-slide">
                        <div class="marquee_icon">
                            <img src="assets/img/normal/star.png" alt="Icon">
                        </div>
                        <h3 class="marquee-title"><a href="#">IGSC - GGMC</a></h3>
                    </div>

                    <!-- Single Item -->
                    <div class="marquee-item swiper-slide">
                        <div class="marquee_icon">
                            <img src="assets/img/normal/star.png" alt="Icon">
                        </div>
                        <h3 class="marquee-title"><a href="#">INDONESIA GTA V MASTER CHAMPIONSHIP</a></h3>
                    </div>

                    <!-- Single Item -->
                    <div class="marquee-item swiper-slide">
                        <div class="marquee_icon">
                            <img src="assets/img/normal/star.png" alt="Icon">
                        </div>
                        <h3 class="marquee-title"><a href="#">THE BIGGEST TOURNAMENT</a></h3>
                    </div>

                    <!-- Single Item -->
                    <div class="marquee-item swiper-slide">
                        <div class="marquee_icon">
                            <img src="assets/img/normal/star.png" alt="Icon">
                        </div>
                        <h3 class="marquee-title"><a href="#">IGMC - RGMC</a></h3>
                    </div>

                    <!-- Single Item -->
                    <div class="marquee-item swiper-slide">
                        <div class="marquee_icon">
                            <img src="assets/img/normal/star.png" alt="Icon">
                        </div>
                        <h3 class="marquee-title"><a href="#">IGSC - GGMC</a></h3>
                    </div>

                    <!-- Single Item -->
                    <div class="marquee-item swiper-slide">
                        <div class="marquee_icon">
                            <img src="assets/img/normal/star.png" alt="Icon">
                        </div>
                        <h3 class="marquee-title"><a href="#">INDONESIA GTA V MASTER CHAMPIONSHIP</a></h3>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="point-table-area-1 space overflow-hidden" data-bg-src="assets/img/bg/tournament-table-sec1-bg.png"
        id="rankteam-sec">
        <div class="container">
            <div class="title-area text-center custom-anim-top wow animated" data-wow-duration="1.5s"
                data-wow-delay="0.2s">
                <span class="sub-title style2"># Point Table</span>
                <h2 class="sec-title">Game On, Power Up, Win Big <span class="text-theme">!</span></h2>
            </div>

            <div class="table-responsive">
                <table class="table tournament-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Team Squad</th>
                            <th scope="col">Matches</th>
                            <th scope="col">Matches</th>
                            <th scope="col">Place PTS.</th>
                            <th scope="col">Finishes</th>
                            <th scope="col">Total PTS.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><a href="tournament.html"><img src="assets/img/tournament/1-1.png" alt="img">PRO
                                    Player</a></td>
                            <td>4</td>
                            <td>0</td>
                            <td>21</td>
                            <td>25</td>
                            <td>47</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><a href="tournament.html"><img src="assets/img/tournament/1-2.png" alt="img">The
                                    Lion King</a></td>
                            <td>4</td>
                            <td>1</td>
                            <td>29</td>
                            <td>16</td>
                            <td>45</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td><a href="tournament.html"><img src="assets/img/tournament/1-3.png" alt="img">The
                                    Assassin King</a></td>
                            <td>4</td>
                            <td>1</td>
                            <td>25</td>
                            <td>20</td>
                            <td>45</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td><a href="tournament.html"><img src="assets/img/tournament/1-4.png"
                                        alt="img">Cyberpunk</a></td>
                            <td>4</td>
                            <td>0</td>
                            <td>32</td>
                            <td>12</td>
                            <td>44</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td><a href="tournament.html"><img src="assets/img/tournament/1-5.png" alt="img">Team
                                    Gorilla</a></td>
                            <td>4</td>
                            <td>1</td>
                            <td>24</td>
                            <td>19</td>
                            <td>43</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td><a href="tournament.html"><img src="{{ asset('assets/img/tournament/1-6.png') }}"
                                        alt="img">King Of Badgamer</a></td>
                            <td>4</td>
                            <td>0</td>
                            <td>17</td>
                            <td>21</td>
                            <td>38</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td><a href="tournament.html"><img src="assets/img/tournament/1-7.png" alt="img">Team
                                    Ninja</a></td>
                            <td>4</td>
                            <td>0</td>
                            <td>18</td>
                            <td>18</td>
                            <td>36</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--==============================
                Game Area
                ==============================-->
    <section class="overflow-hidden">
        <div class="container th-container2">
            <div class="game-sec-wrap1 space" data-bg-src="assets/img/bg/game-sec1-bg.png">
                <div class="title-area text-center custom-anim-top wow animated" data-wow-duration="1.5s"
                    data-wow-delay="0.1s">
                    <span class="sub-title"># Releases The Latest Game</span>
                    <h2 class="sec-title">Game On, Power Up, Win Big <span class="text-theme">!</span></h2>
                </div>
                <div class="slider-area">
                    <div class="swiper th-slider game-slider-1" id="gameSlider1"
                        data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="game-card gradient-border">
                                    <div class="game-card-img">
                                        <a href="game-details.html">
                                            <img src="assets/img/game/1-1.png" alt="game image">
                                        </a>
                                        <div class="game-logo">
                                            <img src="assets/img/game/logo1-1.png" alt="game logo">
                                        </div>
                                    </div>
                                    <div class="game-card-details">
                                        <h3 class="box-title"><a href="game-details.html">The Hunter Killer</a></h3>
                                        <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="game-card gradient-border">
                                    <div class="game-card-img">
                                        <a href="game-details.html">
                                            <img src="assets/img/game/1-2.png" alt="game image">
                                        </a>
                                        <div class="game-logo">
                                            <img src="assets/img/game/logo1-2.png" alt="game logo">
                                        </div>
                                    </div>
                                    <div class="game-card-details">
                                        <h3 class="box-title"><a href="game-details.html">Net Remaining Monies</a>
                                        </h3>
                                        <p class="game-content">Entry Fee:<span class="text-theme">Free</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="game-card gradient-border">
                                    <div class="game-card-img">
                                        <a href="game-details.html">
                                            <img src="assets/img/game/1-3.png" alt="game image">
                                        </a>
                                        <div class="game-logo">
                                            <img src="assets/img/game/logo1-3.png" alt="game logo">
                                        </div>
                                    </div>
                                    <div class="game-card-details">
                                        <h3 class="box-title"><a href="game-details.html">Duty Balck Ops</a></h3>
                                        <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="game-card gradient-border">
                                    <div class="game-card-img">
                                        <a href="game-details.html">
                                            <img src="assets/img/game/1-4.png" alt="game image">
                                        </a>
                                        <div class="game-logo">
                                            <img src="assets/img/game/logo1-4.png" alt="game logo">
                                        </div>
                                    </div>
                                    <div class="game-card-details">
                                        <h3 class="box-title"><a href="game-details.html">League of Legends</a></h3>
                                        <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="game-card gradient-border">
                                    <div class="game-card-img">
                                        <a href="game-details.html">
                                            <img src="assets/img/game/1-1.png" alt="game image">
                                        </a>
                                        <div class="game-logo">
                                            <img src="assets/img/game/logo1-1.png" alt="game logo">
                                        </div>
                                    </div>
                                    <div class="game-card-details">
                                        <h3 class="box-title"><a href="game-details.html">The Hunter Killer</a></h3>
                                        <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="game-card gradient-border">
                                    <div class="game-card-img">
                                        <a href="game-details.html">
                                            <img src="assets/img/game/1-2.png" alt="game image">
                                        </a>
                                        <div class="game-logo">
                                            <img src="assets/img/game/logo1-2.png" alt="game logo">
                                        </div>
                                    </div>
                                    <div class="game-card-details">
                                        <h3 class="box-title"><a href="game-details.html">Net Remaining Monies</a>
                                        </h3>
                                        <p class="game-content">Entry Fee:<span class="text-theme">Free</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="game-card gradient-border">
                                    <div class="game-card-img">
                                        <a href="game-details.html">
                                            <img src="assets/img/game/1-3.png" alt="game image">
                                        </a>
                                        <div class="game-logo">
                                            <img src="assets/img/game/logo1-3.png" alt="game logo">
                                        </div>
                                    </div>
                                    <div class="game-card-details">
                                        <h3 class="box-title"><a href="game-details.html">Duty Balck Ops</a></h3>
                                        <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="game-card gradient-border">
                                    <div class="game-card-img">
                                        <a href="game-details.html">
                                            <img src="assets/img/game/1-4.png" alt="game image">
                                        </a>
                                        <div class="game-logo">
                                            <img src="assets/img/game/logo1-4.png" alt="game logo">
                                        </div>
                                    </div>
                                    <div class="game-card-details">
                                        <h3 class="box-title"><a href="game-details.html">League of Legends</a></h3>
                                        <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="slider-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
                Feature Area
                ==============================-->

    <section class="space bg-top-center" data-bg-src="assets/img/bg/tournament-sec1-bg.png">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-auto">
                    <div class="title-area text-lg-start text-center custom-anim-left wow animated"
                        data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <span class="sub-title"># Game Streaming Battle </span>
                        <h2 class="sec-title">Our Gaming Tournaments <span class="text-theme">!</span></h2>
                    </div>
                </div>
                <div class="col-lg-auto">
                    <div class="sec-btn custom-anim-right wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="tournament-filter-btn filter-menu filter-menu-active">
                            <button data-filter="*" class="tab-btn active" type="button">ALL MATCH</button>
                            <button data-filter=".cat1" class="tab-btn" type="button">UPCOMING MATCH</button>
                            <button data-filter=".cat2" class="tab-btn" type="button">FINISHED MATCH</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4 filter-active">
                <div class="col-12 filter-item cat1">
                    <div class="tournament-card gradient-border">
                        <div class="tournament-card-img">
                            <img src="assets/img/tournament/1-1.png" alt="tournament image">
                            <img src="{{ asset('assets/img/tournament/game-vs1.svg') }}" alt="tournament image">
                            <img src="assets/img/tournament/1-2.png" alt="tournament image">
                        </div>
                        <div class="tournament-card-content">
                            <div class="tournament-card-details">
                                <div class="tournament-card-meta">
                                    <span class="tournament-card-tag">Upcoming</span>
                                    <span class="tournament-card-score gradient-border">0 / 0</span>
                                </div>
                                <h3 class="tournament-card-title"><a href="tournament-details.html">Pro Player VS
                                        Lion King</a></h3>
                                <p class="tournament-card-date">23 December, 2024 <span class="text-theme">6:00
                                        PM</span></p>
                                <div class="th-social">
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i>Youtube</a>
                                    <a href="tournament-details.html"><i class="fa-brands fa-twitch"></i>Twitch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 filter-item cat2">
                    <div class="tournament-card gradient-border">
                        <div class="tournament-card-img">
                            <img src="assets/img/tournament/1-3.png" alt="tournament image">
                            <img src="{{ asset('assets/img/tournament/game-vs1.svg') }}" alt="tournament image">
                            <img src="assets/img/tournament/1-4.png" alt="tournament image">
                        </div>
                        <div class="tournament-card-content">
                            <div class="tournament-card-details">
                                <div class="tournament-card-meta">
                                    <span class="tournament-card-tag">Finished</span>
                                    <span class="tournament-card-score gradient-border">20 / 22</span>
                                </div>
                                <h3 class="tournament-card-title"><a href="tournament-details.html">Assassin King VS
                                        Cyberpunk</a></h3>
                                <p class="tournament-card-date">20 December, 2024 <span class="text-theme">6:00
                                        PM</span></p>
                                <div class="th-social">
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i>Youtube</a>
                                    <a href="tournament-details.html"><i class="fa-brands fa-twitch"></i>Twitch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 filter-item cat1">
                    <div class="tournament-card gradient-border">
                        <div class="tournament-card-img">
                            <img src="{{ asset('assets/img/tournament/1-5.png') }}" alt="tournament image">
                            <img src="{{ asset('assets/img/tournament/game-vs1.svg') }}" alt="tournament image">
                            <img src="{{ asset('assets/img/tournament/1-6.png') }}" alt="tournament image">
                        </div>
                        <div class="tournament-card-content">
                            <div class="tournament-card-details">
                                <div class="tournament-card-meta">
                                    <span class="tournament-card-tag">Upcoming</span>
                                    <span class="tournament-card-score gradient-border">0 / 0</span>
                                </div>
                                <h3 class="tournament-card-title"><a href="tournament-details.html">Team Gorilla VS
                                        Badgamer</a></h3>
                                <p class="tournament-card-date">23 December, 2024 <span class="text-theme">6:00
                                        PM</span></p>
                                <div class="th-social">
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i>Youtube</a>
                                    <a href="tournament-details.html"><i class="fa-brands fa-twitch"></i>Twitch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> <!--==============================
                Gallery Area
                ==============================-->
    <div class="container-fluid p-0">
        <div class="gallery-area-1 overflow-hidden text-center">
            <div class="slider-area gallery-slider1">
                <div class="swiper th-slider" id="gallerySlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"0","stretch":"0","depth":"150","modifier":"1"},"centeredSlides":"true"}'>
                    <div class="swiper-wrapper">
                        <!--==============================
                Gallery Area
                ==============================-->
                        <div class="swiper-slide gallery-wrap1">
                            <div class="th-video">
                                <img src="{{ asset('assets/img/video/1-1.png') }}" alt="img">
                                <a href="{{ asset('assets/img/video/1-1.png') }}" class="play-btn popup-image style3"><i
                                        class="fa-solid fa-arrow-up-right"></i></a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrap1">
                            <div class="th-video">
                                <img src="{{ asset('assets/img/video/1-2.png') }}" alt="img">
                                <a href="{{ asset('assets/img/video/1-2.png') }}" class="play-btn popup-image style3"><i
                                        class="fa-solid fa-arrow-up-right"></i></a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrap1">
                            <div class="th-video">
                                <img src="{{ asset('assets/img/video/1-3.png') }}" alt="img">
                                <a href="{{ asset('assets/img/video/1-3.png') }}" class="play-btn popup-image style3"><i
                                        class="fa-solid fa-arrow-up-right"></i></a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrap1">
                            <div class="th-video">
                                <img src="{{ asset('assets/img/video/1-1.png') }}" alt="img">
                                <a href="{{ asset('assets/img/video/1-1.png') }}" class="play-btn popup-image style3"><i
                                        class="fa-solid fa-arrow-up-right"></i></a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrap1">
                            <div class="th-video">
                                <img src="{{ asset('assets/img/video/1-2.png') }}" alt="img">
                                <a href="{{ asset('assets/img/video/1-2.png') }}" class="play-btn popup-image style3"><i
                                        class="fa-solid fa-arrow-up-right"></i></a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrap1">
                            <div class="th-video">
                                <img src="{{ asset('assets/img/video/1-3.png') }}" alt="img">
                                <a href="{{ asset('assets/img/video/1-3.png') }}" class="play-btn popup-image style3"><i
                                        class="fa-solid fa-arrow-up-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <button data-slider-prev="#gallerySlider1" class="slider-arrow slider-prev"><i
                        class="fas fa-angle-left"></i></button>
                <button data-slider-next="#gallerySlider1" class="slider-arrow slider-next"><i
                        class="fas fa-angle-right"></i></button>
            </div>
        </div>
    </div><!--==============================
                Team Area
                ==============================-->
    <section class="team-sec-1 space">
        <div class="team-shape1-1 shape-mockup" data-top="0" data-right="0"><img
                src="{{ asset('assets/img/bg/team-sec1-bg.png') }}" alt="img"></div>
        <div class="container th-container3">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <div class="title-area text-center custom-anim-top wow animated" data-wow-duration="1.5s"
                        data-wow-delay="0.2s">
                        <span class="sub-title"># INDONESIA GTA V MASTER CHAMPIONSHIP</span>
                        <h2 class="sec-title">PROPLAYER OF IGMC</h2>
                    </div>
                </div>
            </div>
            <div class="slider-area team-slider1">
                <div class="swiper th-slider has-shadow" id="teamSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"}}}'>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <h3 class="box-title"><a href="#"></a></h3>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('assets/img/team/1-1.png') }}" alt="Team">
                                    </div>
                                    <img class="game-logo" src="{{ asset('assets/img/team/game-logo1-1.png') }}"
                                        alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="#"></a></h3>
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
                Cta Area
                ==============================-->
    <div class="container th-container4">
        <div class="cta-area-1">
            <div class="cta-bg-shape-border">
                <svg width="1464" height="564" viewBox="0 0 1464 564" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1463.5 30V534C1463.5 550.292 1450.29 563.5 1434 563.5H1098H927.426C919.603 563.5 912.099 560.392 906.567 554.86L884.14 532.433C878.42 526.713 870.663 523.5 862.574 523.5H601.426C593.337 523.5 585.58 526.713 579.86 532.433L557.433 554.86C551.901 560.392 544.397 563.5 536.574 563.5H366H30C13.7076 563.5 0.5 550.292 0.5 534V30C0.5 13.7076 13.7076 0.5 30 0.5H366H536.574C544.397 0.5 551.901 3.60802 557.433 9.14034L579.86 31.5668C585.58 37.2866 593.337 40.5 601.426 40.5H862.574C870.663 40.5 878.42 37.2866 884.14 31.5668L906.567 9.14035C912.099 3.60803 919.603 0.5 927.426 0.5H1098H1434C1450.29 0.5 1463.5 13.7076 1463.5 30Z"
                        stroke="url(#paint0_linear_202_547)" />
                    <defs>
                        <linearGradient id="paint0_linear_202_547" x1="0" y1="0" x2="1505.47"
                            y2="412.762" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="var(--theme-color)" />
                            <stop offset="1" stop-color="var(--theme-color2)" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="cta-wrap-bg bg-repeat" data-bg-src="{{ asset('assets/img/bg/jiji-bg.png') }}"
                data-mask-src="{{ asset('assets/img/shape/cta-bg-shape1.svg') }}">
                <div class="cta-bg-img">
                    <img src="{{ asset('assets/img/bg/cta-sec1-bg.png') }}" alt="img">
                </div>
                <div class="cta-thumb">
                    <img src="{{ asset('assets/img/normal/cta1-1.png') }}" alt="img">
                </div>
            </div>
            <div class="cta-wrap">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="title-area mb-0 custom-anim-left wow animated" data-wow-duration="1.5s"
                            data-wow-delay="0.2s">
                            <span class="sub-title"># World Best Community Site</span>
                            <h2 class="sec-title">Join Indonesia GTA V Master Championship to Become Next <span
                                    class="text-theme fw-medium">Master Championship Tournament Today !</span></h2>
                            <p class="mt-30 mb-30">We are presenting something new to create a competitive platform
                                that can be useful for all the teams involved.</p>
                            <a href="https://discord.gg/GrgJSJB94Y" class="th-btn">JOIN COMMUNITY <i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
                Product Area
                ==============================-->
    <section class="space">
        <div class="container">
            <div class="row justify-content-between align-items-center" id="crew-sec">
                <div class="col-md-auto">
                    <div class="title-area custom-anim-left wow animated text-md-start text-center"
                        data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <span class="sub-title"># INDONESIA GTA V MASTER CHAMPIONSHIP</span>
                        <h2 class="sec-title">TEAM IGMC 2024 <span class="text-theme">!</span></h2>
                    </div>
                </div>
                <div class="col-md-auto d-none d-md-block">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slider-prev="#productSlider1" class="slider-arrow style2 default"><i
                                    class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#productSlider1" class="slider-arrow style2 default"><i
                                    class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper th-slider has-shadow" id="productSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"},"1300":{"slidesPerView":"5"}}}'>
                <div class="swiper-wrapper">

                    @foreach ($datacrew as $datacrew)
                        <div class="swiper-slide">
                            <div class="swiper-slide">
                                <div class="th-team team-card">
                                    <div class="team-card-corner team-card-corner1"></div>
                                    <div class="team-card-corner team-card-corner2"></div>
                                    <div class="team-card-corner team-card-corner3"></div>
                                    <div class="team-card-corner team-card-corner4"></div>
                                    <h5 class="box-title"><a href="#">{{ $datacrew->roles }}</a></h5>
                                    <div class="img-wrap">
                                        <div class="team-img">
                                            <img src="{{ asset('assets/img/team/1-1.png') }}" alt="Team">
                                        </div>
                                        <img class="game-logo" src="{{ asset('assets/img/team/game-logo1-1.png') }}"
                                            alt="Team">
                                    </div>
                                    <div class="team-card-content">
                                        <h5 class="box-title"><a href="#">{{ $datacrew->name }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-block d-md-none mt-40 text-center">
                <div class="icon-box">
                    <button data-slider-prev="#productSlider1" class="slider-arrow style2 default"><i
                            class="far fa-arrow-left"></i></button>
                    <button data-slider-next="#productSlider1" class="slider-arrow style2 default"><i
                            class="far fa-arrow-right"></i></button>
                </div>
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
                            <img src="{{ asset('assets/img/client/1-1.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/1-2.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/1-3.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/1-4.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/1-5.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/1-6.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/1-7.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/1-8.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/1-9.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/1-1.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/1-2.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/1-3.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/1-4.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/1-5.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/1-6.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/1-7.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/1-8.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/1-9.png') }}" alt="Image">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
