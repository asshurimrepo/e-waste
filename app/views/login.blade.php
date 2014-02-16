@extends('acme_master')


@section('css')

	<style type="text/css">
			body { background: url(<?=url('img/bg-login.jpg')?>) !important; }
	</style>
	
@stop

@section('body')
		
	<div class="container-fluid">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<br />
				<br />
				<br />
				<h1><center>{{ Setting::find(1)->site_name }}</center></h1>


				<div class="login-box" style="margin-top:25px;">
					<div style="padding:10px">@include('alert')</div>
					<h2>Login to your account</h2>

					{{ Form::open(['url'=>'auth/check']) }}
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>

								{{ Form::text('username',null,['id'=>'username', 'placeholder'=>'Username', 'class'=>'input-large span10']) }}
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>

								{{ Form::password('password',['id'=>'password', 'placeholder'=>'Password', 'class'=>'input-large span10']) }}
							</div>
							<div class="clearfix"></div>
							

							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					{{ Form::close() }}
					
				</fieldset></div><!--/span-->
			</div><!--/row-->
			
				</div><!--/fluid-row-->
				
	</div><!--/.fluid-container-->

@stop