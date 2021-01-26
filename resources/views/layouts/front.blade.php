<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- description -->
   <meta name="description" content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and HTML5 template with 14 ready home page demos.">
   <!-- keywords -->
   <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, faq">
    <!-- Page Title -->
    <title>{{ config('app.name', 'Heritage Landingpage') }}</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('agency/img/favicon.ico') }}">
    <!-- Bundle -->
    <link rel="stylesheet" href="{{ asset('agency/vendor/css/bundle.min.css') }}">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="{{ asset('agency/vendor/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('agency/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('agency/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('agency/vendor/css/swiper.min.css') }}">

    <link rel="stylesheet" href="{{ asset('agency/vendor/css/cubeportfolio.min.css') }}">
    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" href="{{ asset('agency/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('agency/css/settings.css') }}">
    <!-- Slick CSS Files -->
    <link rel="stylesheet" href="{{ asset('agency/vendor/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('agency/vendor/css/slick-theme.css') }}">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="{{ asset('agency/css/style.css') }}">
    <!-- Custom Style CSS File -->
    <link rel="stylesheet" href="{{ asset('agency/css/custom.css') }}">
</head>
<body data-spy="scroll" data-target=".navbar-nav" data-offset="90">

<!-- Loader -->
<div class="loader" id="loader-fade">
        <div class="dot-container">
            <div class="dot dot-1"></div>
            <div class="dot dot-2"></div>
            <div class="dot dot-3"></div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
                <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7"/>
                </filter>
            </defs>
        </svg>
</div>
<!-- Loader ends -->

@yield('content')

<!-- Footer starts -->
<footer class="p-half  bg-dark2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <ul class="footer-icons mb-4">
                    <li><a href="#" class="wow fadeInUp facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a href="#" class="wow fadeInDown twitter"><i class="fab fa-twitter"></i> </a> </li>
                    <li><a href="#" class="wow fadeInUp google"><i class="fab fa-google"></i> </a> </li>
                    <li><a href="#" class="wow fadeInDown linkedin"><i class="fab fa-linkedin-in"></i> </a> </li>
                    <li><a href="#" class="wow fadeInUp instagram"><i class="fab fa-instagram"></i> </a> </li>
                    {{-- <li><a href="#" class="wow fadeInDown pinterest"><i class="fab fa-pinterest-p"></i> </a> </li> --}}
                    <li><a href="{{ route('login') }}" class="wow fadeInDown pinterest"><i class="fas fa-sign-in-alt"></i> </a> </li>
                </ul>
                <p class="copyrights mt-2 mb-2">&copy; {{ now()->year }} Heritage. Made with love by <a href="#">Tooring</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer ends -->

<!--Animated Cursor-->
<div id="animated-cursor">
    <div id="cursor">
        <div id="cursor-loader"></div>
    </div>
</div>
<!--Animated Cursor End-->

<!-- JavaScript -->
<script src="{{ asset('agency/vendor/js/bundle.min.js') }}"></script>

<!-- Plugin Js -->
<script src="{{ asset('agency/vendor/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('agency/vendor/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('agency/vendor/js/swiper.min.js') }}"></script>
<script src="{{ asset('agency/vendor/js/jquery.cubeportfolio.min.js') }}"></script>
<script src="{{ asset('agency/vendor/js/jquery.appear.js') }}"></script>
<script src="{{ asset('agency/vendor/js/parallaxie.min.js') }}"></script>
<script src="{{ asset('agency/vendor/js/wow.min.js') }}"></script>
<!-- Owl Carousel JS File -->
<script src="{{ asset('agency/js/owl.carousel.js') }}"></script>
<!-- Slick JS File -->
<script src="{{ asset('agency/vendor/js/slick.min.js') }}"></script>
<!-- Tween Max Animation File -->
<script src="{{ asset('agency/js/TweenMax.min.js') }}"></script>
<!-- Morphtext File -->
<script src="{{ asset('agency/js/morphext.min.js') }}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{ asset('agency/vendor/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('agency/vendor/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="{{ asset('agency/vendor/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('agency/vendor/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('agency/vendor/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('agency/vendor/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('agency/vendor/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('agency/vendor/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('agency/vendor/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('agency/vendor/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('agency/vendor/js/extensions/revolution.extension.video.min.js') }}"></script>

<!-- Google Map Api -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgIfLQi8KTxTJahilcem6qHusV-V6XXjw"></script>
<script src="{{ asset('agency/js/maps.min.js') }}"></script>

<!-- custom script -->
<script src="{{ asset('agency/js/script.js') }}"></script>

</body>
</html>
