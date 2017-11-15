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
    <div class="star-rating" data-rating="{{ $ad->rate() }}">
      <div class="rating-counter"><a href="#listing-reviews">( {{ $ad->getNumComments() }} )</a></div>
    </div>
  </div>
</div>
