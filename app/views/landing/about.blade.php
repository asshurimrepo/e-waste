@extends('creativo')

@section('top_c')


		<div id="page">

			<div class="container">
				<h2>About</h2>
			</div>
		
		</div><!-- /page -->


@stop


@section('c')

	
				
				<h3>{{ Content::ref('about_title_1') }}</h3>
						
				<div class="row-fluid">
					<div class="span6">	
						
						{{ Content::ref('about_msg') }}
							
					</div>
					<div class="span6">	
						<div class="img-polaroid">

							{{ Content::ref('about_video_embed') }}
							
						</div>	
					</div>
				
				</div>	
												
				<hr class="solid" />

				<h3>
						{{ Content::ref('meet_the_team') }}
					
				</h3>

				<div class="row-fluid">

					{{ Content::ref('team_1') }}

					<hr class="dashed visible-phone" />

					{{ Content::ref('team_2') }}

					<hr class="dashed visible-phone" />

					{{ Content::ref('team_3') }}

					<hr class="dashed visible-phone" />

					{{ Content::ref('team_4') }}






					
				
				</div>	

			

@stop