<div class="row margin-bottom-25 margin-top-30">

  <!--Mode affichage-->
  @include('layouts.partials.listing._display_grid_or_list')
  <!--Fin mode affichage-->
  <div class="col-md-6">
    <div class="fullwidth-filters">
      <div class="sort-by">
        <div class="sort-by-select">
          @if(Route::getCurrentRoute()->getName() == "ads_grid_path")
            @include('layouts.partials.ads._filter_by', ['link' => 'ads_grid_path'])
          @elseif(Route::getCurrentRoute()->getName() == "ads_list_path")
            @include('layouts.partials.ads._filter_by', ['link' => 'ads_list_path'])
          @endif
        </div>
      </div>
      </div>
    </div>
</div>
