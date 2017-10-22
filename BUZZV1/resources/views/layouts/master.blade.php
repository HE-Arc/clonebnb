<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')  </title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--Font Awesome CDN-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--Fin font Awesome CDN-->
	<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.min.js"></script>

	<!--Fichiers css-->
	@yield('stylesheet')
	<!--Fin css-->
</head>
<body>

	<!--Navbar-->
	@include('layouts.partials._nav')
	<!--Fin Navbar-->

	<!--Messages flash-->
	@include('layouts.partials._flash')
	@include('flashy::message')
	<!--Fin Messages flash-->

	<!--Contenu de la page-->
	<div>
		@yield('content')
	</div>
	
	<!--Navbar-->
	@include('layouts/partials/_footer')
	<!--Fin Navbar-->
	
	<!--Bootstrap JS-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>