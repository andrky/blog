@extends('layouts.main')

@section('container')
  {{-- Header Tittle --}}
  <h2 class="mb-4"> {{ $title }}</h2>

  {{-- Kondisi jika postingna kosong --}}
  @if ($posts->count())
    {{-- Hero --}}
    <div class="card mb-3">
      <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
      <div class="card-body text-center">
        <h5 class="card-title">
          <a href='/post/{{ $posts[0]->slug }}' class="text-decoration-none text-dark">
            {{ $posts[0]->tittle }}
          </a>
        </h5>
        <p>
          <small class="text-muted">By :
            <a href="/authors/{{ $posts[0]->user->username }}" class="text-decoration-none"> 
              {{ $posts[0]->user->name }}
            </a> in 
            <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">
              {{ $posts[0]->category->name }}
            </a> {{ $posts[0]->created_at->diffForHumans() }}
          </small>
        </p>
        <p class="card-text">
          {{ $posts[0]->excerpt }}
        </p>

        <a href='/post/{{ $posts[0]->slug }}' class="text-decoration-none btn btn-primary" >Read more</a> 
      </div>
    </div>
  @else
    <p class="text-center fs-4">No post found.</p>
  @endif

  {{-- All Post Card --}}
  <div class="container">
    <div class="row">
      @foreach ($posts->skip(1) as $post)
      <div class="col-md-4 col-sm-6 mb-3">
        <div class="card">
          <div class="position-absolute px-3 py-2" style="font-size: 12px; background-color:rgba(0, 0, 0, 0.5)">
            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white ">
              {{ $post->category->name }}
            </a>  
          </div>
          <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="https://source.unsplash.com/500x400?{{ $post->category->name }}">
          <div class="card-body">
            <h5 class="card-title"><a href='/post/{{ $post->slug }}' class="text-decoration-none text-dark">
            {{ $post->tittle }}
          </a>
            </h5>
            <p>
              <small class="text-muted">By :
                <a href="/authors/{{ $post->user->username }}" class="text-decoration-none"> 
                  {{ $post->user->name }}
                </a> {{ $post->created_at->diffForHumans() }}
              </small>
            </p>
            <p class="card-text">
              {{ $post->excerpt }}</p>
            <a href="/post/{{ $post->slug }}" class="btn btn-primary">
              Read more
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection