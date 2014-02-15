{{-- For Error Message --}}
@if(Session::has('err'))
	
	<div class="alert alert-danger"><i class="glyphicon glyphicon-warning-sign"></i> {{ Session::get('err') }}
	<button type="button" class="close" data-dismiss="alert"><i class="glyphicon glyphicon-remove"></i></button></div>
	
@endif

@if(Session::has('err2'))
	
	<div class="alert alert-danger" style="text-transform: initial; font-weight:bold"><i class="glyphicon glyphicon-warning-sign"></i> {{ Session::get('err2') }}</div>
	
@endif

{{-- For Success Message --}}
@if(Session::has('suc'))
	
	<div class="alert alert-success"><i class="glyphicon glyphicon-ok-sign"></i> {{ Session::get('suc') }}
	<button type="button" class="close" data-dismiss="alert"><i class="glyphicon glyphicon-remove"></i></button></div>

@endif

@if(Session::has('suc2'))
	
	<div class="alert alert-success" style="text-transform: initial; font-weight:bold"><i class="glyphicon glyphicon-ok-sign"></i> {{ Session::get('suc2') }}</div>

@endif

{{-- For Validation Errors --}}
@if($errors->any())
	<div class="alert alert-danger"><i class="glyphicon glyphicon-warning-sign"></i> <b> {{ $errors->first() }} </b><button type="button" class="close" data-dismiss="alert"><i class="glyphicon glyphicon-remove"></i></button></div>
	<!-- 
	{{ implode('', $errors->all('<div class="alert alert-danger"><i class="icon-warning-sign"></i> <b>:message</b> <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button></div>')) }}
 -->
@endif