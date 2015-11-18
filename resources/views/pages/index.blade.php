@extends('layout')

@section('title')
@parent
Jon's|Voteplay
@stop




@section('content')
	
	<img class="img-responsive" src="{!! asset('img/topimg.jpg') !!}">
	<ul class="list-inline vote-info">
	  <li><a href="#">已报名<p>15432</p></a></li>
	  <li><a href="#">投票人次<p>165134</p></a></li>
	  <li><a href="#">访问量<p>424718</p></a></li>
	</ul>
@stop