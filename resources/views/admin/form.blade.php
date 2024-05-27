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
    <div class="th-checkout-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="col-12 filter-item cat1">
                <div class="tournament-card gradient-border">
                    <div class="col-8">
                        <form class="woocommerce-form-login mb-2" method="POST" action="{{ route('loginform') }}">
                            @csrf
                            <div class="form-group">
                                <label>email *</label>
                                <input type="email" name="email" required class="form-control" placeholder="email">
                            </div>
                            <div class="form-group">
                                <label>Password *</label>
                                <input type="password" name="password" required class="form-control"
                                    placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="th-btn">Login<span class="icon"></span></button>
                            </div>
                        </form>
                    </div>
                    <div class="tournament-card-content">
                        <h2 class="tournament-card"><span class="text-theme">LOGIN ADMIN</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>
@include('layouts.script')

</html>
