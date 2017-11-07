<!-- Titlebar -->
<div id="titlebar" class="listing-titlebar">
  <div class="listing-titlebar-title">
    <h2>{{ $ad->title }}<span class="listing-tag">{{ $ad->category->name }}</span></h2>
    <span>
      <a href="#listing-location" class="listing-address">
        <i class="fa fa-map-marker"></i>
        {{ $ad->address }}
      </a>
    </span>
    <div class="star-rating" data-rating="5">
      <div class="rating-counter"><a href="#listing-reviews">(31 avis)</a></div>
    </div>
  </div>
</div>
