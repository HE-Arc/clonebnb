<!-- Filtre -->
<section class="search">

  <div class="row">
    <div class="col-md-12">

        <!-- Inputs de recherche -->
        <div class="row with-forms">

          <!-- Recherche -->
          <div class="col-fs-6">
            <div class="input-with-icon">
              <i class="fa fa-search"></i>
              <input type="text" placeholder="Que recherchez vous?" value=""/>
            </div>
          </div>

          <!-- Localisation -->
          <div class="col-fs-6">
            <div class="input-with-icon location">

              <input type="text" placeholder="Localisation: Exemple Neuchâtel" value=""/>
              <a href="#"><i class="fa fa-dot-circle-o"></i></a>
            </div>
          </div>


          <!-- Filters -->
          <div class="col-fs-12">

            <!-- Panel Dropdown / End -->
            <div class="panel-dropdown">
              <a href="#">Catégories</a>
              <div class="panel-dropdown-content checkboxes categories">

                <!-- Checkboxes -->
                <div class="row">
                  <div class="col-md-6">
                    <input id="check-1" type="checkbox" name="check" checked class="all">
                    <label for="check-1">Toutes</label>

                    <input id="check-2" type="checkbox" name="check">
                    <label for="check-2">Shops</label>

                    <input id="check-3" type="checkbox" name="check">
                    <label for="check-3">Hotels</label>
                  </div>

                  <div class="col-md-6">
                    <input id="check-4" type="checkbox" name="check" >
                    <label for="check-4">Eat & Drink</label>

                    <input id="check-5" type="checkbox" name="check">
                    <label for="check-5">Fitness</label>

                    <input id="check-6" type="checkbox" name="check">
                    <label for="check-6">Events</label>
                  </div>
                </div>

                <!-- Buttons -->
                <div class="panel-buttons">
                  <button class="panel-cancel">Annuler</button>
                  <button class="panel-apply">Appliquer</button>
                </div>

              </div>
            </div>
            <!-- Panel Dropdown / End -->

            <!-- Panel Dropdown -->
            <div class="panel-dropdown wide">
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
                  <button class="panel-cancel">Annuler</button>
                  <button class="panel-apply">Appliquer</button>
                </div>

              </div>
            </div>
            <!-- Panel Dropdown / End -->

            <!-- Panel Dropdown -->
            <div class="panel-dropdown">
              <a href="#">Distance</a>
              <div class="panel-dropdown-content">
                <input class="distance-radius" type="range" min="1" max="100" step="1" value="50" data-title="Radius around selected destination">
                <div class="panel-buttons">
                  <button class="panel-cancel">Annuler</button>
                  <button class="panel-apply">Appliquer</button>
                </div>
              </div>
            </div>
            <!-- Panel Dropdown / End -->

          </div>
          <!-- Filters / End -->

        </div>
        <!-- Row With Forms / End -->

    </div>
  </div>

</section>
<!-- Fin filtre -->
