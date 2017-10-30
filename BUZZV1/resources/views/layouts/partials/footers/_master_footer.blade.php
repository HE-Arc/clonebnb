<!-- Footer -->
<div id="footer">
<!-- Main -->
<div class="container">
	<div class="row">
		<div class="col-md-5 col-sm-6">
			<img class="footer-logo" src="images/logo.png" alt="">
			<br><br>
			<p><a>Les règles</a></p>
		</div>

		<div class="col-md-4 col-sm-6 ">
			<h4>Liens</h4>
			<ul class="footer-links">
				<li><a href="#">Connexion</a></li>
				<li><a href="#">Inscription</a></li>
				<li><a href="#">Mon compte</a></li>
			</ul>

			<ul class="footer-links">
				<li><a href="#">Comment ça marche</a></li>
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

			<ul class="social-icons margin-top-20">
				<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
				<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
				<li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
			</ul>

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
