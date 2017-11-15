<!-- Search -->
<div class="col-md-12">
  <div class="main-search-input gray-style margin-top-0 margin-bottom-10">

    <div class="main-search-input-item">
      <input type="text" placeholder="Que recherchez vous?" value=""/>
    </div>

    <div class="main-search-input-item location">
      <input type="text" placeholder="Lieu" value=""/>
      <a href="#"><i class="fa fa-dot-circle-o"></i></a>
    </div>

    <div class="main-search-input-item">
      <select data-placeholder="All Categories" class="chosen-select" name="category_id">
        <option label="blank">Choisir une catégorie</option>
        @foreach($categories as $category)
        <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
        @endforeach
      </select>
    </div>

    <button class="button">Rechercher</button>
  </div>
</div>
<!-- Search Section / End -->
