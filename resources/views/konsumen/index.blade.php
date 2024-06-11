@extends('layouts.master')

@section('title', $title)

@section('sidebar')
    @parent
    // you can add something here
@endsection

@section('content')	
	<h1>{{ $title }}</h1>
	
	@if(Auth::check())
		<p>Logged in as:</p>
		
		<p>
			Name: {{ Auth::konsumen()->name }}<br>
			Email: {{ Auth::konsumen()->email }}<br>
			
			<a href="{{ url('konsumen/account') }}">My Account</a> | 
			<a href="{{ url('konsumen/logout') }}">Logout</a> <!-- Can use url() or route() helper functions for URL -->
		</p>
	@else
		<p>
			<a href="{{ route('konsumen.logout') }}">Login</a> | 
			<a href="{{ route('konsumen.register') }}">Register</a> 
		</p>
	@endif
		
@endsection