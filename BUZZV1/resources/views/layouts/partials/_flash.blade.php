@if(count($errors) >0)
    @foreach($errors->all() as $error)
      <div class="container alert alert-danger">{{ $error }}</div>
    @endforeach
@endif