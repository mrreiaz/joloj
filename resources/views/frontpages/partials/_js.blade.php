
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
		<script src="{{ asset('public/front/external/isotope/isotope.pkgd.min.js') }}"></script> 
		<script src="{{ asset('public/front/external/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
		<script src="{{ asset('public/front/external/colorbox/jquery.colorbox-min.js') }}"></script>
		<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
		<script type="text/javascript" src="{{ asset('public/front/external/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script> 
		<script type="text/javascript" src="{{ asset('public/front/external/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script> 
		<!-- Custom --> 
		<script src="{{ asset('public/front/js/custom.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jStorage/0.4.12/jstorage.min.js"></script>
		
		<script>
			$j(document).ready(function() {
				// Init All Carousel			
				productCarousel($j('#megaMenuCarousel1'),1,1,1,1,1); 
				productCarousel($j('#carouselNew'),2,2,3,2,1);
				productCarousel($j('#carouselSale'),2,2,3,2,1);
				productCarousel($j('#postsCarousel'),2,3,3,2,1); // 3 - xl, 3 - lg, 3 - md, 2 - sm, 1 - xs
				mobileOnlyCarousel();
				bannerCarousel($j('.banner-carousel'));
				bannerCarousel($j('.category-carousel'));
				blogCarousel($j('.slider-blog'),1,1,1,1,1);
				brandsCarousel($j('.brands-carousel'));
				
				
				// // Instagram Feed
				// var feed = new Instafeed({
				// 	get: 'user',
				// 	userId: '2324131028',
				// 	clientId: '422b4d6cf31747f7990a723ca097f64e',
				// 	limit: 20,
				// 	sortBy: 'most-liked',
				// 	resolution: "standard_resolution",
				// 	accessToken: '2324131028.422b4d6.d6d71d31431a4e8fbf6cb1efa1a2dfdc',
				// 	template: '<a href="#" target="_blank"><img src="" /></a>'
				// });
				// feed.run();
				// // Instagram Feed
				
				
				// Revolution Slider
				var windowW = window.innerWidth || $j(window).width();
				var fullwidth;
				var fullscreen;

				jQuery(window).resize(sliderOptions);
				sliderOptions();
				function sliderOptions(){
					if (windowW > 767) {
						fullwidth = "off";
						fullscreen = "on";	
					} else {
						fullwidth = "on";
						fullscreen = "off";	
					}	
				}




				  jQuery('.tp-banner').show().revolution(
				  {
					dottedOverlay:"none",
					delay:16000,
					startwidth:2048,
					startheight:900,
					hideThumbs:200,
					hideTimerBar:"on",
					
					thumbWidth:100,
					thumbHeight:50,
					thumbAmount:5,
					
					navigationType:"none",
					navigationArrows:"",
					navigationStyle:"",
					
					touchenabled:"on",
					onHoverStop:"on",
					
					swipe_velocity: 0.7,
					swipe_min_touches: 1,
					swipe_max_touches: 1,
					drag_block_vertical: false,
								
					parallax:"mouse",
					parallaxBgFreeze:"on",
					parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
								
					keyboardNavigation:"off",
					
					navigationHAlign:"center",
					navigationVAlign:"bottom",
					navigationHOffset:0,
					navigationVOffset:20,
			
					soloArrowLeftHalign:"left",
					soloArrowLeftValign:"center",
					soloArrowLeftHOffset:20,
					soloArrowLeftVOffset:0,
			
					soloArrowRightHalign:"right",
					soloArrowRightValign:"center",
					soloArrowRightHOffset:20,
					soloArrowRightVOffset:0,
						
					shadow:0,
					fullWidth: fullwidth,
					fullScreen: fullscreen,
			
					spinner:"",
					h_align:"left",
					
					stopLoop:"off",
					stopAfterLoops:-1,
					stopAtSlide:-1,
			
					shuffle:"off",
					
					autoHeight:"off",           
					forceFullWidth:"off",           
														
								
					hideThumbsOnMobile:"off",
					hideNavDelayOnMobile:1500,            
					hideBulletsOnMobile:"off",
					hideArrowsOnMobile:"off",
					hideThumbsUnderResolution:0,
					
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					startWithSlide:0,
					fullScreenOffsetContainer: "#header"  
				  });
			 })
		</script>
		
