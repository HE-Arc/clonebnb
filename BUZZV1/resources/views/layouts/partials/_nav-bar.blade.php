<nav class="navbar .navbar-expand-lg">
  <div class="container">
    <div class="navbar-header">
      <strong><a class="navbar-brand" id="log" style="font-size: 50px; color: #FF5A5F;" href="{{ route('root_path') }}">Buzz!</a></strong>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
          role="button" aria-haspopup="true" aria-expanded="false">
          <img class="img-circle avatar-small" src="{{ asset('images/draw.png') }}" style="width: 28px">&nbsp;Publier
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Annonce</a></li>
          <li><a class="dropdown-item" href="#">Souhait</a></li>
        </ul>
      </li>
      @if(Auth::check())
        <li>
          <a href="">
            <i class="fa fa-bell fa-2x icon-babu"></i>
            <span class="badge" style="background-color: #FF5A5F; position: relative; top: -15px; left: -5px;" id="navbar_num_of_unread">0</span>
          </a>    
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"
            role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-circle avatar-small" src="{{ asset('images/user.png') }}" style="width: 28px">&nbsp;
            @if(Auth::check())
              {{ Auth::user()->getFullName() }}
            @endif
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Tableau de bord</a></li>
            <li><a class="dropdown-item" href="#">Mes annonces</a></li>
            <li><a class="dropdown-item" href="#">Ajouter une annonce</a></li>
            <li><a class="dropdown-item" href="#">Réserver</a></li>
            <li role="separator" class="divider"></li>
            <li><a class="dropdown-item" href="#">Editer mon profil</a></li>
            <li><a class="dropdown-item" href="{{ route('logout_path') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Déconnexion</a></li>
            <form id="logout-form" action="{{ route('logout_path') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </ul>
        </li>
      @else
        <li>
          <a href="{{ route('login_path') }}">
            <img class="img-circle avatar-small" src="{{ asset('images/arrows.png') }}" style="width: 28px">&nbsp;Connexion
          </a>
        </li>
        <li>
          <a href="{{ route('signup_path') }}">
            <img class="img-circle avatar-small" src="{{ asset('images/login.png') }}" style="width: 28px">&nbsp;Inscription
          </a>
        </li>
      @endif
    </ul>
  </div>
</nav>

@section('stylesheet')
@stop