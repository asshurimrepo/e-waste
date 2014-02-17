@extends('acme')

@section('c')

	<h1 style="position:absolute; z-index:999; top:85px; left:10%">Welcome, {{ Auth::user()->fullname() }}</h1>
  <center>  <img src="{{ url('img/ewaste.jpg') }}" style="width:100%; "></img></center>

@stop