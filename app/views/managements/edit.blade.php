@extends('acme')

@section('c')

	<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Waste Management > {{ $management->internet->trade_name }}</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						
						{{ Form::model($management, ['route'=>['internets.managements.update', $management->internet->id, $management->id], 'style'=>'margin:0', 'class'=>'form-horizontal', 'method'=>'put']) }}

							<fieldset>

								 {{--Date of Disposal--}}
								  <div class="control-group">
									{{ Form::label('date', 'Date of Disposal', ['class'=>'control-label']) }}
								  <div class="controls">
								  	{{ Form::text('date', null, ['class'=>'input-xlarge datepicker', 'required'=>'']) }}
								  </div>
								</div>
								
								  {{--Ewaste Category--}}
								  <div class="control-group">
									{{ Form::label('categories', 'E-waste Categories', ['class'=>'control-label']) }}
									<div class="controls">
									  {{ Form::select('categories[]', Category::lists('name','id'), $management->categories->lists('id'), ['multiple'=>true, 'required'=>'', 'data-rel'=>'chosen']) }}
									  
									</div>
								  </div>

								  {{--Ewaste Technique--}}
								  <div class="control-group">
									{{ Form::label('technique_id', 'Technique', ['class'=>'control-label']) }}
									<div class="controls">
									  {{ Form::select('technique_id', Technique::lists('name','id'), null, ['required'=>'', 'data-rel'=>'chosen']) }}
									</div>
								  </div>			

							 <div class="form-actions">

								<button type="submit" class="btn btn-primary">Save changes</button>
							 	<a href="{{ route('internets.managements.index', $management->internet->id) }}" class="btn btn-danger">Cancel</a>

							  </div>
							</fieldset>	

					{{ Form::close() }}

					</div>
				</div><!--/span-->
			
			</div><!--/row-->
	
@stop