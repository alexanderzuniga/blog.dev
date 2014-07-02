@extends('layouts.master')

@section('content')

	<h1>Alex's Blog Posts</h1>
<table class="table table-striped">
<tr>
	<th>Title</th>
	<th>Creation date </th>
	<th>Actions</th>
</tr>	
@foreach ($posts as $post)
<tr>
	<td>{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</td>
	<td>{{{$post->created_at->setTimezone('America/Chicago')->format('F jS Y @ h:i A') }}}</td>
	<td><a href="{{action('PostsController@edit', $post->id)}}" class="btn btn-success btn-sm">Edit</a></td>
</tr>
@endforeach	
</table>
	<a href="{{action('PostsController@create')}}" class="btn btn-primary btn-sm"> New Post </a>
	{{ $posts->links() }}

@stop