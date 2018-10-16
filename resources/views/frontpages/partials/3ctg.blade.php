
		<div id="pageContent">
			
			<!-- category fish food accessories -->
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="category-carousel">
							<div class="col-sm-4 col-md-4 col-lg-4">
								<a href="{{ action('FrontPageController@getAqueaFish') }}" target="_blank" class="banner zoom-in">
									<span class="figure">
									<img src="/public/front/images/custom/ctg/fish.jpg" alt=""/>
										<span class="figcaption">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="banner__title size5">FISHES</span>
													<span class="btn btn--ys btn--xl">Shop now!</span>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4">
								<a href="{{ action('FrontPageController@getAccessories') }}" target="_blank" class="banner zoom-in">
								<span class="figure">
									<!--<img src="front/images/custom/ctg/food.jpg" alt=""/>-->
									<img src="/public/front/images/custom/ctg/access.jpg" alt=""/>
									<span class="figcaption">
										<span class="block-table">
											<span class="block-table-cell">
												<span class="banner__title size5">ACCESSORIES</span>
												<span class="btn btn--ys btn--xl">Shop now!</span>
											</span>
										</span>
									</span>
								</span>
								</a>
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4">
								<a href="{{ action('FrontPageController@getAqueaFood') }}" target="_blank" class="banner zoom-in">
								<span class="figure">
									<img src="/public/front/images/custom/ctg/gray_food.jpg" alt=""/>
									<span class="figcaption">
										<span class="block-table">
											<span class="block-table-cell">
												<span class="banner__title size5">FOODS</span>
												<span class="btn btn--ys btn--xl">Shop now!</span>
											</span>
										</span>
									</span>
								</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- category fish food accessories -->
			
			<!-- featured products -->
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-xl-8">
							<!-- title -->
							<div class="title-box">
								<h2 class="text-center text-uppercase title-under">FEATURED PRODUCTS</h2>
							</div>
							<!-- /title -->
							<div class="product-listing carousel-products-mobile row">
								@if($fratured_products)
								@foreach($fratured_products as $fratured_product)
								<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
									<!-- product -->
									<div class="product product--zoom">
										<div class="product__inside">
											<!-- product image -->
											<div class="product__inside__image">
												<a href="{{ action('FrontPageController@getProduct',$fratured_product->id) }}"> <img src="/public/{{ $fratured_product->product_photo }}" alt="{{ $fratured_product->name }}"> </a> 
												<!-- quick-view --> 
												<!--<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a> -->
												<!-- /quick-view --> 
											</div>
											<!-- /product image --> 
											<!-- product name -->
											<div class="product__inside__name">
												<h2><a href="{{ action('FrontPageController@getProduct',$fratured_product->id) }}">{{ $fratured_product->name }}</a></h2>
											</div>
											<!-- /product name -->                 <!-- product description --> 
											<!-- visible only in row-view mode -->
											<div class="product__inside__description row-mode-visible"> {!! $fratured_product->short_description !!}</div>
											<!-- /product description -->                 <!-- product price -->
											<div class="product__inside__price price-box"> ৳ {{ $fratured_product->real_price }} </div>
											<!-- /product price -->                 <!-- product review --> 
											<!-- visible only in row-view mode -->
											<div class="product__inside__review row-mode-visible">
												<div class="rating row-mode-visible"> 
													<span class="icon-star"></span> 
													<span class="icon-star"></span> 
													<span class="icon-star"></span>
													<span class="icon-star"></span>
													<span class="icon-star empty-star"></span> 
												</div>
												<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
											</div>
											<!-- /product review --> 
											<div class="product__inside__hover">
												<!-- product info -->
												<div class="product__inside__info">
													<div class="product__inside__info__btns">
														
														 <a href="{{ action('CartController@addItem',$fratured_product->id) }}" class="btn btn--ys btn--xl">
														 	<span class="icon icon-shopping_basket"></span> Add to cart
														 </a>
														 
														<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
														<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
														
														<!--<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs">-->
														<!--	<span class="icon icon-visibility"></span> Quick view-->
														<!--</a>-->
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
						</div>
					</div>
				</div>
			</div>
			<!-- Today's offer -->
			<div class="content fullwidth indent-col-none">
				<div class="container">
					<div class="row">
							<!-- title -->
							<div class="title-box">
								<h2 class="text-center text-uppercase title-under">TODAY'S DEAL</h2>
							</div>
							<!-- /title -->
						<div class="banner-carousel">
							@if($today_offers)
							@foreach($today_offers as $today_offer )
							<div class="col-md-4 col-sm-4 col-xs-12">
								<a href="{{ action('CartController@addItem',$today_offer->id) }}" class="banner zoom-in">
									<span class="figure">
										<img src="/public/{{ $today_offer->product_photo }}" alt="{{ $today_offer->name }}"/>
										<span class="figcaption">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="banner__title size3-1">{{ $today_offer->discunt_price_by_parsents }}% OFF</span>
													<span class="text size1"><em>on brand-new models</em></span>
													<span class="btn btn--ys btn--xl">ADD TO CART </span>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
							@endforeach
							@endif
						</div>
					</div>
				</div>
			</div>
			<!-- Today's offer -->
			
		</div>