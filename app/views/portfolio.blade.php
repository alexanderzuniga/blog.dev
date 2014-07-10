@extends('layouts.master')

@section('content')
    <h1> Hello, this is my portfolio! </h1>
    <a href="{{{action('HomeController@showResume')}}}">Clique for Resume</a>
 <form method= "POST" action="{{{action('PostsController@store')}}}">
 	<input type="text" placeholder="something here" name = "items">
 	<button type="submit"> Submit </button>
 </form>
@stop