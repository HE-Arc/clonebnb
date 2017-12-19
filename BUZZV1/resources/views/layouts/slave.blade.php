<!DOCTYPE html>
<head>

<title>@yield('title')</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="csrf_token" content="{{ csrf_token() }}" />

<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/main.css') }}" id="colors">y
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body id="item">
  <!-- Wrapper -->
  <div id="wrapper">

    <!-- Entête -->
    @include('layouts.partials.headers._slave_header')
    <!--Fin entête -->

    <div id="dashboard">
      <!-- Side menu -->
  	   @include('layouts.partials.dashboard._side_menu')
  	    <!--Fin Side menu -->

        <!--Message flash-->
        {{-- Message flash --}}
        @include('flashy::message')
        <!--Fin Message flash-->

        <!--Contenu-->
        @yield('content')
        <!--Fin contenu-->

        <!--Footer-->
        @include('layouts.partials.footers._slave_footer')
        <!--Fin footer-->
      </div>
  </div>

<!-- Scripts
================================================== -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ secure_asset('js/mmenu.min.js') }}"></script>
<script type="text/javascript" src="{{ secure_asset('js/chosen.min.js') }}"></script>
<script type="text/javascript" src="{{ secure_asset('js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ secure_asset('js/rangeslider.min.js') }}"></script>
<script type="text/javascript" src="{{ secure_asset('js/magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ secure_asset('js/waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ secure_asset('js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ secure_asset('js/tooltips.min.js') }}"></script>
<script type="text/javascript" src="{{ secure_asset('js/custom.js') }}"></script>
</body>
</html>
