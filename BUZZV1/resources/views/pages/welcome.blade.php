@extends('layouts.master')

@section('title')
	Page d'accueil
@stop

{{--Setion qui sera affiché dans le body du layout master--}}
@section('content')
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron text-center" style="background-color: #fff;">
    <div class="container">
      <h1 class="display-3" style="color: #ff5a5f"><strong>Buzz!</strong></h1>
      <h2 style="color: #868B8A"><span>L'art de consommer utile!</span></h2>
    </div>
  </div>
	<form>
  		<div class="row">
    		<div class="col-md-6">
    			<input type="text" name="search" class="form-control" placeholder="Que cherchez vous?" id="autolocation">
    		</div>
    		<div class="col-md-3">
    			<input type="text" name="search" class="form-control datepicker" placeholder="Date de début" id="autolocation">
    		</div>
    		<div class="col-md-3">
    			<input type="text" name="search" class="form-control datepicker" placeholder="Date de fin" id="autolocation">
    		</div>
  		</div>
  		<br/><br/>
  		<div class="container text-center">
      			<button type="submit" class="btn btn-danger btn-lg">Rechercher</button>
  		</div>
	</form>

	<br/><hr><br>
	<!-- Catégories -->
	<div><h3>Catégories</h3></div><br/>
	<div class="row">
  		@include('layouts.partials._accueil')
	</div>

	<br/><hr/><br/>
	<!-- Catégories -->
	<div><h3>Ca vient de</h3></div><br/>
	<div class="row">
	</div>
@stop

@section('stylesheet')
  <style type="text/css">

    input[type=text]{
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 5000px;
      font-size: 19px !important;
      line-height: 24px !important;
      color: #484848 !important;
      font-weight: 300 !important;
      background-color: transparent !important;
      padding: 11px;
      width: 100%;
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
  </style>
@stop