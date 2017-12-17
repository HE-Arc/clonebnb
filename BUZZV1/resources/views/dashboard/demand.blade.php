@extends('layouts.slave')

@section('title')
	Publier une demande
@stop

@section('content')

<!-- Content -->
	<div class="dashboard-content">

		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Ajouter une demande</h2>
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Accueil</a></li>
							<li><a href="{{ route('dashboard_path') }}">Tableau de bord</a></li>
							<li>Ajouter une demande</li>
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
						<form action="{{ route('demand_path') }}" method="POST" enctype="multipart/form-data">
							{{ csrf_field() }}
						<div class="row with-forms">
							<div class="col-md-12">
								<h5>Titre de la demande <i class="tip" data-tip-content="Nom de votre demande"></i></h5>
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

					</div>
					<!-- Fin Section -->

					<button type="submit" class="button preview">Soumettre</buttom>
				</form>
				</div>
			</div>
@stop
