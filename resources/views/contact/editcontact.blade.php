@extends('layouts.master')

@section('content')
<div>
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
<div class="card">
    <div class="card-body">
        <form action="{{ route('route-updatecontact', $contacts->id) }}" method="POST">
            @csrf
               @method('PUT')
            <div class="form-group">
                <label for="full_name">Full Name</label>
                <input type="text" class="form-control" id="full_name" name="full_name" value="{{ old('full_name', $contacts->full_name) }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $contacts->email) }}" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject', $contacts->subject) }}" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3" required>{{ old('message', $contacts->message) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Update</button>
        </form>
    </div>
</div>
@endsection
