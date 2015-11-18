<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Templates Page</title>
</head>
<body>
	@extends('layout')

	@section('content')

	<h1>{{$firstname}} {{$lastname}}</h1>
	
	@stop

</body>
</html>