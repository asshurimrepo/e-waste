@extends('acme')

@section('c')

	<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit > {{ $internet->trade_name }}</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						
						{{ Form::model($internet, ['route'=>['internets.update', $internet->id], 'style'=>'margin:0', 'class'=>'form-horizontal', 'method'=>'put']) }}

							<fieldset>

								 {{--Trade Name--}}
								  <div class="control-group">
									{{ Form::label('owner', 'Owner Name', ['class'=>'control-label']) }}
									<div class="controls">
									  {{ Form::text('owner', null, ['required'=>true, 'class'=>'input-xlarge']) }}
									</div>
								  </div>

								  {{--Trade Name--}}
								  <div class="control-group">
									{{ Form::label('trade_name', 'Trade Name', ['class'=>'control-label']) }}
									<div class="controls">
									  {{ Form::text('trade_name', null, ['required'=>true, 'class'=>'input-xlarge']) }}
									</div>
								  </div>


								    {{--Address--}}
								  <div class="control-group">
									{{ Form::label('address', 'Address', ['class'=>'control-label']) }}
									<div class="controls">
									  {{ Form::text('address', null, ['required'=>true, 'class'=>'input-xlarge']) }}
									</div>
								  </div>	


								  {{--Contact No--}}
								  <div class="control-group">
									{{ Form::label('contact_no', 'Contact Number', ['class'=>'control-label']) }}
									<div class="controls">
									  {{ Form::text('contact_no', null, ['required'=>true, 'class'=>'input-xlarge']) }}
									</div>
								  </div>


								  {{--Services Offered--}}
								  <div class="control-group">
									{{ Form::label('services', 'Services Offered', ['class'=>'control-label']) }}
									<div class="controls">
									  {{ Form::select('services[]', Service::lists('name','id'), $internet->services->lists('id'), ['multiple'=>true, 'required'=>'', 'data-rel'=>'chosen']) }}
									  
									</div>
								  </div>		

							 <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save changes</button>
							  </div>
							</fieldset>	

					{{ Form::close() }}

					</div>
				</div><!--/span-->
			
			</div><!--/row-->
	
@stop