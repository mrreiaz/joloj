        

		<div id="productQuickView" class="white-popup mfp-hide">
			<h1>Modal dialog</h1>
			<p>You won't be able to dismiss this by usual means (escape or
				click button), but you can close it programatically based on
				user choices or actions.
			</p>
		</div>
		<div id="compareSlide" class="hidden-xs">
			<div class="container">
				<div class="compareSlide__top">
					Compare
				</div>
				<a class="compareSlide__close icon icon-close">
				</a>
				<div class="compared-product-row">
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="/public/front/images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="/public/front/images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="/public/front/images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="/public/front/images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="/public/front/images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="/public/front/images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
				</div>
				<div class="compareSlide__bot">
					<a href="#" class="clear-all icon icon-delete"><span>Clear All</span></a>
					<a href="#" class="btn btn--ys btn-compare"><span class="icon icon-shopping_basket"></span> Compare</a>
				</div>
			</div>
		</div>
		<!-- Button trigger modal -->
	  

		<!--================== modal ==================-->
		<!-- modalAddToCart -->
		<div class="modal  fade"  id="modalAddToCart" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog white-modal modal-sm">
		    <div class="modal-content ">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		      </div>
		      <div class="modal-body">
		        <div class="text-center">
		        	"Mauris lacinia lectus" added to cart successfully! 
		        </div>
		      </div>
		      <div class="modal-footer text-center">		       	
		        <a href="shopping-cart-right-column.html"  class="btn btn--ys btn--full btn--lg">go to cart</a>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- /modalAddToCart -->
		<!-- modalLoginForm-->
		<div class="modal  fade"  id="modalLoginForm" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog white-modal modal-sm">
		    <div class="modal-content ">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		        <h4 class="modal-title text-center text-uppercase">Login form</h4>
		      </div>
		      <form>
			      <div class="modal-body indent-bot-none">
			      	<div class="form-group">
			      		<div class="input-group">
						    <span class="input-group-addon">
						    	<span class="icon icon-person"></span>
						    </span>
						    <input type="text" id="LoginFormName" class="form-control" placeholder="Name:">
						</div>
			      	</div>
					<div class="form-group">
						<div class="input-group">
						    <span class="input-group-addon">@</span>
						    <input type="password" id="LoginFormPass" class="form-control" placeholder="Password:">
						</div>
					</div>			         				    				     
 	                 <div class="checkbox-group">
	                  <input type="checkbox" id="checkBox2">
	                  <label for="checkBox2"> 
	                  	<span class="check"></span>
	                  	<span class="box"></span>
	                  	Remember me
	                  </label>
	                </div>
	                <button type="button" class="btn btn--ys btn--full btn--lg">Login</button>
			        <div class="divider divider--xs"></div>
			        <button type="button" class="btn btn--ys btn--full btn--lg btn-blue"><span class="fa fa-facebook"></span> Login with Facebook</button>
			        <div class="divider divider--xs"></div>
			        <button type="button" class="btn btn--ys btn--full btn--lg btn-red"><span class="fa fa-google-plus"></span> Login with Google</button>
			        <div class="divider divider--xs"></div>
			        <ul class="list-arrow-right">
			        	<li><a href="#">Forgot your username?</a></li>
			        	<li><a href="#">Forgot your password?</a></li>
			        	<li><a href="#">Create an account</a></li>
			        </ul>
			      </div>			      
			  </form>
		    </div>
		  </div>
		</div>	
		<!-- /modalLoginForm-->
		
		
		
      <!-- Modal (quickViewModal) -->		
		<div class="modal  modal--bg fade"  id="quickViewModal1">
		  <div class="modal-dialog white-modal">
		    <div class="modal-content container">
		    	<div class="modal-header">
		       	 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		     	 </div>
		    	<!--  -->
		    	<div class="product-popup">
					<div class="product-popup-content">
					<div class="container-fluid">
						<div class="row product-info-outer">
							<div class="col-xs-12 col-sm-5 col-md-6 col-lg-6">
								<div class="product-main-image">
									<div class="product-main-image__item"><img src='/public/front/images/product/product-big-1.jpg' alt="" /></div>
								</div>
							</div>
							<div class="product-info col-xs-12 col-sm-7 col-md-6 col-lg-6">
								<div class="wrapper">
									<div class="product-info__sku pull-left">SKU:  <strong>mtk012c</strong></div>
									<div class="product-info__availabilitu pull-right">Availability:   <strong class="color">In Stock</strong></div>
								</div>
								<div class="product-info__title">
									<h2>Lorem ipsum dolor sit ctetur</h2>
								</div>
								<div class="price-box product-info__price"><span class="price-box__new">$65.00</span> <span class="price-box__old">$84.00</span></div>
								<div class="divider divider--xs product-info__divider"></div>
								<div class="product-info__description">
									<div class="product-info__description__brand"><img src="/public/front/images/custom/brand.png" alt=""> </div>
									<div class="product-info__description__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
								</div>
						
								<div class="wrapper">
									<div class="pull-left"><span class="qty-label">QTY:</span></div>
									<div class="pull-left"><input type="text" name="quantity" class="input--ys qty-input pull-left" value="1"></div>
									<div class="pull-left"><button type="submit" class="btn btn--ys btn--xxl"><span class="icon icon-shopping_basket"></span> Add to cart</button></div>
								</div>
								<ul class="product-link">
									<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
									<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#"><span class="text">Add to compare</span></a></li>
								</ul>
							</div>
						</div>
					</div>
					</div>
				</div>
		    	<!-- / -->
		    </div>
		  </div>
		</div>
		<!-- / Modal (quickViewModal) -->
		
		<!--================== /modal ==================-->
		