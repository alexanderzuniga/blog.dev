@extends('layouts.master')

@section('content')

<h1>{{{ $post->title }}}	   </h1>
<p> {{{ $post->created_at->format('l, F jS Y @ h:i A') }}} </p>
<p> {{{ $post->user->userame }}} </p>
@if ($post->img_path)
<img src="{{{ $post->img_path }}}" class="img-responsive"> 
@endif

<p> {{ $post->body }} </p>

@if (Auth::check())
<a href="{{action('PostsController@edit', $post->id)}}" class="btn btn-success btn-sm" role="button">Edit</a>

<div class="deletePost">
	{{ Form::open(array('action'=>array('PostsController@destroy', $post->id), 'id' => 'deleteForm', 'method'=>'DELETE')) }}
	<button type="submit" class="deletePost btn btn-danger">Delete</button>
	{{ Form:: close() }}


	@endif

	<p>
		<a href="{{action('PostsController@index')}}" class="btn btn-default btn-sm" role="button"> Back </a> 
	</p>
</div>
@stop

@section('bottomscript')
<script type="text/javascript">
$(".deletePost").click(function() {
	var postId = $(this).data('postid');
	$("#deleteForm").attr('action', '/posts/' + postId);
	if(confirm("Are you sure you want to delete post")) {
		$('#deleteForm').submit();
	}
});
</script>
@stop

