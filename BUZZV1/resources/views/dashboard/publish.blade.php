@extends('layouts.slave')

@section('title')
	Publier une annonce
@stop

@section('content')

<!-- Content -->
	<div class="dashboard-content">

		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Ajouter une annonce</h2>
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Accueil</a></li>
							<li><a href="#">Tableau de bord</a></li>
							<li>Ajouter une annonce</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">

					<!-- Section -->
					<div class="add-listing-section">

						<div class="add-listing-headline">
							<h3><i class="fa fa-file-o"></i> Informations générales</h3>
						</div>
						<form action="{{ route('publish_path') }}" method="POST" enctype="multipart/form-data">
							{{ csrf_field() }}
						<div class="row with-forms">
							<div class="col-md-12">
								<h5>Titre de l'annonce <i class="tip" data-tip-content="Nom de votre annonce"></i></h5>
								<input class="search-field" name="title" type="text" value="{{ old('title') }}" required/>
							</div>
						</div>

						<div class="row with-forms">

							<div class="col-md-12">
								<h5>Catégories</h5>
								<select class="chosen-select-no-single" name="category_id">
									<option label="blank">Choisir une catégorie</option>
									@foreach($categories as $category)
									<option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
									@endforeach
								</select>
							</div>

						</div>

					</div>
					<div class="add-listing-section margin-top-45">

						<div class="add-listing-headline">
							<h3><i class="fa fa-map-marker"></i> Localisation</h3>
						</div>

						<div class="submit-section">

							<div class="row with-forms">

								<div class="col-md-6">
									<h5>Rue</h5>
                  <input type="text" name="street" placeholder="Entrez la rue" value="{{ explode('-', old('address'))[0] }}" required>
								</div>

								<div class="col-md-6">
									<h5>Numéro</h5>
									<input type="text" name="number" placeholder="Numéro de la rue" required>
								</div>

								<div class="col-md-6">
									<h5>NPA</h5>
									<input type="text" name="npa" placeholder="Code postal" required>
								</div>

								<div class="col-md-6">
									<h5>Ville</h5>
                  <input type="text" name="city" placeholder="Ville" required>
								</div>

							</div>

						</div>
					</div>


					<!-- Section -->
					<div class="add-listing-section margin-top-45">
						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="fa fa-image"></i> Images <h5><span> La première image sera l'image principale de votre annonce</span></h5></h3>
						</div>
						<input type="file" class="" name="image_[]" multiple required>
					</div>
					<!-- Section / End -->


					<!-- Section -->
					<div class="add-listing-section margin-top-45">

						<div class="add-listing-headline">
							<h3><i class="fa fa-files-o"></i> Détails</h3>
						</div>

						<!-- Description -->
						<div class="form">
							<h5>Description</h5>
							<textarea class="WYSIWYG" name="description" cols="40" rows="3" id="description" spellcheck="true" required></textarea>
						</div>

						<!-- Row -->
						<div class="row with-forms">

							<div class="col-md-4">
								<h5>Téléphone <span>(optionnel)</span></h5>
								<input type="text" name="telephone">
							</div>

							<div class="col-md-4">
								<h5>Site <span>(optionnel)</span></h5>
								<input type="text" name="site">
							</div>

							<div class="col-md-4">
								<h5>E-mail <span>(optionnel)</span></h5>
								<input type="email" name="email">
							</div>

						</div>


						<div class="row with-forms">

							<div class="col-md-4">
								<h5 class="fb-input"><i class="fa fa-facebook-square"></i> Facebook <span>(optionnel)</span></h5>
								<input type="text" name="facebook" placeholder="Exemple: https://www.facebook.com/">
							</div>

							<div class="col-md-4">
								<h5 class="twitter-input"><i class="fa fa-twitter"></i> Twitter <span>(optionnel)</span></h5>
								<input type="text" name="twitter" placeholder="Exemple: https://www.twitter.com/">
							</div>

							<div class="col-md-4">
								<h5 class="gplus-input"><i class="fa fa-google-plus"></i> Google Plus <span>(optionnel)</span></h5>
								<input type="text" name="google" placeholder="Exemple: https://plus.google.com">
							</div>

						</div>

					</div>
					<!-- Fin Section ->

					<!-- Section -->
					<div class="add-listing-section margin-top-45">

						<div class="add-listing-headline">
							<h3><i class="fa fa-money"></i> Prix</h3>
						</div>

						<!-- Switcher Content -->
						<div class="row with-forms">

							<div class="col-md-4">
								<h5>Titre</h5>
								<input type="text" placeholder="Montant journalier" disabled>
							</div>

							<div class="col-md-4">
								<h5>Montant</h5>
								<input type="text" name="price" placeholder="Exemple: 200" required>
							</div>

							<div class="col-md-4">
								<h5>Devise</h5>
								<input type="text" placeholder="CHF" disabled>
							</div>

						</div>


					</div>
					<!-- Section / End -->

					<button type="submit" class="button preview">Soumettre</buttom>
				</form>
				</div>
			</div>
@stop
