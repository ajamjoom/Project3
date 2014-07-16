@extends('_master')
 @section('title')

 			Random User Generator
 @stop

 @section('content')
<br>
 		<a class='home' href = '/'>Home</a>
<br>
 		<h1>Random User Generator</h1>


	{{ Form::open(array('url' => '/user_generator', 'method' => 'POST')) }}
	
	
	{{ Form::label('number_of_users', 'Number of users:', array('id' => 'user_generator')) }}
	{{ Form::text('number_of_users', '1') }}
	{{ Form::label('number_of_users', '(Max 99)', array('id' => 'user_max')) }}
	<br>
	{{ Form::label('add_photo', 'Include photo') }}
	{{ Form::checkbox('add_photo', '1', false) }}
	<br>
	{{ Form::label('add_birthday', 'Include birthday') }}
	{{ Form::checkbox('add_birthday', '1', false) }}
	<br>
	{{ Form::label('add_address', 'Include address') }}
	{{ Form::checkbox('add_address', '1', false) }}
	<br>
	{{ Form::label('add_profile', 'Include profile') }}
	{{ Form::checkbox('add_profile', '1', false) }}
	<br>
	
	{{ Form::submit('Generate!') }}
	
	{{ Form::close() }}
	
 @stop