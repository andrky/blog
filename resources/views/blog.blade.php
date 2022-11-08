@extends('layouts.main')

@section('container')
  @foreach ($posts as $post)
  <article class='mb-5 border-bottom pb-4'>
    <h2> 
      <a href='/post/{{ $post->slug }}' class="text-decoration-none">{{ $post->tittle }}</a>
    </h2> 
    <p style="font-size:12px;">By :
      <a href="/authors/{{ $post->user->username }}" class="text-decoration-none"> {{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    <p> {{ $post->excerpt }}</p>
    <a href='/post/{{ $post->slug }}' class="text-decoration-none" style="font-size: 13px">Read more...</a>   
    </article>
  @endforeach
@endsection