@extends('layouts.master')

@section('content')

@include('partials.navbar_blog')

	<div class='col-md-6' id='form'>
	{{ Form::model($post, (array('action' => ['PostsController@update', $post->id], 'method' => 'PUT'))) }}
		<div class='form-group'>
			{{ $errors->first('title', '<span class="help-block alert alert-danger">:message</span>') }}
			<input type='text' placeholder='Title' class='form-control' name='title' value='{{{ Input::old('title') }}}'>
		</div>
		<div class='form-group'>
			{{ $errors->first('body', '<span class="help-block alert alert-danger">:message</span>') }}
			<textarea  type='text' rows='6'  class='form-control' name='body' placeholder='New Blog...'></textarea>
		</div>
		<input type='submit' class='btn btn-success' name='button'>
	{{ Form::close() }}
	</div>

@stop