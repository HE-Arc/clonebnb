@extends('layouts.master')

@section('title')
	A propos de {{ config('app.name') }}
@stop

@section('content')
	<div class="container" style="margin-top: 100px;">
		<h2>Qu'est ce que {{ config('app.name') }}</h2>
		<p>Buzz est une plateforme de réservation et de location d'objets en toute genre, allant d'une voiture tout près de chez vous à un appartement de l'autre côté de la Terre. Les utilisateurs ont la possibilité de mettre en location ou de louer des objets. Tous les objets en location sont organisés sous forme de catégories afin de simplifier la recherche des utilisateurs.</p>
	</div>
@stop
