<!-- Side menu -->

<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

<div class="dashboard-nav">
  <div class="dashboard-nav-inner">

    <ul data-submenu-title="Principal">
      <li class="{{ set_active_route('dashboard_path') }}"><a href="{{ route('dashboard_path') }}"><i class="fa fa-cog"></i> Tableau de bord</a></li>
      <li class="{{ set_active_route('message_path') }}"><a href="{{ route('message_path') }}"><i class="fa fa-envelope-o"></i> Messages <span class="nav-tag messages">2</span></a></li>
      <li class="{{ set_active_route('message_path') }}"><a href=""><i class="fa fa-calendar-check-o"></i> Réservations </a></li>
    </ul>

    <ul data-submenu-title="Annonces">
      <li><a><i class="fa fa-list"></i> Mes annonces</a>
        <ul>
          @if(!empty($ad))
            <li><a href="{{ route('online_path') }}">En ligne <span class="nav-tag green">{{ $ad->onlineAds() }}</span></a></li>
            <li><a href="{{ route('pending_path') }}">En attente <span class="nav-tag yellow">{{ $ad->pendingAds() }}</span></a></li>
            <li><a href="{{ route('expired_path') }}">Expiré <span class="nav-tag red">{{ $ad->expiredAds() }}</span></a></li>
          @else
            <li><a href="{{ route('online_path') }}">En ligne <span class="nav-tag green">0</span></a></li>
            <li><a href="{{ route('pending_path') }}">En attente <span class="nav-tag yellow">0</span></a></li>
            <li><a href="{{ route('expired_path') }}">Expiré <span class="nav-tag red">0</span></a></li>
          @endif
        </ul>
      </li>
      <li class="{{ set_active_route('reviews_path') }}"><a href="{{ route('reviews_path') }}"><i class="fa fa-star"></i> Avis </a></li>
      <li class="{{ set_active_route('favorites_path') }}"><a href="{{ route('favorites_path') }}"><i class="fa fa-heart"></i> Mes favoris</a></li>
      <li class="{{ set_active_route('publish_path') }}"><a href="{{ route('publish_path') }}"><i class="fa fa-plus"></i> Ajouter une annonce</a></li>
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
