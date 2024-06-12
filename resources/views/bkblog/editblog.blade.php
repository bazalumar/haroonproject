@extends('layouts.master')

@section('content')
    <div>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </div>
@endsection

@section('contents')
    <h1>Edit Blog</h1>

    <form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
            @if ($blog->image)
                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                    style="max-width: 200px; height: auto;">
            @endif
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" id="task-textarea" required>{!! old('content', $blog->content) !!}</textarea>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" class="form-control" value="{{ old('slug', $blog->slug) }}" required>
        </div>
        <div class="form-group">
            <label for="meta_title">Meta Title</label>
            <input type="text" name="meta_title" id="meta_title" class="form-control"
                value="{{ old('meta_title', $blog->meta_title) }}" required>
        </div>
        <div class="form-group">
            <label for="meta_description">Meta Description</label>
            <input type="text" name="meta_description" id="meta_description" class="form-control"
                value="{{ old('meta_description', $blog->meta_description) }}" required>
        </div>
        <div class="form-group">
            <label for="key_words">Key Words</label>
            <input type="text" name="key_words" id="key_words" class="form-control"
                value="{{ old('key_words', $blog->key_words) }}" required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control" value="{{ old('date', $blog->date) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#task-textarea'),{
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection

@endsection
