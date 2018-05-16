@extends('main')


@section('content')
  <div class="posts">
    @foreach ($posts as $post)
    <div class="post-files">
      <a href = '/post/{{$post->id}}' ><h1>{{$post->title}}</h1><br></a>
      <img src="{{asset('images/Pictures/' . $post->picture)}}" alt="">
      <p>{{$post->category}}</p>
      <hr>
    </div>
    @endforeach
  </div>
@endsection
