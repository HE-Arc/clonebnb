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
      <a href="{{ route('details_path') }}" class="listing-item-container" data-marker-id="4">
        <div class="listing-item">
          <img src="images/velo_app.jpg" alt="">

          <div class="listing-badge now-open">Now Open</div>

          <div class="listing-item-content">
              <img class="img-circle avatar-small" src="{{ asset('uploads/avatars/default.png') }}" style="width: 70px; border-radius: 50%">
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
      <!--Inclusion pagination-->
      @include('layouts.partials.paginations._pagination')
      <!--Fin pagination-->
      <!-- Fin Pagination -->

      <!-- Copyrights -->
      <div class="copyrights margin-top-0">©2017 By LONG</div>

    </div>
  </div>
</section>
