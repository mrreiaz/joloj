
			<div class="content content-bg-1 fixed-bg">
				<div class="container">				
					<div class="row">
						<h2 class="text-center text-uppercase title-under">testimonials</h2>
						<div class="slider-blog slick-arrow-bottom">
						@if($testimonials)
							@foreach($testimonials as $testimonial)
								<!-- slide-->
								<a href="{{ $testimonial->source }}" target="_blank" class="link-hover-block">
									<div class="slider-blog__item">
										<div class="row">
											<div class="col-xs-12 col-sm-2 col-sm-offset-3 box-foto">
												<img src="/public/{{ $testimonial->img }}" alt="">
											</div>
											<div class="col-xs-12 col-sm-5 col-xl-4 box-data">
												<h6>{{ $testimonial->name }}  <em>&nbsp;-&nbsp;  {{ $testimonial->name_title }}</em></h6>
												<p>
													{!! $testimonial->body !!}
												</p>
											</div>
										</div>
									</div>
								</a>
								<!-- /slide-->
							@endforeach
						@endif
						</div>
					</div>
				</div>
			</div>