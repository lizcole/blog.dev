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

<div id='logo-div'>
	<img id='logo' src="pictures/logo2.png">
</div>

<div class="container">
	<div class='row row-centered'>
		<div class='col-md-4 col-centered'>
			<a href="{{ action('HomeController@showResume') }}">
				<div id='pool'>resume</div>
			</a>
		</div>

		<div class='col-md-4 col-centered'>
			<a href="#"><!-- create about page -->
				<div id='lizcole'>about</div>
			</a> 
		</div>

		<div class='col-md-4 col-centered'>
			<a href="{{ action('HomeController@showPortfolio') }}">
				<div id="mountain">Portfolio</div>
			</a>
		</div>

	</div>
</div>

		<div class='resume-doc'>
			<p id='resume-text'>Resume</p>
		</div>

<div class='container'>
	<div class='row'>
		<div class="page col-md-12 col-centered">
				
<!-- start sample text -->
<body>
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-sm-push-3">
					<h1>
						Richard Hendriks
					</h1>
					<h2>
						Programmer
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
				<div class="email">richard.hendriks@gmail.com</div>
			</div>
			<div class="col-sm-6">
				<strong>Phone</strong>
				<div class="phone">(912) 555-4321</div>
			</div>
			<div class="col-sm-6">
				<strong>Website</strong>
				<div class="website">
					<a href="http://richardhendricks.com">http://richardhendricks.com</a>
				</div>
			</div>
			</div>
		</div>
	</section>
	<section id="about" class="row">
		<aside class="col-sm-3">
			<h3>About</h3>
		</aside>
		<div class="col-sm-9">
			<p>Richard hails from Tulsa. He has earned degrees from the University of Oklahoma and Stanford. (Go Sooners and Cardinals!) Before starting Pied Piper, he worked for Hooli as a part time software developer. While his work focuses on applied information theory, mostly optimizing lossless compression schema of both the length-limited and adaptive variants, his non-work interests range widely, everything from quantum computing to chaos theory. He could tell you about it, but THAT would NOT be a “length-limited” conversation!</p>
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
						Twitter
					</strong>
					<div class="username">
						<div class="url">
							<a href="https://twitter.com/neutralthoughts">neutralthoughts</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<strong class="network">
						SoundCloud
					</strong>
					<div class="username">
						<div class="url">
							<a href="https://soundcloud.com/dandymusicnl">dandymusicnl</a>
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
					<span>Pied Piper</span>
					<span class="date">
						2013-12-01 — 2014-12-01
					</span>
				</h4>
				<div class="website pull-right">
					<a href="http://piedpiper.com">http://piedpiper.com</a>
				</div>
				<div class="position">
					CEO/President
				</div>
				<div class="summary">
					<p>Pied Piper is a multi-platform technology based on a proprietary universal compression algorithm that has consistently fielded high Weisman Scores™ that are not merely competitive, but approach the theoretical limit of lossless compression.</p>
				</div>
				<h4>Highlights</h4>
				<ul class="highlights">
					<li class="bullet">Build an algorithm for artist to detect if their music was violating copy right infringement laws</li>
					<li class="bullet">Successfully won Techcrunch Disrupt</li>
					<li class="bullet">Optimized an algorithm that holds the current world record for Weisman Scores</li>
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
					<span>CoderDojo</span>
					<span class="date">
						2012-01-01 — 2013-01-01
					</span>
				</h4>
				<div class="website pull-right">
					<a href="http://coderdojo.com/">http://coderdojo.com/</a>
				</div>
				<div class="position">
					Teacher
				</div>
				<div class="summary">
					<p>Global movement of free coding clubs for young people.</p>
				</div>
				<h4>Highlights</h4>
				<ul class="highlights">
					<li class="bullet">Awarded &#x27;Teacher of the Month&#x27;</li>
				</ul>
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
					<span>University of Oklahoma</span>
					<span class="date">
						2011-06-01 — 2014-01-01
					</span>
				</h4>
				<div class="area">
					Information Technology
				</div>
				<div class="studyType">
					Bachelor
				</div>
				<h4>Courses</h4>
				<ul class="courses">
					<li>DB1101 - Basic SQL</li>
					<li>CS2011 - Java Introduction</li>
				</ul>
			</div>
			</div>
		</div>
	</section>
	
	<section id="awards" class="row">
		<aside class="col-sm-3">
			<h3>Awards</h3>
		</aside>
		<div class="col-sm-9">
			<div class="row">
			<div class="col-sm-12">
				<h4 class="strike-through">
					<span>Digital Compression Pioneer Award</span>
				</h4>
				<div class="date pull-right">
					<em>Awarded</em>
					2014-11-01
				</div>
				<div class="awarder">
					<em>by</em>
					<strong>Techcrunch</strong>
				</div>
				<div class="summary">
					There is no spoon.
				</div>
			</div>
			</div>
		</div>
	</section>
	
	<section id="publications" class="row">
		<aside class="col-sm-3">
			<h3>Publications</h3>
		</aside>
		<div class="col-sm-9">
			<div class="row">
			<div class="col-sm-12">
				<h4 class="strike-through">
					<span>Video compression for 3d media</span>
					<span class="date">
						2014-10-01
					</span>
				</h4>
				<div class="website pull-right">
					<a href="http://en.wikipedia.org/wiki/Silicon_Valley_(TV_series)"></a>
				</div>
				<div class="publisher">
					<em>Published by</em>
					<strong>Hooli</strong>
				</div>
				<div class="summary">
					<p>Innovative middle-out compression algorithm that changes the way we store data.</p>
				</div>
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
				</ul>
			</div>
			<div class="col-sm-6">
				<div class="name">
					<h4>Compression</h4>
				</div>
				<ul class="keywords">
					<li>Mpeg</li>
					<li>MP4</li>
					<li>GIF</li>
				</ul>
			</div>
			</div>
		</div>
	</section>

	<section id="languages" class="row">
		<aside class="col-sm-3">
			<h3>Languages</h3>
		</aside>
		<div class="col-sm-9">
			<div class="row">
			<div class="col-sm-6">
				<div class="language">
					<strong>English</strong>
				</div>
				<div class="fluency">
					Native speaker
				</div>
			</div>
			</div>
		</div>
	</section>

	<section id="interests" class="row">
		<aside class="col-sm-3">
			<h3>Interests</h3>
		</aside>
		<div class="col-sm-9">
			<div class="row">
			<div class="col-sm-6">
				<div class="name">
					<h4>Wildlife</h4>
				</div>
				<ul class="keywords">
					<li>Ferrets</li>
					<li>Unicorns</li>
				</ul>
			</div>
			</div>
		</div>
	</section>
	
	<section id="references" class="row">
		<aside class="col-sm-3">
			<h3>References</h3>
		</aside>
		<div class="col-sm-9">
			<div class="row">
			<div class="col-sm-12">
				<blockquote class="reference">
					<p>It is my pleasure to recommend Richard, his performance working as a consultant for Main St. Company proved that he will be a valuable addition to any company.</p>
					<p class="name">
						<strong>— Erlich Bachman</strong>
					</p>
				</blockquote>
			</div>
			</div>
		</div>
	</section>

</div>

</body>
<!-- end sample text -->
		</div>
	</div>
</div>

<div class='row'>
	<div class='col-md-12'>
		<div class='portfolio-doc'>
			<p id='portfolio-text'>Portfolio</p>
		</div>
	</div>
</div>

<div class='container'>
	<div class='row'>
					<div class="page col-md-12 col-centered">
			<p >
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<p>	
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<p>	
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>		
			<p>	
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
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
