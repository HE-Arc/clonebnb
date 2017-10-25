    <div class="col-md-4">
    <a href="{{ route('article_path') }}" class="style_prevu_kit">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/headphones.png') }}"><br />
          <h5><strong>Multimédia</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>120</strong></h3>
        </div>
      </div>
      </a>
    </div>

    <div class="col-md-4">
    <a href="{{ route('article_path') }}" class="style_prevu_kit">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/car.png') }}"><br />
          <h5><strong>Multimédia</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>120</strong></h3>
        </div>
      </div>
      </a>
    </div>

    <div class="col-md-4">
    <a href="{{ route('article_path') }}" class="style_prevu_kit">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/macbook.png') }}"><br />
          <h5><strong>Multimédia</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>120</strong></h3>
        </div>
      </div>
      </a>
    </div>

    <div class="col-md-4">
    <a href="{{ route('article_path') }}" class="style_prevu_kit">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/gamepad.png') }}"><br />
          <h5><strong>Multimédia</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>120</strong></h3>
        </div>
      </div>
      </a>
    </div>

    <div class="col-md-4">
    <a href="{{ route('article_path') }}" class="style_prevu_kit">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/basketball-jersey.png') }}"><br />
          <h5><strong>Multimédia</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>120</strong></h3>
        </div>
      </div>
      </a>
    </div>

    <div class="col-md-4">
    <a href="{{ route('article_path') }}" class="style_prevu_kit">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/bed.png') }}"><br />
          <h5><strong>Multimédia</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>120</strong></h3>
        </div>
      </div>
      </a>
    </div>

    <div class="col-md-4">
    <a href="{{ route('article_path') }}" class="style_prevu_kit">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/repair-tools.png') }}"><br />
          <h5><strong>Multimédia</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>120</strong></h3>
        </div>
      </div>
      </a>
    </div>

    <div class="col-md-4">
    <a href="{{ route('article_path') }}" class="style_prevu_kit">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/ski.png') }}"><br />
          <h5><strong>Multimédia</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>120</strong></h3>
        </div>
      </div>
      </a>
    </div>

    <div class="col-md-4">
    <a href="{{ route('article_path') }}" class="style_prevu_kit">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/step-ladder.png') }}"><br />
          <h5><strong>Multimédia</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>120</strong></h3>
        </div>
      </div>
      </a>
    </div>

@section('stylesheet')
<style type="text/css">
  

  .panel-heading.preview {
    padding: 50px;
    text-align: center;
    background-color: #F9FBFA;
    color: #F96868;
    min-height: 160px;
    border-radius: 50px;
    border: 3px dashed #ff5a5f;
  }

  .panel-heading.preview img {
    width: 20%;  
  }
  .fond{position:absolute;padding-top:85px;top:0;left:0; right:0;bottom:0;
 background-color:#00506b;}

.style_prevu_kit{
  text-decoration: none;
  display:inline-block;
  border-radius: 50px;
  border:0;
  width:100%;
  height:210spx;
  margin-bottom: 40px;
  position: relative;
  -webkit-transition: all 200ms ease-in;
  -webkit-transform: scale(1); 
  -ms-transition: all 200ms ease-in;
  -ms-transform: scale(1); 
  -moz-transition: all 200ms ease-in;
  -moz-transform: scale(1);
  transition: all 200ms ease-in;
  transform: scale(1);   

}
.style_prevu_kit:hover{
  text-decoration: none;
  box-shadow: 0px 0px 150px #000000;
}

</style>
@stop