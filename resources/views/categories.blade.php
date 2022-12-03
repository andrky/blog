@extends('layouts.main')

@section('container')
  <div class="container py-3">
    <div class="row">
      @foreach ($categories as $category)
      <div class="col-md-4">
        <a href='/post?category={{ $category->slug }}'>
          <div class="card text-bg-dark mb-3">
            <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img-top" alt="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img">
            <div class="card-img-overlay d-flex align-items-center p-0">
              <h5 class="card-title text-center flex-fill p-4 fs-5" style="background-color: rgba(0, 0, 0, 0.5)">
                {{ $category->name }}
              </h5>
            </div>
          </div>
        </a>
      </div>
      @endforeach

    </div>
  </div>
@endsection