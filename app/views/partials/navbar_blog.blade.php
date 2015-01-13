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
            <li><a href="{{ action('HomeController@homePage') }}">Home</a></li>
            <li><a href="{{ action('PostsController@index') }}">Blog Posts</a></li>

            @if (Auth::check())
              <li><a href="{{ action('PostsController@create')}}">Create New Post</a></li>
              <li><a href="{{{ action('HomeController@doLogout') }}}">Logout</a>
           @endif

            @if (Auth::guest())
              <li><a href="{{{ action('HomeController@showLogin') }}}">Admin</a></li>

            @else 
             <li> Welcome {{{ Auth::user()->email }}} </li>
            @endif

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>