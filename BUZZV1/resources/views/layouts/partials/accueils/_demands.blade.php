<section class="fullwidth margin-top-70 padding-top-75 padding-bottom-70" data-background-color="#f9f9f9">
	<!-- Info Section -->
	<div class="container">

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h3 class="headline centered">
					Ils demandent
					<span class="margin-top-25">Ils n'ont pas trouvé ce qu'ils cherchaient dans la plateforme. Alors regardez ce qu'ils cherchent et proposez l'article.</span>
				</h3>
			</div>
		</div>

	</div>
	<!-- Info Section / End -->

	<!-- Categories Carousel -->
	<div class="fullwidth-carousel-container margin-top-20">
		<div class="testimonial-carousel testimonials">

			@foreach($demands as $demand)
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">
            <strong style="font-sze: 30px;">{{ $demand->title }}</strong>
            <br/>{{ $demand->description }}
          </div>
				</div>
				<div class="testimonial-author">
					<img src="/uploads/avatars/{{ $demand->user->photo }}" alt="">
					<h4>{{ $demand->user->first_name }}<span><a href="" class="button">Lire la suite...</a></h4></span>
				</div>
			</div>
      @endforeach
		</div>
	</div>
	<!-- Categories Carousel / End -->

</section>
