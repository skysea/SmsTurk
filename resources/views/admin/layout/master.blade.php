<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0061da">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="{{asset('assets/images').'/'.getAyarlar('favicon')}}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Title -->
    <title>{{getAyarlar('site_name')}} - Yönetim Paneli</title>
    <link rel="stylesheet" href="{{asset('assets/admin/fonts/fonts/font-awesome.min.css')}}">

    <!-- Font family -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Sidemenu Css -->
    <link href="{{asset('assets/admin/plugins/fullside-menu/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/plugins/fullside-menu/waves.min.css')}}" rel="stylesheet">

    <!-- Dashboard Css -->
    <link href="{{asset('assets/admin/css/dashboard.css')}}" rel="stylesheet">

    <!-- Morris.js Charts Plugin -->
    <link href="{{asset('assets/admin/plugins/morris/morris.css')}}" rel="stylesheet">

    <!-- c3.js Charts Plugin -->
    <link href="{{asset('assets/admin/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet">

    <!-- Custom scroll bar css-->
    <link href="{{asset('assets/admin/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

    <!---Font icons-->
    <link href="{{asset('assets/admin/css/icons.css')}}" rel="stylesheet">
</head>
<body class="">
<div id="global-loader"></div>
<div class="page">
    <div class="page-main">
        @include('admin.layout.header')
        <div class="wrapper">
        @include('admin.layout.left-menu')
            @yield('admin-content')
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                    {{getAyarlar('footer_text')}}
                </div>
            </div>
        </div>
    </footer>
</div>




<!-- Back to top -->
<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

<!-- Dashboard Core -->
<script src="{{asset('assets/admin/js/vendors/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/home/theme1/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/admin/js/vendors/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/admin/js/vendors/selectize.min.js')}}"></script>
<script src="{{asset('assets/admin/js/vendors/jquery.tablesorter.min.js')}}"></script>
<script src="{{asset('assets/admin/js/vendors/circle-progress.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/rating/jquery.rating-stars.js')}}"></script>

<!-- Fullside-menu Js-->
<script src="{{asset('assets/admin/plugins/fullside-menu/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/fullside-menu/waves.min.js')}}"></script>

<!-- Charts Plugin -->
<script src="{{asset('.assets/admin/plugins/chart/Chart.bundle.js')}}"></script>
<script src="{{asset('assets/admin/plugins/chart/utils.js')}}"></script>

<!--Morris.js Charts Plugin -->
<script src="{{asset('assets/admin/plugins/morris/raphael-min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/morris/morris.js')}}"></script>

<!-- Input Mask Plugin -->
<script src="{{asset('assets/admin/plugins/input-mask/jquery.mask.min.js')}}"></script>

<!-- Custom scroll bar Js-->
<script src="{{asset('assets/admin/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<!-- Index Scripts -->
<script src="{{asset('assets/admin/js/index4.js')}}"></script>

<!-- Custom-->
<script src="{{asset('assets/admin/js/custom.js')}}"></script>
</body>
</html>
