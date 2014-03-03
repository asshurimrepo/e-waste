<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span1">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
					@foreach(Page::orderBy('order')->where('ref','admin')->get() as $page)
						<li {{ Session::get('active') == $page->route ? 'class="active"' : '' }}><a href="{{ url($page->route) }}"><i class="{{ $page->icon }}"></i><span class="hidden-tablet"> {{ $page->name }}</span></a></li>	
					@endforeach
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span11">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span11">
			
				@include('alert')
				@yield('c')

			</div><!--/#content.span10-->
		</div><!--/fluid-row-->
				

		@yield('modals')

		
		<div class="clearfix"></div>
		
		<footer>
			<p>
				<span style="text-align:left;float:left">&copy; <a href="./form.html" target="_blank">creativeAssh</a> 2014</span>
				<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="#">AsshDev</a></span>
			</p>

		</footer>
				
	</div><!--/.fluid-container-->