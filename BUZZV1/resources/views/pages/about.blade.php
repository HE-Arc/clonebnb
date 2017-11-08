@extends('layouts.master')

@section('title')
	A propos de {{ config('app.name') }}
@stop

@section('content')
	<div class="container" style="margin-top: 100px;">
		<h2>Qu'est ce que {{ config('app.name') }}</h2>
		<p>Buzz est une plateforme de location</p>
	</div>
@stop
