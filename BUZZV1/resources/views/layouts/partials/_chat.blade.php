<div class="panel" style="margin-top: 100px;">
  <div class="panel-body">
    <img class="img-circle avatar-small" src="{{ secure_asset('uploads/avatars/{{ Auth::user()->photo }}') }}" style="width: 40px">
    <strong>{{ Auth::user()->getFullName() }}</strong>
    <span class="pull-right">16-Jul-2017</span>
    <br/>
    <div style="margin-top: 12px; margin-bottom: 12px;">
      Salut mec! Comment tu vas ce matin?
    </div>
  </div>
</div>
