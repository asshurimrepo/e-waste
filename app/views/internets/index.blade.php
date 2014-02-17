@extends('acme')

@section('c')
	
	<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title="">
						<h2><i class="fa-icon-list-alt"></i><span class="break"></span>Internet Cafe</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon plus"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Trade Name  </th>
								  <th>Owner</th>
								  <th>Contact No.</th>
								  <th>Address</th>
								  <th>Services</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	@foreach($internets as $internet)
						  	<tr>
								<td>{{ $internet->trade_name }}</td>
								<td>{{ $internet->owner }}</td>
								<td>{{ $internet->contact_no }}</td>
								<td class="center">{{ $internet->address }}</td>
								<td>{{ implode(', ', $internet->services->lists('name')) }}</td>
								
								<td class="center span3">

								{{ Form::open(['route'=>['internets.destroy', $internet->id], 'method'=>'delete', 'style'=>'margin:0;']) }}	

									<a class="btn btn-success" href="{{ route('internets.managements.index', $internet->id) }}" data-rel="tooltip" data-placement="top" data-original-title="View E-waste Management">
										<i class="halflings-icon zoom-in halflings-icon"></i>  
									</a>
									<a class="btn btn-info" href="{{ route('internets.edit', $internet->id) }}" data-rel="tooltip" data-placement="top" data-original-title="Update/Edit">
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
			
			</div><!--/row-->

@stop


@section('modals')
	
	@include('internets.create')

@stop