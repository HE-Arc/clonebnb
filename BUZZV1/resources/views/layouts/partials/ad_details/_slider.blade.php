<!-- Slider -->
<div class="listing-slider mfp-gallery-container margin-bottom-0">
	@foreach ($ad->medias as $media)
		<a href="{{ secure_asset('/uploads/ads/medias/')}}/{{ $media->name }}" data-background-image="/uploads/ads/medias/{{ $media->name }}" class="item mfp-gallery" title="{{ $media->name }}"></a>
	@endforeach
</div>
<!-- Fin Slider -->
