@extends('layouts.main')

@section('container')
  <article>
    <h2>{{ $post->tittle }}</h2>

    <p style="font-size:12px;">By :
      <a href="#" class="text-decoration-none"> {{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    <p> {{ $post->excerpt }}</p>
    
    {!! $post->body !!}
    
    <br/>
    <a href="/post" class="text-decoration-none">Back to Blog</a>
  </article>
@endsection