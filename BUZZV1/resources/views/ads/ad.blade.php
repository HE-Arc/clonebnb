@extends('layouts.master')

@section('title')
	Annonces
@stop

@section('content')
<!-- Content de la page -->
<div class="fs-container">

	<div class="fs-inner-container content">
		<div class="fs-content">

			<!--Recherche et filtre-->
			@include('layouts.partials.ads._filter')
			<!--Fin Recherche et filtre-->

			<!--Section affichant les résultats-->
			@include('layouts.partials.ads._result_list')
			<!--Fin section des résultats-->

		</div>
	</div>

	<!-- Carte-->
	@include('layouts.partials.ads._map')
	<!--Fin carte-->

</div>
@stop
