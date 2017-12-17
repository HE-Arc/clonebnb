<div class="row">
@foreach ($ads as $ad)
  <div class="col-lg-4 col-md-6 item_">
    <a href="{{ route('details_path',$ad->id) }}" class="listing-item-container compact" data-adid="{{ $ad->id }}">
      <div class="listing-item">
        <img src="/uploads/ads/medias/{{ $ad->image }}" alt="image de l'annonce">
        <div class="listing-item-content">
          <div class="numerical-rating" data-rating="{{ $ad->rate() }}"></div>
          <h3>{{ $ad->title }}</h3>
          <span>{{ $ad->address }}</span>
        </div>
        @if(Auth::user() && $ad->user != Auth::user())
        <span class="like-icon {{ Auth::user()->favorites()->where('ad_id', $ad->id)->first() ? Auth::user()->favorites()->where('ad_id', $ad->id)->first()->isFav == 1 ? 'liked' : '':''}}
"></span>
      @endif
      </div>
    </a>
  </div>
@endforeach
</div>
<div class="container">
</div>

<script>
  var token = '{{ Session::token() }}';
  var url_favorite = '{{ route('favorite_path') }}';
</script>
