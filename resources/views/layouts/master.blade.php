<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#02adfc">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--====== Title ======-->
    <title>Bienvenido - coachWMT</title>
    <!-- ========== Favicon Ico ========== -->
    <link rel="icon" href="{{ asset("images/logo.png") }}" />
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('vendor/bs/css/bootstrap.min.css') }}" />
    <!--====== swiper css ======-->
    <link rel="stylesheet" href="{{ asset('vendor/swiper/css/swiper.min.css') }}" />
    <!--====== IcoFont css ======-->
    <link rel="stylesheet" href="{{ asset('vendor/icofont/icofont.min.css') }}" />
    <!--====== Odometer css ======-->
    <link rel="stylesheet" href="{{ asset('vendor/odometer/css/odometer-theme-default.css') }}" />
    <!--====== Glightbox css ======-->
    <link rel="stylesheet" href="{{ asset('vendor/glightbox/css/glightbox.css') }}" />
    <!--====== Margubs & Paddings css ======-->
    <link rel="stylesheet" href="{{ asset('css/margins-paddings.css') }}" />
    <!--====== Aos & Paddings css ======-->
    <link rel="stylesheet" href="{{ asset('vendor/aos/css/aos.css') }}" />
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @yield('header')
</head>

<body>
    <div class="section-wrapper">
        <!-- ========== Preloader start ========== -->
        <div id="preLoader"></div>
        <!-- ========== Preloader end ========== -->

        <!-- ========== Header start ========== -->
        <header class="header">
            @include('layouts.includes.navbar')
        </header>
        <!-- ========== Header end ========== -->

        <main>
            @yield('body')
        </main>
    </div>

    @include('layouts.includes.footer')
    <!--====== jquery js ======-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('vendor/bs/js/bootstrap.bundle.min.js') }}"></script>
    <!--====== One page nav ======-->
    <script src="{{ asset('js/onepageNav.js') }}"></script>
    <!--====== Ajaxchimp js ======-->
    <script src="{{ asset('vendor/jquery/jquery.ajaxchimp.min.js') }}"></script>
    <!--====== Glightbox js ======-->
    <script src="{{ asset('vendor/glightbox/js/glightbox.js') }}"></script>
    <!--====== Glightbox js ======-->
    <script src="{{ asset('vendor/swiper/js/swiper.min.js') }}"></script>
    <!--====== Appear js ======-->
    <script src="{{ asset('vendor/jquery/jquery.appear.min.js') }}"></script>
    <!--====== Odometer js ======-->
    <script src="{{ asset('vendor/odometer/js/odometer.min.js') }}"></script>
    <!--====== Aos js ======-->
    <script src="{{ asset('vendor/aos/js/aos.js') }}"></script>
    <!--====== Custom js ======-->
    <script src="{{ asset('js/custom.js') }}"></script>

    <footer>
        @yield('footer')
    </footer>

</body>

</html>
