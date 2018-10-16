<!DOCTYPE html>
<html>

<!-- Mirrored from dev.lorvent.com/admire/forgot_password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Dec 2016 18:37:05 GMT -->
<head>
    <title>Forgot Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{ asset('/public/admin') }}/img/logo1.ico"/>
    <!--Global styles -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin') }}/css/components.css"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin') }}/css/custom.css"/>
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin') }}/vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin') }}/vendors/wow/css/animate.css"/>
    <!--End of Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin') }}/css/pages/login.css"/>
</head>
<body>

<div class="container wow slideInDown" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="row">
        <div class="col-lg-8 push-lg-2 col-sm-10 push-sm-1">
            <div class="row">
                <div class="col-lg-6 push-lg-3 col-md-8 push-md-2 col-sm-10 push-sm-1 forgotpwd_margin">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-xs-center">
                            <img src="{{ asset('admin/img/logow.png') }}" alt="josh logo" class="admire_logo"><span class="text-white"> ADMIRE &nbsp;<br/>
                               Forgot Password</span>
                        </h3>
                    </div>
                    <form action="{{ action('ForgotPasswordController@postAutoActiveUserForgetPassword') }}" id="login_validator1" method="post" class="form-group  login_validator">


                        {{ csrf_field() }}
                        <div class="bg-white login_content login_border_radius">
                            <div class="form-group">
                                <label for="email_modal">Please enter your email to reset the password</label>

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

                                <div class="input-group">
                                    <span class="input-group-addon addon_email"><i class="fa fa-envelope text-primary"></i></span>
                                    <input type="text" class="form-control" name="email" placeholder="E-mail">
                                </div>
                            </div>


                            <div class="form-group form-actions">
                                <button type="submit" class="btn btn-primary submit_email login_button">Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- global js -->
<script type="text/javascript" src="{{ asset('/public/admin') }}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/public/admin') }}/js/tether.min.js"></script>
<script type="text/javascript" src="{{ asset('/public/admin') }}/js/bootstrap.min.js"></script>
<!-- end of global js-->
<!--Plugin js-->
<script type="text/javascript" src="{{ asset('/public/admin') }}/vendors/wow/js/wow.min.js"></script>
<!--End of plugin js-->
<script type="text/javascript" src="{{ asset('/public/admin') }}/js/pages/forgot_password.js"></script>
</body>

</html>