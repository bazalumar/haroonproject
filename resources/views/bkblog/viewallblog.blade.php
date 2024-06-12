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
<h1>Manage Blogs</h1>

<a href="{{ route('admin.blogs.create') }}" class="btn btn-primary mb-1">Create New Blog</a>

<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>slug</th>
            {{-- <th>Content</th> --}}
            <th>Date</th>
           
            <th>meta_tittle</th>
            <th>meta_description</th>
            <th>Key Words</th>
             <th>Image</th>

            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($blogs as $blog)
        <tr>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->slug }}</td>
               <td>{{ $blog->date }}</td>
            <td>{{ $blog->meta_tittle }}</td>
            
            <td>{{ $blog->meta_description }}</td>
            <td>{{ $blog->key_words }}</td>
            {{-- <td>{!! Str::limit($blog->content, 50) !!}</td> --}}
         
            <td><img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" style="max-width: 100px; height: auto;"></td>
            <td>
                <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-warning">Edit</a>
                <form   onsubmit='return confirm("Are you sure you want to delete the data")' action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
