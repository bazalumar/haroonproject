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
        <form action="{{ route('route-updatesalary', $salarys->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="minimum_salary">Minimum salary</label>
                <input type="number" class="form-control" id="form_name" name="minimum_salary" value="{{ $salarys->minimum_salary }}">
            </div>
            <div class="form-group">
                <label for="maximum_salary">Maximum salary</label>
                <input type="number" class="form-control" id="form_name" name="maximum_salary" value="{{ $salarys->maximum_salary }}">
            </div>

            <button type="submit" class="btn btn-primary mt-2">Update</button>
        </form>
    </div>
</div>
@endsection
