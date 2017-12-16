<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>{{ $category["name"] }}</h2>
				<span>
					@if($ads->total()>1)
					 {{$ads->total()}} <strong>Résultats trouvés</strong>
					@else
						 {{$ads->total()}} <strong>Résultat trouvé</strong>
					@endif
				</span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="{{ route('root_path')}}">Accueil</a></li>
						<li>Annonces</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>
