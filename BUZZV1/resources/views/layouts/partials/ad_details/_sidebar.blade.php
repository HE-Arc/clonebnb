<!-- Sidebar -->
<div class="col-lg-4 col-md-4 margin-top-75 sticky">


  <!-- Verified Badge -->
  <div class="verified-badge with-tip" data-tip-content="Listing has been verified and belongs the business owner or manager.">
    <i class="fa fa-check-circle-o"></i> Annonce vérifiée
  </div>

  <!-- Book Now -->
  <div class="boxed-widget booking-widget margin-top-35">
    <h3><i class="fa fa-calendar-check-o "></i> Réservez</h3>
    <div class="row with-forms  margin-top-0">

      <div class="col-lg-6 col-md-12">
        <input type="text" id="booking-date_debut" data-lang="fr" data-large-mode="true" data-large-default="true" data-min-year="2017" data-max-year="2060" data-disabled-days="08/17/2017,08/18/2017">
      </div>

      <div class="col-lg-6 col-md-12">
        <input type="text" id="booking-date_fin" data-lang="fr" data-large-mode="true" data-large-default="true" data-min-year="2017" data-max-year="2060" data-disabled-days="dsdsdsds">
      </div>

      <!-- Panel Dropdown -->
      <div class="col-lg-12">
        <div class="panel-dropdown">
          <a href="#">Guests <span class="qtyTotal" name="qtyTotal">1</span></a>
          <div class="panel-dropdown-content">

            <!-- Quantity Buttons -->
            <div class="qtyButtons">
              <div class="qtyTitle">Adults</div>
              <input type="text" name="qtyInput" value="1">
            </div>

            <div class="qtyButtons">
              <div class="qtyTitle">Childrens</div>
              <input type="text" name="qtyInput" value="0">
            </div>

          </div>
        </div>
      </div>
      <!-- Panel Dropdown / End -->

    </div>

    <!-- progress button animation handled via custom.js -->
    <a href="pages-booking.html" class="button book-now fullwidth margin-top-5">Réserver maintenant</a>
  </div>
  <!-- Book Now / End -->

  <!-- Contact -->
			<div class="boxed-widget margin-top-35">
				<div class="hosted-by-title">
					<h4><span>Publier par</span> <a href="{{ route('user_profile_path', $ad->user->id) }}">{{ $ad->user->first_name }}</a></h4>
					<a href="{{ route('user_profile_path', $ad->user->id) }}" class="hosted-by-avatar"><img src="/uploads/avatars/{{ $ad->user->photo }}" alt="Avatar"></a>
				</div>
				<ul class="listing-details-sidebar">
					<li><i class="fa fa-phone"></i> {{ $ad->user->phone }}</li>
					<li><i class="fa fa-envelope-o"></i> <a href="#"><span class="__cf_email__" data-cfemail="2a5e45476a4f524b475a464f04494547">{{ $ad->user->email }}</span></a></li>
				</ul>

				<ul class="listing-details-sidebar social-profiles">
					<li><a href="{{ $ad->user->facebook_id }}" class="facebook-profile"><i class="fa fa-facebook-square"></i> Facebook</a></li>
				</ul>

				<!-- Reply to review popup -->
				<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
					<div class="small-dialog-header">
						<h3>Send Message</h3>
					</div>
					<div class="message-reply margin-top-0">
						<textarea cols="40" rows="3" placeholder="Your message to Tom"></textarea>
						<button class="button">Send Message</button>
					</div>
				</div>

				<a href="#small-dialog" class="send-message-to-owner button popup-with-zoom-anim"><i class="fa fa-envelope-open-o"></i> Send Message</a>
			</div>
			<!-- Contact / End-->
  <!-- Share / Like -->
  <div class="listing-share margin-top-40 margin-bottom-40 no-border" data-adid="{{ $ad->id }}">
    @if(Auth::user() && $ad->user != Auth::user())
    <button class="like-button"><span class="like-icon {{ Auth::user()->favorites()->where('ad_id', $ad->id)->first() ? Auth::user()->favorites()->where('ad_id', $ad->id)->first()->isFav == 1 ? 'liked' : '':''}}"></span> Favoris</button>
    @endif
    <span>{{ $ad->getNumFav() }} cette annonce comme favoris</span>
      <div class="clearfix"></div>
  </div>

</div>
<!-- Sidebar / End -->
<script>
  var token = '{{ Session::token() }}';
  var url_favorite = '{{ route('favorite_path') }}';
</script>
