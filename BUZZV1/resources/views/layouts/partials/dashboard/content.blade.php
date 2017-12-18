<!-- Content-->
<div class="dashboard-content">

  <div id="titlebar">
    <div class="row">
      <div class="col-md-12">
        <h2>{{ Auth::user()->getFullName() }}</h2>
        <!-- Breadcrumbs -->
        <nav id="breadcrumbs">
          <ul>
            <li><a href="{{ route('root_path') }}">Accueil</a></li>
            <li>Tableau de bord</li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

  <!-- Content -->
  <div class="row">

    <!-- Item -->
    <div class="col-lg-3 col-md-6">
      <div class="dashboard-stat color-1">
        <div class="dashboard-stat-content"><h4>{{ $ad->onlineAds() }}</h4> <span>Annonces en ligne</span></div>
        <div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
      </div>
    </div>

    <!-- Item -->
    <div class="col-lg-3 col-md-6">
      <div class="dashboard-stat color-3">
        <div class="dashboard-stat-content"><h4>{{ $comments->total() }}</h4> <span>Avis</span></div>
        <div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
      </div>
    </div>
  </div>


  <div class="row">
    <!-- Copyrights -->
    <div class="col-md-12">
      <div class="copyrights">&copy;{{ date('Y') }} &middot; By LONG.</div>
    </div>
  </div>

</div>
<!-- Fin contenu-->
