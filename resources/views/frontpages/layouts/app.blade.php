<!DOCTYPE html>
<html>
<head>
    @include('frontpages.partials._head')
</head>
	<body class="index">
	    		
    @include('frontpages.partials._page_loder')		  
		<!-- Back to top -->
	    <div class="back-to-top"><span class="icon-keyboard_arrow_up"></span></div>
	    <!-- /Back to top -->
	    <!-- mobile menu -->		
    @include('frontpages.navs.mobile')	
	    <!-- /mobile menu -->
		<!-- HEADER section -->
    @include('frontpages.navs.main_menu')	
		<!-- End HEADER section -->
		
			<!-- layouts   -->
			
			@yield('content')
			
			<!-- layouts   -->
			
		</div>
		<!-- End CONTENT section -->
		
		<!-- FOOTER section -->
		
        @include('frontpages.partials.footer')
        
        
        
        @yield('modal')

    
    @include('frontpages.partials._js')
    @yield('js')
	</body>
</html>