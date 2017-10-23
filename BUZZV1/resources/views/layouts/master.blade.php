<!DOCTYPE html>
<html lang="fr">
<head>
  	<title>@yield('title')</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
  	<!--Fichiers css-->
	@yield('stylesheet')
	<!--Fin css-->
</head>
<body>
	<!--Navbar-->
	@include('layouts.partials._nav-bar')
	<!--Fin Navbar-->

  	<!--Messages flash-->
	@include('layouts.partials._flash')
	@include('flashy::message')
	<!--Fin Messages flash-->

	<!--Contenu de la page-->
	<div class="container">
		@yield('content')
	</div>
	<!--Fin Contenu de la page-->

	<!--Footer-->
	@include('layouts/partials/_footer')
	<!--Fin Footer-->

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
