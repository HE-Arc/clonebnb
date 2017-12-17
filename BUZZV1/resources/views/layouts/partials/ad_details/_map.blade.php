<!-- Location -->
<div id="listing-location" class="listing-section">
  <h3 class="listing-desc-headline margin-top-60 margin-bottom-30">Localisation</h3>
  <h4 style="text-align: center">{{ $ad->address }}</h4>
  @if($ad->latitude && $ad->longitude)
  <div id="singleListingMap-container">
    <div id="singleListingMap" data-latitude="{{ $ad->latitude}}" data-longitude="{{ $ad->longitude }}" data-map-icon="fa fa-user"></div>
    <a href="#" id="streetView">Street View</a>
  </div>
  @endif
</div>
