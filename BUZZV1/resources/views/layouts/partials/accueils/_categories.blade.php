<!-- Content
================================================== -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered margin-top-75">
				Catégories
        <span>Les catégories <i>principales</i> de Buzz!</span>
			</h3>
		</div>

	</div>
</div>

<!-- Category Boxes -->
<div class="container" id="category">
	<div class="row">
		<div class="col-md-12">
			<div class="categories-boxes-container margin-top-5 margin-bottom-30">
        @foreach ($categories as $category)
				<a href="{{ route('ads_grid_path', $category['id']) }}" class="category-small-box">
					<img src="{{ secure_asset('images/'.$category['icon'].'.png') }}" style="width: 70px; margin-right: auto; margin-left: auto">
					<h4>{{ $category['name'] }}</h4>
          <!--<span style="color: #7C3CE6; font-size: 25px"><strong>{{ $category->adsNumber() }}</strong></span>-->
				</a>
        @endforeach
			</div>
		</div>
	</div>
</div>
