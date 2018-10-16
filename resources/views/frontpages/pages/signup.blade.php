@extends('frontpages.layouts.app')

@section('title', 'JOLOJ-Aquatic- Exclusive Fish Shop in Bangladesh')

@section('content')

		<div class="breadcrumbs">
			<div class="container">
				<ol class="breadcrumb breadcrumb--ys pull-left">
					<li class="home-link"><a href="index-2.html" class="icon icon-home"></a></li>										
					<li class="active">Account Login</li>
				</ol>
			</div>
		</div>
		
		<div id="pageContent">
			<div class="container">				
				<!-- title -->
				<div class="title-box">
					<h1 class="text-center text-uppercase title-under">LOGIN OR CREATE AN ACCOUNT</h1>
				</div>
				<!-- /title -->		
				<div class="row">
					<section class="col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xl-offset-2">
						 <div class="login-form-box">
						 	 <h3 class="color small">RETURNING CUSTOMER</h3>
				             <p>please log in. habe jabe theft hoba akhana :) </p>
				            <br>
				            <a class="btn btn--ys btn--xl" href="{{ action('FrontPageController@getUserSignIn') }}"><span class="icon icon-person_add"></span>Loin</a>
						 </div>
					</section>
					<div class="divider divider--md visible-sm visible-xs"></div>
					<section class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
						<div class="login-form-box">
						 	 <h3 class="color small">NEW CUSTOMER</h3>
							<p>
								If you have an account with us, please log in.
							</p>
							<form action="{{ action('FrontPageController@postUserSignUp') }}" id="login-returning" method="post">
				              <input type="hidden" name="_token" value="{{ csrf_token() }}">
				                <div class="form-group">
				                  <label for="first-name">First Name <sup>*</sup></label>
				                  <input type="text" class="form-control" name="first_name">
				                </div>
				                <div class="form-group">
				                  <label for="last-name">Last Name <sup>*</sup></label>
				                  <input type="text" class="form-control" name="last_name">
				                </div>
				                <div class="form-group">
				                  <label for="username">User Name <sup>*</sup></label>
				                  <input type="text" class="form-control" name="username">
				                </div>
				                <div class="form-group">
				                  <label for="company">Company Or Organization Name <sup>*</sup></label>
				                  <input type="text" class="form-control" name="company">
				                </div>
				                <div class="form-group">
				                  <label for="email">Email Address <sup>*</sup></label>
				                  <input type="email" class="form-control" name="email">
				                </div>
				                <div class="form-group">
				                  <label for="password">Password <sup>*</sup></label>
				                  <input type="password" class="form-control" name="password">
				                </div>
				                <div class="form-group">
				                  <label for="con_password">Confirm Password <sup>*</sup></label>
				                  <input type="password" class="form-control" name="con_password">
				                </div>
				                <div class="form-group">
				                  <label for="address">Address  <sup>*</sup></label>
				                  <input type="text" class="form-control" name="address">
				                </div>
				                <div class="form-group">
				                  <label for="city">City  <sup>*</sup></label>
				                  <input type="text" class="form-control" name="city">
				                </div>
				                <div class="form-group">
				                  <label for="postal_code">Zip/Postal Code  <sup>*</sup></label>
				                  <input type="number" class="form-control" name="postal_code">
				                </div>
				                <div class="form-group">
				                  <label for="number">Phone Number  <sup>*</sup></label>
				                  <input type="number" class="form-control" name="number">
				                </div>
				                <div class="row">
				                	<div class="col-xs-12 col-sm-6 col-md-6">
				                		<button type="submit" class="btn btn--ys btn-top btn--xl"><span class="icon icon-vpn_key"></span>Sign Up</button>			               			
				                	</div>
				                	<div class="divider divider--md visible-xs"></div>
				                	<div class="col-xs-12 col-sm-6 col-md-6">
				                		<div class="pull-right note btn-top">* Required Fields</div>
				                	</div>
				                </div>			               			                
				                <p class="btn-top">
		               				<a class="link-color" href="#">Forgot Your Password?</a>
		               			</p>
				              </form>
						</div>
					</section>
				</div>						
			</div>
		</div>
@endsection