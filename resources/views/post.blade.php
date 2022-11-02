@extends('layouts.main')

@section('container')
  <article>
    <h2>{{ $post->tittle }}</h2>

    {!! $post->body !!}
    
    <br/>
    <a href="/post">Back to Blog</a>
  </article>
@endsection