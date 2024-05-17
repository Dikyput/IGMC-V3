<!doctype html>
<html class="no-js " lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IGMC V3</title>
    <meta name="author" content="IGMCV3">
    <meta name="description" content="IGMC V3 - Indonesia GTA V Master Championship">
    <meta name="keywords" content="IGMC V3 - Indonesia GTA V Master Championship">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    @include('landingpage.public.core')
</head>

<body>
    @include('landingpage.public.header')
    <div class="cursor-animation cursor-image"></div>
    <div class="container">
        <div class="hero-style1 text-center">
            <div class="th-comment-form ">
                <div class="row">
                    <h3 class="widget_title">WELCOME TO IMGC V3, GET TOKEN PLEASE JOIN IN FIVEM</h3>
                    <div class="form-group">
                        @if (Auth::check())
                            @php
                                $user = Auth::user();
                                $discordUser = $user->discord;
                                $discordId = $discordUser ? $discordUser->id_discord : 'N/A';
                                $avatar = $discordUser ? $discordUser->getAvatarUrl() : 'N/A';
                            @endphp
                            <div class="img">
                                <img src="{{ $avatar }}" alt="Avatar">
                            </div>
                        @endif
                    </div>
                    <form method="POST" action="{{ route('verify-token') }}">
                        @csrf
                        <label for="token">{{ __('Verification Token') }}</label>
                        <input id="token" type="text" class="form-control @error('token') is-invalid @enderror" name="token" required autofocus>
                        @error('token')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="btn-group custom-anim-top wow animated" data-wow-duration="1.2s" data-wow-delay="0.7s">
                    <button type="submit" class="th-btn">VALIDASI</div>
                    </button>
                </div>
            </form>
                @include('landingpage.public.footer')
            </div>
        </div>
    </div>

    
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
