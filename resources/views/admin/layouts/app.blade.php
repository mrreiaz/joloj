<!DOCTYPE html>
<html>

<head>
    <title>@yield('title','Admin')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{ asset('admin/img/logo1.ico') }}"/>
    <!--Global styles -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/css/components.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/css/custom.css') }}"/>
    <!--End of Global styles -->
    @yield('css')

</head>
<body>

<div class="preloader" style=" position: fixed; width: 100%; height: 100%;  top: 0;  left: 0;  z-index: 100000;  backface-visibility: hidden;  background: #ffffff;">
    <div class="preloader_img" style="width: 200px; height: 200px; position: absolute; left: 48%; top: 48%; background-position: center; z-index: 999999">
        <img src="{{ asset('/public/admin/img/loader.gif') }}" style=" width: 40px;" alt="loading...">
    </div>
</div>

@yield('content')
<!-- global js -->
<script type="text/javascript" src="{{ asset('/public/admin/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/public/admin/js/tether.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/public/admin/js/bootstrap.min.js') }}"></script>
<!-- end of global js-->

@yield('js')


</body>

</html>