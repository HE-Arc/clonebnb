<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Buzz!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ set_active_route('root_path') }}">
        <a class="nav-link" href="{{ route('root_path') }}">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Publier
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Annonce</a>
          <a class="dropdown-item" href="#">Souhait</a>
        </div>
      </li>
      <li class="nav-item {{ set_active_route('login_path') }}">
        <a class="nav-link" href="#">Se connecter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('signup_path') }}">S'inscrire</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ set_active_route('contact_path') }}" href="{{ route('contact_path') }}">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Aide</a>
      </li>
      <li class="nav-item {{ set_active_route('about_path') }}">
        <a class="nav-link" href="{{ route('about_path') }}">A propos</a>
      </li>
    </ul>
  </div>
</nav>