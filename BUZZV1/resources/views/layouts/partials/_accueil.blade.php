    <div class="col-md-4">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/headphones.png') }}"><br />
          <h5><strong>Multimédia</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>120</strong></h3>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/car.png') }}"><br />
          <h5><strong>Véhicule</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>9000</strong></h3>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/macbook.png') }}"><br />
          <h5><strong>Informatique</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>13</strong></h3>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/gamepad.png') }}"><br />
          <h5><strong>Jeux vidéo</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>250</strong></h3>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/basketball-jersey.png') }}"><br />
          <h5><strong>Sport</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>12</strong></h3>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/bed.png') }}"><br />
          <h5><strong>Immobilier</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>300</strong></h3>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/repair-tools.png') }}"><br />
          <h5><strong>Outil</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>1000</strong></h3>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/ski.png') }}"><br />
          <h5><strong>Matériel de ski</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>5</strong></h3>
        </div>
      </div>
    </div>
    <div class="col-md-4 test">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/step-ladder.png') }}"><br />
          <h5><strong>Piscine</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>30</strong></h3>
        </div>
      </div>
    </div>

@section('stylesheet')
<style type="text/css">

  .panel-heading.preview {
    padding: 50px;
    text-align: center;
    background-color: #F9FBFA;
    margin-bottom: 30px;
    color: #F96868;
    min-height: 160px;
    border-radius: 50px;
    border: 3px dashed #ff5a5f;
  }

  .panel-heading.preview img {
    width: 20%;  
  }

</style>
@stop