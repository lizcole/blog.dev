   <style type="text/css">
    #logo-small{
      position: absolute;
      margin: auto;
      left: 50%;
      margin-left: -45px;
    }
   </style>

   <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ action('HomeController@homePage') }}">L.C.</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Blog</a></li>
            <li><a href="{{ action('HomeController@showPortfolio') }}">Portfolio</a></li>
            <li><a href="{{ action('HomeController@showResume') }}">Resume</a></li>
          </ul>
              <img id='logo-small'src="/pictures/logo-small.png"> 
        </div><!--/.nav-collapse -->
      </div>
    </div>