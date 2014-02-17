@extends('acme')

@section('js')
	
	@parent
	<script type="text/javascript">

		$(document).ready(function() {
			/* ---------- Pie chart ---------- */
				var data = {{ json_encode($data) }};
	
				if($("#piechart_t").length)
				{
					$.plot($("#piechart_t"), data,
					{
						series: {
								pie: {
										show: true
								}
						},
						grid: {
								hoverable: true,
								clickable: true
						},
						legend: {
							show: false
						}
					});
					
					function pieHover(event, pos, obj)
					{
						if (!obj)
								return;
						percent = parseFloat(obj.series.percent).toFixed(2);
						$("#hover").html('<span style="font-weight: bold; color: '+obj.series.color+'">'+obj.series.label+' ('+percent+'%)</span>');
					}
					$("#piechart_t").bind("plothover", pieHover);
				}
		});

	</script>

@stop

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
				
				
				<div class="widget span12" ontablet="span12" ondesktop="span12">
					
					<h2><span class="glyphicons globe"><i></i></span> E-Waste Management Technique Distribution Pie Graph</h2>
					
					<hr />
					
					<div class="content">
						

							<div id="piechart_t" style="height:400px"></div>
					


					</div>
					
				</div>
				
			
			</div>

@stop