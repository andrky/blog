@extends('layouts.main')

@section('container')
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8 ">
        <h1 class="mb-3">
          {{ $post->tittle }}
        </h1>

        <p class="fs-6">By :
              <a href="/post?author={{ $post->user->username }}" class="text-decoration-none"> 
                {{ $post->user->name }}
              </a> in 
              <a href="/post?category={{ $post->category->slug }}" class="text-decoration-none">
                {{ $post->category->name }}
              </a>
        </p>

        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="https://source.unsplash.com/500x400?{{ $post->category->name }}">

        <article class="my-3 fs-5">
          {!! $post->body !!}
        </article>
      
        <br/>
        <a href="/post" class="text-decoration-none">Back to Blog</a>
      </div>
    </div>
  </div>
@endsection