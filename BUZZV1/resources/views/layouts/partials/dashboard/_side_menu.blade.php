<!-- Side menu -->

<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

<div class="dashboard-nav">
  <div class="dashboard-nav-inner">

    <ul data-submenu-title="Principal">
      <li class="{{ set_active_route('dashboard_path') }}"><a href="{{ route('dashboard_path') }}"><i class="fa fa-cog"></i> Tableau de bord</a></li>
    </ul>
    <ul data-submenu-title="Annonces">
      <li><a href="{{ route('online_path') }}"><i class="fa fa-list"></i>Mes annonces </a></li>
      <li class="{{ set_active_route('reviews_path') }}"><a href="{{ route('reviews_path') }}"><i class="fa fa-star"></i> Avis </a></li>
      <li class="{{ set_active_route('favorites_path') }}"><a href="{{ route('favorites_path') }}"><i class="fa fa-heart"></i> Mes favoris</a></li>
      <li class="{{ set_active_route('publish_path') }}"><a href="{{ route('publish_path') }}"><i class="fa fa-plus"></i> Ajouter une annonce</a></li>
    </ul>

    <ul data-submenu-title="Demandes">
      <li class="{{ set_active_route('demand_path') }}"><a href="{{ route('demand_path') }}"><i class="fa fa-plus"></i> Ajouter une demande</a></li>
    </ul>

    <ul data-submenu-title="Mon compte">
      <li class="{{ set_active_route('profil_path') }}"><a href="{{ route('profil_path') }}"><i class="fa fa-user"></i> Mon profil</a></li>
      <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Se déconnecter</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form></li>
    </ul>

  </div>
</div>
<!-- Fin side menu -->
