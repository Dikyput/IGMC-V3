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
    @include('layouts.core')
</head>

<body>
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
                        <input id="token" type="text" class="form-control @error('token') is-invalid @enderror"
                            name="token" required autofocus>
                        @error('token')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="btn-group custom-anim-top wow animated" data-wow-duration="1.2s" data-wow-delay="0.7s">
                    <button type="submit" class="th-btn">VALIDASI
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>
    @include('layouts.script')
</body>

</html>
