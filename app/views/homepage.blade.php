@extends('layouts.master')

@section('topscript')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">
<style type="text/css">
	#logo-small{
		display:none;
	}
</style>
@stop

@section('content')

@include('partials.navbar_home')

<div class='row'id='logo-div'>
	<div class='col-md-4 col-md-offset-4 text-center'>
		<img id='logo' src="pictures/logo2.png">
	</div>
</div>

<div class='row'>
	<div class='col-md-12'>
		<div class='portfolio-doc'>
			<p id='portfolio-text'>About</p>
		</div>
	</div>
</div>

<a name='about'></a>
<div class='container'>
	<div class='row'>
		<div class="page about col-md-12 col-centered">
			<img id='headshot'src="/pictures/headshot-bright.png">
			<p>I have always been passionate about implementing art into every aspect of my life. After graduating with a degree in art, I discovered there are more ways than one to utilize this degree. This realization jumpstarted me into coding.</p>

			<p>I love taking on new projects because they lead to learning new information and push me to find better ways of creating, building, and designing websites. I have worked with HTML5/CSS3, jQuery, PHP, Laravel, MySequal, and Git just to name a few.</p>

			<p>I would like to work in an environment which values learning and encourages the personal development of involved employees.</p>
		</div>
	</div>
</div>

		<div class='resume-doc'>
			<p id='resume-text'>Resume</p>
		</div>

<div class='container'>
	<div class='row'>
		<div class="page col-md-12 col-centered">
				
<!-- Resume -->
<a name ='resume'></a>
<div id='resume'>
<body>
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-sm-push-3">
					<h1>
						Liz Cole
					</h1>
					<h2>
						Front End Developer
					</h2>
				</div>
			</div>
		</div>
	</header>
	<div id="content" class="container">

	<section id="contact" class="row">
		<aside class="col-sm-3">
			<h3>Contact</h3>
		</aside>
		<div class="col-sm-9">
			<div class="row">
			<div class="col-sm-6">
				<strong>Email</strong>
				<div class="email">liz.cole1227@gmail.com</div>
			</div>
			<div class="col-sm-6">
				<strong>Phone</strong>
				<div class="phone">(210) 831-8982</div>
			</div>
			</div>
		</div>
	</section>
	<section id="profiles" class="row">
		<aside class="col-sm-3">
			<h3>Profiles</h3>
		</aside>
		<div class="col-sm-9">
			<div class="row">
				<div class="col-sm-6">
					<strong class="network">
						Github
					</strong>
					<div class="username">
						<div class="url">
							<a href="https://github.com/lizcole">LizCole</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<strong class="network">
						LinkedIn
					</strong>
					<div class="username">
						<div class="url">
							<a href="https://linkedin.com/in/thelizcole">Liz Cole</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="work" class="row">
		<aside class="col-sm-3">
			<h3>Work</h3>
		</aside>
		<div class="col-sm-9">
			<div class="row">
			<div class="col-sm-12">
				<h4 class="strike-through">
					<span>Freelance Front End Developer</span>
					<span class="date">
						2014-Present
					</span>
				</h4>
				<div class="summary">
					<p>Completed a 3 month intensive bootcamp at Codeup where I learned HTML5/CSS3, PHP, Laravel, MySQL, JavaScript, and jQuery.</p>
				</div>
				<h4>Highlights</h4>
				<ul class="highlights">
					<li class="bullet">Was the front end developer for <a href="http://mylocal.beer">MyLocal Beer</a>.Defined the branding for the site and company with photoshop, css and html. Mapped the ui and ux for the website for a seamless user experience.
					The application can be used to search for local brews that are being served in local bars. Built by a team using Laravel, PHP, MySQL, JavaScript, jQuery, and Bootstrap. Development was done with Vagrant environment. Version control with Git and GitHub. Implemented Google API and Brewery DB API. Features user login and user roles with confide and entrust, location search, and the ability for users(breweries) to add or edit beers.</li>
					<li class="bullet">Built a whack-a-mole game with PHP, javascript, jquery, html, css, and photoshop</li>
					<li class="bullet">Build a Planner witha todo list and address book with PHP, html, css, and photoshop</li>		
				</ul>
			</div>
			</div>
		</div>
	</section>

	<section id="volunteer" class="row">
		<aside class="col-sm-3">
			<h3>Volunteer</h3>
		</aside>
		<div class="col-sm-9">
			<div class="row">
			<div class="col-sm-12">
				<h4 class="strike-through">
					<span>Big Brother Big Sister</span>
					<span class="date">
						2014-Present
					</span>
				</h4>
				<div class="website pull-right">
					<a href="http://www.bigmentor.org">http://bigmentor.org/</a>
				</div>
				<div class="position">
					Big Sister
				</div>
				<div class="summary">
					<p>Mentor a 'Little' and provide a positive influence in their life.</p>
				</div>
			</div>
			</div>
		</div>
	</section>
	
	<section id="education" class="row">
		<aside class="col-sm-3">
			<h3>Education</h3>
		</aside>
		<div class="col-sm-9">
			<div class="row">
			<div class="col-sm-12">
				<h4 class="strike-through">
					<span>University of Texas at San Antonio</span>
					<span class="date">
						2008—2013
					</span>
				</h4>
				<div class="area">
					Art
				</div>
				<div class="studyType">
					Bachelor of Arts
				</div>
				<h4>Minor</h4>
				<ul class="courses">
					<li>Business Administration</li>
				</ul>
			</div>
			</div>
		</div>
	</section>
	
	
	<section id="skills" class="row">
		<aside class="col-sm-3">
			<h3>Skills</h3>
		</aside>
		<div class="col-sm-9">
			<div class="row">
			<div class="col-sm-6">
				<div class="name">
					<h4>Web Development</h4>
				</div>
				<ul class="keywords">
					<li>HTML</li>
					<li>CSS</li>
					<li>Javascript</li>
					<li>jQuery</li>
					<li>PHP</li>
					<li>Laravel</li>
					<li>MySQL</li>
					<li>Sequal Pro</li>
					<li>Git & GitHub</li>
					<li>SEO</li>
					<li>Google Adwords</li>
					<li>Google Analytics</li>
				</ul>
			</div>
			<div class="col-sm-6">
				<div class="name">
					<h4>Art</h4>
				</div>
				<ul class="keywords">
					<li>Adobe Photoshop</li>
					<li>Adobe Illustrator</li>
					<li>CorelDraw</li>
				</ul>
			</div>
			</div>
			<div class="col-sm-6">
				<div class="name">
					<h4>Office</h4>
				</div>
				<ul class="keywords">
					<li>Microsoft Office</li>
					<li>Proficient with Mac</li>
					<li>Knowlege of Wordpress</li>
					<li>Social Media</li>
					<li>Quickbooks</li>
				</ul>
			</div>
			</div>
		</div>
	</section>

</div>

</body>
</div>
<!-- end sample text -->
		</div>
	</div>
</div>





@stop

@section('bottomscript')
	<script>
		var start_position = $('#logo').position().top,
		end_position = null;

		$(window).scroll(function() {
			end_position = $(window).scrollTop();
			if(end_position > 90) {
				$('#logo-small').fadeIn();
				$('#logo').fadeOut();
			} else if (end_position < 90) {
				$('#logo-small').fadeOut();
				$('#logo').fadeIn();
			}
		});

	</script>
@stop
