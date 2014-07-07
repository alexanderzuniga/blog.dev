@extends('layouts.master')

@section('content')

	<h1>Alex's Blog Posts</h1>
<table class="table table-striped">
<tr>
	<th>Title</th>
	<th>Creation date </th>
	<th>Author</th>
	<th>Actions</th>
</tr>	
@foreach ($posts as $post)
<tr>
	<td>{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</td>
	<td>{{{$post->created_at->format('l, F jS Y @ h:i A')}}}</td>
	<td> {{{ $post->user->email }}} </td>
	<td><a href="{{action('PostsController@edit', $post->id)}}" class="btn btn-success btn-sm">Edit</a></td>
</tr>
@endforeach	
</table>
	<a href="{{action('PostsController@create') }}" class="btn btn-primary btn-sm"> New Post </a>
	{{ Form::open(array('action'=> 'PostsController@index', 'class' => 'form-inline', 'method' => 'GET')) }}
	<div class="form-group">
		{{ Form::text('search', null, array('placeholder' => "Search Query", "class" => 'form-control col-lg-4')) }}
	<button type="submit" class="btn btn-success">Search</button>
	</div>
<br>
<div>
	{{ $posts->links() }}
</div>
@stop