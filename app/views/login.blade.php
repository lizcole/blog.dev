@extends('layouts.master')

@section('content')

@include('partials.navbar_blog')

<div class='col-md-6'>
	{{ Form::open(['action' => 'HomeController@doLogin']) }}

	{{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email']) }}
	{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'password']) }}

	{{ Form::submit('Login', ['class' => 'btn', 'btn-success'])}}

	{{ Form::close() }}
</div>

@stop