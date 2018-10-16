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
						 	 <h3 class="color small">NEW CUSTOMER</h3>
				             <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				            <br>
				            <button class="btn btn--ys btn--xl" onclick="location.href='#';"><span class="icon icon-person_add"></span>CREATE AN ACCOUNT</button>
						 </div>
					</section>
					<div class="divider divider--md visible-sm visible-xs"></div>
					<section class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
						<div class="login-form-box">
							<h3 class="color small">RETURNING CUSTOMER</h3>
							<p>
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
							</p>
				              <form action="{{ action('FrontPageController@postUserSignIn') }}"  id="form-returning" method="post">
				              <input type="hidden" name="_token" value="{{ csrf_token() }}">
				                <div class="form-group">
				                  <label for="email">Email Address <sup>*</sup></label>
				                  <input type="email" class="form-control" name="email">
				                </div>
				                <div class="form-group">
				                  <label for="password">Password <sup>*</sup></label>
				                  <input type="password" class="form-control" name="password">
				                </div>
				                <div class="row">
				                	<div class="col-xs-12 col-sm-6 col-md-6">
				                		<button type="submit" class="btn btn--ys btn-top btn--xl" onclick="document.getElementById('form-returning').submit();"><span class="icon icon-vpn_key"></span>Login</button>			               			
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