
		<footer>
			<!-- footer-data -->
			<div class="container inset-bottom-60">
				<div class="row" >
					<div class="col-sm-12 col-md-5 col-lg-6 border-sep-right">
						<div class="footer-logo hidden-xs">
							<!--  Logo  --> 
							<a class="logo" href="{{ URL::to('/') }}"> <img class="replace-2x" src="{{ asset('public/front/images/logo.png') }}"  alt="JOLOJ"> </a> 
							<!-- /Logo --> 
						</div>
						<div class="box-about">
							<div class="mobile-collapse">
								<h4 class="mobile-collapse__title visible-xs">ABOUT US</h4>
								<div class="mobile-collapse__content">
									<p> {!! $footer->footer_text !!} </p>
								</div>
							</div>
						</div>
						<!-- subscribe-box -->
						<div class="subscribe-box offset-top-20">
							<div class="mobile-collapse">
								<h4 class="mobile-collapse__title">NEWSLETTER SIGNUP</h4>
								<div class="mobile-collapse__content">
									<form class="form-inline">
										<input class="subscribe-form__input" type="text" name="subscribe">
										<button type="submit" class="btn btn--ys btn--xl">SUBSCRIBE</button>
									</form>
								</div>
							</div>
						</div>
						<!-- /subscribe-box --> 
					</div>
					
					<!--
					
					<div class="col-sm-12 col-md-7 col-lg-6 border-sep-left">
						<div class="row">
							<div class="col-sm-4">
								<div class="mobile-collapse">
									<h4 class="text-left  title-under  mobile-collapse__title">INFORMATION</h4>
									<div class="v-links-list mobile-collapse__content">
										<ul>
											<li><a href="{{ action('FrontPageController@getAbout') }}">About Us</a></li>
											<li><a href="{{ action('FrontPageController@getCustomerService') }}">Customer Service</a></li>
											<li><a href="{{ action('FrontPageController@getOrdersAndReturns') }}">Orders and Returns</a></li>
											<li><a href="{{ action('FrontPageController@getWarranty') }}">Warranty</a></li>
											<li><a href="{{ action('FrontPageController@getContact') }}">Contact Us</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mobile-collapse">
									<h4 class="text-left  title-under  mobile-collapse__title">WHY BUY FROM US</h4>
									<div class="v-links-list mobile-collapse__content">
										<ul>
											<li><a href="#">Shipping &amp; Returns</a></li>
											<li><a href="#">Secure Shopping</a></li>
											<li><a href="#">International Shipping</a></li>
											<li><a href="#">Affiliates</a></li>
											<li><a href="#">Group Sales</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mobile-collapse">
									<h4 class="text-left  title-under  mobile-collapse__title">MY ACCOUNT</h4>
									<div class="v-links-list mobile-collapse__content">
										<ul>
											<li><a href="login_form.html">Sign In</a></li>
											<li><a href="shopping_cart.html">View Cart</a></li>
											<li><a href="wishlist.html">My Wishlist</a></li>
											<li><a href="{{ action('FrontPageController@getfaq') }}">Help</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					-->
					
				</div>
			</div>
			
			<!-- /footer-data --> 
			<div class="divider divider-md visible-xs visible-sm visible-md"></div>
			<!-- social-icon -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="social-links social-links--large">
							<ul>
								<li><a class="icon fa fa-facebook" href="{{ $footer->facebook }}"></a></li>
								<li><a class="icon fa fa-twitter" href="{{ $footer->twitter }}"></a></li>
								<li><a class="icon fa fa-google-plus" href="{{ $footer->google_plus }}"></a></li>
								<li><a class="icon fa fa-instagram" href="{{ $footer->instagram }}"></a></li>
								<li><a class="icon fa fa-youtube-square" href="{{ $footer->youtube }}"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /social-icon --> 
			<!-- footer-copyright -->
			<div class="container footer-copyright">
				<div class="row">
					<div class="col-lg-12"> <a href="{{ URL::to('/') }}"><span>Joloj </span> Aquatic</a> &copy; 2017 . All Rights Reserved. </div>
				</div>
			</div>
			<!-- /footer-copyright --> 
			<a href="#" class="btn btn--ys btn--full visible-xs" id="backToTop">Back to top <span class="icon icon-expand_less"></span></a> 
		</footer>