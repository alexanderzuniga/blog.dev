<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css" media="screen">
  <link rel="stylesheet" href="/css/master.css" media="screen">
  <title>Laravel Blog</title>
  <script type="text/javascript">var switchTo5x=true;</script>
  <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
  <script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>
  @yield('topscript')
</head>
<body>
    <div class="container clear-top">
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            @if (Auth::check())
            <a class="navbar-brand" href="#">{{ Auth:: user()->username }}</a>
            @else 
            <a class="navbar-brand" href="#">Alex's Blog</a>
            @endif
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="{{action('PostsController@index')}}">Home</a></li>
              @if (Auth::check())
              <li><a href="{{ action('PostsController@create')}}">Create Post</a></li>
              @else
              <li><a href="{{ action('HomeController@doLogin')}}">Create Post</a></li>
              @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">


              @if (Auth::check())      	
              <li><a href="{{ action('HomeController@logout')}}">Logout</a></li>
              @else
              <li><a href="{{ action('HomeController@doLogin')}}">Login</a></li>
              @endif
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      @if (Session::has('successMessage'))
      <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
      @endif
      @if (Session::has('errorMessage'))
      <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
      @endif

      <div id="content">
        @yield('content')
      </div>
    </div>
      <!-- +++++ Footer Section +++++ -->

</body>   
<script type="text/javascript">stLight.options({publisher: "88a0a6ac-6de3-4ff9-8ee1-fb6e3df918a5", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script>
var options={ "publisher": "88a0a6ac-6de3-4ff9-8ee1-fb6e3df918a5", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "linkedin", "pinterest", "email", "sharethis"]}};
var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
</script>
@yield ('bottomscript')
 
</html>
