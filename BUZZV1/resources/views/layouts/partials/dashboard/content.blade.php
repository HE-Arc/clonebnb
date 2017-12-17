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

  <!-- Alert -->
  <!--<div class="row">
    <div class="col-md-12">
      <div class="notification success closeable margin-bottom-30">
        <p>Votre annonce <strong>Nom de l'annonce </strong> a été acceptée</p>
        <a class="close" href="#"></a>
      </div>
    </div>
  </div>-->

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
      <div class="dashboard-stat color-2">
        <div class="dashboard-stat-content"><h4>726</h4> <span>-</span></div>
        <div class="dashboard-stat-icon"><i class="im im-icon-Line-Chart"></i></div>
      </div>
    </div>


    <!-- Item -->
    <div class="col-lg-3 col-md-6">
      <div class="dashboard-stat color-3">
        <div class="dashboard-stat-content"><h4>{{ $comments->total() }}</h4> <span>Avis</span></div>
        <div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
      </div>
    </div>

    <!-- Item -->
    <div class="col-lg-3 col-md-6">
      <div class="dashboard-stat color-4">
        <div class="dashboard-stat-content"><h4>{{ $ad->favorites()->count() }}</h4> <span>-</span></div>
        <div class="dashboard-stat-icon"><i class="im im-icon-Heart"></i></div>
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
