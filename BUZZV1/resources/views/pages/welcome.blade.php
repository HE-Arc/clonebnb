@extends('layouts.master')

@section('title')
	Bienvenue sur Buzz!
@stop

{{--Setion qui sera affiché dans le body du layout master--}}
@section('content')

<!-- Bannière -->
@include('layouts.partials.accueils._top_banner')
<!-- Fin Bannière -->

<!-- Contenu -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered margin-top-75">
			 	Les Catégories
			</h3>
		</div>

	</div>
</div>

<!-- Categories -->
@include('layouts.partials.accueils._categories')
<!-- Fin Catégories -->

<!-- Carousel -->
@include('layouts.partials.accueils._carousel')
<!-- Fin Carousel -->

<!-- Carousel -->
@include('layouts.partials.accueils._populars')
<!-- Fin Carousel -->

<!-- Carousel -->
@include('layouts.partials.accueils._footer_banner')
<!-- Fin Carousel -->

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

@stop
