@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">Create New Post</h1>
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/posts" method="post">
					@csrf
            <div class="mb-3">
                <label for="tittle" class="form-label">Tittle</label>
                <input type="text" class="form-control" id="tittle" placeholder="Tittle..." name="tittle">
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" placeholder="Slug..." name="slug" readonly>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" name="body">
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
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
