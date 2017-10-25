<div class="panel">
  <div class="panel-body">
    <img class="img-circle avatar-small" src="{{ asset('images/user.png') }}" style="width: 40px">
    <strong>{{ Auth::user()->getFullName() }}</strong>
    <span class="pull-right">16-Jul-2017</span>
    <br/>
    <div style="margin-top: 12px; margin-bottom: 12px;">
      Salut mec! Comment tu vas ce matin?
    </div>
  </div>
</div>