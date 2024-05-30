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
    <div class="filters mb-3">
        <form action="{{ route('route-viewall') }}" method="GET">
            <div class="row">
                <div class="col-md-2">
                    <label for="start_date">Start Date:</label>
                    <input type="date" id="start_date" name="start_date" class="form-control"
                        value="{{ request('start_date') }}">
                </div>
                <div class="col-md-2">
                    <label for="end_date">End Date:</label>
                    <input type="date" id="end_date" name="end_date" class="form-control"
                        value="{{ request('end_date') }}">
                </div>

                <div class="col-md-2">
                    <label for="salary_status">Salary Status:</label>
                    <select name="salary_status" id="salary_status" class="form-control">
                        <option value="">Select all Salary Status</option>
                        <option value="salaried" {{ request('salary_status') == 'salaried' ? 'selected' : '' }}>Salaried
                        </option>
                        <option value="business" {{ request('salary_status') == 'business' ? 'selected' : '' }}>Business
                        </option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label for="city">City:</label>
                    <select name="city" id="city" class="form-control">
                        <option value="">Select City</option>
                        <option value="Dubai" {{ request('city') == 'Dubai' ? 'selected' : '' }}>Dubai</option>
                        <option value="Abu Dhabi" {{ request('city') == 'Abu Dhabi' ? 'selected' : '' }}>Abu Dhabi</option>
                        <option value="Sharjah" {{ request('city') == 'Sharjah' ? 'selected' : '' }}>Sharjah</option>
                        <option value="Ajman" {{ request('city') == 'Ajman' ? 'selected' : '' }}>Ajman</option>
                        <option value="Ras al Khaimah" {{ request('city') == 'Ras al Khaimah' ? 'selected' : '' }}>Ras al
                            Khaimah</option>
                        <option value="Umm-AL Qaiwain" {{ request('city') == 'Umm-AL Qaiwain' ? 'selected' : '' }}>Umm-AL
                            Qaiwain</option>
                        <option value="Fujiarah" {{ request('city') == 'Fujiarah' ? 'selected' : '' }}>Fujiarah</option>
                        <option value="Al-Ain" {{ request('city') == 'Al-Ain' ? 'selected' : '' }}>Al-Ain</option>
                        <!-- Add options for other cities -->
                    </select>
                </div>
                
                <div class="col-md-2">
                    <label for="loan_type">Type of Loan:</label>
                    <select name="loan_type" id="loan_type" class="form-control">
                        <option value="">Select Loan Type</option>
                        <option value="PersonalLoan" {{ request('loan_type') == 'PersonalLoan' ? 'selected' : '' }}>
                            Personal Loan</option>
                        <option value="carloan" {{ request('loan_type') == 'carloan' ? 'selected' : '' }}>Car Loan</option>
                        <option value="creditcard" {{ request('loan_type') == 'creditcard' ? 'selected' : '' }}>Credit Card
                        </option>
                        <option value="BusinessLoan" {{ request('loan_type') == 'BusinessLoan' ? 'selected' : '' }}>
                            Business Loan</option>
                        <option value="MortgageLoan" {{ request('loan_type') == 'MortgageLoan' ? 'selected' : '' }}>
                            Mortgage Loan</option>
                        <!-- Add options for other loan types -->
                    </select>
                </div>
                <!-- Apply Filters button -->
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary mt-2">Apply Filters</button>
                </div>
                <div class="col-md-2">
                    <a  href="{{route('route-addnew')}}" type="submit"  class="btn btn-primary mt-2">Add new Inquiry</a>
                </div>
            </div>
        </form>
    </div>


    <div class="table">
        <table class="table table-sm">
            <thead>
                <tr >
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Nationality</th>
                    <th scope="col">City</th>
                    <th scope="col">Employment status</th>
                    <th scope="col">employer-Company</th>
                    <th scope="col">Monthly Salary</th>
                    <th scope="col">Loan amount</th>
                    <th scope="col">Type of Loan</th>
                    <th scope="col">Actions</th>
                    {{-- <th scope="col">Mail</th> --}}
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($forms as $form)
                    <tr>
                        <td>{{ $form->fname }}</td>
                        <td>{{ $form->email }}</td>
                        <td>{{ $form->contact }}</td>
                        <td>{{ $form->nationality }}</td>
                        <td>{{ $form->city }}</td>
                        <td>{{ $form->employment }}</td>
                        <td>{{ $form->employer }}</td>
                        <td>{{ $form->salary->minimum_salary }} - {{ $form->salary->maximum_salary }} </td>
                        <td>{{ $form->LoanM }}</td>
                        <td>{{ $form->Loan }}</td>
                        <td>
                            <a href="{{ route('route-editform', $form->id) }}" class="btn btn-primary btn-sm"
                                style="width: 72px">Edit</a>
                            <form onsubmit='return confirm("Are you sure you want to delete the data")'
                                action="{{ route('route-deleteform', $form->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mt-1">Delete</button>
                            </form>

                   
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
     
        <div>
            <strong> {{ $forms->links() }}</strong>
        </div>
    </div>
@endsection
