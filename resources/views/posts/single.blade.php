@extends('main')


@section('content')
<div class="single-post">
  <h1>{{$post->title}}</h1>
  <img src="{{asset('images/Pictures/' . $post->picture)}}" alt="">
</div>

<div class="comment-section">
  <form class="" action="/upload/comments/{{$post->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="user-picture">
      <img src = '/images/avatars/{{ Auth::user()->avatar}}'>
    </div>
    <div class="comment-input">
      <textarea name="comment" rows="8" cols="80" placeholder="Write a Comment"></textarea>
      <input type="file" name="meme" value="">
    </div>

    <div class="comment-button">
      <button type="submit" name="add-comment">Post</button>
    </div>
  </form>
</div>

  <div class="all-comments">
  @foreach($post->comments as $comment)
    <div class="comment-list">
      <div class="comment-author">
        <img src = '/images/avatars/{{ Auth::user()->avatar}}'>
      </div>
      <div class="comment-desrciption">
        <h5>{{Auth::user()->name}}</h5>
        <p>{{$comment->comment}}</p>
        <img src="{{asset('images/memes/' . $comment->meme  )}}" alt="">
      </div>
    </div>
  @endforeach
  </div>
@endsection
