@extends('frontpages.layouts.app')

@section('title', 'JOLOJ-Aquatic- Exclusive Fish Shop in Bangladesh')

@section('content')
		<!-- Slider section --> 
		@if (Session::has('success'))
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="alert alert-success alert-dismissable">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  <strong>Success!</strong> <b>{{ Session::get('success') }}</b> 
					</div>
				</div>
			</div>
		</div>
		
		@endif
                        
    @include('frontpages.partials._slider')
		
		<!-- END REVOLUTION SLIDER --> 
		
		<!-- CONTENT section -->
		
		<!--three main ctg && featured products-->
        @include('frontpages.partials.3ctg')
		<!--three main ctg && featured products-->
		
		
			<!-- new product & sale products -->
            @include('frontpages.partials.new_exc')
			<!-- /new product & sale products -->
			
			<!-- testimonials slider -->
            @include('frontpages.partials.testimonial')
			<!-- /testimonials slider -->
			
			<!-- recent-posts-carousel -->
            @include('frontpages.partials.home_blog')
			<!-- /recent-posts-carousel -->
			
			<!-- brands-carousel -->
            @include('frontpages.partials.brands')
			<!-- /brands-carousel -->
		
		
@endsection

