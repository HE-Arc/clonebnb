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
					<h2>Ajouter une annonces</h2>
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
						<form action="{{ route('add_advert_path') }}" method="POST">
						<div class="row with-forms">
							<div class="col-md-12">
								<h5>Titre de l'annonce <i class="tip" data-tip-content="Nom de votre annonce"></i></h5>
								<input class="search-field" type="text" name="title" value="{{ old('title') }}" required/>
							</div>
						</div>

						<div class="row with-forms">

							<div class="col-md-6">
								<h5>Catégories</h5>
								<select class="chosen-select-no-single" name="category_id">
									<option label="blank">Choisir une catégorie</option>
									<option>Multimédia</option>
									<option>Sport</option>
									<option>Appartement</option>
									<option>Informatique</option>
									<option>Outils</option>
									<option>Piscine</option>
								</select>
							</div>

							<div class="col-md-6">
								<h5>Mots clés <i class="tip" data-tip-content="Au maximum 5 en relation avec votre annonce. Utiles pour la recherche"></i></h5>
								<input type="text" placeholder="Séparez les mots par une virgule">
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
                  <input type="text" placeholder="">
								</div>

								<div class="col-md-6">
									<h5>Numéro</h5>
									<input type="text" placeholder="">
								</div>

								<div class="col-md-6">
									<h5>NPA</h5>
									<input type="text">
								</div>

								<div class="col-md-6">
									<h5>Ville</h5>
                  <select class="chosen-select-no-single" >
										<option label="blank">Choisir la ville</option>
										<option>Lausanne</option>
										<option>Neuchâtel</option>
										<option>Bienne</option>
									</select>
								</div>

							</div>

						</div>
					</div>


					<!-- Section -->
					<div class="add-listing-section margin-top-45">

						<div class="add-listing-headline">
							<h3><i class="fa fa-image"></i> Image</h3>
						</div>

						<!-- Dropzone -->
						<div class="submit-section">
							<form action="/file-upload" class="dropzone" ></form>
						</div>

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
							<textarea class="WYSIWYG" name="description" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
						</div>

						<!-- Row -->
						<div class="row with-forms">

							<div class="col-md-4">
								<h5>Téléphone <span>(optionnel)</span></h5>
								<input type="text">
							</div>

							<div class="col-md-4">
								<h5>Site <span>(optionnel)</span></h5>
								<input type="text">
							</div>

							<div class="col-md-4">
								<h5>E-mail <span>(optionnel)</span></h5>
								<input type="text">
							</div>

						</div>


						<div class="row with-forms">

							<div class="col-md-4">
								<h5 class="fb-input"><i class="fa fa-facebook-square"></i> Facebook <span>(optionnel)</span></h5>
								<input type="text" placeholder="https://www.facebook.com/">
							</div>

							<div class="col-md-4">
								<h5 class="twitter-input"><i class="fa fa-twitter"></i> Twitter <span>(optionnel)</span></h5>
								<input type="text" placeholder="https://www.twitter.com/">
							</div>

							<div class="col-md-4">
								<h5 class="gplus-input"><i class="fa fa-google-plus"></i> Google Plus <span>(optionnel)</span></h5>
								<input type="text" placeholder="https://plus.google.com">
							</div>

						</div>


						<!-- Checkboxes -->
						<h5 class="margin-top-30 margin-bottom-10">Caractéristiques <span>(optionnel)</span></h5>
						<div class="checkboxes in-row margin-bottom-20">

							<input id="check-a" type="checkbox" name="check">
							<label for="check-a">Assenceur</label>

							<input id="check-b" type="checkbox" name="check">
							<label for="check-b">Bon voisinage</label>

						</div>
						<!-- Checkboxes -->

					</div>
					<!-- Fin Section ->

					<!-- Section -->
					<div class="add-listing-section margin-top-45">

						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-book-open"></i> Prix</h3>
							<!-- Switcher -->
							<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
						</div>

						<!-- Switcher Content -->
						<div class="switcher-content">

							<div class="row">
								<div class="col-md-12">
									<table id="pricing-list-container">
										<tr class="pricing-list-item pattern">
											<td>
												<div class="fm-move"><i class="sl sl-icon-cursor-move"></i></div>
												<div class="fm-input pricing-name"><input type="text" placeholder="Titre" /></div>
												<div class="fm-input pricing-ingredients"><input type="text" placeholder="Montant" /></div>
												<div class="fm-input pricing-price"><input type="text" name="price" value="{{ old('price') }}" placeholder="Prix" data-unit="CHF" /></div>
												<div class="fm-close"><a class="delete" href="#"><i class="fa fa-remove"></i></a></div>
											</td>
										</tr>
									</table>
									<a href="#" class="button add-pricing-list-item">Ajouter un prix</a>
									<a href="#" class="button add-pricing-submenu">Ajouter un prix</a>
								</div>
							</div>

						</div>

					</div>
					<!-- Section / End -->


					<a href="#" class="button preview">Prévisualiser <i class="fa fa-arrow-circle-right"></i></a>

				</div>
			</div>
@stop
<!-- DropZone -->
<script type="text/javascript" src="js/dropzone.js"></script>
