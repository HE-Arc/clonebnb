<!-- Food Menu -->
<div id="listing-pricing-list" class="listing-section">
  <h3 class="listing-desc-headline margin-top-70 margin-bottom-30">Prix</h3>

  <div class="show-more">
    <div class="pricing-list-container">

      @foreach($prices as $price)
      <h4>{{ $price->category }}</h4>
      <ul>
        <li>
          <h5>{{ $price->title }}</h5>
          <p>{{ $price->description }}</p>
          <span>{{ $price->amount }} <strong>CHF</strong></span>
        </li>
      </ul>
      @endforeach
    </div>
  </div>
  <a href="#" class="show-more-button" data-more-title="Voir plus" data-less-title="Afficher moins"><i class="fa fa-angle-down"></i></a>
</div>
<!-- Food Menu / End -->
