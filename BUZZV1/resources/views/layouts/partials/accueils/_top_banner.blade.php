<!-- Bannière -->
<div class="main-search-container" data-background-image="images/noelbackground.jpg">
<div class="main-search-inner">

	<div class="container">
		<div class="row">
			<div class="col-md-12" style="text-align: center">
				<h1 style="font-size: 60px">N'achetez plus, <strong>Louez</strong></h1>
				<h4>L'art de consommer autrement</h4>
				<br/><br/>
				@if(!Auth::check())
				<a href="#sign-in-dialog" class="button sign-in popup-with-zoom-anim" style="min-width: 20%; font-size: 20px">Lancez vous!</a>
				@else
				<a href="{{ route('about_path') }}" class="button" style="min-width: 20%; font-size: 20px">C'est quoi Buzz?</a>
				@endif
				<!--Modal pour login et Inscription -->
        @include('layouts.partials.login._modal_access')
        <!--Fin Modal-->
			</div>
		</div>
	</div>

</div>

</div>
