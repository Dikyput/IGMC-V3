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
    <style>
        .img-container {
            display: flex;
            justify-content: center;
            align-items: center;
            max-height: 40%;
            padding: 1vh;

            .avatar-img {
                min-width: 15%;
                max-width: 40%;
                height: auto;
                border-radius: 50%;
                object-fit: cover;
            }

            @media (max-width: 768px) {
                .img-container {
                    height: auto;
                }

                .avatar-img {
                    max-width: 100px;
                }
            }
    </style>
</head>

<body>
    @include('layouts.header')
    <div class="cursor-animation cursor-image"></div>
    <div class="container mt-2">
        <div class="th-comment-form">
            <div class="row">
                @if (Auth::check())
                    @php
                        $user = Auth::user();
                        $discordUser = $user->discord;
                        $discordId = $discordUser ? $discordUser->id_discord : 'N/A';
                        $avatar = $discordUser ? $discordUser->getAvatarUrl() : 'N/A';
                    @endphp
                    <div class="img-container">
                        <img src="{{ $avatar }}" alt="Avatar" class="avatar-img">
                    </div>
                @endif
            </div>
            <form method="POST" action="{{ route('update_profile') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group style-border">
                        <input type="text" name="firstname" placeholder="Firs Name*" class="form-control" required>
                        <i class="far fa-user"></i>
                    </div>
                    <div class="col-md-6 form-group style-border">
                        <input type="text" name="lastname" placeholder="Last Name*" class="form-control" required>
                        <i class="far fa-envelope"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group style-border">
                        <input type="email" name="email" placeholder="Your Email*" class="form-control">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="col-md-8 form-group style-border">
                        <input type="text" name="nationaly" placeholder="Your Nationaly*" class="form-control">
                        <i class="far fa-flag"></i>
                    </div>
                </div>
                <div class="col-12 form-group mb-0">
                    <button type="submit" class="th-btn">SAVE PROFILE <i class="far fa-arrow-right ms-2"></i></button>
                </div>
            </form>
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

    @include('layouts.script')
</body>

</html>
