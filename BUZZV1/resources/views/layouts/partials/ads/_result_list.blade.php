<section class="listings-container margin-top-30">
  <!-- Sorting / Layout Switcher -->
  <div class="row fs-switcher">

    <div class="col-md-6">
      <!-- Nombre de résultats -->
      <p class="showing-results">
        @if(count($ads) > 1 )
          {{ count($ads) }} Résultats trouvés
        @else
          {{ count($ads) }} Résultate trouvé
        @endif
      </p>
    </div>

  </div>


  <!-- Liste -->
  <div class="row fs-listings">
    <!-- Un Item de la liste -->
    @foreach ($ads as $ad)
    <div class="col-lg-6 col-md-12">
      <a href="{{ route('details_path',$ad->id) }}" class="listing-item-container" data-marker-id="40">
        <div class="listing-item">
          <img class="img-circle avatar-small" src="{{ $ad->image }}" alt="image annonceur">

          <div class="listing-badge now-open">Now Open</div>

          <div class="listing-item-content">
            <span class="tag">{{ $ad->category->name }}</span>
            <h3>{{ $ad->title }}</h3>
            <span>{{ $ad->address }}</span>
          </div>
          <span class="like-icon"></span>
        </div>
        <div class="star-rating" data-rating="5.0">
          <div class="rating-counter">(31)</div>
        </div>
        <div class="text-center" style="margin-top: -15px; padding-bottom: 5px;">
          <img class="img-circle avatar-small" src="/uploads/avatars/{{ $ad->user->photo }}" alt="image annonceur" style="width: 60px; border-radius: 30%">
        </div>
      </a>
    </div>
    @endforeach
    <!-- Fin item de la liste -->

  </div>
  <!-- Listings Container / End -->


  <!-- Pagination Container -->
  <div class="row fs-listings text-center">
    <div class="col-md-12">
      <!--Inclusion pagination-->
      @include('layouts.partials.paginations._pagination')
      <!--Fin pagination-->

      <!-- Copyrights -->
      <div class="copyrights margin-top-0">©2017 By LONG</div>

    </div>
  </div>
</section>
