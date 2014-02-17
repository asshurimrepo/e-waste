@extends('acme')

@section('c')

	<div class="row-fluid">
				
				<div class="widget span12" ontablet="span12" ondesktop="span12">
					
					<h2><span class="glyphicons globe"><i></i></span> E-Waste Distribution Graph</h2>
					
					<hr />
					
					<div class="content">
						
						<div class="verticalChart">
							
							@foreach ($categories as $cat)

								<div class="singleBar">
							
								<div class="bar">
								
									<div class="value">
										<span>{{ number_format(($cat->managements->count()/$total)*100,2) }}%</span>
									</div>
								
								</div>
								
								<div class="title">{{ $cat->name }}</div>
							
							</div>

							@endforeach

							

						</div>
					
					</div>
					
				</div><!--/span-->
				
				
				
			
			</div>

@stop