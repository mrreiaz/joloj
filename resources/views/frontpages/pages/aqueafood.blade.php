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
		<!-- breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<ol class="breadcrumb breadcrumb--ys pull-left">
					<li class="home-link"><a href="{{ URL::to('/') }}" class="icon icon-home"></a></li>
					<li><a href="#">Aquarium</a></li>
					<li class="active">Food</li>
				</ol>
			</div>
		</div>
		<!-- /breadcrumbs --> 
		<!-- CONTENT section -->
		<div id="pageContent">
			<div class="container">
				<!-- two columns -->
				<div class="row">
					<!-- center column -->
					<aside class="col-md-12 col-lg-12 col-xl-12" id="centerColumn">
						<!-- title -->
						<div class="title-box">
							<h2 class="text-center text-uppercase title-under">Aquarium Food's</h2>
						</div>
						<!-- /title -->												

						<div class="product-listing row">
							@if($foods)
							@foreach($foods as $food)
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
								<!-- product -->
								<div class="product product--zoom">
									<div class="product__inside">
										<!-- product image -->
										<div class="product__inside__image">
											<a href=""> <img src="/public{{ $food->product_photo }}" alt="{{ $food->name }}"> </a> 
											<!-- quick-view --> 
											<!--<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a> -->
											<!-- /quick-view --> 
										</div>
										<!-- /product image --> 
										<!-- product name -->
										<div class="product__inside__name">
											<h2><a href="">{{ $food->name }}</a></h2>
										</div>
										<!-- /product name -->                 <!-- product description --> 
										<!-- visible only in row-view mode -->
										<div class="product__inside__description row-mode-visible">{!! $food->short_description !!} </div>
										<!-- /product description -->                 <!-- product price -->
										<div class="product__inside__price price-box">৳ {{ $food->real_price }}</div>
										<!-- /product price --> 
										<!-- product review --> 
										<!-- visible only in row-view mode -->
										<div class="product__inside__review row-mode-visible">
											<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
											<!--<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> -->
										</div>
										<!-- /product review --> 
										<div class="product__inside__hover">
											<!-- product info -->
											<div class="product__inside__info">
												<div class="product__inside__info__btns"> <a href="{{ action('CartController@addItem',$food->id) }}" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
													<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
													<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
													<!--<a href="#" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> -->
												</div>
												<ul class="product__inside__info__link hidden-sm">
													<!--<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>-->
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

					</aside>
					<!-- center column --> 
				</div>
				<!-- /two columns --> 
			</div>
		</div>
		<!-- End CONTENT section --> 
		
        @include('frontpages.partials.footer')
        
        

        
        @include('frontpages.partials.modal')

        
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