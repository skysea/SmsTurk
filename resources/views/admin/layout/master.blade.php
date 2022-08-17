<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{getAyarlar('site_title')}}</title>
    <link rel="shortcut icon" href="{{asset('assets/images').'/'.getAyarlar('favicon')}}">

    <!-- plugin css -->
    <link href="{{asset('assets/admin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{asset('assets/admin/css/bootstrap-material.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="{{asset('assets/admin/css/app-material.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="{{asset('assets/admin/css/bootstrap-material-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
    <link href="{{asset('assets/admin/css/app-material-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />

    <!-- icons -->
    <link href="{{asset('assets/admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">

    @include('admin.layout.navbar')
    @include('admin.layout.left-menu')
    <div class="content-page">
        @yield('admin-content')
        @include('admin.layout.footer')
    </div>

</div>
<script src="{{asset('assets/admin/js/vendor.min.js')}}"></script>

<!-- Plugins js-->
<script src="{{asset('assets/admin/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/admin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('assets/admin/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')}}"></script>

<!-- Dashboard 2 init -->
<script src="{{asset('assets/admin/js/pages/dashboard-2.init.js')}}"></script>

<!-- App js-->
<script src="{{asset('assets/admin/js/app.min.js')}}"></script>
</body>
</html>
