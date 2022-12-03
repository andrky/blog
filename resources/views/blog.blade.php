@extends('layouts.main')

@section('container')
    {{-- Header Tittle --}}
    <h2 class="mb-4 text-center"> {{ $title }}</h2>

    <div class="row justify-content-center mb-4">
        <div class="col-md-8 col-sm-10 col-10">
            <form action="/post">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Kondisi jika postingna kosong --}}
    @if ($posts->count())
        {{-- Hero --}}
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <h5 class="card-title">
                    <a href='/post/{{ $posts[0]->slug }}' class="text-decoration-none text-dark">
                        {{ $posts[0]->tittle }}
                    </a>
                </h5>
                <p>
                    <small class="text-muted">By :
                        <a href="/post?author={{ $posts[0]->user->username }}" class="text-decoration-none">
                            {{ $posts[0]->user->name }}
                        </a> in
                        <a href="/post?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
                            {{ $posts[0]->category->name }}
                        </a> {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">
                    {{ $posts[0]->excerpt }}
                </p>

                <a href='/post/{{ $posts[0]->slug }}' class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>


        {{-- All Post Card --}}
        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2"
                                style="font-size: 12px; background-color:rgba(0, 0, 0, 0.5)">
                                <a href="/post?category={{ $post->category->slug }}"
                                    class="text-decoration-none text-white ">
                                    {{ $post->category->name }}
                                </a>
                            </div>
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top"
                                alt="https://source.unsplash.com/500x400?{{ $post->category->name }}">
                            <div class="card-body">
                                <h5 class="card-title"><a href='/post/{{ $post->slug }}'
                                        class="text-decoration-none text-dark">
                                        {{ $post->tittle }}
                                    </a>
                                </h5>
                                <p>
                                    <small class="text-muted">By :
                                        <a href="/post?author={{ $post->user->username }}" class="text-decoration-none">
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
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
@endsection
