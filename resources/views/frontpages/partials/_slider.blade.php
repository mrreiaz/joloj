
		<div class="content offset-top-0" id="slider">
			<!--
				#################################
				- THEMEPUNCH BANNER -
				#################################
				--> 
			<!-- START REVOLUTION SLIDER 3.1 rev5 fullwidth mode -->
			<h2 class="hidden">Slider Section</h2>
			<div class="tp-banner-container">
				<div class="tp-banner">
					<ul>
						@if(count($sliders) > 0)
							@foreach($sliders as $slider)
							<!-- SLIDE 2  -->            
							<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
								<!-- MAIN IMAGE --> 
								<img src="/public/{{ $slider->slider_img }}"  alt="slide2"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
								<!-- LAYERS -->
								<!-- TEXT -->
								<div class="tp-caption lfr stb" data-x="right"	data-y="center"  data-voffset="-5"	data-hoffset="-205" data-speed="600" data-start="900" data-easing="Power4.easeOut" 	data-endeasing="Power4.easeIn" style="z-index: 2;">
									<div class="tp-caption2--wd-1"> {{ $slider->title1 }} </div>
									<div class="tp-caption2--wd-2">{{ $slider->title2 }}</div>
									<div class="tp-caption2--wd-3">{{ $slider->bigtitle }}</div>
									<!--<a href="" class="link-button button--border-thick pull-right" data-text="Shop now!">Shop now!</a>-->
								</div>							
							</li>
							<!-- /SLIDE 2  -->
							@endforeach
						@endif
					</ul>
				</div>
			</div>
		</div>