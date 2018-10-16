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
				<div class="row">
					<div class="blog-layout">
						<!-- title -->
						<div class="title-box">
							<h1 class="text-center text-uppercase title-under">Blog</h1>
						</div>
						<!-- /title -->	
						@if(count($blogs) > 0)
							@foreach ($blogs->chunk(3) as $chunk)
								<div class="row">
									@foreach($chunk as $blog)
										<!-- col -->
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">											
											<!-- Post start -->
											<div class="post">							
												<!-- title post -->
												<div class="post__title_block">
													<figure>
														<a href="{{ action('FrontPageController@getSingleBlog',$blog->id) }}"><img src="public/{{ $blog->blog_img }}" alt=""></a>									
													</figure>
													<div class="pull-left">
														<div class="time">
															<span>{{ date('j', strtotime($blog->created_at)) }}</span>
															{{ date('M', strtotime($blog->created_at)) }}
														</div>
													</div>										
													<div class="pull-left">
														<h2 class="post__title text-uppercase"><a href="{{ action('FrontPageController@getSingleBlog',$blog->id) }}"> {{ $blog->title }} </a></h2>
														<div class="post__meta">
															<span class="post__meta__item">
																<span class="autor">by <b>Joloj</b></span>
															</span>										
														</div>
													</div>									
												</div>
												<!-- /title post -->
												<!-- content post -->
												<p>
			
													{!! substr(strip_tags($blog->body), 0, 450) !!}
													{!! strlen(strip_tags($blog->body)) > 450 ? '...' : "" !!}
												</p>
												<div class="post__meta">								
													<span class="post__meta__item">
														<span class="icon icon-message"></span>
														<a href="#">0 comment(s)</a>
													</span>										
													
												</div>											          				 
					            				<!-- /content post -->
											</div>
											<!-- /Post end -->					
										</div>
										<!-- /col -->
									@endforeach
								</div>
							@endforeach
						@endif
					</div>
				</div>
				
				<ul class="pagination clearfix">
					{{ $blogs->links() }}
				</ul>
				
			</div>
		</div>
		<!-- End CONTENT section --> 
		
				
@endsection
