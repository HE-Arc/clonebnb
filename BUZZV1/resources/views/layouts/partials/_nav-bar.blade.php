<<<<<<< HEAD
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

  <div class="container-fluid">
    <h4><a class="navbar-brand" href="{{ route('root_path') }}"><img class="img-circle avatar-small" src="{{ asset('images/logo.png') }}"></a></h4>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <!---->
        </ul>
        <ul class="navbar-nav navbar-right">
          <li class="nav-item active">
            <a class="nav-link btn btn-secondary" href="#">Buzzer maintenant<span class="sr-only">(current)</span></a>
          </li>
          @if(!Auth::check())
            <li class="nav-item {{ set_active_route('login_path') }}">
              <a class="nav-link" href="{{ route('login_path') }}"><img class="img-circle avatar-small" src="{{ asset('images/arrows.png') }}" style="width: 28px">&nbsp;Connexion
              </a>
            </li>
            <li class="nav-item {{ set_active_route('signup_path') }}">
                <a class="nav-link" href="{{ route('signup_path') }}"><img class="img-circle avatar-small" src="{{ asset('images/login.png') }}" style="width: 28px">&nbsp;Inscription
                </a>
            </li>
          @else
            <li style="margin-top: 8px;>
              <a href="#">&nbsp;&nbsp;
                <i class="fa fa-bell fa-2x icon-babu" style="color: #01FFE5"></i>
                <span class="badge" style="background-color: red; color: #fff; position: relative; top: -15px; left: -5px;" id="">0</span>
              </a>    
            </li>
            <li class="dropdown" style="margin-top: 8px;">
              <a href="#" id="dropdown" class="dropdown-toggle" data-toggle="dropdown"
                role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; color:yellow">&nbsp;&nbsp;
                <img class="img-circle avatar-small" src="uploads/avatars/{{ Auth::user()->photo }}" style="width: 28px; border-radius: 50%">&nbsp;
                {{ Auth::user()->getFullName() }}
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="{{ route('space_path') }}">Tableau de bord</a>
                <a class="dropdown-item" href="">Mes annonces</a>
                <a class="dropdown-item" href="#">Ajouter une annonce</a>
                <a class="dropdown-item" href="{{ route('profil_path') }}">Editer le profil</a>
                <hr>
                <a class="dropdown-item" href="{{ route('logout_path') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Déconnexion</a>
                <form id="logout-form" action="{{ route('logout_path') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
          @endif
            <li class="nav-item {{ set_active_route('about_path') }}">
              <a class="nav-link" href="{{ route('about_path') }}">A propos</a>
            </li>
        </ul>
      </div>
  </div>
      
</nav>
