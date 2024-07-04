<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Bolby - Portfolio/CV/Resume HTML Template</title>
    <meta name="description" content="Bolby - Portfolio/CV/Resume HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://via.placeholder.com/32x32">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{asset('bolby')}}/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('bolby')}}/css/all.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('bolby')}}/css/simple-line-icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('bolby')}}/css/slick.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('bolby')}}/css/animate.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('bolby')}}/css/magnific-popup.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('bolby')}}/css/style.css" type="text/css" media="all">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Preloader -->
    @include('bolby.inc._preloader')

    <!-- desktop header -->
    @include('bolby.inc._header')

    <!-- main layout -->
    <main class="content-3">

        @yield('content')
        
        <div class="spacer" data-height="96"></div>

        @include('bolby.inc._footer')

    </main>

    <!-- Go to top button -->
    <a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- SCRIPTS -->
    <script src="{{asset('bolby')}}/js/jquery-1.12.3.min.js"></script>
    <script src="{{asset('bolby')}}/js/jquery.easing.min.js"></script>
    <script src="{{asset('bolby')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{asset('bolby')}}/js/jquery.counterup.min.js"></script>
    <script src="{{asset('bolby')}}/js/popper.min.js"></script>
    <script src="{{asset('bolby')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('bolby')}}/js/isotope.pkgd.min.js"></script>
    <script src="{{asset('bolby')}}/js/infinite-scroll.min.js"></script>
    <script src="{{asset('bolby')}}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('bolby')}}/js/slick.min.js"></script>
    <script src="{{asset('bolby')}}/js/contact.js"></script>
    <script src="{{asset('bolby')}}/js/validator.js"></script>
    <script src="{{asset('bolby')}}/js/wow.min.js"></script>
    <script src="{{asset('bolby')}}/js/morphext.min.js"></script>
    <script src="{{asset('bolby')}}/js/parallax.min.js"></script>
    <script src="{{asset('bolby')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('bolby')}}/js/custom.js"></script>

</body>

</html>