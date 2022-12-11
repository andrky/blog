@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row py-3">
            <div class="col-lg-8 col-md-8 ">
                <h1 class="mb-4">
                    {{ $post->tittle }}
                </h1>

                <a href="/dashboard/posts" class="text-decoration-none btn btn-success"><span data-feather="arrow-left"></span></span>Back to all My Post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="text-decoration-none btn btn-warning"><span data-feather="edit"></span>Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
															@method('delete')
															@csrf
															<button type="submit" class="text-decoration-none btn btn-danger" onclick="return confirm('Are you sure ?')"><span data-feather="x-circle"></span>Delete</button>
														</form>
                <p class="fs-6 mt-3">By :
                    <a href="/post?author={{ $post->user->username }}" class="text-decoration-none">
                        {{ $post->user->name }}
                    </a> in
                    <a href="/post?category={{ $post->category->slug }}" class="text-decoration-none">
                        {{ $post->category->name }}
                    </a>
                </p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid"
                    alt="https://source.unsplash.com/500x400?{{ $post->category->name }}">

                <article class="my-3">
                    {!! $post->body !!}
                </article>

                <br />
            </div>
        </div>
    </div>
@endsection
