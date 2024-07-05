<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" id="token">
    {{-- <meta name="csrf-token" content="<?php //echo csrf_token(); ?>" id="token"> --}}
    

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('iportfolio')}}/assets/img/favicon.png" rel="icon">
    <link href="{{asset('iportfolio')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @yield('head')
    <!-- Vendor CSS Files -->
    <link href="{{asset('iportfolio')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('iportfolio')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('iportfolio')}}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{asset('iportfolio')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{asset('iportfolio')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{asset('iportfolio')}}/assets/css/main.css" rel="stylesheet">
    @yield('head')

    <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">
    @include('iportfolio.inc._header')

    <main class="main">
        @yield('content')
    </main>

    <footer id="footer" class="footer position-relative light-background">

        <div class="container">
            <div class="copyright text-center ">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">iPortfolio</strong> <span>All Rights
                        Reserved</span></p>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('iportfolio')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('iportfolio')}}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{asset('iportfolio')}}/assets/vendor/aos/aos.js"></script>
    <script src="{{asset('iportfolio')}}/assets/vendor/typed.js/typed.umd.js"></script>
    <script src="{{asset('iportfolio')}}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{asset('iportfolio')}}/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{asset('iportfolio')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{asset('iportfolio')}}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('iportfolio')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{asset('iportfolio')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="{{asset('iportfolio')}}/assets/js/main.js"></script>
    @yield('script')

</body>

</html>
