<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Mitech')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Technology IT solutions website')">
    <link rel="icon" href="{{ asset('mitech-assets/images/favicon.webp') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('mitech-assets/css/vendor/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mitech-assets/css/plugins/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mitech-assets/css/style.css') }}">
    @stack('styles')
</head>
<body>
    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    @include('partials.header')

    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            @yield('content')
            @include('partials.footer')
        </div>
    </div>

    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fas fa-chevron-up"></i>
        <i class="arrow-bottom fas fa-chevron-up"></i>
    </a>

    @include('partials.mobile-menu')

    <script src="{{ asset('mitech-assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('mitech-assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('mitech-assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('mitech-assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('mitech-assets/js/plugins/plugins.min.js') }}"></script>
    <script src="{{ asset('mitech-assets/js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>
