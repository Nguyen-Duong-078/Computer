<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from wphix.com/template/topico-prev/topico/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 10:05:50 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Galaxy | @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/client/img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/client/css/preloader.css">
    <link rel="stylesheet" href="assets/client/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/client/css/slick.css">
    <link rel="stylesheet" href="assets/client/css/backToTop.css">
    <link rel="stylesheet" href="assets/client/css/meanmenu.css">
    <link rel="stylesheet" href="assets/client/css/nice-select.css">
    <link rel="stylesheet" href="assets/client/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/client/css/animate.min.css">
    <link rel="stylesheet" href="assets/client/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/client/css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="assets/client/css/ui-range-slider.css">
    <link rel="stylesheet" href="assets/client/css/default.css">
    <link rel="stylesheet" href="assets/client/css/style.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->

    <!-- preloader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div id="object"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header area start -->
    @include('layouts.header')
    <!-- header area end -->

    <!-- offcanvas area start -->
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__logo mb-40">
                    <a href="index.html">
                        <img src="assets/client/img/logo/logo-black.png" alt="logo">
                    </a>
                </div>
                <div class="offcanvas__search mb-25">
                    <form action="#">
                        <input type="text" placeholder="What are you searching for?">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu fix"></div>
                <div class="offcanvas__action">

                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas area end -->
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    @yield('content')

    <!-- footer area start -->
    @include('layouts.footer')
    <!-- footer area end -->

    <!-- JS here -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/client/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/client/js/vendor/waypoints.min.js"></script>
    <script src="assets/client/js/bootstrap.bundle.min.js"></script>
    <script src="assets/client/js/meanmenu.js"></script>
    <script src="assets/client/js/slick.min.js"></script>
    <script src="assets/client/js/backToTop.js"></script>
    <script src="assets/client/js/jquery.fancybox.min.js"></script>
    <script src="assets/client/js/countdown.js"></script>
    <script src="assets/client/js/nice-select.min.js"></script>
    <script src="assets/client/js/isotope.pkgd.min.js"></script>
    <script src="assets/client/js/owl.carousel.min.js"></script>
    <script src="assets/client/js/jquery-ui-slider-range.js"></script>
    <script src="assets/client/js/ajax-form.js"></script>
    <script src="assets/client/js/wow.min.js"></script>
    <script src="assets/client/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/client/js/main.js"></script>
</body>

</html>