<!-- Bannière -->
<div class="main-search-container dark-overlay">
<div class="main-search-inner">

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>N'achetez plus. Louez</h2>
				<h4>L'art de consommer autrement</h4>

				<div class="main-search-input">

					<div class="main-search-input-item">
						<input type="text" placeholder="Que recherchez vous?" value=""/>
					</div>

					<div class="main-search-input-item location">
						<input type="text" placeholder="Localisation: Exemple Neuchâtel" value=""/>
						<a href="#"><i class="fa fa-dot-circle-o"></i></a>
					</div>

					<div class="main-search-input-item">
						<select data-placeholder="All Categories" class="chosen-select" >
						@foreach ($categories as $category)
							<option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
						@endforeach
						</select>
					</div>

					<button class="button" onclick="window.location.href='listings-half-screen-map-list.html'">Rechercher</button>


				</div>
			</div>
		</div>
	</div>

</div>

<!-- Video -->
<div class="video-container">
	<video poster="images/main-search-video-poster.jpg" loop autoplay muted>
		<source src="images/main-search-video.mp4" type="video/mp4">
	</video>
</div>

</div>
