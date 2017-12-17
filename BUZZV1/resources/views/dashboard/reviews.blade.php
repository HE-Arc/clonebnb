@extends('layouts.slave')

@section('title')
	Avis reçus
@stop

@section('content')

<!-- Content -->
	<div class="dashboard-content">

		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Avis</h2>
					<nav id="breadcrumbs">
						<ul>
							<li><a href="{{ route('root_path') }}">Accueil</a></li>
							<li><a href="{{ route('dashboard_path') }}">Tableau de bord</a></li>
							<li>Avis</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">

			<!-- Listings -->
			<div class="col-lg-6 col-md-12">

				<div class="dashboard-list-box margin-top-0">
					<h4>Avis reçus <span>({{ $visitors_comments->total() }})</span></h4>

					<!-- Reply to review popup -->
					<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
						<div class="small-dialog-header">
							<h3>Répondre</h3>
						</div>
						<div class="message-reply margin-top-0">
							<textarea cols="40" rows="3"></textarea>
							<!--<button class="button">Répondre</button>-->
						</div>
					</div>
					<ul>
            @foreach($visitors_comments as $vc)
						<li>
							<div class="comments listing-reviews">
								<ul>
									<li>
										<div class="avatar"><img src="/uploads/avatars/{{ $vc->photo }}" alt="image utilisateur" /> </div>
										<div class="comment-content"><div class="arrow-comment"></div>
											<div class="comment-by">{{ $vc->last_name.' '.$vc->first_name }} <div class="comment-by-listing">pour <a href="#">{{ $vc->title }}</a></div> <span class="date">{{ $vc->created_at }}</span>
												<div class="star-rating" data-rating="{{ $vc->rate }}"></div>
											</div>
											<p>{{ $vc->content }}</p>
											<!--<a href="#small-dialog" class="rate-review popup-with-zoom-anim"><i class="sl sl-icon-action-undo"></i> Répondre</a>-->
										</div>
										<!--<a href="#" class="rate-review"><i class="sl sl-icon-note"></i> Editer</a>-->
									</li>
								</ul>
							</div>
						</li>
            @endforeach
					</ul>
				</div>

			</div>

			<!-- Listings -->
			<div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>Mes avis <span>({{ $comments->total() }})</span></h4>
					<ul>
            @foreach($comments as $comment)
						<li>
							<div class="comments listing-reviews">
								<ul>
									<li>
										<div class="avatar"><img src="/uploads/avatars/{{ Auth::user()->photo }}" alt="photo utilisateur" /> </div>
										<div class="comment-content"><div class="arrow-comment"></div>
											<div class="comment-by">Votre avis <div class="comment-by-listing own-comment">pour <a href="#">{{ $comment->ad->title }}</a></div> <span class="date">{{ $comment->created_at->diffForHumans() }}</span>
												<div class="star-rating" data-rating="{{ $comment->rate }}"></div>
											</div>
											<p>{{ $comment->content }}</p>
											<!--<a href="#" class="rate-review"><i class="sl sl-icon-note"></i> Editer</a>-->
										</div>
									</li>
								</ul>
							</div>
						</li>
            @endforeach
					</ul>
				</div>

			</div>
		</div>
@stop
