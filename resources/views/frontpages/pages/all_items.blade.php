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
				<!-- CONTENT section -->
		<div id="pageContent">
			<div class="container">				
				<!-- title -->
				<div class="title-box">
					<h1 class="text-center text-uppercase title-under">SHOPPING CART</h1>
				</div>
				<!-- /title -->	
				@if($cartItems)
				<!-- Shopping cart table -->
				<div class="container-widget">
					<table class="shopping-cart-table">
						<thead>
							<tr>
								<th>Product</th>
								<th>&nbsp;</th>
								<th>&nbsp;</th>
								<th>Unit Price</th>
								<th>Qty</th>
								<th>Subtotal</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach($cartItems as $cartItem)
							<?php $myproduct = App\Product::find($cartItem->id); ?>
							<tr>
								<td>
									<div class="shopping-cart-table__product-image">
										<a href="#">
											<img class="img-responsive" src="/public/{{ $myproduct->product_photo }}" alt="{{ $myproduct->nam }}">
										</a>
									</div>
								</td>
								
								<td>
									<h5 class="shopping-cart-table__product-name text-left text-uppercase">
										<a href="{{ action('FrontPageController@getProduct',$myproduct->id) }}">{{ $myproduct->name }}</a>
									</h5>																				
								</td>
								<td>
									
								</td>
								<td>
									<div class="shopping-cart-table__product-price unit-price">
										৳ {{ $myproduct->real_price }}
									</div>
								</td>
								 {!! Form::open(['action' => ['CartController@updateItem',$cartItem->rowId], 'method' => 'POST']) !!}
								<td>
									<div class="shopping-cart-table__input">
										<!--  -->
										<div class="number input-counter">
										    <input type="number" name="qty"  value='{{ $cartItem->qty}}' />
										</div>
										<!-- / -->
									</div>								
								</td>
								<td>
									<div class="shopping-cart-table__product-price subtotal">
										৳ {{ $myproduct->real_price*$cartItem->qty }}
									</div>
								</td>
								<td>
									<a class="shopping-cart-table__delete icon icon-clear" href="{{ URL::to('/delete-item/') }}/{{ $cartItem->rowId }}">  </a>
									<br>
									<button type="submit" class="btn btn-link" >
										<div class="cart__item__edit" style="margin-top: -10px;"> <i class="fa fa-refresh" aria-hidden="true"></i> </div>
									</button>
								</td>
									 {!! Form::close() !!}
							</tr>	
								
							@endforeach							
								
						</tbody>
					</table>
				</div>
				<!-- /Shopping cart table -->
				@endif
				<div class="divider divider--xs"></div>
				<div class="clearfix shopping-cart-btns">
					<!--<a class="btn btn--ys btn--light pull-right" href=""><span class="icon icon-autorenew"></span>UPDATE SHOPPING CART</a>-->
					<div class="divider divider--xs visible-xs"></div>
		            <a class="btn btn--ys btn--light" href="{{ URL::to('/remove-all-item') }}"><span class="icon icon-delete"></span>CLEAR SHOPPING CART</a> 
		            <div class="divider divider--xs visible-xs"></div>
		            <a class="btn btn--ys btn--light pull-left btn-right" href="{{ URL::to('/') }}"><span class="icon icon-keyboard_arrow_left"></span>CONTINUE SHOPPING </a>         
		            <div class="divider divider--xs visible-xs"></div>   	
		           
		        </div>		        
				<div class="divider--md"></div>
				<div class="row">
					
					<!--<div class="col-md-4">-->
					<!--	<div class="card card--padding">-->
					<!--		<h4>ESTIMATE SHIPPING AND TAX</h4>-->
					<!--		<p>Enter your destination to get a shipping estimate.</p>-->
					<!--		<form>-->
					<!--			<div class="form-group">-->
					<!--				<label  for="selectCountry">Country <sup>*</sup></label>-->
					<!--				<select  id="selectCountry" class="form-control selectpicker "  data-style="select--ys"  data-width="100%">					                   -->
					<!--					<option>Austria </option>-->
					<!--                    <option>Belgium</option>-->
					<!--                    <option>Cyprus </option>-->
					<!--                    <option>Croatia </option>-->
					<!--                    <option>Czech Republic </option>-->
					<!--                    <option>Denmark </option>-->
					<!--                    <option>Finland </option>-->
					<!--                    <option>France </option>-->
					<!--                    <option>Germany </option>-->
					<!--                    <option>Greece </option>-->
					<!--                    <option>Hungary </option>-->
					<!--                    <option>Ireland </option>-->
					<!--                    <option>France </option>-->
					<!--                    <option>Italy </option>-->
					<!--                    <option>Luxembourg </option>-->
					<!--                    <option>Netherlands </option>-->
					<!--                    <option>Poland </option>-->
					<!--                    <option>Portugal </option>-->
					<!--                    <option>Slovakia </option>-->
					<!--                    <option>Slovenia </option>-->
					<!--                    <option>Spain </option>-->
					<!--                    <option>United Kingdom </option>-->
					<!--                </select>									-->
					<!--			</div>									-->
					<!--			<div class="form-group">-->
					<!--				<label  for="selectState">State/Province <sup>*</sup></label>-->
					<!--				<select  id="selectState" class="form-control selectpicker "  data-style="select--ys"  data-width="100%">										-->
					<!--					<option>State/Province </option>-->
					<!--                    <option>Austria </option>-->
					<!--                    <option>Belgium</option>-->
					<!--                    <option>Cyprus </option>-->
					<!--                    <option>Croatia </option>-->
					<!--                    <option>Czech Republic </option>-->
					<!--                    <option>Denmark </option>-->
					<!--                    <option>Finland </option>-->
					<!--                    <option>France </option>-->
					<!--                    <option>Germany </option>-->
					<!--                    <option>Greece </option>-->
					<!--                    <option>Hungary </option>-->
					<!--                    <option>Ireland </option>-->
					<!--                    <option>France </option>-->
					<!--                    <option>Italy </option>-->
					<!--                    <option>Luxembourg </option>-->
					<!--                    <option>Netherlands </option>-->
					<!--                    <option>Poland </option>-->
					<!--                    <option>Portugal </option>-->
					<!--                    <option>Slovakia </option>-->
					<!--                    <option>Slovenia </option>-->
					<!--                    <option>Spain </option>-->
					<!--                    <option>United Kingdom </option>-->
					<!--				</select>-->
					<!--			</div>-->
					<!--			<div class="form-group">-->
					<!--		      <label for="inputCity">City</label>-->
					<!--		      <input type="text" class="form-control" id="inputCity">-->
					<!--		    </div>-->
					<!--		    <div class="form-group">-->
					<!--		      <label for="inputZip">Zip/Postal Code</label>-->
					<!--		      <input type="text" class="form-control" id="inputZip">-->
					<!--		    </div>-->
					<!--		    <button type="submit" class="btn btn-top btn--ys btn--light">Get a quote</button>-->
					<!--		</form>-->
					<!--	</div>-->
					<!--</div>-->
					
					
					<div class="divider--md visible-sm visible-xs"></div>
					<div class="col-md-6">
						<div class=" card card--padding">
							<h4>DISCOUNT CODES</h4>
							<form>
								<div class="form-group">
							      <label for="inputDiscountCodes">Enter your coupon code if you have one.</label>
							      <input type="text" class="form-control" id="inputDiscountCodes">
							    </div>
								<button type="submit" class="btn btn--ys btn-top btn--light">apply coupon</button>
							</form>	
						</div>
					</div>
					<div class="divider--md visible-sm visible-xs"></div>
					<div class="col-md-6">
						<div class="card card--padding">
							<table class="table-total">
								<tbody>
									<tr>
										<th class="text-left">Subtotal:</th>
										<td class="text-right">৳ {{Cart::subtotal()}}</td>
									</tr>
									<tr>
										<th class="text-left">Tax:</th>
										<td class="text-right">Included</td>
									</tr>
									<tr>
										<th class="text-left">SHIPPING CHARGE:</th>
										<td class="text-right">৳ 100</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>GRAND TOTAL:</th>
										<td>৳ {{Cart::subtotal()+100}}</td>
									</tr>
								</tfoot>
							</table>
							<a href="{{ action('CheckOutController@getCheckOut') }}" class="btn btn--ys btn--full btn--xl">PROCEED TO CHECKOUT <span class="icon icon--flippedX icon-reply"></span></a>
							
						</div>
					</div>
				</div>				
			</div>
		</div>
		<!-- End CONTENT section --> 
		<!---->
		
		
        @include('frontpages.partials.footer')
        
		<!-- jQuery 1.10.1--> 
		<script src="public/front/external/jquery/jquery-2.1.4.min.js"></script> 
		<!-- Bootstrap 3--> 
		<script src="public/front/external/bootstrap/bootstrap.min.js"></script> 
		<!-- Specific Page External Plugins --> 
		<script src="public/front/external/slick/slick.min.js"></script>
		<script src="public/front/external/bootstrap-select/bootstrap-select.min.js"></script>  
		<script src="public/front/external/countdown/jquery.plugin.min.js"></script> 
		<script src="public/front/external/countdown/jquery.countdown.min.js"></script> 		
		<script src="public/front/external/instafeed/instafeed.min.js"></script> 
		<script src="public/front/external/magnific-popup/jquery.magnific-popup.min.js"></script> 
		<script src="public/front/external/nouislider/nouislider.min.js"></script>
		<script src="public/front/external/isotope/isotope.pkgd.min.js"></script> 
		<script src="public/front/external/imagesloaded/imagesloaded.pkgd.min.js"></script>
		<script src="public/front/external/colorbox/jquery.colorbox-min.js"></script> 
		<!-- Custom --> 
		<script src="public/front/js/custom.js"></script> 
		<script>
			$j(document).ready(function() {			
			
				
				listingModeToggle();
			
				// Init All Carousel			
				productCarousel($j('#megaMenuCarousel1'),1,1,1,1,1);
				verticalCarousel($j('.vertical-carousel-1'),2);
				
			
			})
		</script>
	</body>
</html>