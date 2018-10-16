@extends('admin.layouts.app')

@section('title','Login')

@section('css')
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/wow/css/animate.css')}}"/>
    <!--End of Plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/css/pages/login.css')}}"/>
    <!--End of Page level styles-->
@endsection

@section('content')


    <div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
        <div class="row">
            <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-10 push-sm-1 login_top_bottom">
                <div class="row">
                    <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-12">
                        <div class="login_logo login_border_radius1">
                            <h3 class="text-xs-center">
                                <img src="{{ asset('admin/img/logow.png') }}" alt="josh logo" class="admire_logo"><span class="text-white"> ADMIRE &nbsp;<br/>
                                Log In</span>
                            </h3>
                        </div>
                        <div class="bg-white login_content login_border_radius">
                            <form action="{{ action('LoginController@postAutoActiveUserLogin') }}" id="login_validator" method="post" class="login_validator">


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
                                <div class="form-group">
                                    <label for="email" class="form-control-label"> E-mail</label>
                                    <div class="input-group">
                                    <span class="input-group-addon input_email"><i
                                                class="fa fa-envelope text-primary"></i></span>
                                        <input type="text" class="form-control  form-control-md" id="email" name="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <!--</h3>-->
                                <div class="form-group">
                                    <label for="password" class="form-control-label">Password</label>
                                    <div class="input-group">
                                    <span class="input-group-addon addon_password"><i
                                                class="fa fa-lock text-primary"></i></span>
                                        <input type="password" class="form-control form-control-md" id="password"   name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="submit" value="Log In" class="btn btn-primary btn-block login_button">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input form-control">
                                            <span class="custom-control-indicator"></span>
                                            <a class="custom-control-description">Keep me logged in</a>
                                        </label>
                                    </div>
                                    <div class="col-xs-6 text-xs-right forgot_pwd">
                                        <a href="{{ action('ForgotPasswordController@getAutoActiveUserForgetPassword') }}" class="custom-control-description forgottxt_clr">Forgot password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 m-t-10">
                                        <div class="icon-white btn-facebook icon_padding loginpage_border">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                            <span class="text-white icon_padding text-center question_mark">Log In With Facebook</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 pull-lg-right m-t-10">
                                        <div class="icon-white btn-google icon_padding loginpage_border">
                                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            <span class="text-white icon_padding question_mark">Log In With Google+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Don't you have an Account? </label>
                                <a href='{{ action('RegistrationController@getUserAutoActiveRegistration') }}'><b>Sign Up</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')

    <!--Plugin js-->
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/wow/js/wow.min.js') }}"></script>
    <!--Page level js-->
    <script type="text/javascript" src="{{ asset('/public/admin/js/pages/login.js') }}"></script>
    <!-- end of page level js -->
    <!--Plugin js-->

@endsection