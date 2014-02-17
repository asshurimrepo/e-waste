<div class="modal hide fade" id="myModal">

{{ Form::open(['route'=>['internets.managements.store', $internet->id], 'style'=>'margin:0', 'class'=>'form-horizontal']) }}

	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		<h3>Add New E-Waste Entry</h3>
	</div>
	<div class="modal-body">
		

		<fieldset>

			  {{--Date of Disposal--}}
			  <div class="control-group">
				{{ Form::label('date', 'Date of Disposal', ['class'=>'control-label']) }}
			  <div class="controls">
			  	{{ Form::text('date', null, ['class'=>'input-xlarge datepicker']) }}
			  </div>
			</div>
			
			  {{--Ewaste Category--}}
			  <div class="control-group">
				{{ Form::label('categories', 'E-waste Categories', ['class'=>'control-label']) }}
				<div class="controls">
				  {{ Form::select('categories[]', Category::lists('name','id'), null, ['multiple'=>true, 'required'=>'', 'data-rel'=>'chosen']) }}
				  
				</div>
			  </div>

			  {{--Ewaste Technique--}}
			  <div class="control-group">
				{{ Form::label('technique_id', 'Technique', ['class'=>'control-label']) }}
				<div class="controls">

				  {{ Form::select('technique_id', Technique::lists('name','id'), null, ['required'=>'', 'data-rel'=>'chosen']) }}
				  
				
				</div>
			  </div>		


		</fieldset>	

		<br>
		<br>
		<br>
		<br>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn" data-dismiss="modal">Close</a>
		<button  class="btn btn-primary">Submit</button>
	</div>

{{ Form::close() }}

</div>