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
                        <h4 class="card-title">Inquiry from</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('route-saveform') }}" class="form form-horizontal">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="first-name">Name</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" id="first-name" class="form-control" name="fname"
                                                placeholder="First Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="email-id">Email</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="email" id="email-id" class="form-control" name="email"
                                                placeholder="Email" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="contact-info">Mobile Number(+971)</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="number" id="contact-info" class="form-control" name="contact"
                                                placeholder="Mobile" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="nationality">Nationality</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="nationality" id="nationality" class="form-control"
                                                name="nationality" placeholder="Nationality" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="form-label" for="basicSelect">City</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select name="city" class="form-select" id="basicSelect">
                                                <option value="Dubai">Dubai</option>
                                                <option value="Abu Dhabi">Abu Dhabi</option>
                                                <option value="Sharjah">Sharjah</option>
                                                <option value="Ajman">Ajman</option>
                                                <option value="Ras al Khaimah">Ras al Khaimah</option>
                                                <option value="Umm-AL Qaiwain">Umm-AL Qaiwain</option>
                                                <option value="Fujiarah">Fujiarah</option>
                                                <option value="Al-Ain">Al-Ain</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="form-label" for="basicSelect">Employment status</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select name="Employment" class="form-select" id="basicSelect">
                                                <option value="saleried">Salaried</option>
                                                <option value="Business">Business Person</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="employer">employer / Company</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="employer" id="employer" class="form-control" name="employer"
                                                placeholder="employer / Company" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="form-label" for="basicSelect">Monthly Salary (AED)</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select name="salary_id" class="form-select" id="basicSelect">
                                                @foreach ($salaries as $salary)
                                                    <option value="{{ $salary->id }}">{{ $salary->minimum_salary }} -
                                                        {{ $salary->maximum_salary }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="Loan">Loan amount</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="number" id="Loan" class="form-control" name="LoanM"
                                                placeholder="Loan amount" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="form-label" for="basicSelect">Type of Loan</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select name="Loan" class="form-select" id="basicSelect">
                                                <option value="PersonalLoan">Personal Loan</option>
                                                <option value="carloan">Car Loan</option>
                                                <option value="creditcard">Credit Card</option>
                                                <option value="Business Loan">Business Loan</option>
                                                <option value="Mortgage Loan">Mortgage Loan</option>
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
