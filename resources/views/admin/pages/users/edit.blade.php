@extends('admin.layouts.app2')

@section('title','Upader User Info')

@section('css')
    <!-- plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" />
    <!--end of page level css-->
@endsection

@section('main')

<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar row">
            <div class="col-lg-6">
                <h4 class="nav_top_align skin_txt">
                <i class="fa fa-pencil"></i>
                Edit User
            </h4>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="index-2.html">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Users</a>
                    </li>
                    <li class="breadcrumb-item active">Edit User</li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-block m-t-25">
                    <div>
                        <h4>Personal Information</h4>
                    </div>
                    <form class="form-horizontal login_validator bv-form" id="tryitForm" action="" method="post" enctype="multipart/form-data">
                       {{ csrf_field() }}
                        <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                       
                       

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>{{ session('success') }}</strong>
                        </div>
                    @endif
                       
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row m-t-15">
                                    <div class="col-xs-12 col-lg-3 text-xs-center text-lg-right">
                                        <label class="form-control-label"> <strong> Profile Pic </strong> </label>
                                    </div>
                                    
                                    <div class="col-xs-12 col-lg-6 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new img-thumbnail text-xs-center">
                                                <img src="/public/{{ $user->user_photo }}" data-src="/public/{{ $user->user_photo }}" alt="not found"></div>
                                            <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                            <div class="m-t-20 text-xs-center">
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new1">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="user_photo_input">
                                                </span>
                                                <a href="#" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="form-group row m-t-25">
                                    <div class="col-xs-12 col-lg-3 text-lg-right">
                                        <label for="u-name" class="form-control-label">User Name *</label>
                                    </div>
                                    <div class="col-xs-12 col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"> <i class="fa fa-user text-primary"></i></span>
                                            <input type="text" value="{{ $user->username }}" name="username" id="u-name" class="form-control" data-bv-field="username">
                                        </div>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the user name</small></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xs-12 col-lg-3 text-lg-right">
                                        <label for="email" class="form-control-label">Email *
                                        </label>
                                    </div>
                                    <div class="col-xs-12 col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope text-primary"></i></span>
                                            <input type="text" value="{{ $user->email }}" id="email" name="email" class="form-control" data-bv-field="email">
                                        </div>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the email address</small><small class="help-block" data-bv-validator="regexp" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">The input is not a valid email address</small></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xs-12 col-lg-3 text-lg-right">
                                        <label for="phone" class="form-control-label">Phone *</label>
                                    </div>
                                    <div class="col-xs-12 col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone text-primary"></i></span>
                                            <input type="text" id="phone" name="contact" class="form-control" value="{{ $user->contact }}" data-bv-field="cell">
                                        </div>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="cell" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the phone number</small><small class="help-block" data-bv-validator="regexp" data-bv-for="cell" data-bv-result="NOT_VALIDATED" style="display: none;">The phone number can only consist of numbers with 10 digits</small></div>
                                </div>
                                <div class="form-group gender_message row">
                                    <div class="col-xs-12 col-lg-3 text-lg-right">
                                        <label class="form-control-label">Gender *</label>
                                    </div>
                                    <div class="col-xs-12 col-xl-6 col-lg-8">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-radio">
                                                <input id="radio1" type="radio" name="gender" value="Male"  class="custom-control-input"  data-bv-field="gender" @if($user->gender) checked  @endif>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input id="radio2" type="radio" name="gender" value="Female" class="custom-control-input" data-bv-field="gender" @if($user->gender) checked  @endif>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Female</span>
                                            </label>
                                        </div>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="gender" data-bv-result="NOT_VALIDATED" style="display: none;">Gender is required</small></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xs-12 col-lg-3 text-lg-right">
                                        <label for="address" class="form-control-label">Address *
                                        </label>
                                    </div>
                                    <div class="col-xs-12 col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                            <textarea value="" id="address" name="address" rows="8" class="form-control" data-bv-field="address"> {{ $user->address }} </textarea>
                                        </div>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="address" data-bv-result="NOT_VALIDATED" style="display: none;">Enter your address</small></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xs-12 col-lg-3 text-lg-right">
                                        <label for="checkbox1" class="form-control-label">Status *</label>
                                    </div>
                                    <div class="col-xs-12 col-xl-6 col-lg-8">
                                        <div>
                                            <label class="custom-control custom-checkbox">
                                                <input id="checkbox1" type="checkbox" name="activate" class="custom-control-input" checked="" data-bv-field="activate">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Activate your account</span>
                                            </label>
                                        </div>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="activate" data-bv-result="NOT_VALIDATED" style="display: none;">You have to activate your account</small></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xs-12 col-lg-9 push-lg-3">
                                        <button class="btn btn-primary" id="submit2" type="submit">
                                            Save
                                        </button>
                                        <input type="reset" class="btn btn-warning" value="Reset" id="clear">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
</div>

@endsection

@section('js')


    <!-- plugin scripts-->
    <script type="text/javascript" src="{{ asset('/public/admin/js/pluginjs/jasny-bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/holderjs/js/holder.js') }}"></script>
    
@endsection

