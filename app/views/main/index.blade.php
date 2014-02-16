@extends('acme')

@section('c')

	<h1><center>Welcome, {{ Auth::user()->fullname() }}</center></h1>

@stop