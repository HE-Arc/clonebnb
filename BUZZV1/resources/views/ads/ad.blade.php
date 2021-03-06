@extends('layouts.master')

@section('title')
	Annonces
@stop

@section('content')
<!--Recherche-->
@include('layouts.partials.listing._listing_title')
<!--Fin Recherche-->
<div class="container">
	<div class="row">
		<!--Recherche-->
		@include('layouts.partials.listing._search_bar')
		<!--Fin Recherche-->
		<div class="col-md-12">
			<!--Filtre-->
			@include('layouts.partials.listing._filter')
			<!--Fin Filtre-->
				<!--Section affichant les résultats-->
				@if(Route::getCurrentRoute()->getName() == "ads_grid_path")
					@include('layouts.partials.ads._result_grid')
				@else
					@include('layouts.partials.ads._result_list')
				@endif
				<!--Fin section des résultats-->
		</div>
	</div>
</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>
<!-- Wrapper / End -->
@stop
