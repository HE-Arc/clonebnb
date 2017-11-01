<!-- Content-->
<div class="dashboard-content">

  <div id="titlebar">
    <div class="row">
      <div class="col-md-12">
        <h2>{{ Auth::user()->getFullName() }}</h2>
        <!-- Breadcrumbs -->
        <nav id="breadcrumbs">
          <ul>
            <li><a href="#">Accueil</a></li>
            <li>Tableau de bord</li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

  <!-- Alert -->
  <div class="row">
    <div class="col-md-12">
      <div class="notification success closeable margin-bottom-30">
        <p>Votre annonce <strong>Nom de l'annonce </strong> a été acceptée</p>
        <a class="close" href="#"></a>
      </div>
    </div>
  </div>

  <!-- Content -->
  <div class="row">

    <!-- Item -->
    <div class="col-lg-3 col-md-6">
      <div class="dashboard-stat color-1">
        <div class="dashboard-stat-content"><h4>6</h4> <span>Annonces en ligne</span></div>
        <div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
      </div>
    </div>

    <!-- Item -->
    <div class="col-lg-3 col-md-6">
      <div class="dashboard-stat color-2">
        <div class="dashboard-stat-content"><h4>726</h4> <span>Vues</span></div>
        <div class="dashboard-stat-icon"><i class="im im-icon-Line-Chart"></i></div>
      </div>
    </div>


    <!-- Item -->
    <div class="col-lg-3 col-md-6">
      <div class="dashboard-stat color-3">
        <div class="dashboard-stat-content"><h4>95</h4> <span>Avis</span></div>
        <div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
      </div>
    </div>

    <!-- Item -->
    <div class="col-lg-3 col-md-6">
      <div class="dashboard-stat color-4">
        <div class="dashboard-stat-content"><h4>126</h4> <span>Mis en favoris</span></div>
        <div class="dashboard-stat-icon"><i class="im im-icon-Heart"></i></div>
      </div>
    </div>
  </div>


  <div class="row">

    <!-- Activité récente -->
    <div class="col-lg-6 col-md-12">
      <div class="dashboard-list-box with-icons margin-top-20">
        <h4>Activités récentes</h4>
        <ul>
          <li>
            <i class="list-box-icon sl sl-icon-layers"></i> Votre annonce <strong><a href="#">Tondeuse à gazon</a></strong> a été acceptée!
            <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
          </li>

          <li>
            <i class="list-box-icon sl sl-icon-star"></i> Luc a donné un avis <div class="numerical-rating" data-rating="5.0"></div> pour <strong><a href="#">Tondeuse à gazon</a></strong>
            <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
          </li>

          <li>
            <i class="list-box-icon sl sl-icon-heart"></i> Un utilisateur a ajouté <strong><a href="#">Tondeuse à gazon</a></strong> comme favoris!
            <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Facturations -->
    <div class="col-lg-6 col-md-12">
      <div class="dashboard-list-box invoices with-icons margin-top-20">
        <h4>Facturation</h4>
        <ul>

          <li><i class="list-box-icon sl sl-icon-doc"></i>
            <strong>Plan Buzz de bronze</strong>
            <ul>
              <li class="unpaid">Non-payé</li>
              <li>Référence: #00124</li>
              <li>Date: 20/07/2017</li>
            </ul>
            <div class="buttons-to-right">
              <a href="dashboard-invoice.html" class="button gray">Voir</a>
            </div>
          </li>

          <li><i class="list-box-icon sl sl-icon-doc"></i>
            <strong>Plan Buzz d'argent</strong>
            <ul>
              <li class="paid">Payé</li>
              <li>Référence: #00108</li>
              <li>Date: 14/07/2017</li>
            </ul>
            <div class="buttons-to-right">
              <a href="dashboard-invoice.html" class="button gray">Voir</a>
            </div>
          </li>

          <li><i class="list-box-icon sl sl-icon-doc"></i>
            <strong>Plan Buzz d'or</strong>
            <ul>
              <li class="paid">Payé</li>
              <li>Référence: #00097</li>
              <li>Date: 10/07/2017</li>
            </ul>
            <div class="buttons-to-right">
              <a href="dashboard-invoice.html" class="button gray">Voir</a>
            </div>
          </li>

          <li><i class="list-box-icon sl sl-icon-doc"></i>
            <strong>Basic Plan</strong>
            <ul>
              <li class="paid">Paid</li>
              <li>Référence: #00091</li>
              <li>Date: 30/06/2017</li>
            </ul>
            <div class="buttons-to-right">
              <a href="dashboard-invoice.html" class="button gray">Voir</a>
            </div>
          </li>

        </ul>
      </div>
    </div>


    <!-- Copyrights -->
    <div class="col-md-12">
      <div class="copyrights">© 2017 Listeo. All Rights Reserved.</div>
    </div>
  </div>

</div>
<!-- Fin contenu-->