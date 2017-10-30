<section class="listings-container margin-top-30">
  <!-- Sorting / Layout Switcher -->
  <div class="row fs-switcher">

    <div class="col-md-6">
      <!-- Nombre de résultats -->
      <p class="showing-results">14 Résultats trouvés </p>
    </div>

  </div>


  <!-- Liste -->
  <div class="row fs-listings">

    <!-- Un Item de la liste -->
    <div class="col-lg-6 col-md-12">
      <a href="#" class="listing-item-container" data-marker-id="4">
        <div class="listing-item">
          <img src="images/velo_app.jpg" alt="">

          <div class="listing-badge now-open">Now Open</div>

          <div class="listing-item-content">
            @if(Auth::check())
              <img class="img-circle avatar-small" src="uploads/avatars/{{ Auth::user()->photo }}" style="width: 70px; border-radius: 50%">
            @else
              <img class="img-circle avatar-small" src="uploads/avatars/default.png" style="width: 70px; border-radius: 50%">
            @endif
            <h3>Burger House</h3>
            <span>2726 Shinn Street, New York</span>
          </div>
          <span class="like-icon"></span>
        </div>
        <div class="star-rating" data-rating="5.0">
          <div class="rating-counter">(31 avis)</div>
        </div>
      </a>
    </div>
    <!-- Fin item de la liste -->

    <!-- Un Item de la liste -->
    <div class="col-lg-6 col-md-12">
      <a href="#" class="listing-item-container" data-marker-id="4">
        <div class="listing-item">
          <img src="images/velo_app.jpg" alt="">

          <div class="listing-badge now-open">Now Open</div>

          <div class="listing-item-content">
            @if(Auth::check())
              <img class="img-circle avatar-small" src="uploads/avatars/{{ Auth::user()->photo }}" style="width: 70px; border-radius: 50%">
            @else
              <img class="img-circle avatar-small" src="uploads/avatars/default.png" style="width: 70px; border-radius: 50%">
            @endif
            <h3>Burger House</h3>
            <span>2726 Shinn Street, New York</span>
          </div>
          <span class="like-icon"></span>
        </div>
        <div class="star-rating" data-rating="5.0">
          <div class="rating-counter">(31 avis)</div>
        </div>
      </a>
    </div>
    <!-- Fin item de la liste -->

  </div>
  <!-- Listings Container / End -->


  <!-- Pagination Container -->
  <div class="row fs-listings text-center">
    <div class="col-md-12">
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12">
          <div class="pagination-container margin-top-15 margin-bottom-40">
            <nav class="pagination">
              <ul>
                <li><a href="#" class="current-page">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <!-- Fin Pagination -->

      <!-- Copyrights -->
      <div class="copyrights margin-top-0">©2017 By LONG</div>

    </div>
  </div>
  <!-- Pagination Container / End -->
</section>
