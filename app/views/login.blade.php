@extends('layouts.master')

@section('content')
	{{ Form::open(array('action'=>'HomeController@doLogin', 'class' => 'form-signin')) }}
	<h2 class="form-signin-heading"><span class="glyphicon glyphicon-lock"></span>Login</h2>
<table>
	<div class="form-group">
	<label for="email">Email address</label>
	<tr><input name="email" type="text" class="form-control" placeholder="Email" value"{{{ Input::old('username->email')}}}"></input></tr>
	</div>
	<div class="form-group">
	<label for="password">Password</label>	
	<tr><input name="password" type="password" class="form-control" placeholder="Password" required></input></tr>
	</div>
	<tr><button type="submit" class="btn btn-lg btn-success">Login</button></tr>
	{{ Form::close() }}
</table>
@stop