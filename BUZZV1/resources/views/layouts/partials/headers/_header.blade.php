<header id="header-container">
<!-- Header -->
<div id="header">
  <div class="container">

    <!-- Left Side Content -->
    <div class="left-side">

      <!-- Logo -->
      <div id="logo">
        <a href="{{ route('root_path') }}"><img src="{{ secure_asset('images/logo.png') }}" alt="logo"></a>
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

          <li><a href="{{ route('root_path') }}">Accueil</a>
          </li>

          <li><a class="current" href="#">Quoi faire ?</a>
            <ul>
              <li><a href="#">Demandes</a>
                <ul>
                  @if(Auth::check())
                  <li><a href="{{ route('demand_path') }}">Créer demande</a></li>
                  @else
                  <li><a href="#">Créer demande</a></li>
                  @endif
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <div class="clearfix"></div>
      <!-- Main Navigation / End -->

    </div>
    <!-- Left Side Content / End -->

    <!--Partie droite du header-->
    <div class="right-side">
      <div class="header-widget">
        @if(Auth::check())
        <div class="user-menu" style="margin-left: -200px">
            <!--<a href="#"><i class="fa fa-bell fa-2x" style="color: #161414"></i>
              <span class="badge" style="background-color: red; color: #fff; position: relative; top: -15px; left: -5px;">0</span>
            </a>-->
        </div>
        <div class="user-menu">
          <div class="user-name"><span><img src="{{ secure_asset('/uploads/avatars')}} Auth::user()->photo " alt=""></span>{{ Auth::user()->getFullName() }}</div>
            <ul>
              <li><a href="{{ route('dashboard_path') }}">Tableau de bord</a></li>
              <li><a href="{{ route('online_path') }}">Mes annonces</a></li>
              <li><a href="{{ route('messages_path') }}">Messages</a></li>
              <li><a href="{{ route('reviews_path') }}">Avis reçus</a></li>
              <li><a href="{{ route('profil_path') }}">Mon profil</a></li>
              <li><a class="dropdown-item" href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Se déconnecter</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form></li>
            </ul>
          </div>
        @else
        <a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="fa fa-sign-in"></i> Connexion</a>
        @endif
        <a href="{{ route('publish_path') }}" class="button border with-icon">Buzzer <i class="fa fa-plus-circle"></i></a>
      </div>
    </div>
        <!--Modal pour login et Inscription -->
        @include('layouts.partials.login._modal_access')
        <!--Fin Modal-->

  </div>
</div>
<!-- Header / End -->

</header>
<div class="clearfix"></div>
