@extends('layouts.slave')

@section('title')
  Vos messages
@stop

@section('content')
<!-- Content
	================================================== -->
	<div class="dashboard-content" id="app">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Messages</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Accueil</a></li>
							<li><a href="{{ route('dashboard_path') }}">Tableau de bord</a></li>
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
						<h4>Boîte de reception</h4>
					</div>

					@include('layouts.partials.dashboard._message_list')
				</div>

				<!-- Pagination -->
				<div class="clearfix"></div>
				<div class="pagination-container margin-top-30 margin-bottom-0 container">
					<nav class="pagination container">
						<ul>
							<li><a href="#" class="current-page">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
						</ul>
					</nav>
				</div>
				<!-- Pagination / End -->
<script src="{{ secure_asset('public/js/app.js') }}"></script>
			</div>
@stop

@section('stylesheet')
  <style type="text/css">

    .conversation {
      width: 80%;
    }

    .panel-heading {
      background-color: #06A87C;
    }

    .write_message {
      border-radius: 2px;
      height: 4rem;
      width:100%;
    }

    button {
      background-color: #FF5A5F;
      color: white;
    }

    .text-center{
      text-align: center;
    }
    .profil {
      width: 200px;
    }

  </style>
@stop
