<div class="container">
  <div class="row test">
    @foreach ($categories as $category)
    <div class="col-md-4">
      <a href="{{ route('ads_grid_path', $category['id']) }}" class="style_prevu_kit">
      <div class="">
        <div class="panel-heading preview">
          <img src="{{ asset('images/'.$category['icon'].'.png') }}" style="width: 100px"><br />
          <h5><strong>{{ $category['name'] }}</strong></h5>
          <h3 style="color: #7C3CE6;"><strong>{{ $category->adsNumber() }}</strong></h3>
        </div>
      </div>
      </a>
    </div>
    @endforeach

  </div>
</div>
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
  .fond{
    position:absolute;
    padding-top:85px;
    top:0;
    left:0;
    right:0;
    bottom:0;
    background-color:#00506b;
  }

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
