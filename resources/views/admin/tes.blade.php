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
    <div class="th-checkout-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form class="woocommerce-form-login mb-3" method="POST" action="{{ route('keluaradmin') }}">
                        @csrf
                        <div class="form-group">
                            <button type="submit" class="th-btn">LOGOUT<span class="icon"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('landingpage.public.footer')
</body>
@include('landingpage.public.script')

</html>
