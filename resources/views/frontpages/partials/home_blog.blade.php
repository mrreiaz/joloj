
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<!-- title -->
							<div class="title-with-button">
								<div class="carousel-products__button pull-right">
									<span class="btn-prev"></span>
									<span class="btn-next"></span>        
								</div>
								<h2 class="text-center text-uppercase title-under">RECENT POSTS</h2>
							</div>
							<!-- /title -->
							<!-- carousel-new -->
							<div class="carousel-products row" id="postsCarousel">
								@if($blogs)
								<!-- slide-->
								@foreach($blogs as $blog)
								<div class="col-sm-3 col-xl-6">
									<!--  -->
									<div class="recent-post-box">
										<div class="col-lg-12 col-xl-6">
											<a href="{{ action('FrontPageController@getSingleBlog',$blog->id) }}">
												<span class="figure">
													<img src="/public/{{ $blog->blog_img }}" alt="">
													<span class="figcaption label-top-left">
														<span>
															<b style="font-size: 15px;">{{ date('M j', strtotime($blog->created_at)) }}</b>
															<em>{{ date('Y', strtotime($blog->created_at)) }}</em>
														</span>
													</span>
												</span>
											</a>
										</div>
										<div class="col-lg-12 col-xl-6">
											<div class="recent-post-box__text">
												<h4><a href="{{ action('FrontPageController@getSingleBlog',$blog->id) }}">{{ $blog->title }}</a></h4>
												<div class="author">by <b>Joloj</b></div>
												<p>
													{!! substr(strip_tags($blog->body), 0, 50) !!}{!! strlen(strip_tags($blog->body)) > 50 ? "..." : "" !!}
												</p>
												<a class="link-commet" href="{{ action('FrontPageController@getSingleBlog',$blog->id) }}"><span class="icon icon-message "></span><span class="number">0</span> comment(s)</a>
											</div>
										</div>
									</div>
									<!-- / -->
								</div>
								@endforeach
								<!-- /slide -->
								@endif
							</div>
							<!-- /carousel-new -->
						</div>
					</div>
				</div>
			</div>