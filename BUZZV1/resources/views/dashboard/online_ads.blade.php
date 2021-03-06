@extends('layouts.slave')

@section('title')
	Mes annonces en ligne
@stop

@section('content')

<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Mes annonces</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Accueil</a></li>
							<li><a href="#">Tableau de bord</a></li>
							<li>Mes annonces</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">

			<!-- Listings -->
			<div class="col-lg-12 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>Annonces en ligne</h4>
					<ul>
            @foreach($ads as $ad)
						<li data-adid="{{ $ad->id }}">
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="#"><img src="/uploads/ads/medias/{{ $ad->image }}" alt="image annonce"></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3><a href="#">{{ $ad['title'] }}</a></h3>
										<span>{{ $ad['address'] }}</span>
										<div class="star-rating" data-rating="{{ $ad->rate() }}">
											<div class="rating-counter">( {{ $ad->getNumComments() }} )</div>
										</div>
									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray delete_ad"><i class="sl sl-icon-close"></i> Supprimer</a>
							</div>
						</li>
            @endforeach
					</ul>
				</div>
			</div>
			<div class="col-md-12">
				<div class="copyrights">©2017 · By LONG.</div>
			</div>
		</div>
	</div>
	<script>
	  var token = '{{ Session::token() }}';
		 var url_delete = '{{ route('delete_ad_path') }}';
	</script>
@stop
