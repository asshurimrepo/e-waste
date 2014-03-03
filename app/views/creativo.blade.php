<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->  
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en">   <!--<![endif]-->  
	<head>
		<meta charset="utf-8" />
		<title>{{ Setting::find(1)->site_name }}</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="" />
		<meta name="author" content="" />

		<link href="{{ url('') }}/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="{{ url('') }}/assets/font-awesome/css/font-awesome.css" />
		<!--[if IE 7]>
  		<link rel="stylesheet" href="{{ url('') }}/assets/font-awesome/css/font-awesome-ie7.css">
		<![endif]-->		
		<link href="{{ url('') }}/assets/css/style.css" rel="stylesheet" />
		<link href="{{ url('') }}/assets/css/style_responsive.css" rel="stylesheet" />
		<link href="{{ url('') }}/assets/css/animate.css" rel="stylesheet" />
		<link href="{{ url('') }}/assets/css/effects.css" rel="stylesheet" />
		<link href="{{ url('') }}/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

	<body>

		<div id="header">
			
			<div class="container">
			
				<div class="row-fluid">
						
					<div id="logo">						
						
						<img style="vertical-align:bottom" src="{{ url('') }}/assets/img/logo.png" class="hide1" alt="Logo" />
						<h1 style="color:#FFF; padding:0; margin:0; display:inline;">{{ Setting::find(1)->site_name }}</h1>
												
					</div><!-- /logo -->
						
					<div id="menu">
						
						<div class="navbar pull-right">
				    		
				    		<div class="navbar-inner">
				          		
				          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				            		<span class="icon-bar"></span>
				            		<span class="icon-bar"></span>
				            		<span class="icon-bar"></span>
				          		</a><!-- /nav-collapse -->
				          		
				          		<div class="nav-collapse collapse">
				            		
									<ul class="nav">




											@foreach(Page::orderBy('order')->where('ref','landing')->get() as $page)
												<li {{ Session::get('active') == $page->route ? 'class="active"' : '' }}>
													<a href="{{ url($page->route) }}">{{ $page->name }}</a>
												</li>
											@endforeach

										

				            		</ul><!-- /nav -->

				          		</div><!-- /nav-collapse -->
				        	
				        	</div><!-- /navbar-inner -->

				      	</div><!-- /navbar -->
						
					</div><!-- /span9 -->
						
				</div><!-- /row-fluid -->
							
			</div><!-- /container -->
			
		</div><!-- /header -->	

		

		@yield('top_c')

		<div id="body">

			<div class="container">
				
			@yield('c')

			</div>      

		</div><!-- /body -->		

		<div id="footer">
			
			<div class="container">
					
				<div class="row-fluid">	
					<div class="span12">
						<a class="top" href="javascript:;">top</a>
					</div>				
				</div>

				<div class="row-fluid">

					<div class="span12">
						<h4>About Us</h4>
						<p>
						{{ Setting::find(1)->about_us }}
						</p>
					</div>	
									
						
				</div> <!-- /row-fluid -->

				<div class="row-fluid visible-phone">	
					<div class="span12">
						<a class="top" href="javascript:;">top</a>
					</div>
				
				</div>

				<div class="row-fluid margin-top-20">
					
					<div class="span12">
						
						<div id="quick-menu" class="span6 pull-right">						
							<ul class="menu white pull-right">


								@foreach(Page::orderBy('order')->where('ref','landing')->get() as $page)
												<li>
													<a href="{{ url($page->route) }}">{{ $page->name }}</a>
												</li>
								@endforeach

								
							</ul>
						</div><!-- /quick-menu -->

						<div id="copyright" class="span6 pull-left">
							&copy; 2014 CreativeAssh. All Rights Reserved. 
						</div><!-- /copyright -->

					</div>

				</div>

			</div>				

		</div><!-- /footer -->	

		<script src="{{ url('') }}/assets/js/jquery-1.8.2.min.js"></script>
		<script src="{{ url('') }}/assets/bootstrap/js/bootstrap.min.js"></script>	
		<script src="{{ url('') }}/assets/fancybox/source/jquery.fancybox.pack.js"></script>
		<script src="{{ url('') }}/assets/flexslider2/jquery.flexslider-min.js"></script>
		<!--[if lt IE 9]>
		<script src="{{ url('') }}/assets/js/respond.js"></script>
		<![endif]-->		
		<script src="{{ url('') }}/assets/js/app.js"></script>
	</body>
</html>	
<script>
jQuery(document).ready(function() {
  	App.init();
});
</script>		