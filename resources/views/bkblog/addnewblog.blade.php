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
    <h1>Create Blog</h1>

    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div> --}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" accept=".jpeg,.jpg,.png" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" value="{{ old('content') }}"id="task-textarea"></textarea>
        </div>
        <div class="form-group mt-1 mb-1">
            <div>
                @error('content')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}"required>
        </div>
        <div class="form-group">
            <label for="slug">meta_tittle</label>
            <input type="text" name="meta_tittle" id="meta_tittle" class="form-control"
                value="{{ old('meta_tittle') }}"required>
        </div>
        <div class="form-group">
            <label for="slug">meta_description</label>
            <input type="text" name="meta_description" id="meta_description" class="form-control"
                value="{{ old('meta_description') }}"required>
        </div>
        <div class="form-group">
            <label for="slug">key Words</label>
            <input type="text" name="key_words" id="key_words" class="form-control"
                value="{{ old('key_words') }}"required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control" value="{{ old('date') }}"required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Create</button>
    </form>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#task-textarea'))
            .catch(error => {
                console.error(error);
            });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#title').on('focusout', function() {
                var slug = $(this).val().toLowerCase().replace(/ /g, "-"); // replace spaces with dashes
                slug = slug.replace(/[^a-zA-Z0-9-]/g, ''); // remove special characters except dashes
                slug = slug.replace(/-{2,}/g, '-'); // remove multiple dashes
                slug = slug.replace(/-$/, ''); // remove trailing dash
                $('#slug').val(slug);
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var input = document.querySelector('#key_words');
            var tagify = new Tagify(input, {
                delimiters: ",",
                pattern: /^[a-zA-Z0-9]+(?:,[a-zA-Z0-9]+)*$/,
                originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
            });

            // Ensure the original text is sent to the backend
            tagify.on('change', function(e) {
                var originalInput = tagify.value.map(tag => tag.value).join(',');
                document.querySelector('textarea[name="reference_number"]').value = originalInput;
            });
        });
    </script>
@endsection
