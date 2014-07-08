@extends('layouts.master')

@section('content')
	{{ Form::open(array('action'=>'HomeController@doLogin', 'class' => 'form-signin')) }}
	<h2 class="form-signin-heading"><span class="glyphicon glyphicon-lock"></span>Login</h2>
<table>
	<tr><input name="email" type="text" class="form-control" placeholder="Email" value"{{{ Input::old('user->email')}}}"></input></tr>
	<tr><input name="password" type="password" class="form-control" placeholder="Password" required></input></tr>
	<tr><button type="submit" class="btn btn-lg btn-success">Login</button></tr>
	{{ Form::close() }}
</table>
@stop