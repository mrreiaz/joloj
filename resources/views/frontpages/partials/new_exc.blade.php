
			<div class="content">
				<div class="container">
					<div class="row">
						
						<!--New Producis -->
						<div class="col-sm-12 col-md-6 col-xl-4">
							<!-- title -->
							<div class="title-with-button">
								<div class="carousel-products__button pull-right"> <span class="btn-prev"></span> <span class="btn-next"></span> </div>
								<h2 class="text-left text-uppercase title-under pull-left">New Product's </h2>
							</div>
							<!-- /title --> 
							@if($new_products)
							<!-- carousel -->
							<div class="carousel-products row" id="carouselNew">
								@foreach($new_products as $new_product)
								<div class="col-lg-3">
									<!-- product -->
									<div class="product">
										<div class="product__inside">
											<!-- product image -->
											<div class="product__inside__image">
												<a href="{{ action('FrontPageController@getProduct',$new_product->id) }}"> <img src="/public/{{ $new_product->product_photo }}" alt="{{ $new_product->name }}"> </a> 
												<!-- quick-view --> 
												<!--<a href="#" data-toggle="modal" data-id="{{$new_product->id}}" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a> -->
												<!-- /quick-view -->
											</div>
											<!-- /product image --> 
											<!-- label news -->
											<!--<div class="product__label product__label--right product__label--new"> <span>new</span> </div>-->
											<!-- /label news --> 
											<!-- product name -->
											<div class="product__inside__name">
												<h2><a href="{{ action('FrontPageController@getProduct',$new_product->id) }}">{{ $new_product->name }}</a></h2>
											</div>
											<!-- /product name --> 
											<!-- product price -->
											<div class="product__inside__price price-box">৳ {{ $new_product->real_price }}</div>
											<!-- /product price --> 
											<div class="product__inside__hover">
												<!-- product info -->
												<div class="product__inside__info">
													<input type="hidden" p_id="{{$new_product->id}}">
													<div class="product__inside__info__btns"> <a href="{{ action('CartController@addItem',$new_product->id) }}" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
													<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
													<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
													<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
													<ul class="product__inside__info__link hidden-xs">
														<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
													</ul>
												</div>
												<!-- /product info --> 
												<!-- product rating -->
												<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
												<!-- /product rating --> 
											</div>
										</div>
									</div>
									<!-- /product --> 
								</div>
								@endforeach
							</div>
							<!-- /carousel -->
							@endif 
						</div>
						<!--New Producis -->
						
						<!--popular products-->
						@if($top_sells)
						<div class="col-sm-12 col-md-6 col-xl-4">
							<div class="divider--lg visible-sm visible-xs"></div>
							<!-- title -->
							<div class="title-with-button">
								<div class="carousel-products__button pull-right"> <span class="btn-prev"></span> <span class="btn-next"></span> </div>
								<h2 class="text-left text-uppercase title-under pull-left">Popular Products</h2>
							</div>
							<!-- /title --> 
							<!-- carousel -->
							<div class="carousel-products row" id="carouselSale">
								
								@foreach($top_sells as $top_sell)
								<div class="col-lg-3">
									<!-- product -->
									<div class="product">
										<div class="product__inside">
											<!-- product image -->
											<div class="product__inside__image">
												<a href="{{ action('FrontPageController@getProduct',$top_sell->id) }}"> <img src="/public/{{ $top_sell->product_photo }}" alt="{{ $top_sell->name }}"> </a> 
												<!-- quick-view --> 
												<!--<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a>  -->
												<!-- /quick-view --> 
											</div>
											<!-- /product image --> 
											<!-- label sale -->
											<div class="product__label product__label--left product__label--sale"> <span>Sale<br>{{ $top_sell->discunt_price_by_parsents }}%</span> 
											</div>
											<!-- /label sale --> 
											<!-- product name -->
											<div class="product__inside__name">
												<h2><a href="{{ action('FrontPageController@getProduct',$top_sell->id) }}">{{ $top_sell->name }}</a></h2>
											</div>
											<!-- /product name --> 
											<!-- product price -->
											<div class="product__inside__price price-box">৳ {{ $top_sell->discunt_price }}<span class="price-box__old">৳ {{ $top_sell->real_price }}</span></div>
											<!-- /product price -->
											<div class="product__inside__hover">
												<!-- product info -->
												<div class="product__inside__info">
													<div class="product__inside__info__btns"> <a href="{{ action('CartController@addItem',$top_sell->id) }}" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
													<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
													<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
													<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
													<ul class="product__inside__info__link hidden-xs">
														<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
													</ul>
												</div>
												<!-- /product info --> 
												<!-- product rating -->
												<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
												<!-- /product rating --> 
											</div>
										</div>
									</div>
									<!-- /product --> 
								</div>
								@endforeach
								
							</div>
							<!-- /carousel --> 
						</div>
						@endif
						<!--popular products-->
					</div>
				</div>
			</div>