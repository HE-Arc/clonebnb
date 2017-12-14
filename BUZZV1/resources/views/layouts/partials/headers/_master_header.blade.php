<!-- Header-->
<header id="header-container" class="fixed fullwidth">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->
				<div id="logo">
					<a href="{{ route('root_path') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">
						<li><a href="{{ route('root_path') }}" style="color: #000">Accueil</a></li>
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->

			<!--Partie droite du header-->
			<div class="right-side">
				<div class="header-widget">
          @if(!Auth::check())
			<a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim">&nbsp;&nbsp;<i class="fa fa-sign-in"></i> Connexion / Inscription</a>
          @else
            <div class="user-menu">
                <a href="#"><i class="fa fa-bell fa-2x" style="color: #161414"></i>
                	<span class="badge" style="background-color: red; color: #fff; position: relative; top: -15px; left: -5px;">0</span>
              	</a>
            </div>
            <div class="user-menu">
              <div class="user-name"><span><img src="/uploads/avatars/{{ Auth::user()->photo }}" alt=""></span>{{ Auth::user()->getFullName() }}</div>
                <ul>
                  <li><a href="{{ route('dashboard_path') }}">Tableau de bord</a></li>
                  <li><a href="">Mes annonces</a></li>
                  <li><a href="#">Messages</a></li>
                  <li><a href="{{ route('reviews_path') }}">Avis reçus</a></li>
                  <li><a href="{{ route('profil_path') }}">Mon profil</a></li>
                  <li><a class="dropdown-item" href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Se déconnecter</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form></li>
                </ul>
              </div>
          @endif

            <a href="{{ route('publish_path') }}" class="button border with-icon">Buzzez maintenant <i class="fa fa-plus"></i></a>
            </div>
				</div>
			</div>
			<!-- Right Side Content / End -->

			<!--Modal pour login et Inscription -->
        @include('layouts.partials.login._modal_access')
      <!--Fin Modal-->

		</div>
	</div>

</header>
<div class="clearfix"></div>
<!-- Fin Header -->
