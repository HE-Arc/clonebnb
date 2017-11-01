<!-- Sign In Popup -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

  <div class="small-dialog-header">
    <img src="{{ asset('images/logo.png') }}" alt="">
  </div>
  <!--Tabs -->
  <div class="sign-in-form style-1">

    <ul class="tabs-nav">
        <li class=""><a href="#tab1">Connexion</a></li>
        <li><a href="#tab2">Inscription</a></li>
        <li><a href="#tab3">Mot de passe oublié</a></li>
    </ul>

    <div class="tabs-container alt">

      <!-- Login -->
      <div class="tab-content" id="tab1" style="display: none;">
        <form action="{{ route('login') }}" method="POST" class="login">
          {{ csrf_field() }}
          <p class="form-row form-row-wide">
            <label for="email">Email:
              <i class="fa fa-envelope-o"></i>
              <input type="email" class="input-text" name="email" id="email" value="" required/>
            </label>
          </p>

          <p class="form-row form-row-wide">
            <label for="password">Mot de passe:
              <i class="fa fa-lock"></i>
              <input class="input-text" type="password" name="password" id="password" required/>
            </label>
          </p>

          <div class="form-row">
            <input type="submit" class="button border margin-top-5" name="login" value="Connexion" />
            <div class="checkboxes margin-top-10">
              <input id="remember-me" type="checkbox" name="check">
              <label for="remember-me">Se souvenir de moi</label>
            </div>
          </div>

        </form>
      </div>

      <!-- Register -->
      <div class="tab-content" id="tab2" style="display: none;">

        <form action="{{ route('register') }}" method="POST" class="register">
          {{ csrf_field() }}
        <p class="form-row form-row-wide">
          <label for="last_name">Prénom:
            <i class="fa fa-user"></i>
            <input type="text" class="input-text" name="last_name" id="last_name" value="{{ old('last_name') }}" required/>
          </label>
        </p>

        <p class="form-row form-row-wide">
          <label for="first_name">Nom:
            <i class="fa fa-user"></i>
            <input type="text" class="input-text" name="first_name" id="first_name" value="{{ old('first_name') }}" required/>
          </label>
        </p>

        <p class="form-row form-row-wide">
          <label for="email">Adresse email:
            <i class="fa fa-envelope-o"></i>
            <input type="email" class="input-text" name="email" id="email" value="{{ old('email') }}" required/>
          </label>
        </p>

        <p class="form-row form-row-wide">
          <label for="password">Mot de passe:
            <i class="fa fa-lock"></i>
            <input class="input-text" type="password" name="password" id="password" required/>
          </label>
        </p>

        <p class="form-row form-row-wide">
          <label for="password_confirmation">Confirmation mot de passe:
            <i class="fa fa-lock"></i>
            <input class="input-text" type="password" name="password_confirmation" id="password_confirmation" required/>
          </label>
        </p>
        <input type="submit" class="button border fw margin-top-10" name="register" value="S'inscrire" />
        </form>
      </div>

      <!--Mot de passe oublié-->
      <div class="tab-content" id="tab3" style="display: none;">
        <form action="{{ route('password.email') }}" method="POST" class="login">
          {{ csrf_field() }}
          <p class="form-row form-row-wide">
            <label for="email">
              <i class="fa fa-envelope-o"></i>
              <input type="email" class="input-text" name="email" id="email" placeholder="Adresse email" value="{{ old('email') }}" required/>
            </label>
          </p>

          <div class="form-row">
            <input type="submit" class="button border margin-top-5" name="login" value="Envoyer" />
          </div>

        </form>
      </div>
      <!--Fin mot de passe oublié-->

    </div>
  </div>
</div>
<!-- Sign In Popup / End -->
