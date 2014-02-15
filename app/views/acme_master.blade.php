<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8" />
	<title>{{ Setting::find(1)->site_name }}</title>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/bootstrap-responsive.css') }}
	{{ HTML::style('css/style.css') }}
	{{ HTML::style('css/style-responsive.css') }}
	{{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext') }}
	<!-- end: CSS -->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{ url('img/favicon.ico') }}" />
	<!-- end: Favicon -->

	@yield('css')
		
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

	{{-- Body --}}
	@yield('body')

	<!-- start: JavaScript-->
		{{ HTML::script('js/jquery-1.7.2.min.js') }}

		{{ HTML::script('js/jquery-ui-1.8.21.custom.min.js') }}

		{{ HTML::script('js/modernizr.js') }}

		{{ HTML::script('js/bootstrap.js') }}

		{{ HTML::script('js/jquery.cookie.js') }}

		{{ HTML::script('js/fullcalendar.min.js') }}

		{{ HTML::script('js/jquery.dataTables.min.js') }}

		{{ HTML::script('js/excanvas.js') }}

		{{ HTML::script('js/jquery.flot.js') }}

		{{ HTML::script('js/jquery.flot.pie.js') }}

		{{ HTML::script('js/jquery.flot.stack.js') }}

		{{ HTML::script('js/jquery.flot.resize.min.js') }}

		{{ HTML::script('js/jquery.chosen.min.js') }}

		{{ HTML::script('js/jquery.uniform.min.js') }}
		
		{{ HTML::script('js/jquery.cleditor.min.js') }}

		{{ HTML::script('js/jquery.noty.js') }}

		{{ HTML::script('js/jquery.elfinder.min.js') }}

		{{ HTML::script('js/jquery.raty.min.js') }}

		{{ HTML::script('js/jquery.iphone.toggle.js') }}
		
		{{ HTML::script('js/jquery.uploadify-3.1.min.js') }}

		{{ HTML::script('js/jquery.gritter.min.j') }}

		{{ HTML::script('js/jquery.imagesloaded.js') }}

		{{ HTML::script('js/jquery.imagesloaded.js') }}

		{{ HTML::script('js/jquery.masonry.min.js') }}

		{{ HTML::script('js/jquery.knob.modified.js') }}

		{{ HTML::script('js/jquery.sparkline.min.js') }}

		{{ HTML::script('js/counter.js') }}

		{{ HTML::script('js/retina.js') }}

		{{ HTML::script('js/custom.js') }}


		@yield('js')
		
	<!-- end: JavaScript-->
	
</body>
</html>
