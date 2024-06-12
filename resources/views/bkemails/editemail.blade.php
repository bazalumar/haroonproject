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
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
           <form action="{{ route('route-updateemail', $emails->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $emails->email) }}">
        <!-- Use old('email') to display the old email value if it exists, otherwise, display the current email -->
    </div>
    <div class="form-group">
        <label for="email_type">Email Type</label>
        <select id="email_type" class="form-control" name="email_type">
            <option value="" disabled selected>Select Email Type</option>
            <option value="credit" {{ old('email_type', $emails->email_type) == 'credit' ? 'selected' : '' }}>Credit Email</option>
            <option value="minimum-5k" {{ old('email_type', $emails->email_type) == 'minimum-5k' ? 'selected' : '' }}>Minimum 5K Email</option>
            <option value="above-5k" {{ old('email_type', $emails->email_type) == 'above-5k' ? 'selected' : '' }}>Above 5K Email</option>
            <option value="admin" {{ old('email_type', $emails->email_type) == 'admin' ? 'selected' : '' }}>Admin Email</option>
        </select>
        <!-- Use old('email_type') to display the old email type value if it exists, otherwise, display the current email type -->
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select id="status" class="form-control" name="status" required>
            <option value="" disabled>Select Status</option>
            <option value="active" {{ old('status', $emails->status) == 'active' ? 'selected' : '' }}>Active</option>
            <option value="archive" {{ old('status', $emails->status) == 'archive' ? 'selected' : '' }}>Archive</option>
        </select>
        <!-- Use old('status') to display the old status value if it exists, otherwise, display the current status -->
    </div>
    <!-- Rest of your form fields... -->
    <button type="submit" class="btn btn-primary mt-2">Update</button>
</form>

        </div>
    </div>
@endsection
