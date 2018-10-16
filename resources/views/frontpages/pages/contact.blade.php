@extends('frontpages.layouts.app')

@section('title', 'JOLOJ-Aquatic- Exclusive Fish Shop in Bangladesh')

@section('css')

		<link rel="stylesheet" href="{{asset('/public/front/external/nouislider/nouislider.css')}}">

@endsection

@section('content')

		<!-- breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<ol class="breadcrumb breadcrumb--ys pull-left">
					<li class="home-link"><a href="{{ URL::to('/') }}" class="icon icon-home"></a></li>										
					<li class="active">Contact</li>
				</ol>
			</div>
		</div>
		<!-- /breadcrumbs --> 
		<!-- CONTENT section -->
		
		<div id="pageContent">
		    
			<!-- map -->
			<div class="content-bottom">
				<div id="map"></div>
			</div>				
			<!-- /map -->
			
			<section class="container">				
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<h2 class="text-uppercase title-bottom">CONTACTs</h2>
						<ul class="list-icon">
							<li>
								<span class="icon icon-home"></span>
								<strong>Address :</strong> 
										Shop: 25; 1st Floor
										Rajanigandha Tower
										Kochukhet, (Near Mirpur-14)
										Dhaka Cantonment,<br>
										Dhaka- 1206
							</li>
							<li>
								<span class="icon icon-call"></span>
								<strong>Phone:</strong> +8801624110070
							</li>
							<!--<li>-->
							<!--	<span class="fa fa-fax"></span>-->
							<!--	<strong>Fax:</strong> +777 2345 7886-->
							<!--</li>-->
							<li>
								<span class="icon icon-schedule"></span>
								<strong>Hours:</strong> 7 Days a week from 11:00 am to 8:00 pm. 
							</li>
							<li>
								<span class="icon icon-mail"></span>
								<strong>E-mail:</strong> <a class="color" href="mailto:info@mydomain.com">joloj.aquatic@gmail.com</a>
							</li>
						</ul>
						<div class="divider divider--sm"></div>
						<div class="social-links social-links--large">
							<ul>
								<li><a class="icon fa fa-facebook" href="https://www.facebook.com/JolojAquaticBD"></a></li>
								<li><a class="icon fa fa-twitter" href="https://twitter.com/Joloj_AquaticBD"></a></li>
								<li><a class="icon fa fa-google-plus" href="https://plus.google.com/+JolojAquaticBangladeshDhaka"></a></li>
								<li><a class="icon fa fa-instagram" href="https://www.instagram.com/jolojaquaticbd/"></a></li>
								<li><a class="icon fa fa-youtube-square" href="https://www.youtube.com/channel/UCpyvpq3lDxez5rxVtguNULw"></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-9  col-sm-12">
						<div class="divider divider--lg visible-xs"></div>
						<h2 class="text-uppercase title-bottom">GET IN TOUCH WITH US</h2>
						<form action="#" class="contact-form">
							<!-- input -->
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
									    <label for="inputName">Name <sup>*</sup></label>
									    <input type="text" class="form-control" id="inputName">
									  </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label for="inputEmail">Email <sup>*</sup></label>
									    <input type="email" class="form-control" id="inputEmail">
									  </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label for="inputPhone">Phone </label>
									    <input type="text" class="form-control" id="inputPhone">
									  </div>
								</div>
							</div>
							<!-- /input -->
							<!-- textarea -->
							<div class="form-group">
							    <label for="textareaMessage">Message <sup>*</sup></label>
							    <textarea  class="form-control" rows="12"  id="textareaMessage"></textarea>
						   </div>
						   <!-- /textarea -->
						   <!-- button -->
						   <div class="pull-right note">* Required Fields</div>
						   <button class="btn btn--ys btn--xl btn-top" type="submit">Send message</button>
						   <!-- /button -->						   
						</form>						
					</div>
				</div>					
			</section>
		</div>
		<!-- End CONTENT section --> 
		
				
@endsection

@section('js')
		<!-- Google map -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);

function init() {
	// Basic options for a simple Google Map
	// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
	var mapOptions = {
		// How zoomed in you want the map to start at (always required)
		zoom: 12,

		// The latitude and longitude to center the map (always required)
		center: new google.maps.LatLng(23.7931437, 90.3879796), // joloj Aquatic

		// How you would like to style the map. 
		// This is where you would paste any style found on Snazzy Maps.
		styles: [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d1d1d1"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#d1d1d1"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#d1d1d1"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#d1d1d1"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#fafafa"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#d6d6d6"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#bfbfbf"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#f1f1f1"}]}]
	};

	// Get the HTML DOM element that will contain your map 
	// We are using a div with id="map" seen below in the <body>
	var mapElement = document.getElementById('map');

	// Create the Google Map using our element and options defined above
	var map = new google.maps.Map(mapElement, mapOptions);

	var image = '/public/front/images/custom/beachflag.png';
	
	 var marker = new google.maps.Marker({
            position: new google.maps.LatLng(23.7931437, 90.3879796),
            map: map,           
            icon : image,
            title: 'Snazzy!'
        });
}
</script>


@endsection