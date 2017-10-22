@extends('layouts.master')

@section('title')
	Connexion à Buzz!
@stop

@section('content')
	<div class="container">
		<div class="login-form">
			<form class="modal-content animate" action="{{ route('login_path') }}" method="POST">
        {{ csrf_field() }}
    			<div class="imgcontainer">
            <a href="{{ route('root_path') }}"><img src="{{ asset('images/logo-form.png') }}"></a>
    			</div>
      			<div class="container">
      				<button class="btn btn-lg" type="submit" style="background: #4568b2 !important;" disabled="disabled">Connexion avec Facebook</button>
      				<button class="btn btn-lg" type="submit" style="background-color: #fff !important; border: 1px solid; color: #484848" disabled="disabled">Connexion avec Google</button>
    			</div>
    			<span style="text-align: center">Ou</span>
    			<div class="container">
    				<div class="icon-in-input">
    					<input type="text" value="{{ old('email') }}" placeholder="Adresse email" name="email" required>
      					<i class="fa fa-at fa-lg fa-fw" aria-hidden="true"></i>
    				</div>
    				<div class="icon-in-input">
      					<input type="password" placeholder="Mot de passe" name="password" required>
      					<i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
    				</div>
      				<button class="btn btn-lg" type="submit" style="background: #FF5A5F !important;">Connexion</button>
      				<div class="min-container">
      					<span><a href="{{ route('reset_path') }}">Mot de passe oublié ?</a></span>
      				</div>
    			</div>
    			<div class="container min-container" style="background-color:#f1f1f1;">
      				<span>Vous n'avez pas de compte ?<a href="{{ route('signup_path') }}"> Insrivez-vous</a></span>
    			</div>
  			</form>
		</div>
	</div>
@stop

@section('stylesheet')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@stop