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
    <div class="card">
        <div class="card-body">
            <form action="{{ route('route-updateform', $form->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="form_name">Name </label>
                    <input type="text" class="form-control" id="form_name" name="fname" value="{{ $form->fname }}">
                </div>
                <div class="form-group">
                    <label for="farm_name">Email</label>
                    <input type="farm_name" class="form-control" id="farm_name" name="email" value="{{ $form->email }}">
                </div>

                <div class="form-group">
                    <label for="location">Mobile Number</label>
                    <input type="text" class="form-control" id="location" name="contact" value="{{ $form->contact }}">
                </div>
                <div class="form-group">
                    <label for="location">Nationality</label>
                    <input type="text" class="form-control" id="location" name="nationality"
                        value="{{ $form->nationality }}">
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <div class="">
                            <div class="">
                                <label class="form-label" for="basicSelect">City</label>
                            </div>
                            <div class="">
                                <select name="city" class="form-select" id="basicSelect">
                                    @foreach ($cities as $city)
                                        <option value="{{ $city }}" {{ $form->city == $city ? 'selected' : '' }}>
                                            {{ $city }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12">
                    <div class="">
                        <div class="">
                            <label class="form-label" for="basicSelect">Employment status</label>
                        </div>
                        <div class="">
                            <select name="Employment" class="form-select" id="basicSelect">
                                @foreach ($employmentStatus as $status)
                                    <option value="{{ $status }}"
                                        {{ $form->employment == $status ? 'selected' : '' }}>
                                        {{ ucfirst($status) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="location">employer-Company </label>
                    <input type="text" class="form-control" id="location" name="employer"
                        value="{{ $form->employer }}">
                </div>
                <div class="col-12">
    <div class="">
        <div class="">
            <label class="form-label" for="basicSelect">Monthly Salary (AED)</label>
        </div>
        <div class="">
            <select name="salary_id" class="form-select" id="basicSelect">
                @foreach ($salaries as $salary)
                    <option value="{{ $salary->id }}" {{ $form->salary_id == $salary->id ? 'selected' : '' }}>
                        {{ $salary->minimum_salary }} - {{ $salary->maximum_salary }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>


                <div class="form-group">
                    <label for="location">Loan amount </label>
                    <input type="number" class="form-control" id="location" name="LoanM" value="{{ $form->LoanM }}">
                </div>
                <div class="col-12">
                    <div class="">
                        <div class="">
                            <label class="form-label" for="basicSelect">Type of Loan</label>
                        </div>
                        <div class="">
                            <select name="Loan" class="form-select" id="basicSelect">
                                <option value="PersonalLoan" {{ $form->Loan == 'PersonalLoan' ? 'selected' : '' }}>
                                    Personal Loan</option>
                                <option value="carloan" {{ $form->Loan == 'carloan' ? 'selected' : '' }}>Car Loan</option>
                                <option value="creditcard" {{ $form->Loan == 'creditcard' ? 'selected' : '' }}>Credit Card
                                </option>
                                <option value="Business Loan" {{ $form->Loan == 'Business Loan' ? 'selected' : '' }}>
                                    Business Loan</option>
                                <option value="Mortgage Loan" {{ $form->Loan == 'Mortgage Loan' ? 'selected' : '' }}>
                                    Mortgage Loan</option>
                            </select>
                        </div>
                    </div>
                </div>




                <button type="submit" class="btn btn-primary mt-2">Update</button>
            </form>
        </div>
    </div>
@endsection
