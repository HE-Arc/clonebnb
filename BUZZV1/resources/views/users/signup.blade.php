@extends('layouts.master')

@section('title')
  S'inscrire à Buzz!
@stop

@section('content')
  <div class="container">
    <div class="login-form">
      <form action="{{ route('signup_path') }}" method="POST" class="modal-content animate">
        {{ csrf_field() }}
          <div class="imgcontainer">
              <a href="{{ route('root_path') }}"><img src="{{ asset('images/logo-form.png') }}"></a>
          </div>
            <div class="container min-container" style="background-color:#f1f1f1;">
              <span>S'inscire avec  <a href="#">Facebook</a> ou <a href="#"> Google</a></span>
            </div>
          <span style="text-align: center">Ou</span>
          <div class="container">
            <div class="icon-in-input">
              <input type="email" value="{{ old('email') }}" placeholder="Adresse email" name="email" required>
                <i class="fa fa-at fa-lg fa-fw" aria-hidden="true"></i>
            </div>
            <div class="icon-in-input">
                <input type="text" value="{{ old('last_name') }}" placeholder="Prénom" name="last_name" required>
                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
            </div>
            <div class="icon-in-input">
              <input type="text" value="{{ old('first_name') }}" placeholder="Nom" name="first_name" required>
                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
            </div>
            <div class="icon-in-input">
                <input type="password" placeholder="Créer un mot de passe" name="password" required>
                <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
            </div>
            <div class="icon-in-input">
                <input type="password" placeholder="Confirmer votre mot de passe" name="password_confirmation" required>
                <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
            </div>
              <button class="btn btn-lg" type="submit" style="background: #FF5A5F !important;">Inscription</button>
          </div>
          <div class="container min-container" style="background-color:#f1f1f1;">
              <span>Déjà inscrit ?<a href="{{ route('login_path') }}"> Connectez-vous</a></span>
          </div>
        </form>
    </div>
  </div>
@stop

@section('stylesheet')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@stop