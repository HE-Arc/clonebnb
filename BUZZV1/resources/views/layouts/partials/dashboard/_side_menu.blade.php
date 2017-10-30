<!-- Side menu -->

<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

<div class="dashboard-nav">
  <div class="dashboard-nav-inner">

    <ul data-submenu-title="Principal">
      <li class="active"><a href="{{ route('dashboard_path') }}"><i class="fa fa-cog"></i> Tableau de bord</a></li>
      <li><a href="{{ route('message_path') }}"><i class="fa fa-envelope-o"></i> Messages <span class="nav-tag messages">2</span></a></li>
      <li><a href=""><i class="fa fa-calendar-check-o"></i> Réservations </a></li>
    </ul>

    <ul data-submenu-title="Annonces">
      <li><a><i class="fa fa-list"></i> Mes annonces</a>
        <ul>
          <li><a href="">En ligne <span class="nav-tag green">6</span></a></li>
          <li><a href="">En attente <span class="nav-tag yellow">1</span></a></li>
          <li><a href="">Expiré <span class="nav-tag red">2</span></a></li>
        </ul>
      </li>
      <li><a href=""><i class="fa fa-star"></i> Avis reçus</a></li>
      <li><a href=""><i class="fa fa-heart"></i> Mes favoris</a></li>
      <li><a href="{{ route('publish_path') }}"><i class="fa fa-plus"></i> Ajouter une annonce</a></li>
    </ul>

    <ul data-submenu-title="Mon compte">
      <li><a href="{{ route('profil_path') }}"><i class="fa fa-user"></i> Mon profil</a></li>
      <li><a class="dropdown-item" href="{{ route('logout_path') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Se déconnecter</a>
      <form id="logout-form" action="{{ route('logout_path') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form></li>
    </ul>

  </div>
</div>
<!-- Fin side menu -->
