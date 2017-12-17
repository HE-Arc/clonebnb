@extends('layouts.slave')

@section('title')
	Mon profil
@stop

@section('content')

<!-- Content-->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Mon profil</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Accueil</a></li>
							<li><a href="{{ route('dashboard_path') }}">Tableau de bord</a></li>
							<li>Mon profil</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">

			<!-- Profile -->
			<div class="col-lg-6 col-md-12">
				<form action="{{ route('profil_path') }}" method="POST" enctype="multipart/form-data">
	       {{ csrf_field() }}
				<div class="dashboard-list-box margin-top-0">
					<h4 class="gray">Informations personnelles</h4>
					<div class="dashboard-list-box-static">

						<!-- Avatar -->
						<div class="edit-profile-photo">
							<img src="uploads/avatars/{{ Auth::user()->photo}}" alt="">
							<div class="change-photo-btn">
								<div class="photoUpload">
								    <span><i class="fa fa-upload"></i> Charger une photo</span>
								    <input type="file" class="upload" name="photo" />
								</div>
							</div>
						</div>

						<!-- Details -->
						<div class="my-profile">

							<label>Prénom</label>
							<input value="{{ Auth::user()->last_name }}" name="last_name" type="text">

							<label>Nom</label>
							<input value="{{ Auth::user()->first_name }}" name="first_name" type="text">

		        	<label>Sexe </label>
							<select id="sex" name="sex">
								<option value="" selected="selected">Sexe</option>
								<option value="Homme">Homme</option>
								<option value="Femme">Femme</option>
							</select>

							<label>Date de naissance </label>
							<input value="{{ Auth::user()->birthday }}" name="birthday" type="date">

							<label>Phone </label>
							<input value="{{ Auth::user()->phone }}" name="phone" type="tel">

							<label>Email </label>
							<input value="{{ Auth::user()->email }}" name="email" type="email">

							<label>Facebook </label>
							<input value="{{ Auth::user()->facebook_id }}" name="facebook_id" type="text">

							<label>Localisation</label>
							<input value="{{ Auth::user()->address }}" name="address" type="text">

							<label>Langue</label>
							<select id="" name="language">
								<option value="" selected="selected">choisir une langue</option>
								<option value="fr">Français</option>
								<option value="de">Allemand</option>
								<option value="it">Italien</option>
								<option value="en">Anglais</option>
							</select>

							<label>Description</label>
							<textarea name="description" id="description" cols="30" rows="10" style="margin: 0">
								{{ Auth::user()->description }}
							</textarea>
						</div>

						<button class="button margin-top-15" type="">Enregistrer les modifications</button>
					</form>
					</div>
				</div>
			</div>

			<!-- Change Password -->
			<div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4 class="gray">Changer le mot de passe</h4>
					<div class="dashboard-list-box-static">

						<!-- Change Password -->
						<div class="my-profile">
							<label class="margin-top-0">Mot de passe actuel</label>
							<input type="password">

							<label>Nouveau mot de passe</label>
							<input type="password">

							<label>Confirmation nouveau mot de passe</label>
							<input type="password">

							<button class="button margin-top-15">Change le mot de passe</button>
						</div>

					</div>
				</div>
			</div>

@stop
