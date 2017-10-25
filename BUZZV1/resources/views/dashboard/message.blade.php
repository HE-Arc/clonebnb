@extends('layouts.management')

@section('title')
  Vos conversations
@stop

@section('content')
<div class="" style="margin-top: 100px;">
    <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #06A87C; color: #fff; font-weight: bold;">
          <h4>Conversation with {{ Auth::user()->getFullName() }}</h4>
          <input type="hidden" value="id_conversation">
        </div>
        <div class="panel-body">
          <form>
            <div class="write_message">
              <textarea placeholder="Ajouter un nouveau message" class="form-control"></textarea>
            </div>
            <input type="hidden" value="id_user"><br>
            <div class="send">
              <button style="background-color: #FF5A5F; color: white;"type="submit" class="btn btn-normal">Envoyer le message</button>
                </div>
          </form>
        </div>
      </div>

      <div id="chat">
        @include('layouts.partials._chat')
      </div>
    </div>
</div>
@stop

@section('stylesheet')
  <style type="text/css">

    .conversation {
      width: 80%;
    }

    .panel-heading {
      background-color: #06A87C;
    }

    .write_message {
      border-radius: 2px;
      height: 4rem;
      width:100%;
    }

    button {
      background-color: #FF5A5F;
      color: white;
    }

    .text-center{
      text-align: center;
    }
    .profil {
      width: 200px;
    }
    
  </style>
@stop

