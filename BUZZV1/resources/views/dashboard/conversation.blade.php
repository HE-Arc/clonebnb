@extends('layouts.slave')

@section('title')
  Conversations
@stop

@section('content')
<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Messages</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="{{ dashboard_path }}">Dashboard</a></li>
							<li>Messages</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">

			<!-- Listings -->
			<div class="col-lg-12 col-md-12">

				<div class="messages-container margin-top-0">
					<div class="messages-headline">
						<h4>Charles</h4>
						<a href="#" class="message-action"><i class="sl sl-icon-trash"></i> Supprimer la conversation</a>
					</div>

					<div class="messages-container-inner">

						<!-- Users list -->
            @include('layouts.partials.dashboard._user_list')
            <!--Fin user list-->

						<!-- Message -->
						<div class="message-content">

							<div class="message-bubble">
								<div class="message-avatar"><img src="{{ secure_asset('uploads/avatars/default.png') }}" alt="" /></div>
								<div class="message-text"><p>@{{ message }} Hello, I want to talk about your great listing! Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor lacinia neque imperdiet vitae.</p></div>
							</div>

							<div class="message-bubble me">
								<div class="message-avatar"><img src="{{ secure_asset('uploads/avatars/')}}{{ Auth::user()->photo }}" alt="" /></div>
								<div class="message-text"><p>Nam ut hendrerit orci, ac gravida orci. Cras tristique rutrum libero at consequat. Vestibulum vehicula neque maximus sapien iaculis, nec vehicula sapien fringilla.</p></div>
							</div>

							<div class="message-bubble me">
								<div class="message-avatar"><img src="{{ secure_asset('uploads/avatars/') }}{{ Auth::user()->photo }}" alt="" /></div>
								<div class="message-text"><p>Accumsan et porta ac, volutpat id ligula. Donec neque neque, blandit eu pharetra in, tristique id enim.</p></div>
							</div>

							<div class="message-bubble">
								<div class="message-avatar"><img src="{{ secure_asset('uploads/avatars/default.png') }}" alt="" /></div>
								<div class="message-text"><p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id ultrices sed, accumsan sed dolor.</p></div>
							</div>

							<div class="clearfix"></div>
							<div class="message-reply">
								<textarea cols="40" rows=2 placeholder="Saisser votre message..."></textarea>
								<button class="button">Envoyer le message</button>
							</div>

						</div>
						<!-- Fin Message -->

					</div>

				</div>

			</div>
@stop
