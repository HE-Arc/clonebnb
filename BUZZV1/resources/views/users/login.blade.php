@extends('layouts.master')

@section('title')
	Connexion à Buzz!
@stop

@section('content')
		<div class="modal-content" style="margin-top: 200px;">
			<form class="animate" action="{{ route('login_path') }}" method="POST">
        {{ csrf_field() }}
    			<div>
            <h1 class="log">Buzz!</h1>
    			</div>
      		<div>
      			<button class="btn btn-lg" type="submit" style="background: #4568b2 !important;" disabled="disabled">Connexion avec Facebook</button><br />
      			<a href="{{ route('google_callback_path') }}" class="btn btn-lg" role="button" style="background-color: #fff !important; border: 1px solid; color: #484848">Connexion avec Google</a>
    			</div>
    			<span style="text-align: center">Ou</span>
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
    			<div class="foot">
      				<span>Vous n'avez pas de compte ?<a href="{{ route('signup_path') }}"> Insrivez-vous</a></span>
    			</div>
  			</form>
		</div></div><br /><br />
@stop

@section('stylesheet')
	<style type="text/css">

    input[type=text], input[type=password], input[type=email]{
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 5px;
    font-size: 19px !important;
    line-height: 24px !important;
    color: #484848 !important;
    font-weight: 300 !important;
    background-color: transparent !important;
    padding: 11px;
    width: 90%;
  }

  .foot {
    background-color:#f1f1f1;
    padding: 16px;
    margin-top: 20px;
  }

  /* Set a style for all buttons */
  button {
      color: white;
      padding: 14px 20px;
      margin-top: 8px;
      border: none;
      cursor: pointer;
      width: 90%;
      font-weight: 700 !important;
      background: #FF5A5F !important;
  }

  button:hover {
      opacity: 0.8;
  }

  .icon-in-input input[type=text],input[type=password], input[type=email]{
    padding-left: 40px
  }

  .icon-in-input {
    position: relative;
  }

  .icon-in-input i{
    position: absolute;
    left: 25px;
    top: 17px;
    padding: 9px 8px;
    color: #008489;
  }
  .log {
    font-size: 35px;
    color: #ff5a5f;
    font-weight: bold;
  }
  /* Add Zoom Animation */
  .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
  }

  @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)}
      to {-webkit-transform: scale(1)}
  }

  @keyframes animatezoom {
      from {transform: scale(0)}
      to {transform: scale(1)}
  }

  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
      span.psw {
         display: block;
         float: none;
      }
      .cancelbtn {
         width: 100%;
      }
  }

  .modal-content {
    margin-top: 150px;
    width: 40%;
    margin-right: auto;
    margin-left: auto;
    text-align: center
  }
  </style>
@stop
