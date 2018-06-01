<div class="comment-list">
  <div class="comment-author">
    <img src = '/images/avatars/{{$comment->user->avatar}}'>
  </div>
  <div class="comment-desrciption">
    <h5>{{$comment->user->name}}</h5>
    <p>{{$comment->comment}}</p>
    {{-- <img src="{{asset($comment->meme)}}" alt=""> --}}
  </div>
</div>
