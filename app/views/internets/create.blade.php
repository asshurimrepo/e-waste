<div class="modal hide fade" id="myModal">

{{ Form::open(['route'=>'internets.store', 'style'=>'margin:0', 'class'=>'form-horizontal']) }}

	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		<h3>Add New Intenet Cafe</h3>
	</div>
	<div class="modal-body">
		

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
				  {{ Form::select('services[]', Service::lists('name','id'), null, ['multiple'=>true, 'required'=>'', 'data-rel'=>'chosen']) }}
				  
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