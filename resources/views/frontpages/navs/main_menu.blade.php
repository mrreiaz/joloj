
		<div class="header-wrapper">
			<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-md-4 col-lg-6 col-xs-12">
							<!-- logo start --> 
							<a href="{{ URL::to('/') }}"><img class="logo replace-2x img-responsive" src="{{ asset('public/front/images/logo.png') }}" alt=""/> </a> 
							<!-- logo end --> 
						</div>
						<div class="col-sm-8 col-md-8 col-lg-6 col-xs-12 text-right">
							<img class="logo replace-2x img-responsive" src="{{ asset('public/front/animated/3.gif') }}" alt=""/> 
							<img class="logo replace-2x img-responsive pull-left" src="{{ asset('public/front/animated/2.gif') }}" alt=""/> 
						</div>
					</div>
				</div>
				<div class="stuck-nav">
					<div class="container offset-top-5">
						<div class="row">
							<div class="pull-left col-sm-9 col-md-9 col-lg-10">
								<!-- navigation start -->
								<nav class="navbar">
									<div class="responsive-menu mainMenu">									
										<!-- Mobile menu Button-->
										<div class="col-xs-2 visible-mobile-menu-on">
											<div class="expand-nav compact-hidden">
												<a href="#off-canvas-menu" class="off-canvas-menu-toggle">
													<div class="navbar-toggle"> 
														<span class="icon-bar"></span> 
														<span class="icon-bar"></span> 
														<span class="icon-bar"></span> 
														<span class="menu-text">MENU</span> 
													</div>
												</a>
											</div>
										</div>
										<!-- //end Mobile menu Button -->
										<ul class="nav navbar-nav">
											<li class="dl-close"><a href="#"><span class="icon icon-close"></span>close</a></li>										
											<li class="dropdown dropdown-mega-menu">											
												<a href="{{ action('FrontPageController@getHome') }}" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">HOME</span></a>
											</li>											
											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="{{ action('FrontPageController@getAbout') }}" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">ABOUT</span></a>
											</li>

											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="{{ action('FrontPageController@getContact') }}" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">CONTACT</span></a>
											</li>
											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="{{ action('FrontPageController@getAllBlogs') }}" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">Blog</span></a>
											</li>
											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="{{ action('FrontPageController@getGallery') }}" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">GALLERY</span></a>
											</li>
											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="{{ action('FrontPageController@getAqueaFish') }}" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline text-uppercase">FISH</span></a>
											</li>
											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="{{ action('FrontPageController@getAqueaFood') }}" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">FOOD</span></a>
												
											</li>
											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="{{ action('FrontPageController@getAccessories') }}" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">Accessories</span></a>
											</li>
											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="{{ action('FrontPageController@getPlants') }}" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">Plants</span></a>
											</li>
											
													
										</ul>
									</div>
								</nav>
							</div>
							<!-- navigation end -->
							<div class="pull-right col-sm-3 col-md-3 col-lg-2">
								<div class="text-right">	
									<!-- search start -->
									<div class="search link-inline">
										<a href="#" class="search__open"><span class="icon icon-search"></span></a>
										<div class="search-dropdown">
											<form action="#" method="get">
												<div class="input-outer">
													<input type="search" name="search" value="" maxlength="128" placeholder="SEARCH:">
													<button type="submit" title="" class="icon icon-search"></button>
												</div>
												<a href="#" class="search__close"><span class="icon icon-close"></span></a>									
											</form>
										</div>
									</div>
									<!-- search end -->										
									<!-- account menu start -->
									<div class="account link-inline">
										<div class="dropdown text-right">
											<a class="dropdown-toggle" data-toggle="dropdown">
											<span class="icon icon-person "></span>
											</a>
											<ul class="dropdown-menu dropdown-menu--xs-full">
												<li><a href="#"><span class="icon icon-person"></span>My Account</a></li>
												<li><a href="{{ action('CheckOutController@getCheckOut') }}"><span class="icon icon-done_all"></span>Checkout</a></li>
												<li><a href="{{ action('FrontPageController@getUserSignIn') }}"><span class="icon icon-lock"></span>Log In</a></li>
												<li><a href="{{ action('FrontPageController@getUserSignUp') }}"><span class="icon icon-person_add"></span>Create an account</a></li>
												<li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>close</a></li>
											</ul>
										</div>
									</div>
									<!-- account menu end -->
									<!-- shopping cart start -->
									<div class="cart link-inline">
										<div class="dropdown text-right">
											<a class="dropdown-toggle">
											<span class="icon icon-shopping_basket"></span>
											<span class="badge badge--cart">{{ Cart::count() }}</span>
											</a>
											<div class="dropdown-menu dropdown-menu--xs-full slide-from-top" role="menu">
												<div class="container">
													<div class="cart__top">Recently added item(s)</div>
													<a href="#" class="icon icon-close cart__close"><span>CLOSE</span></a>
													
													<ul>
														@if(\Cart::content())
															@foreach(\Cart::content() as $cartItem)
															<?php 
																$myproduct = \App\Product::find($cartItem->id);
															?>
															<li class="cart__item">
																<div class="cart__item__image pull-left"><a href="#"><img src="public/{{$myproduct->product_photo}}" alt="{{$myproduct->name}}"/></a></div>
															 {!! Form::open(['action' => ['CartController@updateItem',$cartItem->rowId], 'method' => 'POST']) !!}
																<div class="cart__item__info">
																	<div class="cart__item__info__title">
																		<h2><a href="{{ action('FrontPageController@getProduct',$myproduct->id) }}">{{$myproduct->name}}</a></h2>
																	</div>
																	<div class="cart__item__info__price"><span class="info-label">Price:</span><span>৳ {{$myproduct->real_price}}</span></div>
																	<div class="cart__item__info__qty"><span class="info-label">Qty:</span><input type="number" name="qty" class="input--ys" value='{{ $cartItem->qty}}' /></div>
																</div>
																
																<div class="cart__item__control">
																	<div class="cart__item__delete"><a href="{{ URL::to('/delete-item/') }}/{{ $cartItem->rowId }}" class="icon icon-delete"><span>Delete</span></a></div>
																<button type="submit" class="btn btn-link" ><div class="cart__item__edit" style="margin-top: -10px;"><a href="" class="icon icon-edit"><span>Update</span></a></div></button>	
																</div>
														 	{!! Form::close() !!}
															</li>
															@endforeach
														@endif
													</ul>
													<div class="cart__bottom">
														<div class="cart__total">Cart subtotal: <span> ৳ {{Cart::subtotal()}}</span></div>
														<a href="{{ action('CheckOutController@getCheckOut') }}" class="btn btn--ys btn-checkout">Checkout <span class="icon icon--flippedX icon-reply"></span></a>
														<a  href="{{ action('CartController@index') }}" class="btn btn--ys"><span class="icon icon-shopping_basket"></span> View All Shopping Item's </a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- shopping cart end -->			
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>