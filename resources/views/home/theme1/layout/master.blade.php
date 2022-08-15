<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/home/theme1/images/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/home/theme1/images/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/home/theme1/images/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/home/theme1/images/favicons/site.webmanifest')}}">
    <!-- plugin styles -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/home/theme1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/theme1/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/theme1/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/theme1/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/theme1/plugin/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/theme1/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/theme1/css/jquery.bxslider.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/theme1/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/theme1/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/theme1/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/theme1/css/oapee-icons.css')}}">
    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets/home/theme1/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/theme1/css/responsive.css')}}">
</head>
<body>
<div class="preloader">
    <img src="{{asset('assets/home/theme1/images/loading.png')}}" class="preloader__image" alt="">
</div><!-- /.preloader -->

<div class="page-wrapper">

    @include('home.theme1.layout.header')

    @yield('home-content')

    @include('home.theme1.layout.footer')

</div>
<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
@include('home.theme1.layout.side-menu')

<!-- Plugin scripts -->
<script src="{{asset('assets/home/theme1/js/jquery-3.5.0.min.js')}}"></script>
<script src="{{asset('assets/home/theme1/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/home/theme1/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/home/theme1/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('assets/home/theme1/js/isotope.js')}}"></script>
<script src="{{asset('assets/home/theme1/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/home/theme1/js/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('assets/home/theme1/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/home/theme1/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/home/theme1/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/home/theme1/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/home/theme1/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/home/theme1/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/home/theme1/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/home/theme1/js/TweenMax.min.js')}}"></script>
<script src="{{asset('assets/home/theme1/js/wow.js')}}"></script>
<script src="{{asset('assets/home/theme1/js/theme.js')}}"></script>
</body>
</html>
