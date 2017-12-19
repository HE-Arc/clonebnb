<!-- Liste user -->
<div class="messages-inbox">
  <ul>
    @foreach($messages as $message)
    <li class="active-message">
      <a href="{{ route('conversation_path') }}">
        <div class="message-avatar"><img src="{{ secure_asset('uploads/avatars/default.png')}}" alt="" /></div>
        <div class="message-by">
          <div class="message-by-headline">
            <h5></h5>
            <span>2 hurs ago</span>
          </div>
          <p>{{ $message->message }}...</p>
        </div>
      </a>
    </li>
    @endforeach
  </ul>
</div>
<!-- Liste user -->
