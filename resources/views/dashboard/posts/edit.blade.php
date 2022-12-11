@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">Create New Post</h1>
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/posts/{{ $post->slug }}" method="post">
					@method('put')
					@csrf
            <div class="mb-3">
                <label for="tittle" class="form-label">Tittle</label>
                <input type="text" class="form-control  @error('tittle') is-invalid @enderror" id="tittle" placeholder="Tittle..." name="tittle" required autofocus value="{{ old('tittle', $post->tittle) }}">
								@error('tittle')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Slug..." name="slug" readonly required value="{{ old('slug', $post->slug) }}">
								@error('slug')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
											@if(old('category_id', $post->category_id) == $category->id)
													<option value="{{ $category->id }}" selected>{{ $category->name }}</option>
											@else
													<option value="{{ $category->id }}">{{ $category->name }}</option>
											@endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" name="body" value="{{ old('body', $post->tittle) }}">
                <trix-editor input="body"></trix-editor>
								@error('body')
									<p class="text-danger">{{ $message }}</p>
								@enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>

    <script>
        const tittle = document.querySelector('#tittle');
        const slug = document.querySelector('#slug');

        tittle.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?tittle=' + tittle.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

				document.addEventListener('trix-file-accept', function(e) {
					e.preventDefault();
				})
    </script>
@endsection
