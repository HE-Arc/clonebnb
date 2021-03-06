<!-- Entête -->
<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">

			<!-- Partie de gauche -->
			<div class="left-side">

				<!-- Logo -->
				<div id="logo">
					<a href="{{ route('root_path') }}"><img src="images/logo.png" alt=""></a>
					<a href="{{ route('root_path') }}" class="dashboard-logo"><img src="images/logo.png" alt=""></a>
				</div>

				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<nav id="navigation" class="style-1">
					<ul id="responsive">
						<li><a href="{{ route('root_path') }}">Accueil</a>
					</ul>
				</nav>
				<div class="clearfix"></div>

			</div>
			<div class="right-side">
				<div class="header-widget">
					<div class="user-menu">
						<div class="user-name"><span><img src="/uploads/avatars/{{ Auth::user()->photo }}" alt=""></span>Mon Compte</div>
						<ul>
              <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Déconnexion</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form></li>
						</ul>
					</div>

					<a href="{{ route('publish_path') }}" class="button border with-icon">Buzzer!<i class="fa fa-plus"></i></a>
				</div>
			</div>

		</div>
	</div>
	<!-- Fin entête -->
</header>
<div class="clearfix"></div>
<!-- Header Container / End -->
