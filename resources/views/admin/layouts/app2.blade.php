<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Admire</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('/public/admin/img/logo1.ico') }}"/>

    <!--global styles-->
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/css/components.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/css/custom.css') }}"/>
    <!-- end of global styles-->
    
    @yield('css')

</head>

<body class="body">
    <div class="preloader" style=" position: fixed;  width: 100%;  height: 100%;  top: 0;  left: 0;  z-index: 100000;  backface-visibility: hidden;  background: #ffffff;">
        <div class="preloader_img" style="width: 200px;  height: 200px;  position: absolute;  left: 48%;  top: 48%;  background-position: center;z-index: 999999">
            <img src="{{ asset('/public/admin/img/loader.gif') }}" style=" width: 40px;" alt="loading...">
        </div>
    </div>

<div class="bg-dark" id="wrap">
    @include('admin.partials.top-nav')
    <!-- /#top -->
    <div class="wrapper">
    @include('admin.partials.left-nav')
        <!-- /#left -->
    @yield('main')

    </div>
    <!--wrapper-->
</div>
<!-- /#wrap -->

    <!-- global scripts-->
    <script type="text/javascript" src="{{ asset('/public/admin/js/components.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/js/custom.js') }}"></script>
    <!-- global scripts end-->
    
    @yield('js')
    

</body>
</html>
