@extends('layouts.master')

@section('content')

<h1>Alex's Blog Posts</h1>
<div class="col-md-8">
	<table class="table table-hover">
		<tr>
			<th>Title</th>
			<th>Creation date </th>
			<th>Author</th>
			@if (Auth::check())
			<th>Actions</th>
			@else
			@endif
		</tr>	
		@foreach ($posts as $post)
		<tr>
			<td> {{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</td>
			<td> {{{ $post->created_at->format('l, F jS Y @ h:i A') }}}</td>
			<td> {{{ $post->user->username }}} </td>
			@if (Auth::check())
			<td><a href="{{action('PostsController@edit', $post->id)}}" class="btn btn-success btn-sm">Edit</a></td>
			@else
			@endif
		</tr>
		@endforeach	
	</table>
	{{ Form::open(array('action'=> 'PostsController@index', 'class' => 'form-inline', 'method' => 'GET')) }}


	<br>
	<div>
		{{ $posts->links() }}
	</div>
</div>
<div class="col-md-4">
	<div class="well">
		<h4>Search Blog</h4>
		{{ Form::open(array('action'=> 'PostsController@index', 'class' => 'navbar-form navbar-left', 'method' => 'GET')) }}
		<div class="form-group">
		 {{ Form::text('search', null, array('placeholder' => "Search...", "class" => 'form-control')) }}
		 <button type="submit" class="btn btn-default">Submit</button>
		</div>
		{{ Form::close() }}

	</div>
</div>
@stop