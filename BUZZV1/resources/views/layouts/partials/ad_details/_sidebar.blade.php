<!-- Sidebar -->
<div class="col-lg-4 col-md-4 margin-top-75 sticky">
<!-- Contact -->
			<div class="boxed-widget margin-top-35">
				<div class="hosted-by-title">
					<h4><span>Publier par</span> <a href="{{ route('user_profile_path', $ad->user->id) }}">{{ $ad->user->first_name }}</a></h4>
					<a href="{{ route('user_profile_path', $ad->user->id) }}" class="hosted-by-avatar"><img src="/uploads/avatars/{{ $ad->user->photo }}" alt="Avatar"></a>
				</div>
				<ul class="listing-details-sidebar">
					<li style="margin-bottom: 10px"><i class="fa fa-phone"></i> {{ $ad->user->phone }}</li>
					<li><i class="fa fa-envelope-o"></i> <a href="#"><span class="__cf_email__" data-cfemail="2a5e45476a4f524b475a464f04494547">{{ $ad->user->email }}</span></a></li>
				</ul>

				<ul class="listing-details-sidebar social-profiles">
					<li><a href="{{ $ad->user->facebook_id }}" class="facebook-profile"><i class="fa fa-facebook-square"></i> Facebook</a></li>
				</ul>

				<!-- Reply to review popup -->
				<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
					<div class="small-dialog-header">
						<h3>Envoyer un message</h3>
            <h4>Minimum 150 caractères</h4>
					</div>
          <form action="{{ route('message_path') }}" method="POST">
            {{ csrf_field() }}
					<div class="message-reply margin-top-0">
						<textarea cols="40" rows="3" placeholder="Your message to {{ $ad->user->first_name }}" name="message"></textarea>
            <input type="hidden" class="button border margin-top-5" name="user_id" value="{{ $ad->user->id }}"/>
              <input type="submit" class="button border margin-top-5" value="Envoyer" />
					</div>
          </form>
				</div>
        @if(Auth::check() && Auth::user()->id != $ad->user->id)
				<a href="#small-dialog" class="send-message-to-owner button popup-with-zoom-anim"><i class="fa fa-envelope-open-o"></i> Envoyer un message</a>
        @endif
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
