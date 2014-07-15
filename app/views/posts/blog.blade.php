@extends('layouts.master')

@section('content')

<h1>Alex's Blog Posts</h1>

<div class="col-md-8">
	<div class="blog post">
		@foreach ($posts as $post)
		<h1>{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</h1>
		<p class="lead"> by {{{ $post->user->username }}} </p>
		<hr>
		<p><span class="glyphicon glyphicon-time"></span> Posted on {{{ $post->created_at->format('l, F jS Y @ h:i A') }}}
		</p>
		<hr>
		<p></p> 
		<p>
			{{{ substr($post->body, 0, 100) }}}
		</p>
		<p></p>
		<a class="btn btn-primary" href="{{ action('PostsController@show', array($post->id)) }}"> Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
		@endforeach
	</div>
	
	{{ Form::open(array('action'=> 'PostsController@index', 'class' => 'form-inline', 'method' => 'GET')) }}
	<br>
	<div>
		{{ $posts->links() }}
	</div>
</div>
<div class="col-md-4">
	<div class="img"> 
		<img class="img-circle profile-img" src="images/winter_selfie.jpg"></img>
	</div>
	<div class="well">
		<h4>Search Blog</h4>
		{{ Form::open(array('action'=> 'PostsController@index', 'class' => 'navbar-form navbar-left', 'method' => 'GET')) }}
		<div class="form-group">
			{{ Form::text('search', null, array('placeholder' => "Search...", "class" => 'form-control')) }}
			<button type="submit" class="btn btn-default">Submit</button>
		</div>
		{{ Form::close() }}
</div>

@stop