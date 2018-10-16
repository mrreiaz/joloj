@extends('admin.layouts.app')

@section('title','Registration')

@section('css')
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/datepicker/css/bootstrap-datepicker.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/select2/css/select2.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/wow/css/animate.css')}}"/>
    <!--End of Plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/css/pages/login.css')}}"/>
    <!--End of Page level styles-->

@endsection

@section('content')


    <div class="container wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="row login_top_bottom">
            <div class="col-lg-10 push-lg-1 col-sm-10 push-sm-1">
                <div class="row">
                    <div class="col-lg-6 push-lg-3 col-sm-10 push-sm-1">
                        <div class="login_logo login_border_radius1">
                            <h3 class="text-xs-center">
                                <img src="{{ asset('admin/img/logow.png') }}" alt="josh logo" class="admire_logo"><span class="text-white"> ADMIRE<br/>
                                Sign Up</span>
                            </h3>
                        </div>
                        <div class="bg-white login_content login_border_radius">
                            <form class="form-horizontal login_validator m-b-20" id="register_valid"
                                  action="{{ action('RegistrationController@postUserEmailSendRegistration') }}" method="post">


                                @if(session('error'))
                                    <div class="alert alert-danger  alert-dismissable">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>{{ session('error') }}</strong>
                                    </div>
                                @endif




                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissable">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>{{ session('success') }}</strong>
                                    </div>
                                @endif

                                {{ csrf_field() }}

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="username" class="form-control-label">Username *</label>
                                        <div class="input-group">
                                    <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
                                    </span>
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="email" class="form-control-label">Email *</label>
                                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope text-primary"></i>
                                    </span>
                                            <input type="text" placeholder="Email Address"  name="email" id="email" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="password" class="form-control-label text-sm-right">Password *</label>
                                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-key text-primary"></i>
                                    </span>
                                            <input type="password" placeholder="Password"  id="password" name="password" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="confirmpassword" class="form-control-label">Confirm Password *</label>
                                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-key text-primary"></i>
                                    </span>
                                            <input type="password" placeholder="Confirm Password" name="con_password" id="confirmpassword" class="form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label class="form-control-label">Gender</label>
                                    </div>
                                    <div class="col-sm-2 col-xs-12">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="gender" class="custom-control-input form-control">
                                            <span class="custom-control-indicator"></span>
                                            <a class="custom-control-description">Male</a>
                                        </label>
                                    </div>
                                    <div class="col-sm-2 col-xs-12">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="gender" class="custom-control-input form-control">
                                            <span class="custom-control-indicator"></span>
                                            <a class="custom-control-description">Female</a>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input form-control">
                                            <span class="custom-control-indicator"></span>
                                            <a class="custom-control-description">Send me latest news and updates.</a>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <input type="submit" value="Submit" class="btn btn-primary"/>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <label class="form-control-label">Already have an account?</label> <a href="{{ action('LoginController@getAutoActiveUserLogin') }}" class="text-primary login_hover"><b>Log In</b></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
@endsection

@section('js')

    <!--Plugin js-->
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/select2/js/select2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/wow/js/wow.min.js') }}"></script>
    <!--End of plugin js-->
    <!--Page level js-->
    <script type="text/javascript" src="{{ asset('/public/admin/js/pages/register.js') }}"></script>
    <!-- end of page level js -->


@endsection