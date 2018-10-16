		<!-- Basic -->
		<meta charset="utf-8">
		<title>@yield('title','JOLOJ-Aquatic- Exclusive Fish Shop in Bangladesh')</title>
		<meta name="keywords" content="" />
		<meta name="description" content="">
		<meta name="author" content="reiaz">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="shortcut icon" href="favicon.ico">
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- External Plugins CSS -->
		<link rel="stylesheet" href="{{ asset('public/front/external/slick/slick.css') }}">
		<link rel="stylesheet" href="{{ asset('public/front/external/slick/slick-theme.css') }}">
		<link rel="stylesheet" href="{{ asset('public/front/external/magnific-popup/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('public/front/external/bootstrap-select/bootstrap-select.css') }}">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('public/front/external/rs-plugin/css/settings.css') }}" media="screen" />
		<!-- Custom CSS -->
		<link rel="stylesheet" href="{{ asset('public/front/css/style.css') }}">
		<!-- Icon Fonts  -->
		<link rel="stylesheet" href="{{ asset('public/front/font/style.css') }}">
		<!-- Head Libs -->
		<style>
			.banner .block-table-cell {
			    display: table-cell;
			    vertical-align: bottom;
			    padding-bottom: 20px;
			}
		</style>
		@yield('css')
		<!-- Modernizr -->
		<script src="{{ asset('public/front/external/modernizr/modernizr.js') }}"></script>