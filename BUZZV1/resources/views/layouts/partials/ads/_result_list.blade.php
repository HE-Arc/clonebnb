<div class="row">
@foreach ($ads as $ad)
  <!-- Listing Item -->
  <div class="col-lg-4 col-md-6">
    <a href="{{ route('details_path',$ad->id) }}" class="listing-item-container compact">
      <div class="listing-item">
        <img src="/uploads/ads/medias/{{ $ad->image }}" alt="image de l'annonce">

        <div class="listing-badge now-open">Now Open</div>

        <div class="listing-item-content">
          <div class="numerical-rating" data-rating="{{ $ad->rate() }}"></div>
          <h3>{{ $ad->title }}</h3>
          <span>{{ $ad->address }}</span>
        </div>
        <span class="like-icon liked"></span>
      </div>
    </a>
  </div>
  <!-- Listing Item / End -->
@endforeach
</div>
<div class="container">
{{ $ads->links() }}
</div>
