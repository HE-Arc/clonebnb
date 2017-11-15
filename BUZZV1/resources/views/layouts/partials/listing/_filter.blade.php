<!-- Sorting - Filtering Section -->
<div class="row margin-bottom-25 margin-top-30">

  <!--Mode affichage-->
  @include('layouts.partials.listing._display')
  <!--Fin mode affichage-->

  <div class="col-md-6">
    <div class="fullwidth-filters">

      <!-- Panel Dropdown -->
      <div class="panel-dropdown wide float-right">
        <a href="#">More Filters</a>
        <div class="panel-dropdown-content checkboxes">

          <!-- Checkboxes -->
          <div class="row">
            <div class="col-md-6">
              <input id="check-a" type="checkbox" name="check">
              <label for="check-a">Elevator in building</label>

              <input id="check-b" type="checkbox" name="check">
              <label for="check-b">Friendly workspace</label>

              <input id="check-c" type="checkbox" name="check">
              <label for="check-c">Instant Book</label>

              <input id="check-d" type="checkbox" name="check">
              <label for="check-d">Wireless Internet</label>
            </div>

            <div class="col-md-6">
              <input id="check-e" type="checkbox" name="check" >
              <label for="check-e">Free parking on premises</label>

              <input id="check-f" type="checkbox" name="check" >
              <label for="check-f">Free parking on street</label>

              <input id="check-g" type="checkbox" name="check">
              <label for="check-g">Smoking allowed</label>

              <input id="check-h" type="checkbox" name="check">
              <label for="check-h">Events</label>
            </div>
          </div>

          <!-- Buttons -->
          <div class="panel-buttons">
            <button class="panel-cancel">Cancel</button>
            <button class="panel-apply">Apply</button>
          </div>

        </div>
      </div>
      <!-- Panel Dropdown / End -->

      <!-- Panel Dropdown-->
      <div class="panel-dropdown float-right">
        <a href="#">Distance Radius</a>
        <div class="panel-dropdown-content">
          <input class="distance-radius" type="range" min="1" max="100" step="1" value="50" data-title="Radius around selected destination">
          <div class="panel-buttons">
            <button class="panel-cancel">Disable</button>
            <button class="panel-apply">Apply</button>
          </div>
        </div>
      </div>
      <!-- Panel Dropdown / End -->

      <!-- Sort by -->
      <div class="sort-by">
        <div class="sort-by-select">
          <select data-placeholder="Default order" class="chosen-select-no-single">
            <option>Default Order</option>
            <option>Highest Rated</option>
            <option>Most Reviewed</option>
            <option>Newest Listings</option>
            <option>Oldest Listings</option>
          </select>
        </div>
      </div>
      <!-- Sort by / End -->

    </div>
  </div>

</div>
<!-- Sorting - Filtering Section / End -->
