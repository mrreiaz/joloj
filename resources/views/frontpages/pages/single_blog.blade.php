@extends('frontpages.layouts.app')

@section('title', 'JOLOJ-Aquatic- Exclusive Fish Shop in Bangladesh')


@section('content')



		<!-- breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<ol class="breadcrumb breadcrumb--ys pull-left">
					<li class="home-link"><a href="{{ URL::to('/') }}" class="icon icon-home"></a></li>					
					<li class="active">Blog</li>
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
				@if(count($blog) > 0)
					<div class="col-xl-8 col-lg-8 col-md-12" id="centerColumn">
						<!-- title -->
						<div class="title-box">
							<h1 class="text-center text-uppercase title-under">Blog</h1>
						</div>
						<!-- /title -->	
						<!-- Post start -->
						<div class="post">
							<!-- title post -->
							<div class="post__title_block">
								<div class="pull-left">
									<div class="time">
										<span>
											<b style="font-size: 15px;">{{ date('M j', strtotime($blog->created_at)) }}</b>
											<span style="font-size: 14px;margin-top: -14px;">{{ date('Y', strtotime($blog->created_at)) }}</span>
										</span>
									</div>
								</div>										
								<div class="pull-left">
									<h2 class="post__title text-uppercase"><a href="{{ action('FrontPageController@getSingleBlog',$blog->id) }}"> {{ $blog->title }} </a></h2>
									<div class="post__meta">
										<span class="post__meta__item">
											<span class="autor">by <b>Joloj</b></span>
										</span>
										<span class="post__meta__item">
											<span class="icon icon-message"></span>
											<a href="#"> {{ count($blog->comments ) }} comment(s)</a>
										</span>											
									</div>
								</div>									
							</div>
							<!-- /title post -->
							<!-- content post -->
							
							<p>
								<img src="/public/{{ $blog->blog_img }}" class="img-responsive" alt="">
							</p>
							<div class="divider divider--xs"></div>
							<p>
								{!! $blog->body !!}
							</p>
							               				                           
            				
            				<!-- /content post -->
						</div>
						<!-- /Post end -->
												
						<!--<h3 class="title-aside text-uppercase"> 2 THOUGHTS ON “Mauris lacinia lectus” </h3>-->
						
						<!-- comments -->
						@if(count($blog->comments()) > 0)
						@foreach($blog->comments as $comment )
						<div class="media comments">
						  <!-- avatar -->
						  <img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=identicon" }}" class="author-image">
						  <!-- /avatar -->
						  <!-- content -->
						  <div class="media-body">
						    <div class="media-title">
						    	<span class="username">by <b>{{ $comment->name }}</b></span>
						    	<div class="time"><span class="icon icon-access_time"></span>{{ date('F nS, Y - g:iA' ,strtotime($comment->created_at)) }}</div>
						    </div>
						    <div class="media-content">
						    	<p>
							    	{!! $comment->comment !!}
							    </p>
						    </div>
						  </div>
						  <!-- /content -->
						</div>
						<!-- /comments -->
						@endforeach
						@endif
						<hr>
						<!-- form -->
						<form action="{{ action('CommentController@store',$blog->id) }}" method="POST">
							{{ csrf_field() }}
					
						  <div class="form-group" >
						    <label for="InputName">Name</label>
						    <input type="text" class="form-control" name="name" id="InputName">
						  </div>
						  <div class="form-group">
						    <label for="InputEmail">E-mail</label>
						    <input type="email" class="form-control" name="email" id="InputEmail">
						  </div>
						  <div class="form-group">
						    <label for="InputWebsite">Website</label>
						    <input type="text" class="form-control" id="InputWebsite">
						  </div>
						  <div class="form-group">
						    <label for="InputComment">Comment</label>
						    <textarea class="form-control"  id="InputComment" name="comment" rows="8"></textarea>
						  </div>
						  <button class="btn btn-top btn--ys">Leave a comment</button>
						</form>	
						<!-- /form -->
					</div>
				@endif
					<!-- center column -->
					<div class="divider divider--lg visible-md visible-sm visible-xs"></div>
					
					<!-- right column -->
					<aside class="col-xl-4 col-lg-4  col-md-12" id="rightColumn">						
						<!-- search block -->					 						
						<h4 class="text-uppercase title-aside">SEARCH</h4>
						<div class="block-underline">						
							<form>								
								<div class="input-group">									    
								    <input type="text" class="form-control" id="InputSearch">
								    <div class="input-group-btn">
								    	  <button type="submit" class="btn btn--ys btn-left ">Search</button>
								    </div>									    
								</div>								
							</form>	
						</div>
						<!-- /search block -->
						<!-- recent post block -->		
						<h4 class="text-uppercase  title-aside">RECENT POSTS</h4>				
						<div class="block-underline">							
						@if(count($blogs) > 0)
							@foreach($blogs as $blog)
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
																				
												{!! substr(strip_tags($blog->body), 0, 250) !!}
												{!! strlen(strip_tags($blog->body)) > 250 ? '...' : "" !!}
											
											</p>
										</div>
									</div>
								</div>
								<!-- / -->
							@endforeach
						@endif
						</div>
						<!-- /recent post block -->

						<!-- categories block -->
						<h4 class="text-uppercase title-aside">Links</h4>
						<div class="block-underline">
							<ul class="categories-list">
				              <li><a target="_blank" href="{{ action('FrontPageController@getAccessories') }}">Aquarium Accessories </a></li>
				              <li><a target="_blank" href="{{ action('FrontPageController@getAqueaFood') }}">Aquarium Foods</a></li>
				              <li><a target="_blank" href="{{ action('FrontPageController@getAqueaFish') }}">Aquarium Fishs</a></li>
				              <li><a target="_blank" href="{{ action('FrontPageController@getAccessories') }}">Aquarium Plants</a></li>
				              <li><a target="_blank" href="https://plus.google.com/+JolojAquaticBangladeshDhaka">Google + </a></li>
				              <li><a target="_blank" href="https://www.facebook.com/JolojAquaticBD">Facebook</a></li>
				              <li><a target="_blank" href="https://www.youtube.com/channel/UCpyvpq3lDxez5rxVtguNULw">YouTube</a></li>
				            </ul>
						</div>
						<!-- /categories block -->
						
					</aside>
					<!-- /right column --> 
				</div>
				<!-- /two columns --> 
			</div>
		</div>
		<!-- End CONTENT section --> 
				
@endsection
