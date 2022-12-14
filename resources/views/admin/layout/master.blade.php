<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{getAyarlar('site_name')}} Yönetim Paneli | @yield('admin-title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images').'/'.getAyarlar('favicon')}}"/>
    <link href="{{asset('assets/admin/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/admin/assets/js/loader.js')}}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('assets/admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('assets/admin/assets/css/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('assets/admin/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/assets/css/widgets/modules-widgets.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/plugins/fontawesome/css/all.min.css')}}">
    <link href="{{asset('assets/admin/plugins/loading/waitMe.css')}}"  rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/plugins/Toasteur/themes/toasteur-default.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/plugins/ladda/ladda-themeless.min.css')}}" rel="stylesheet" type="text/css" />

    @yield('admin-css')
</head>
<body>
<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->
@include('admin.layout.header')
@include('admin.layout.sub-header')
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

@include('admin.layout.left-menu')

    <!--  BEGIN CONTENT PART  -->
    <div id="content" class="main-content">

          @yield('admin-content')


        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">{{getAyarlar('footer_text')}}</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">{{getAyarlar('site_name')}} <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
            </div>
        </div>
    </div>
    <!--  END CONTENT PART  -->

</div>
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('assets/admin/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('assets/admin/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/admin/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/admin/assets/js/app.js')}}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{asset('assets/admin/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<script src="{{asset('assets/admin/plugins/apex/apexcharts.min.js')}}"></script>

<script src="{{asset('assets/admin/plugins/velocity-animate/velocity.js')}}"></script>
<script src="{{asset('assets/admin/plugins/loading/waitMe.js')}}"></script>
<script src="{{asset('assets/admin/plugins/Toasteur/toasteur.min.js')}}"></script>
<!-- Loading buttons js -->
<script src="{{asset('assets/admin/plugins/ladda/spin.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/ladda/ladda.min.js')}}"></script>
<script>
    Ladda.bind('button[type=submit]', {timeout: 10000});
</script>
@yield('admin-js')
@include('admin.layout.flash')
</body>
</html>
