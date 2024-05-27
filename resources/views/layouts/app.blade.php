<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IGMC V3</title>
    <meta name="author" content="IGMCV3">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="IGMC V3 - Indonesia GTA V Master Championship">
    <meta name="keywords" content="IGMC V3 - Indonesia GTA V Master Championship">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    @include('layouts.core')
</head>
<header class="th-header header-layout1">
    @include('layouts.header')
</header>

<div class="cursor-animation cursor-image"></div>
<div class="preloader ">
    <button class="th-btn preloaderCls">CANCEL PRELOADER </button>
    <div class="preloader-inner">
        <span class="loader"></span>
    </div>
</div>
@yield('content')
<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>

@include('layouts.footer')
@include('layouts.script')

</html>
