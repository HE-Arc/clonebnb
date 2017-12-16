@extends('layouts.master')

@section('title')
	Bienvenue sur Buzz!
@stop

{{--Setion qui sera affiché dans le body du layout master--}}
@section('content')

<!-- Bannière -->
@include('layouts.partials.accueils._top_banner')
<!-- Fin Bannière -->
<!-- Categories -->
@include('layouts.partials.accueils._categories')
<!-- Fin Catégories -->

<!-- Carousel -->
@include('layouts.partials.accueils._demands')
<!-- Fin Carousel -->

<!-- Carousel -->
@include('layouts.partials.accueils._usage')
<!-- Fin Carousel -->

<!-- Carousel -->
@include('layouts.partials.accueils._footer_banner')
<!-- Fin Carousel -->

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

@stop
