@extends('admin.layouts.app2')

@section('title','Dashbord')

@section('css')
    
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/c3/css/c3.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/toastr/css/toastr.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/switchery/css/switchery.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/css/pages/new_dashboard.css') }}"/>
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>


@endsection

@section('main')

        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar row">
                    <div class="col-xs-6">
                        <h4 class="m-t-5">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </h4>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                </div>
                <!-- /.outer -->
            </div>
            <!-- /#content -->
        </div>
        
@endsection

@section('js')

    <script type="text/javascript" src="{{ asset('/public/admin/vendors/raphael/js/raphael-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/d3/js/d3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/c3/js/c3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/toastr/js/toastr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/switchery/js/switchery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/flotchart/js/jquery.flot.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/flotchart/js/jquery.flot.resize.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/flotchart/js/jquery.flot.stack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/flotchart/js/jquery.flot.time.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/flotspline/js/jquery.flot.spline.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/flotchart/js/jquery.flot.categories.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/flotchart/js/jquery.flot.pie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/jquery_newsTicker/js/newsTicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/countUp.js/js/countUp.min.js') }}"></script>
    
    <!--end of plugin scripts-->
    <script type="text/javascript" src="{{ asset('admin/js/pages/new_dashboard.js') }}"></script>


@endsection

