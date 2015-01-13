@extends('layouts.master')

@section('content')

@include('partials.navbar_blog')

	<div class='row' id='search'>
		<form role="search" class='col-md-8 col-md-offset-1'>
			<div class="form-group col-md-8">
				<input id="search" name="search" type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" id='search-btn' class="btn btn-default">Submit</button>
		<form>
	</div>

<div class='row'>
	<div class='col-md-10 col-md-offset-1'>
		
		@foreach ($posts as $post) 
			<div class="individual-post">

				<article class='blog_post'>

						<div class='row'>

							<h3 class='col-md-8'> {{$post->title}} </h3>

							<div class="index_button_div col-md-1 col-md-offset-3">
								@if(Auth::check())
								<a  class='pencil' href="{{ action('PostsController@edit', $post->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							
								<button data-post-id='{{{ $post->id }}}' class='delete_button btn btn-danger btn-sm '><i class="glyphicon glyphicon-trash"></i></button>
								@endif
							</div>

						</div>

						<p class='created_on'>Created on: {{$post->created_at}} </p>
						<p> by {{{ $post->user->email }}} </p>
						<p class='blog_body'> {{ substr($post->body, 0, 200)}}...</p>
						<a href="{{ action('PostsController@show', $post->id) }}">Read More >></a>
				</article>

			 </div>
		@endforeach

		<div id='paginate'>
			{{ $posts->links() }}
		</div>

		{{ Form::open(['method' => 'delete', 'id' => 'delete-form']) }}
		{{ Form::close() }}
		</div>
</div>

@stop

@section('bottomscript')
	<script type="text/javascript">
		$(".delete-btn").click(function(){
			var postId = $(this).data('post-id');

			$('#delete-form').attr('action', '/posts/' + postId);

			if (confirm('Press OK to confirm delete')) {
				$('#delete-form').submit();		
			}
		});
	</script>
@stop