@extends('layouts.management')

@section('title')
	Profil utilisateur
@stop

@section('content')

<div class="container" style="margin-top: 100px;">
    <!-- Example row of columns -->
    <div class="row">
    	<div class="col-md-3">
    		<div class="text-center">
            	<img class="profile_image" src="uploads/avatars/{{ Auth::user()->photo}} ">
				<div class="sidenav infor_perso">
					<ul class="sidenav-list" style="list-style-type: none;">
					    <li>
					      	<a href="{{ route('profil_path') }}" aria-selected="true" class="sidenav-item">Informations personnelles</a>
					    </li>
					    <li>
					    </li>
					</ul>
				</div>
    		</div>
    		
    	</div>

        <div class="col-md-9">
      		<div class="panel panel-default infor_perso">
        		<div class="">
          			<h5>Informations personnelles</h5>
        		</div><br>
	        	<div class="form">
	          		<form action="{{ route('profil_path') }}" method="POST" enctype="multipart/form-data">
	          			{{ csrf_field() }}
		            	<div class="row row-condensed space-4">
	        				<label class="text-right col-sm-3" for="first_name">
	          					Nom 
	        				</label>
	        				<div class="col-sm-9">
	          
	      						<input id="first_name" name="first_name" size="30" type="text" value="{{ Auth::user()->first_name }}" required="required"/>
	        				</div>
	      				</div>
		      			<div class="row row-condensed space-4">
		        			<label class="text-right col-sm-3" for="last_name">
		          				Prénom 
		        			</label>
		        			<div class="col-sm-9">
		          
		      					<input id="last_name" name="last_name" size="30" type="text" value="{{ Auth::user()->last_name }}" required="required" />
		        			</div>
		      			</div>

		      			<div class="row row-condensed space-4">
		        			<label class="text-right col-sm-3" for="username">
		          				Nom d'utilisateur 
		        			</label>
		        			<div class="col-sm-9">
		          
		      					<input id="username" name="username" size="30" type="text" value="{{ Auth::user()->username }}" required="required"/>
		        			</div>
		      			</div>

		      			<div class="row row-condensed space-4">
		        			<label class="text-right col-sm-3" for="sex">
		          			Sexe <i class="fa fa-lock" data-behavior="tooltip" title="Privé" style="color: red"></i>
		        			</label>
		        			<div class="col-sm-9">
		          
		      					<div class="select">
		        					<select id="sex" name="sex">
		        						<option value="" selected="selected">Sexe</option>
										<option value="Homme">Homme</option>
										<option value="Femme">Femme</option>
									</select>
		      					</div>
		      				</div>
		      			</div>
      			
			      		<div class="row row-condensed space-4">
			        		<label class="text-right col-sm-3" for="">
			          		Date de naissance <i class="fa fa-lock" data-behavior="tooltip" title="Privé" style="color: red"></i>
			        		</label>
				        	<div class="col-sm-9">
				          
					        	<fieldset>
					          		<div class="select">
					            		<select aria-label="Mois" id="" name="birthday">
					            		<option value="Female">{{ Auth::user()->month() }}</option>
					            			@include('layouts.partials._months')
										</select>

					          		</div>
					          		<div class="select">
					            		<select aria-label="Jour" id="" name="">
					            			@include('layouts.partials._days')
										</select>
					          		</div>
					          		<div class="select">
					            		<select aria-label="Année" id="" name="">
					            			@include('layouts.partials._years')
										</select>
					          		</div>
					        	</fieldset>
				        	</div>
			      		</div>

		      			<div class="row row-condensed space-4">
		        			<label class="text-right col-sm-3" for="email">
		          				Adresse email <i class="fa fa-lock" data-behavior="tooltip" title="Privé" style="color: red"></i>
		        			</label>
		        			<div class="col-sm-9">
		          
		      					<input id="email" name="email" size="30" type="email" value="{{ Auth::user()->email }}" required="required"/>
		        			</div>
		      			</div>

	      			<div class="row row-condensed space-4">
	        			<label class="text-right col-sm-3" for="phone">
	          			Numéro de téléphone <i class="fa fa-lock" data-behavior="tooltip" title="Privé" style="color: red"></i>
	        			</label>
	        			<div class="col-sm-9">
	      					<input id="phone" name="phone" size="30" type="phone" value="{{ Auth::user()->phone }}" required="required"/>
	      					<a href="#" class="verify" style="text-decoration:none;">Vérifier par SMS</a><br /><br />
	      					<input id="pin_code" name="pin_code" size="30" placeholder="Code réçu" type="phone" value=""/>
	      					<a href="#" class="verify" style="text-decoration:none;">Valider</a><br /><br />
	        			</div>
	      			</div>

	      			<div class="row row-condensed space-4">
        				<label class="text-right col-sm-3" for="language">
          				Langue
        				</label>
        				<div class="col-sm-9">
      						<div class="select">
        						<select id="language" name="language">
						        	@include('layouts.partials._language')
						        </select>
      						</div>
        				</div>
      				</div>

      				<div class="row row-condensed space-4">
        				<label class="text-right col-sm-3" for="address">
          					Adresse
        				</label>
        				<div class="col-sm-9">
          
     						<input id="address" name="address" placeholder="Exemple : Neuchâtel" size="30" type="text" required="required" value="{{ Auth::user()->address }}" / >
        				</div>
      				</div>

	      			<div class="row row-condensed space-4">
        				<label class="text-right col-sm-3" for="">
          				Description 
        				</label>
        				<div class="col-sm-9">
      						<textarea id="" name="description">
      						</textarea>
      					</div>
      				</div>
      				<div class="text-center" style="margin-top: 20px; padding-bottom: 60px;">
        				<label for="photo" class="lab" tabindex="0"><i class="fa fa-upload"></i>&nbsp;Choisir une photo...</label>
     					<input id="photo" name="photo" type="file" hidden/>
      				</div>
	        	</div>
      		</div>
    	</div>
    </div>
    <div class="container text-center" style="margin-top: 20px; margin-bottom: 100px; width: 100%;">
    	<button class="btn btn-lg btn-block" type="submit" style="background: #FF5A5F !important; color:#fff; font-weight: bold;
    	">Enregistrer</button>
    </div>
    </form>
</div> <!-- /container -->
@stop

@section('stylesheet')
<style type="text/css">
	.profile_image {
		width: 150px; 
		height: 150px; 
		margin-bottom: 10px; 
		border-radius: 50%;
	}

	.lab {
		background-color: #FF5A5F;
		border-radius: 10px;
		padding: 10px;
		color: #fff;
		font-weight: bold;
	}

	.verify {
		background-color: #FF5A5F;
		color: white;
		padding: 10px;
		border-radius: 5px;
	}

	#phone_number {
		width: 30%;
		margin-bottom: 10px;
	}


	input[type=text], input[type=email], input[type=phone]{
	    width: 90%;
	  	color: #565a5c;
	 	background-color: white;
	  	border: 1px solid #00A699;
	  	border-radius: 2px;
	  	padding: 10px;
	  	display: block;
	  	margin-bottom: 10px;
	}

	input[type=file]{
	    width: 100%;
	  	color: #565a5c;
	 	background-color: white;
	  	border: 1px solid #00A699;
	  	border-radius: 2px;
	  	padding: 10px;
	  	display: block;
	  	margin-bottom: 10px;
	}

	textarea {
    	margin: 8px 0;
	    display: inline-block;
	    border: 1px solid #00A699;
	    box-sizing: border-box;
	    font-size: 19px !important;
	    line-height: 24px !important;
	    color: #484848 !important;
	    font-weight: 300 !important;
	    background-color: transparent !important;
	    padding: 11px;
	    width: 90%;
	}
    
    fieldset {
    	margin: 0;
    	border: 0;
    	padding: 0;
    	display: block;
    	line-height: normal;
	}

	select {
	  	min-width: 20%;
	  	color: #565a5c;
	 	background-color: white;
	  	border: 1px solid #00A699;
	  	border-radius: 2px;
	  	padding: 10px;
	  	display: block;
	  	margin-bottom: 10px;
	  	margin-right: 10px;
	}

	.select select {
    	padding-top: 8px;
    	padding-bottom: 8px;
    	padding-right: 2em;
    	float: left;
	}

	label {
    	padding-top: 9px;
    	padding-bottom: 8px;
	}

	.infor_perso {
		background-color: #F8F9F9;
		border-radius: 10px;
	}
</style>
@stop
