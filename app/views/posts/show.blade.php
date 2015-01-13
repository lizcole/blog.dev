@extends('layouts.master')

@section('content')

@include('partials.navbar_blog')

<div>

	<p>Your blog title: {{$post->title}}</p>
	<p>Your blog:</p> <?=$post->body?>

	<a href="{{ action('PostsController@edit', $post->id) }}">Edit</a>

	{{ Form::open(['action' =>['PostsController@destroy', $post->id], 'method' => 'delete', 'id' => 'delete-form']) }}
		{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
	{{ Form::close() }}

</div>

@stop

@section('bottomscript')
	<script type="text/javascript">
		$('#delete-form').submit(function(e){
			if (!confirm('Press OK to confirm delete')) {
				e.preventDefault();
			}
		});
	</script>
@stop