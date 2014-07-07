@extends('layouts.master')

@section('content')

<h1>{{{ $post->title }}}	  </h1>
<p> {{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}} </p>
<p> {{{ $post->body }}}		  </p>

<a href="{{action('PostsController@edit', $post->id)}}" class="btn btn-success btn-sm" role="button">Edit</a>
<a href="{{action('PostsController@index')}}" class="btn btn-default btn-sm" role="button"> Back </a> 

{{ Form::open(array('action'=>array('PostsController@destroy', $post->id), 'method'=>'DELETE')) }}
	{{ Form::submit('Delete') }}
{{ Form:: close() }}

</div>
@stop