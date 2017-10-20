@extends('layouts.master')

{{--On peut aussi passer le titre en paramètre dans @extends--}}
@section('title')
	A propos de {{ config('app.name') }}
@stop

@section('content')
	<div class="container">
		<h2>Qu'est ce que {{ config('app.name') }}</h2>
		<p>Buzz est une plateforme de location</p>
	</div>
@stop