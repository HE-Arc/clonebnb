<!-- Slider -->
<div class="listing-slider mfp-gallery-container margin-bottom-0">
	@foreach ($medias as $media)
		<a href="/uploads/ads/medias/{{ $media->name }}" data-background-image="/uploads/ads/medias/{{ $media->name }}" class="item mfp-gallery" title="{{ $media->name }}"></a>
	@endforeach
</div>
<!-- Fin Slider -->
