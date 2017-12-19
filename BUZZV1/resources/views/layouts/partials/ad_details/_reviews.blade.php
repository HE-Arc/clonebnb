<!-- Reviews -->
<div id="listing-reviews" class="listing-section">
  <h3 class="listing-desc-headline margin-top-75 margin-bottom-20">{{ $ad->getNumComments() }}</h3>

  <div class="clearfix"></div>

  <!-- Reviews -->
  <section class="comments listing-reviews">

    <ul>

      @foreach($ad->comments as $comment)
      <li>
        <div class="avatar"><img src="{{ secure_asset('/uploads/avatars/')}}/{{ $comment->user->photo }}" alt="" /></div>
        <div class="comment-content"><div class="arrow-comment"></div>
          <div class="comment-by">{{ $comment->user->first_name }}<span class="date">{{ $comment->created_at->diffForHumans() }}</span>
            <div class="star-rating" data-rating="{{ $comment->rate }}"></div>
          </div>
          <p>{{ $comment->content }}</p>
        </div>
      </li>
      @endforeach
     </ul>
  </section>
