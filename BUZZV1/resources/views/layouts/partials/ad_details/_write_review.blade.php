@if(Auth::check())
<!-- Add Review Box -->
<div id="add-review" class="add-review-box">

  <!-- Add Review -->
  <h3 class="listing-desc-headline margin-bottom-20">Donnez votre avis</h3>

  <span class="leave-rating-title">Votre note pour cet annonce</span>

  <!-- Rating / Upload Button -->
  <form action="{{ route('comment_path', $ad->id) }}" method="POST" id="add-comment" class="add-comment">
    {{ csrf_field() }}
  <div class="row">
    <div class="col-md-6">
      <!-- Leave Rating -->
      <div class="clearfix"></div>
      <div class="leave-rating margin-bottom-30">

        <input type="radio" name="rating" id="rating-1" value="5"/>
        <label for="rating-1" class="fa fa-star"></label>

        <input type="radio" name="rating" id="rating-2" value="4"/>
        <label for="rating-2" class="fa fa-star"></label>

        <input type="radio" name="rating" id="rating-3" value="3"/>
        <label for="rating-3" class="fa fa-star"></label>

        <input type="radio" name="rating" id="rating-4" value="2"/>
        <label for="rating-4" class="fa fa-star"></label>

        <input type="radio" name="rating" id="rating-5" value="1"/>
        <label for="rating-5" class="fa fa-star"></label>

      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <!-- Review Comment -->
    <fieldset>
      <div>
        <label>Avis:</label>
        <textarea cols="40" rows="3" name="content" required></textarea>
      </div>

    </fieldset>

    <button class="button" type="submit">Envoyer votre avis</button>
    <div class="clearfix"></div>
  </form>

</div>

@else
<div id="add-review" class="add-review-box text-center">
  <div><b>Connectez vous pour laisser un commentaire</b></div>
</div>
@endif

<!-- Add Review Box / End -->
