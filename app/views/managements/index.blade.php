@extends('acme')

@section('c')
	
	<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header" data-original-title="">
						<h2><i class="fa-icon-list-alt"></i><span class="break"></span>E-Waste Management > {{ $internet->trade_name }}  </h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon plus"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Date</th>
								  <th>Technique</th>
								  <th>E-Waste Types</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	@foreach($internet->managements as $management)
						  	<tr>
								<td class="center">{{ $management->date }} </td>
								<td>{{ $management->technique->name }}</td>
								<td class="center">{{ implode(', ', $management->categories->lists('name')) }}</td>
								
								<td class="center span3">

								{{ Form::open(['route'=>['internets.managements.destroy', $internet->id, $management->id], 'method'=>'delete', 'style'=>'margin:0;']) }}	

									<a class="btn btn-info" href="{{ route('internets.managements.edit', [$internet->id, $management->id]) }}" data-rel="tooltip" data-placement="top" data-original-title="Update/Edit">
										<i class="halflings-icon edit halflings-icon"></i>  
									</a>

									<button class="btn btn-danger delete_btn" href="#ash" data-rel="tooltip" data-placement="top" data-original-title="Remove Data">
										<i class="halflings-icon trash halflings-icon"></i> 
									</button>

								{{ Form::close() }}


								</td>
							</tr>
							@endforeach

						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div>

@stop

@section('modals')

	@include('managements.create')
	
@stop