@extends('main')


@section('content')
  <div class="posts">
    @foreach ($posts as $post)
    <div class="post-files">
      {{$post->title}}<br>
      <img src="{{asset('images/Pictures/' . $post->picture)}}" alt=""><br>
      {{$post->category}}
    </div>
    @endforeach
  </div>
@endsection
