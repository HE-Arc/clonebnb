<div class="row">
@foreach ($ads as $ad)
  <!-- Listing Item -->
  <div class="col-lg-12 col-md-12" id="success">
    <div class="listing-item-container list-layout">
      <a href="{{ route('details_path',$ad->id) }}" class="listing-item" data-adid="{{ $ad->id }}">
        <div class="listing-item-image">
          <img src="{{ secure_asset('/uploads/ads/medias/')}}{{ $ad->image }}" alt="image de l'annonce">
          <span class="tag">{{ $category["name"] }}</span>
        </div>

        <div class="listing-item-content">
						<div class="listing-item-inner">
							<h3>{{ $ad->title }}</h3>
							<span>{{ $ad->address }}</span>
							<div class="star-rating" data-rating="{{ $ad->rate() }}">
									<div class="rating-counter">({{ $ad->getNumComments() }}) </div>
							</div>
						</div>
            @if(Auth::user() && $ad->user != Auth::user())
            <span class="like-icon {{ Auth::user()->favorites()->where('ad_id', $ad->id)->first() ? Auth::user()->favorites()->where('ad_id', $ad->id)->first()->isFav == 1 ? 'liked' : '':''}}
    "></span>
          @endif
				</div>
      </a>
  </div>
  </div>
  <!-- Listing Item / End -->
@endforeach


<div class="col-lg-12 col-md-12" id="success">

</div>


</div>
<div class="container">
</div>
<script>
  var token = '{{ Session::token() }}';
  var url_favorite = '{{ route('favorite_path') }}';
</script>
