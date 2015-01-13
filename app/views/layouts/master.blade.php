<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="/stylesheet.css">
	@yield('topscript')
</head>
<body>


	<div class='container main_body'>

		@if (Session::has('successMessage'))
		    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
		    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
		@endif
    </div>
    
	@yield('content')

	<div class='row' id='footer'>
		<div class='col-md-4 col-md-offset-4'>
				<p><a href="{{ action('PostsController@index') }}">Blog</a></p>
				<p><a href="#">LinkedIn</a></p>
				<p><a href="#">Facebook</a></p>
				<p><a href="#">Instagram</a></p>
		</div>
	</div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	
    @yield('bottomscript')

</body>

</html>