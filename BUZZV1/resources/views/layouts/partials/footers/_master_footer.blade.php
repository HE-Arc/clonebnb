<!-- Footer -->
<div id="footer">
<!-- Main -->
<div class="container">
	<div class="row">
		<div class="col-md-5 col-sm-6">
			<img class="footer-logo" src="{{ secure_asset('/images/logo.png') }}" alt="">
			<br><br>
			<p >Buzz! est une plateforme de location en tout genre entre particuliers.</p>
		</div>

		<div class="col-md-4 col-sm-6 ">
			<h4>Liens</h4>
			<ul class="footer-links">
				<li><a href="{{ route('about_path') }}">A propos</a></li>
			</ul>
			<div class="clearfix"></div>
		</div>

		<div class="col-md-3  col-sm-12">
			<h4>Nous contacter</h4>
			<div class="text-widget">
				<span>Rue de l'enfer 6, 666 Ténèbres</span> <br>
				Télépnone: <span>(+41) 666 66 66 </span><br>
				E-Mail:<span> <a href="{{ route('contact_path') }}"><span style="color: red">long@gmail.com</span></a> </span><br>
			</div>
		</div>
	</div>
	<!-- Copyright -->
	<div class="row">
		<div class="col-md-12">
			<div class="copyrights">&copy;{{ date('Y') }} &middot; By LONG.</div>
		</div>
	</div>

</div>

</div>
<!-- Fin footer -->
