@extends('layouts.master')

@section('title')
  S'inscrire à Buzz!
@stop

@section('content')
  <div class="container">
    <div class="login-form">
      <form class="modal-content animate" action="/action_page.php">
          <div class="imgcontainer">
              <a href="{{ route('root_path') }}"><img src="{{ asset('images/logo-form.png') }}"></a>
          </div>
            <div class="container min-container" style="background-color:#f1f1f1;">
              <span>S'inscire avec  <a href="#">Facebook</a> ou <a href="#"> Google</a></span>
            </div>
          <span style="text-align: center">Ou</span>
          <div class="container">
            <div class="icon-in-input">
              <input type="text" placeholder="Adresse email" name="uname" required>
                <i class="fa fa-at fa-lg fa-fw" aria-hidden="true"></i>
            </div>
            <div class="icon-in-input">
                <input type="text" placeholder="Prénom" name="psw" required>
                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
            </div>
            <div class="icon-in-input">
              <input type="text" placeholder="Nom" name="uname" required>
                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
            </div>
            <div class="icon-in-input">
                <input type="password" placeholder="Créer un mot de passe" name="psw" required>
                <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
            </div>
              <button class="btn btn-lg" type="submit" style="background: #FF5A5F !important;">Inscription</button>
          </div>
          <div class="container min-container" style="background-color:#f1f1f1;">
              <span><i class="fa fa-angle-left fa-fw" aria-hidden="true"></i><a href="{{ route('login_path') }}"> Revenir à la page de login</a></span>
          </div>
        </form>
    </div>
  </div>
@stop

@section('stylesheet')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@stop