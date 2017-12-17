@extends('layouts.slave')

@section('title')
	Mes favoris
@stop

@section('content')

	<div class="dashboard-content">
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Mes favoris</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="{{ route('dashboard_path') }}">Dashboard</a></li>
							<li>Favoris</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- Titlebar -->
		<div class="row">

			<!-- Listings -->
			<div class="col-lg-12 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>Mes favoris</h4>
					<ul>
						@foreach($favorites as $favorite)
						<li data-favid="{{ $favorite->id }}">
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="{{ route('details_path', $favorite->ad_id) }}"><img src="/uploads/ads/medias/{{ $favorite->ad->image }}" alt="image annonce"></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3>{{ $favorite->ad->title }}</h3>
										<span>{{ $favorite->ad->address }}</span>
										<div class="star-rating" data-rating="{{ $favorite->ad->rate() }}">
											<div class="rating-counter">({{ $favorite->ad->getNumComments() }})</div>
										</div>
									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray delete"><i class="sl sl-icon-close"></i> Supprimer</a>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>


			<div class="col-md-12">
				<div class="copyrights">© 2017 Listeo. All Rights Reserved.</div>
			</div>
		</div>

	</div>
	<script>
	  var token = '{{ Session::token() }}';
		 var url_delete = '{{ route('delete_fav_path') }}';
	</script>
@stop
