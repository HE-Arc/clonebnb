@extends("layouts.master")

@section("title")
  Reservation de l'article
@stop

@section("content")
  Reservation de l'article
  <div class = "container" style="margin-top:100px">HELLO {{ Auth::user()->username }}</div>
@stop
