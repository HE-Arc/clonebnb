
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
    <div class="col-md-4">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/step-ladder.png') }}"><br />
          <h5><strong>Piscine</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>30</strong></h3>
        </div>
      </div>
    </div>
    <br /><br /><br />

@section('stylesheet')
  <style type="text/css">
a {
  color: #00A699;
}

.text-babu, .icon-babu {
  color: #00A699;
}

.text-red, .icon-red {
  color: #FF5A5F;
}

// BUTTONS
.btn-block {
  display: block;
  white-space: normal;
  width: 100%;
}

.btn {
  color: #fff;
  border-radius: 5px;
  font-weight: bold;
  padding: 9px 27px;
}

.btn-small {
  padding: 5px 15px;
  margin-top: 15px;
}

.btn:hover, .btn:focus {
  color: #fff;
}

.btn.btn-default {
  width: 100%;
  border-color: #c4c4c4;
  background: white;
  color: #484848;
  border-radius: 2px;
  padding: 10px 0;
  margin-top: 10px;
}

.btn.btn-normal {
  border: 1px solid #ff5a5f;
  background-color: #ff5a5f;
}

.btn.btn-normal:active {
  outline: none;
  border-color: #e00007;
  background-color: #e00007;
}

.btn.btn-form {
  border: 1px solid #00A699;
  background-color: #00A699;
}

.btn.btn-form:active {
  outline: none;
  border-color: #066165;
  background-color: #066165;
}

.btn.btn-facebook {
  border: 1px solid #3B5998;
  background-color: #3B5998;
}

.btn.btn-facebook:active {
  outline: none;
  border-color: #2d467b;
  background-color: #2d467b;
}

// AVATAR
.avatar-small {
  width: 28px;
}

.avatar-medium {
  width: 48px;
}

.avatar-large {
  width: 68px;
}

.avatar-full {
  width: 10%;
}

.panel {}
.panel-heading.preview {
  padding: 50px;
  text-align: center;
  background-color: #fff;
  margin-bottom: 30px;
  color: #F96868;
  height: 200px;
}

.panel-heading.preview img {
  width: 40%;  
}

// ROOM SHOW
.amenities li {
  margin-bottom: 10px;
  font-size: 16px;
  list-style-type: none;
}

.amenities .text-line-through {
  text-decoration: line-through;
  color: rgba(0,0,0,0.45);
  font-size: 14px;
}

// RESERVATIONS
.reservation-table td {
  width: 100%;
  border: none;
  border-bottom: 1px solid #dce0e0;
  padding: 10px;
}

.reservation-table .total td {
  font-size: 16px;
  font-weight: bold;
  border: none;
}

.form-control.datepicker {
  color: #00A699;
  background-color: white;
  border: 1px solid #00A699;
  text-align: center;
}

.message-alert {
  color: #d43242;
  font-size: 14px;
  padding-top: 10px;
}

// SEARCH
#main {
  height: 100%;
  overflow: hidden;
}

#left {
  padding: 10px 400px 10px 20px;
  overflow: scroll;
  height: 100%;
}

#right {
  position: fixed;
  top: 0;
  right: 0;
  width: 450px;
  height: 100%;
}

.map_price {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  color: #00A699;
}

  </style>
@stop