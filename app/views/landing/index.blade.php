@extends('creativo')

@section('top_c')


		<div id="hero">
		    
		    <div class="container">

		      	<div class="row-fluid animated fadeInUp">
		        	<div class="span12">
		          		<div id="home-carousel" class="carousel slide">
		            		<div class="carousel-inner">
			              		<!--slide-->
			              		<!--slide-->

			              	@foreach(Slider::random()->get() as $i=>$s)
			              		
					            <div class="{{ $i?:'active' }} item">
					               	<div class="row-fluid">
					               		<div class="span1"></div>
					               		<div class="span6 animated  rotateInDownLeft">
					                   		<img src="{{ url('') }}/assets/img/slider/{{ $s->image }}" alt="" />
					               		</div>
						               	<div class="span4 animated rotateInUpRight block">
						                   	<h3>{{ $s->title }}</h3>
						                   	<p>
						                   		{{ $s->content }}
						                    </p>
						                </div>
						                <div class="span1"></div>
					               	</div>
					            </div>

					          @endforeach
					            
		             		
		             		</div>

		             		 <a class="carousel-control left" href="#home-carousel" data-slide="prev">&lsaquo;</a>
		            		 <a class="carousel-control right" href="#home-carousel" data-slide="next">&rsaquo;</a>

		             	</div>
		            </div><!--/carousel-inner-->
		            
		        </div><!--/home-carousel-->

		    </div><!--/container-->
		
		</div><!-- /hero -->	


@stop


@section('c')

	<div class="row-fluid margin-top-20 margin-bottom-20">
					<div class="span12">
						<div class="heading">
							
							{{ Content::ref('home-1') }}	
								
						</div>	
					</div>	
				</div>

@stop