@extends('layouts.master')

@section('content')
    <h1> Hello, this is my portfolio! </h1>
    <a href="
 {{{action('HomeController@showResume')}}}">Clique for Resume</a>
@stop