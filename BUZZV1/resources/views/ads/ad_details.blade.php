@extends('layouts.details')

@section('title')
	Annonces
@stop

@section('content')
<!--Inclusions du slider-->
@include('layouts.partials.ad_details._slider')
<!--Fin slider-->

<!-- Content -->
<div class="container">
	<div class="row sticky-wrapper">
		<div class="col-lg-8 col-md-8 padding-right-30">

        <!--Inclusion annonce-->
        @include('layouts.partials.ad_details._ad')
        <!--Fin annonce-->

        <!--Inclusion description-->
        @include('layouts.partials.ad_details._description')
        <!--Fin description-->

        <!--Inclusion prix-->
        @include('layouts.partials.ad_details._pricing')
        <!--Fin prix-->

        <!--Inclusion map-->
        @include('layouts.partials.ad_details._map')
        <!--Fin map-->


        <!--Inclusion reviews-->
        @include('layouts.partials.ad_details._reviews')
        <!--Fin reviews-->
			</div>

      <!--Inclusion reviews-->
      @include('layouts.partials.ad_details._write_review')
      <!--Fin reviews-->

		</div>

    <!--Inclusion sidebar-->
    @include('layouts.partials.ad_details._sidebar')
    <!--Fin Sidebar-->

	</div>
</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>
@stop
