
@extends('layouts.master')
@section('content')
<div><li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                            </li></div>
@endsection


@section('contents')
 <section id="basic-horizontal-layouts">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form</h4>
                                </div>
                                <div class="card-body">
                                    <form  method="POST" action="{{ route('route-savesalary') }}" class="form form-horizontal">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="first-name">Minimum salary</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="number" id="first-name" class="form-control" name="minimum_salary" placeholder="Minimum salary" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="email-id"> Maximum salary</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="number" id="email-id" class="form-control" name="maximum_salary" placeholder="Maximum salary" />
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