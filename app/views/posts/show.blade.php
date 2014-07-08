@extends('layouts.master')

@section('content')

<h1>{{{ $post->title }}}	   </h1>
<p> {{{ $post->created_at->format('l, F jS Y @ h:i A') }}} </p>
<p> {{{ $post->user->email }}} </p>
@if ($post->img_path)
	<img src="{{{ $post->img_path }}}" class="img-responsive"> 

@endif
<p> {{{ $post->body }}}	 </p>

@if (Auth::check())
<a href="{{action('PostsController@edit', $post->id)}}" class="btn btn-success btn-sm" role="button">Edit</a>
<div class="form-group">
{{ Form::open(array('action'=>array('PostsController@destroy', $post->id), 'method'=>'DELETE')) }}
<button type="submit" class="btn btn-danger">Delete</button>
{{ Form:: close() }}
@else
@endif
<p>
<a href="{{action('PostsController@index')}}" class="btn btn-default btn-sm" role="button"> Back </a> 
</p>
</div>
@stop