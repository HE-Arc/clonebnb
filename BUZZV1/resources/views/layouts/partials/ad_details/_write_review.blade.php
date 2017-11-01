<!-- Add Review Box -->
<div id="add-review" class="add-review-box">

  <!-- Add Review -->
  <h3 class="listing-desc-headline margin-bottom-20">Donnez votre avis</h3>

  <span class="leave-rating-title">Votre note pour cet annonce</span>

  <!-- Rating / Upload Button -->
  <div class="row">
    <div class="col-md-6">
      <!-- Leave Rating -->
      <div class="clearfix"></div>
      <div class="leave-rating margin-bottom-30">
        <input type="radio" name="rating" id="rating-1" value="1"/>
        <label for="rating-1" class="fa fa-star"></label>
        <input type="radio" name="rating" id="rating-2" value="2"/>
        <label for="rating-2" class="fa fa-star"></label>
        <input type="radio" name="rating" id="rating-3" value="3"/>
        <label for="rating-3" class="fa fa-star"></label>
        <input type="radio" name="rating" id="rating-4" value="4"/>
        <label for="rating-4" class="fa fa-star"></label>
        <input type="radio" name="rating" id="rating-5" value="5"/>
        <label for="rating-5" class="fa fa-star"></label>
      </div>
      <div class="clearfix"></div>
    </div>

    <div class="col-md-6">
      <!-- Uplaod Photos -->
      <div class="add-review-photos margin-bottom-30">
        <div class="photoUpload">
            <span><i class="fa fa-arrow-up"></i> Charger une photo</span>
            <input type="file" class="upload" />
        </div>
      </div>
    </div>
  </div>

  <!-- Review Comment -->
  <form id="add-comment" class="add-comment">
    <fieldset>

      <div class="row">
        <div class="col-md-6">
          <label>Nom:</label>
          <input type="text" value=""/>
        </div>

        <div class="col-md-6">
          <label>Email:</label>
          <input type="text" value=""/>
        </div>
      </div>

      <div>
        <label>Avis:</label>
        <textarea cols="40" rows="3"></textarea>
      </div>

    </fieldset>

    <button class="button">Envoyer votre avis</button>
    <div class="clearfix"></div>
  </form>

</div>
<!-- Add Review Box / End -->
