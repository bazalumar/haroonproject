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
    <section id="basic-horizontal-layouts">
        <div class="row justify-content-center">
            <div class="col-md-8 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Email Form</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('route-saveemail') }}" class="form form-horizontal">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="email">Emails</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" id="email" class="form-control" name="email"
                                                placeholder="Email" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="email_type">Email Type</label>
                                        </div>
                                        <div class="col-sm-9">
                            <select id="email_type" class="form-control" name="email_type">
                                <option value="" disabled selected>Select Email Type</option>
                                <option value="credit">Credit Email</option>
                                <option value="minimum-5k">minimum 5K Email</option>
                                <option value="above-5k">above 5K Email</option>
                                <option value="admin">Admin Email</option>
                            </select>
                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="status">Status</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select id="status" class="form-control" name="status" required>
                                                <option value="" disabled selected>Select Status</option>
                                                <option value="active">Active</option>
                                                <option value="archive">Archive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-primary me-1">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
