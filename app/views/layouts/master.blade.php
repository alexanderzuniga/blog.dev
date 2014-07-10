<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" media="screen">
	<link rel="stylesheet" href="css/master.css" media="screen">
    <title>Laravel Blog</title>
    @yield('topscript')

    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "88a0a6ac-6de3-4ff9-8ee1-fb6e3df918a5", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>
<body>
<div class="container">
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
@if (Auth::check())
      <a class="navbar-brand" href="#">{{ Auth:: user()->email }}</a>
@else 
	  <a class="navbar-brand" href="#">Alex's Blog</a>
@endif
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{action('PostsController@index')}}">Home</a></li>
@if (Auth::check())
        <li class="active"><a href="{{ action('PostsController@create')}}">Create Post</a></li>
@else
		<li class="active"><a href="{{ action('HomeController@doLogin')}}">Create Post</a></li>
@endif
      </ul>

      {{ Form::open(array('action'=> 'PostsController@index', 'class' => 'navbar-form navbar-left', 'method' => 'GET')) }}
      <div class="form-group">
      {{ Form::text('search', null, array('placeholder' => "Search...", "class" => 'form-control')) }}
      <button type="submit" class="btn btn-default">Submit</button>
      </div>
      {{ Form::close() }}


      <ul class="nav navbar-nav navbar-right">
      <li><a href="https://github.com/alexanderzuniga">
            <i class="fa fa-github fa-1x"></i>
            </a>
      </li>
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
    @yield('content')
<!-- +++++ Footer Section +++++ -->
   
   <div id="footer">
       <div class="container">
           <div class="row">
               <div class="col-lg-4">
                   <h4>Contact me!</h4>
                   <p>
                       azuniga90@yahoo.com <br/>
                       210.730.1575<br/> 
                   </p>
               </div><!-- /col-lg-4 -->
               
               <div class="col-lg-4">
                   <h4>My Links</h4>
                   <p>
                  <span class='st_sharethis_large' displayText='ShareThis'></span>
                  <span class='st_facebook_large' displayText='Facebook'></span>
                  <span class='st_twitter_large' displayText='Tweet'></span>
                  <span class='st_linkedin_large' displayText='LinkedIn'></span>
                  <span class='st_pinterest_large' displayText='Pinterest'></span>
                  <span class='st_email_large' displayText='Email'></span>
                   </p>
               </div><!-- /col-lg-4 -->
               
               <div class="col-lg-4">
                   <h4>About Alex</h4>
                   <p>Web Designer and Developer, <br>Musician and avid snowboarder</p>
               </div><!-- /col-lg-4 -->
           
           </div>
       
       </div>
   </div>
</div>
</body>	
</html>
