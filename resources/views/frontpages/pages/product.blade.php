<!DOCTYPE html>
<html>
<head>
    @include('frontpages.partials._single_product_head')
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


	<!-- breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<ol class="breadcrumb breadcrumb--ys pull-left">
					<li class="home-link"><a href="{{ URL::to('/') }}" class="icon icon-home"></a></li>
					<li><a href="#">Category Name</a></li>
					<li class="active">Product Name</li>
				</ol>
			</div>
		</div>
		<!-- /breadcrumbs --> 

		<!-- CONTENT section -->
		<div id="pageContent">
			<section class="content offset-top-0">
				<div class="container">
					<div class="row product-info-outer">

						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
									<div class="product-main-image">
										<div class="product-main-image__item"><img class="product-zoom" src="/public/{{ $single_product->product_photo }}" data-zoom-image="/public/{{ $single_product->product_photo }}" alt="{!! $single_product->name !!}" /></div>
										<div class="product-main-image__zoom"></div>
									</div>
									
									@if($single_product->youtube_links)
									<a href="{{$single_product->youtube_links}}" class="video-link"><span class="icon icon-videocam"></span>Video</a>
									@endif
									
									
								</div>
								<div class="product-info col-sm-6 col-md-6 col-lg-6 col-xl-6">
									<!--<div class="wrapper hidden-xs">-->
									<!--	<div class="product-info__sku pull-left">SKU: <strong>mtk012c</strong></div>-->
									<!--	<div class="product-info__availability pull-right">Availability:   <strong class="color">In Stock</strong></div>-->
									<!--</div>-->
									<div class="product-info__title">
										<h2>{{ $single_product->name }}</h2>
									</div>
									<div class="wrapper">
										<div class="product-info__availability pull-left">Availability:   <strong class="color"> @if(count($single_product->quantity) > 0) In Stock @else  Out of Stock  @endif </strong></div>
									</div>

									<div class="price-box product-info__price"><span class="price-box__new"> ৳ {{ $single_product->discunt_price }} </span> <span class="price-box__old">  ৳ {{ $single_product->real_price }} </span></div>
									<div class="product-info__review">
										<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
									</div>
									<div class="divider divider--xs product-info__divider"></div>
									<div class="product-info__description">
										<div class="product-info__description__brand"><img style="height: 60px;" src="/public/{{ $single_product->brand_photo }}"  alt="{{ $single_product->name }}" /> </div>
										<div class="product-info__description__text">{!! $single_product->long_description !!}</div>
									</div>
									<div class="divider divider--xs product-info__divider"></div>

									<div class="divider divider--sm"></div>
									
									<div class="wrapper">
										<div class="pull-left"><span class="qty-label">QTY:</span></div>
										<div class="pull-left">											
											<!--  -->
											<div class="number input-counter">
											    <span class="minus-btn"></span>
											    <input type="text" value="1" size="5"/>
											    <span class="plus-btn"></span>
											</div>
											<!-- / -->
										</div>
										<div class="pull-left"><button type="submit" class="btn btn--ys btn--xxl"><span class="icon icon-shopping_basket"></span> Add to cart</button></div>
									</div>
									<ul class="product-link">
										<li class="text-right"><a href="#"><span class="icon icon-favorite_border  tooltip-link"></span><span class="text">Add to wishlist</span></a></li>
									</ul>

								</div>	
							</div>
							<div class="content">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs nav-tabs--ys1" role="tablist">
									<li class="active"><a href="#Tab1"  role="tab" data-toggle="tab" class="text-uppercase">DESCRIPTION</a></li>
									<li><a href="#Tab2" role="tab" data-toggle="tab" class="text-uppercase">Reviews</a></li>
									<li><a href="#Tab3" role="tab" data-toggle="tab" class="text-uppercase">Tags</a></li>
									<li><a href="#Tab4" role="tab" data-toggle="tab" class="text-uppercase">CUSTOM TAB</a></li>
									<li><a href="#Tab5" role="tab" data-toggle="tab" class="text-uppercase">Sizing Guide</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content tab-content--ys nav-stacked">
									<div role="tabpanel" class="tab-pane active" id="Tab1">
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
										<div class="divider divider--md"></div>
										<table class="table table-params">
											<tbody>
												<tr>
													<td class="text-right"><span class="color">PROOF</span></td>
													<td>PDF Proof</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">SAMPLES</span></td>
													<td>Digital, Printed</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">WRAPPING</span></td>
													<td>Yes,  No</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">UV GLOSS COATING</span></td>
													<td>Yes</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">SHRINK WRAPPING</span></td>
													<td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">WEIGHT</span></td>
													<td>0.05, 0.06, 0.07ess cards</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div role="tabpanel" class="tab-pane" id="Tab2">
										<h5><strong class="color">CUSTOMER REVIEWS 1 ITEM(S)</strong></h5>
										<p> GREAT!</p>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
										<div class="divider divider--xs"></div>
										<table class="table table-params">
											<tbody>
												<tr>
													<td class="text-right"><span class="color">QUALITY</span></td>
													<td>
														<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
													</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">PRICE</span></td>
													<td>
														<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
													</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">VALUE</span></td>
													<td>
														<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
													</td>
												</tr>
											</tbody>
										</table>
										<p class="color-light">Review by User / (posted on 16/9/2016)</p>
										<div class="divider divider--xs"></div>
										<h5><strong class="color">WRITE YOUR OWN REVIEW</strong></h5>
										<p><span class="color">YOU'RE REVIEWING:</span>  Lorem ipsum dolor sit amet conse ctetur</p>
										<p><span class="color">HOW DO YOU RATE THIS PRODUCT?</span></p>
										<div class="divider divider--xs"></div>
										<div class="table-responsive">
											<table class="table table-params">
												<tbody>
													<tr>
														<td class="text-right"></td>
														<td class="text-center">
															<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
														</td>
														<td class="text-center">
															<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
														</td>
														<td class="text-center">
															<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
														</td>
														<td class="text-center">
															<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
														</td>
														<td class="text-center">
															<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
														</td>
													</tr>
													<tr>
														<td class="text-right"><span class="color">QUALITY</span></td>
														<td class="text-center"><span class="icon-enable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
													</tr>
													<tr>
														<td class="text-right"><span class="color">PRICE</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-enable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
													</tr>
													<tr>
														<td class="text-right"><span class="color">VALUE</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-enable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="divider divider--xs"></div>
										<form action="#" class="contact-form">
											<label>Nickname<span class="required">*</span></label>
											<input type="text" class="input--ys input--ys--full">
											<label>Summary of Your Review<span class="required">*</span></label>
											<input type="text" class="input--ys input--ys--full">
											<label>Review<span class="required">*</span></label>
											<textarea class="textarea--ys input--ys--full"></textarea>
											<div class="divider divider--xs"></div>
											<button type="submit" class="btn btn--ys text-uppercase">Submit Review</button>
										</form>
									</div>
									<div role="tabpanel" class="tab-pane" id="Tab3">
										<h5><strong class="color">OTHER PEOPLE MARKED THIS PRODUCT WITH THESE TAGS:</strong></h5>
										<p>Pattern (1)</p>
										<div class="divider divider--xs"></div>
										<h5><strong class="color">ADD YOUR TAGS:</strong></h5>
										<form action="#" class="contact-form">
											<input type="text" class="input--ys input--ys--full">
											<p>Use spaces to separate tags. Use single quotes (') for phrases.</p>
											<div class="divider divider--xs"></div>
											<button type="submit" class="btn btn--ys">Add Tags</button>
										</form>
									</div>
									<div role="tabpanel" class="tab-pane" id="Tab4">
										<h5><strong class="color text-uppercase">Lorem ipsum dolor sit amet conse ctetur adipisicing elit</strong></h5>
										<div class="divider divider--xs"></div>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  orem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
										<ul class="marker-list-circle">
											<li><span class="text-uppercase">Lorem ipsum dolor sit amet</span></li>
											<li><span class="text-uppercase">Conse ctetur adipisicing</span></li>
											<li><span class="text-uppercase">Elit sed do eiusmod tempor</span></li>
											<li><span class="text-uppercase">Incididunt ut laborev</span></li>
											<li><span class="text-uppercase">Et dolore magna aliqua</span></li>
											<li><span class="text-uppercase">Ut enim ad min</span></li>
										</ul>
									</div>
									<div role="tabpanel" class="tab-pane" id="Tab5">
										<h5><strong class="color text-uppercase">Clothing - Single Size Conversion (Continued)</strong></h5>
										<div class="divider divider--xs"></div>
										<div class="table-responsive">
											<table class="table table-params">
												<tbody>
													<tr>
														<td class="text-right"><span class="color">UK</span></td>
														<td>
															<ul class="sizes-row">
																<li>18</li>
																<li>20</li>
																<li>22</li>
																<li>24</li>
																<li>26</li>
															</ul>
														</td>
													</tr>
													<tr>
														<td class="text-right"><span class="color">European</span></td>
														<td>
															<ul class="sizes-row">
																<li>46</li>
																<li>48</li>
																<li>50</li>
																<li>52</li>
																<li>54</li>
															</ul>
														</td>
													</tr>
													<tr>
														<td class="text-right"><span class="color">US</span></td>
														<td>
															<ul class="sizes-row">
																<li>14</li>
																<li>16</li>
																<li>18</li>
																<li>20</li>
																<li>22</li>
															</ul>
														</td>
													</tr>
													<tr>
														<td class="text-right"><span class="color">Australia</span></td>
														<td>
															<ul class="sizes-row">
																<li>8</li>
																<li>10</li>
																<li>12</li>
																<li>14</li>
																<li>16</li>
															</ul>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
						
						
					</div>
				</div>
			</section>			
			<!-- related products -->
			<section class="content">
				<div class="container">
					<!-- title -->
					<div class="title-with-button">
						<div class="carousel-products__center pull-right"> <span class="btn-prev"></span> <span class="btn-next"></span> </div>
						<h2 class="text-left text-uppercase title-under pull-left">YOU MAY ALSO BE INTERESTED IN THE FOLLOWING PRODUCT(S)</h2>
					</div>
					<!-- /title --> 
					<!-- carousel -->
					<div class="carousel-products row" id="carouselRelated">
						@if($new_products)
						@foreach($new_products as $new_product)
						<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-one-six">
							<!-- product -->
							<div class="product">
								<div class="product__inside">
									<!-- product image -->
									<div class="product__inside__image">
										<a href="{{ action('FrontPageController@getProduct',$new_product->id) }}"> <img src="/public/{{ $new_product->product_photo }}" alt="{{ $new_product->name }}"> </a> 
										<!-- quick-view --> 
										<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  
										<!-- /quick-view --> 
									</div>
									<!-- /product image --> 
									<!-- product name -->
									<div class="product__inside__name">
										<h2><a href="{{ action('FrontPageController@getProduct',$new_product->id) }}">{{ $new_product->name }}</a></h2>
									</div>
									<!-- /product name -->                 <!-- product description --> 
									<!-- visible only in row-view mode -->
									<div class="product__inside__description row-mode-visible"> {!! $new_product->short_description !!} </div>
									<!-- /product description -->                 <!-- product price -->
									<div class="product__inside__price price-box">৳ {{ $new_product->real_price }} </div>
									<!-- /product price -->                 <!-- product review --> 
									<!-- visible only in row-view mode -->
									<div class="product__inside__review row-mode-visible">
										<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
									</div>
									<!-- /product review --> 
									<div class="product__inside__hover">
										<!-- product info -->
										<div class="product__inside__info">
											<div class="product__inside__info__btns"> <a href="{{ action('CartController@addItem',$new_product->id) }}" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
												<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
												<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
												<a href="#" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> 
											</div>
											<ul class="product__inside__info__link hidden-xs">
												<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
											</ul>
										</div>
										<!-- /product info --> 
										<!-- product rating -->
										<div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<!-- /product rating --> 
									</div>
								</div>
							</div>
							<!-- /product --> 
						</div>
						@endforeach
						@endif
					</div>
					<!-- /carousel --> 
				</div>
			</section>
			<!-- /related products -->
		</div>
		<!-- End CONTENT section --> 

		



        @include('frontpages.partials.footer')
        
        
		<!-- Modal (quickViewModal) -->	
		
        @include('frontpages.partials.modal')
        
		
		<!-- / Modal (quickViewModal) -->

        
		
				<!-- External JS --> 
		<!-- jQuery 1.10.1--> 
		<script src="{{ asset('public/front/external/jquery/jquery-2.1.4.min.js') }}"></script> 
		<!-- Bootstrap 3--> 
		<script src="{{ asset('public/front/external/bootstrap/bootstrap.min.js') }}"></script> 
		<!-- Specific Page External Plugins --> 
		<script src="{{ asset('public/front/external/slick/slick.min.js') }}"></script> 
		<script src="{{ asset('public/front/external/bootstrap-select/bootstrap-select.min.js') }}"></script> 
		<script src="{{ asset('public/front/external/countdown/jquery.plugin.min.js') }}"></script> 
		<script src="{{ asset('public/front/external/countdown/jquery.countdown.min.js') }}"></script> 		
		<script src="{{ asset('public/front/external/instafeed/instafeed.min.js') }}"></script> 
		<script src="{{ asset('public/front/external/magnific-popup/jquery.magnific-popup.min.js') }}"></script> 
		<script src="{{ asset('public/front/external/nouislider/nouislider.min.js') }}"></script>
		<script src="{{ asset('public/front/external/imagesloaded/imagesloaded.pkgd.min.js') }}"></script> 
		<script src="{{ asset('public/front/external/elevatezoom/jquery.elevatezoom.js') }}"></script>
		<script src="{{ asset('public/front/external/colorbox/jquery.colorbox-min.js') }}"></script> 
		<!-- Custom --> 
		<script src="{{ asset('public/front/js/custom.js') }}"></script> 
		<script>
			$j(document).ready(function() {
				
				
				$j('.video-link').magnificPopup({
					disableOn: 767,
					type: 'iframe',
					removalDelay: 160,
					preloader: false,			
					fixedContentPos: false
				});
			
				// Init All Carousel			
				productCarousel($j('#megaMenuCarousel1'),1,1,1,1,1);
				verticalCarousel($j('.vertical-carousel-1'),2);
				thumbnailsCarousel($j('.product-images-carousel ul'));
				productCarousel($j('#carouselRelated'),6,4,4,2,1);
				verticalCarousel($j('.vertical-carousel-2'),3);
				productCarousel($j('#mobileGallery'),1,1,1,1,1);
			
				
				elevateZoom();
			
			})
		</script>

		
		
	</body>
</html>