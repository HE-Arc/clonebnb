<div class="col-md-6">
  <!-- Mode affichage -->
  <div class="layout-switcher">
    <a href="{{ route('ads_grid_path', $category['id']) }}" class="grid {{ set_active_route('ads_grid_path') }}"><i class="fa fa-th"></i></a>
    <a href="{{ route('ads_list_path', $category['id']) }}" class="list {{ set_active_route('ads_list_path') }}"><i class="fa fa-align-justify"></i></a>
  </div>
</div>
