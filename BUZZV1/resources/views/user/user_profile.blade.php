@extends('layouts.master')

@section('title')
	Profile
@stop

@section('content')
<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="user-profile-titlebar">
					<div class="user-profile-avatar"><img src="{{ secure_asset('/uploads/avatars/')}}{{ $user->photo }}" alt=""></div>
					<div class="user-profile-name">
						<h2>{{ $user->first_name }}</h2>
              <p><span><a href="#listing-reviews">{{ $user->first_name }}</span></p>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- Content
================================================== -->
<div class="container">
	<div class="row sticky-wrapper">


		<!-- Sidebar
		================================================== -->
		<div class="col-lg-4 col-md-4 margin-top-0">

			<!-- Verified Badge -->
			<div class="verified-badge with-tip" data-tip-content="Informations de l'utilisateur">
				<i class="fa fa-info"></i> Informations
			</div>

			<!-- Contact -->
			<div class="boxed-widget margin-top-30 margin-bottom-50">
				<h3>Contact</h3>
				<ul class="listing-details-sidebar">
					<li style="padding-bottom: 25px"><i class="fa fa-phone"></i> {{ $user->phone }}</li>
					<li><i class="fa fa-envelope-o"></i> <a href="#"><span class="__cf_email__" data-cfemail="592d3634193c21383429353c773a3634">{{ $user->email }}</span></a></li>
				</ul>

				<ul class="listing-details-sidebar social-profiles">
					<li><a href="{{ $user->facebook_id }}" class="facebook-profile"><i class="fa fa-facebook-square"></i> Facebook</a></li>
				</ul>

				<!-- Reply to review popup -->
			</div>
			<!-- Contact / End-->

		</div>
		<!-- Sidebar / End -->

		<!-- Content
		================================================== -->
		<div class="col-lg-8 col-md-8 padding-left-30">

			<h3 class="margin-top-0 margin-bottom-40">Annonces de {{ $user->first_name }}</h3>

			<!-- Listings Container -->
			<div class="row">

				<!-- Listing Item -->
        @foreach($user->ads as $ad)
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="{{ route('details_path',$ad->id) }}" class="listing-item" data-adid="{{ $ad->id }}">
							<!-- Image -->
							<div class="listing-item-image">
								<img src="{{ secure_asset('/uploads/ads/medias/')}}{{ $ad->image }}" alt="image de l'annonce">
								<span class="tag">{{ $ad->category->name }}</span>
							</div>

							<!-- Content -->
							<div class="listing-item-content">
								<div class="listing-item-inner">
									<h3>{{ $ad->title }}</h3>
									<span>{{ $ad->address }}</span>
									<div class="star-rating" data-rating="{{ $ad->rate() }}">
										<div class="rating-counter">( {{ $ad->getNumComments() }} )</div>
									</div>
								</div>
                @if(Auth::user() && $ad->user != Auth::user())
                <span class="like-icon {{ Auth::user()->favorites()->where('ad_id', $ad->id)->first() ? Auth::user()->favorites()->where('ad_id', $ad->id)->first()->isFav == 1 ? 'liked' : '':''}}
        "></span>
              @endif
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->
        @endforeach

			</div>
			<!-- Listings Container / End -->


			<!-- Reviews -->

				<div class="clearfix"></div>



				<!-- Pagination -->
				<div class="clearfix"></div>

				<div class="clearfix"></div>
				<!-- Pagination / End -->
			</div>
		</div>
	</div>
</div>
<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>
<script>
  var token = '{{ Session::token() }}';
  var url_favorite = '{{ route('favorite_path') }}';
</script>
@stop
