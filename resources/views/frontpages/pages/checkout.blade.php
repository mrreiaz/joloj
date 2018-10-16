<!DOCTYPE html>
<html>
<head>
    @include('frontpages.partials._head')
</head>
	<body>
	    		
    @include('frontpages.partials._page_loder')		  
		<!-- Back to top -->
	    <div class="back-to-top"><span class="icon-keyboard_arrow_up"></span></div>
	    <!-- /Back to top -->
	    <!-- mobile menu -->		
    @include('frontpages.navs.mobile')	
	    <!-- /mobile menu -->
		<!-- HEADER section -->
    @include('frontpages.navs.main_menu')	
		<!-- End HEADER section -->
		
        <!---->
        <div id="pageContent">
			<div class="container">				
				<!-- title -->
				<div class="title-box">
					<h1 class="text-center text-uppercase title-under">Checkout</h1>
				</div>
				<!-- /title -->
				<div class="row">					
					<div class="col-sm-4 col-xs-12">
						@if(!Sentinel::check())
						<div class="pull-left">
							<a href="" type="submit" class="btn btn--ys"><span class="icon icon-vpn_key"></span>Login</a>
						</div>	
						@endif
						<div class="pull-left" style="margin-left: 15px;">
							<a href="{{action('CheckOutController@getGuestCheckOut')}}" class="btn btn--ys"><span class="icon icon-vpn_key"></span>Shopping As A Guest</a>
						</div>
					</div>
					<div class="col-sm-8  col-xs-12">
						<div class="visible-xs divider--sm"></div>
						<div class="pull-right pull-extra-left">
							<div class="dropdown select-basket">
								<a class="dropdown-toggle" data-toggle="dropdown">
									<span class="caret"></span>
									<span class="icon icon-shopping_basket"></span> ৳ {{Cart::subtotal()+100}}							
								</a>
								<div class="dropdown-menu  " role="menu">
									<div class="select-basket__inner">
										<h6 class="font18">REVIEW YOUR ORDER</h6>
										<table class="select-basket__table">
											<thead>
												<tr>
													<th>Product</th>
													<th>Qty</th>
													<th>Subtotal</th>
												</tr>
											</thead>
											<tbody>
											    @foreach(\Cart::content() as $cartItem)
											    
							                    <?php $myproduct = App\Product::find($cartItem->id); ?>
							
												<tr>
													<td>
														<span class="color">{{$myproduct->name}}</span>
													</td>
													<td>
														{{ $cartItem->qty}}
													</td>
													<td>
														<b class="color">৳ {{ $myproduct->real_price }}</b>
													</td>
												</tr>																					
												@endforeach
												
											</tbody>
											
											
											
											<tfoot>
												<tr>
													<td></td>
													<th>Subtotal:</th>
													<td>৳ {{Cart::subtotal()}}</td>
												</tr>
												<tr>
													<td></td>
													<th>Tax:</th>
													<td>Included</td>
												</tr>
											</tfoot>
										</table>
									</div>								
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<?php $user = Sentinel::check(); ?>
				
				<div class="row">
					
              <form action="{{ action('CheckOutController@postOrders') }}" method="POST">
                 {{ csrf_field() }}
                 <input type="hidden" value="@if($user){{$user->id}}@endif" name="user_id">
                 <input type="hidden" value="0" name="isDelivered">
						<!--================= col-left =================-->
						<div class="col-md-12 col-lg-4">
							<!-- NAME & ADDRESS -->
							<h2 class="title-checkout">
								<span class="icon icon-person icon-large color"></span>
								NAME &amp; ADDRESS
							</h2>
								<!-- row-col-2 -->
								<div class="row">
									<div class="col-md-12 col-lg-12 col-xl-6">
										<div class="form-group">
											<span class="note pull-right">* Required Fields</span>
										    <label for="checkoutFormFirstName">First Name <sup>*</sup></label>
										    <input type="text" class="form-control" name="first_name" value="@if($user){{ $user->first_name }} @endif" id="checkoutFormFirstName">
										</div>	
										<div class="form-group">
										    <label for="checkoutFormLastName">Last Name  <sup>*</sup></label>
										    <input type="text" class="form-control" name="last_name"  value="@if($user){{ $user->last_name }} @endif">
										</div>
									</div>
									<div class="col-md-12 col-lg-12 col-xl-6">
										<div class="form-group">
										    <label for="checkoutFormCompany">Company</label>
										    <input type="text" class="form-control" name="company" value="@if($user){{ $user->company }} @endif">
										</div>
										<div class="form-group">
										    <label for="checkoutFormEmailAddress">Email Address  <sup>*</sup></label>
										    <input type="email" class="form-control" name="email"  value="@if($user){{ $user->email }} @endif">
										</div>	
									</div>
								</div>
								<!-- /row-col-2 -->
								<div class="form-group">
								    <label for="checkoutFormAddress11">Address 1 <sup>*</sup></label>
								    <textarea class="form-control" name="address" rows="4">@if($user){{ $user->address }} @endif</textarea>
								</div>
						
								<div class="form-group">
								    <label for="checkoutFormEmailAddress">City<sup>*</sup></label>
								    <input type="text" class="form-control" name="city" value="@if($user){{ $user->city }} @endif">
								</div>
								
								<div class="form-group">
								    <label for="checkoutFormEmailAddress">Zip/Postal Code<sup>*</sup></label>
								    <input type="text" class="form-control" name="postal_code" value="@if($user){{ $user->postal_code }} @endif">
								</div>
								
								<div class="form-group">
								    <label for="checkoutFormEmailAddress">Phone Number<sup>*</sup></label>
								    <input type="text" class="form-control" name="number" value="@if($user){{ $user->number }} @endif">
								</div>		
	
							<div class="divider--xl"></div>
							<!-- /NAME & ADDRESS  -->
	
						</div>
						<!--================= /col-left =================-->
						<!--================= col-center Discount Codes=================-->
						<div class="col-md-12 col-lg-4">
							<!-- SHIPPING METHOD -->
							<h2 class="title-checkout">
								<span class="icon color icon-local_shipping"></span>
								SHIPPING METHOD
							</h2>
							
								<h6 class="color">  </h6>
								<div class="divider--md"></div>
	    					    <div class="form-group clearfix">								      	  						      
	                        <label class="radio">
	                          <input id="radio2" type="radio" name="radios" value="Home Delivery" checked="">
	                          <span class="outer">
	                          	<span class="inner"></span>
	                          </span>
	                          Home Delivery
	                        </label>
	    					    </div>						
	    					    <div class="form-group clearfix">								      	  						      
	                           <label class="radio">
	                             <input id="radio2" type="radio" name="radios" value="Collect From JolojAquatic">
	                             <span class="outer">
	                             	<span class="inner"></span>
	                             </span>
	                            	Collect From JolojAquatic
	                           </label>
	    					    </div>					
							
							<div class="divider--lg"></div>
							<!-- /SHIPPING METHOD -->
							<!-- Discount Codes -->												
								
							<div class="collapse-block no-border-bottom open">
								<h2 class="collapse-block__title title-large-icon text-uppercase">
									<span class="icon icon-card_giftcard color"></span>
									Discount Codes
								</h2>
								<div class="collapse-block__content" style="display: block;">
									<label for="checkoutFormCouponCode">Enter your coupon code:</label>
									<div class="input-group" style="width:100%;">									    
									    <input type="text" class="form-control" >
									</div>
								</div>
							</div>		
							<!-- /Discount Codes -->
						</div>
						<!--================= /col-center =================-->
						<!--================= col-right 	Payment Method=================-->
						<div class="col-md-12 col-lg-4">
							<!-- Payment Method -->
							<h2 class="title-checkout">
								<span class="icon icon-account_balance_wallet color"></span>
								Payment Method
							</h2>
							<!-- /Payment Method -->
							<div class="form-group form-group-top clearfix">
						     	<label class="radio">
	                    		<input id="radio1" type="radio" name="cash_on_delivery" value="CASH ON DELIVERY" checked="">
	                     	<span class="outer">
	                     		<span class="inner"></span>
	                     	</span>
	                     	CASH ON DELIVERY
	                     </label>
						    </div>
					<th class="text-right">৳ {{Cart::subtotal()}}</th>>
							<div class="divider--xl"></div>
							<!-- GRAND TOTAL -->
							<div class="card card--padding fill-bg">
								<table class="table-total-checkout">								
									<tbody>
										<tr style="font-size:16px;">
											<th class="text-left">Subtotal:</th>
											<th class="text-right">৳ {{Cart::subtotal()}}</th>>
										</tr
										<tr style="font-size:16px;">
											<th class="text-left">SHIPPING CHARGE:</th>
											<th class="text-right">৳ 100.00</th>
											
										</tr>
										<tr>
											<th>GRAND TOTAL:</th>
											<td>৳ {{Cart::subtotal()+100.00}}</td>
											<input type="hidden" name="total" value="{{Cart::subtotal()+100.00}}">
										</tr>
									</tbody>
								</table>
								<button type="submit" class="btn btn--ys btn--full btn--xl">Place Order Now <span class="icon icon-reply icon--flippedX"></span></button>							
							</div>
							<!-- /GRAND TOTAL -->
						</div>
						<!--================= /col-right =================-->			
					</form>
				</div>	
			</div>
		</div>
        <!---->
		
		
        @include('frontpages.partials.footer')
        
		<!-- jQuery 1.10.1--> 
		<script src="{{ asset('/public/front/external/jquery/jquery-2.1.4.min.js') }}"></script> 
		<!-- Bootstrap 3--> 
		<script src="{{ asset('/public/front/external/bootstrap/bootstrap.min.js') }}"></script> 
		<!-- Specific Page External Plugins --> 
		<script src="{{ asset('/public/front/external/slick/slick.min.js') }}"></script>
		<script src="{{ asset('/public/front/external/bootstrap-select/bootstrap-select.min.js') }}"></script>  
		<script src="{{ asset('/public/front/external/countdown/jquery.plugin.min.js') }}"></script> 
		<script src="{{ asset('/public/front/external/countdown/jquery.countdown.min.js') }}"></script> 		
		<script src="{{ asset('/public/front/external/instafeed/instafeed.min.js') }}"></script> 
		<script src="{{ asset('/public/front/external/magnific-popup/jquery.magnific-popup.min.js') }}"></script> 
		<script src="{{ asset('/public/front/external/nouislider/nouislider.min.js') }}"></script>
		<script src="{{ asset('/public/front/external/isotope/isotope.pkgd.min.js') }}"></script> 
		<script src="{{ asset('/public/front/external/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
		<script src="{{ asset('/public/front/external/colorbox/jquery.colorbox-min.js') }}"></script> 
		<!-- Custom --> 
		<script src="{{ asset('/public/front/js/custom.js') }}"></script> 
		<script>
			$j(document).ready(function() {
			
				// popup ini			
				$j('.quick-view').magnificPopup({
					type: 'ajax'
				});
				
				listingModeToggle();
			
				// Init All Carousel			
				productCarousel($j('#megaMenuCarousel1'),1,1,1,1,1);
				verticalCarousel($j('.vertical-carousel-1'),2);
				verticalCarousel($j('.vertical-carousel-2'),2);
			})
		</script>
	</body>
</html>