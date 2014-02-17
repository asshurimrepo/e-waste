<div class="modal hide fade" id="myModal">

{{ Form::open(['route'=>'services.store', 'style'=>'margin:0', 'class'=>'form-horizontal']) }}

	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		<h3>Add New Service</h3>
	</div>
	<div class="modal-body">
		

		<fieldset>

			 {{--Service Name--}}
			  <div class="control-group">
				{{ Form::label('name', 'Service Name', ['class'=>'control-label']) }}
				<div class="controls">
				  {{ Form::text('name', null, ['required'=>true, 'class'=>'input-xlarge']) }}
				</div>
			  </div>

			 	


		</fieldset>	



	</div>
	<div class="modal-footer">
		<a href="#" class="btn" data-dismiss="modal">Close</a>
		<button  class="btn btn-primary">Submit</button>
	</div>

{{ Form::close() }}

</div>