<!DOCTYPE html>
<head>

<title>@yield('title')</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/style2.css') }}">
<link rel="stylesheet" href="css/main.css" id="colors">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
  <!-- Wrapper -->
  <div id="wrapper">

    <!-- Entête -->
    @include('layouts.partials.headers._master_header')
    <!--Fin entête -->

    <!--Message flash-->
    {{-- Message flash --}}
    @include('flashy::message')
    @include('layouts.partials._flash')
    <!--Fin Message flash-->

    <!--Contenu-->
    @yield('content')
    <!--Fin contenu-->

  </div>
  <!-- Wrapper / End -->
  <!--Footer-->
  {{-- Le pied de page est différent pour la page article_path --}}
  @if(Route::currentRouteName() != 'article_path' )
   @include('layouts.partials.footers._master_footer')
  @endif
  <!--Fin Footer-->

<!-- Scripts
================================================== -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('js/mmenu.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/chosen.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/rangeslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tooltips.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>


<!-- Maps -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script type="text/javascript" src="{{ asset('js/infobox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/markerclusterer.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/map.js') }}"></script>


</body>
</html>
