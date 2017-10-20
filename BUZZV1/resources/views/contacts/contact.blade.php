@extends('layouts.master')

@section('title')
	Contactez nous
@stop

@section('content') 
	<div class="container">
		<div class="row" style="margin-top: 100px">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offet-1">
				<h2>Contactez nous</h2>
				<p class="text-muted">Pour toutes questions relatives à nos services</p>

				<form action="{{ route('contact_path') }}" method="POST" novalidate>
					{{ csrf_field() }}
					<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
						<input for="name" type="text" class="form-control" name="name" placeholder="Nom" required="{{ old('name') }}">
						{!! $errors->first('name', '<span class="help-blok">:message</span>') !!}
					</div>
					<div class="form-group">
						<input for="email" type="email" class="form-control" name="email" placeholder="Email" required="{{ old('email') }}">
						{!! $errors->first('email', '<span class="help-blok">:message</span>') !!}
					</div>
					<div class="form-group">
						<input for="subject" type="text" class="form-control" name="subject"placeholder="Sujet" required="{{ old('subject') }}">
						{!! $errors->first('subject', '<span class="help-blok">:message</span>') !!}
					</div>
					<div class="form-group">
						<textarea for="message" class="form-control" name="message" placeholder="Votre message" rows="10" cols="10" required="{{ old('message') }}">
						</textarea>
						{!! $errors->first('message', '<span class="help-blok">:message</span>') !!}
					</div>
					<div class="form-group">
						<button class="btn bg-danger text-white btn-block">Envoyer &raquo;</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop

@section('stylesheet')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
@stop