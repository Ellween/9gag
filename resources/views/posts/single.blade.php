@extends('main')


@section('content')
<div class="single-post">
  <h1>{{$post->title}}</h1>
  <img src="{{asset('images/Pictures/' . $post->picture)}}" alt="">
</div>

<div class="comment-section">
  <form class="comments-form" action="/upload/comments/{{$post->id}}" method="post" data-id ="{{$post->id}}" enctype="multipart/form-data">
    @csrf
    <div class="user-picture">
      <img src = '/images/avatars/{{ Auth::user()->avatar}}'>
    </div>
    <div class="comment-input">
      <textarea name="comment" rows="8" cols="80" placeholder="Write a Comment"></textarea>
      <input type="file" name="meme" value="">
    </div>

    <div class="comment-button">
      <button class = 'add-comment' type="button" name="add-comment">Post</button>
    </div>
  </form>
</div>

  <div class="all-comments">
  @foreach($post->comments as $comment)
    @include('templates.templates')
  @endforeach
  </div>
@endsection
