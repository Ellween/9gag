@extends('main')


@section('content')
<div class="single-post">
  <h1>{{$post->title}}</h1>
  <img src="{{asset('images/Pictures/' . $post->picture)}}" alt="">
</div>

@if(Auth::check())

<div class="comment-section">
  <form class="comments-form" type = 'hidden' action="/upload/comments/{{$post->id}}" method="post" data-id ="{{$post->id}}" enctype="multipart/form-data">
    @csrf
    <div class="user-picture">
      <img src = '/images/avatars/{!! Auth::check() ?  Auth::user()->avatar : 'null' !!}'>
    </div>
    <div class="add-comments-field">
      <div class="comment-input">
        <textarea name="comment" rows="4" cols="70" placeholder="Write a Comment"></textarea><br>
      </div>

      <div class="picture-input">
        <input class = 'original-picture-input' type="file" name="meme" value="" id="myFile">
        <img class = 'image-picture-upload' src="/images/upload/image-upload.png" alt="">
      </div>

      <div class="comment-button">
        <button class = 'add-comment' type="button" name="add-comment">Post</button>
      </div>
    </div>

  </form>

</div>

@else

  <h3>Need To Register</h3>

@endif


  <div class="all-comments">
  @foreach($post->comments as $comment)
    @include('templates.templates')
  @endforeach
  </div>
@endsection
