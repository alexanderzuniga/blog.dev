@extends('layouts.master')

@section('content')
<div class="container">
	@if (isset($post))
		<h1>Edit Post</h1>
		{{ Form::model($post, array('action'=>array('PostsController@update', $post->id), 'method'=>'PUT')) }}
	@else
		<h1>Create a blog post! </h1>
		{{ Form::open(array('action'=>array('PostsController@store'))) }}
	@endif	

	@if ($errors->has('title'))
		{{ $errors->first('title', '<span class="help-block">:message</span>') }}
		{{ $errors->first('body', '<span class="help-block">:message</span>') }}
	@endif
	<div>
	
	{{ Form::label('title', 'Title')}}<br>
	{{ Form::text('title')}}
	</div>
	<div>
	{{ Form::label('body', 'Body')}}<br>
	{{ Form::textarea('body')}} 
	{{ Form::submit('Enter') }}
	{{ Form::close() }}
	</div>
<div>
@stop