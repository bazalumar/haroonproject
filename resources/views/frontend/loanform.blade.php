@section('titte')
    loan
@endsection
 @section('meta_title', ' Apply for a Loan - Easy and Quick Loan Application Process  ')
@section('meta_description', ' Apply for a loan with ease at UAEBankingSol. Our quick and hassle-free application process makes obtaining a loan simple. Get started today!')



@extends('frontend.master')
@section('content')
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <span class="breadcrumb"><a href="#">Home</a> / Apply for loan</span>
                    <h3>Apply for loan</h3>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="contact-page section my-4">
            <div class="container">
                <div class="row">


                    <div class="col-lg-12">

                        <form id="contact-form" action="{{ route('route-loanform') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <div class="text-center">
                                        <h1 style="color: orangered">Loan Form</h1>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <label for="fname">Name</label>
                                        <input type="text" name="fname" id="fname" placeholder="Your Name..."
                                            autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <label for="email">Email Address</label>
                                        <input type="email" name="email" id="email" placeholder="Your E-mail..."
                                            required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <label for="contact">Mobile Number(+971)</label>
                                        <input type="number" name="contact" id="contact" placeholder="Mobile Number..."
                                            required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <label for="nationality">Nationality</label>
                                        <input type="text" name="nationality" id="nationality"
                                            placeholder="Nationality..." required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <label for="city">City</label>
                                        <select name="city" id="city">
                                            <option value="Dubai">Dubai</option>
                                            <option value="Abu Dhabi">Abu Dhabi</option>
                                            <option value="Sharjah">Sharjah</option>
                                            <option value="Ajman">Ajman</option>
                                            <option value="Ras al Khaimah">Ras al Khaimah</option>
                                            <option value="Umm-AL Qaiwain">Umm-AL Qaiwain</option>
                                            <option value="Fujairah">Fujairah</option>
                                            <option value="Al-Ain">Al-Ain</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <label for="Employment">Employment Status</label>
                                        <select name="employment" id="employment">
                                            <option value="salaried">Salaried</option>
                                            <option value="business">Business Person</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <label for="employer">Employer / Company</label>
                                        <input type="text" name="employer" id="employer"
                                            placeholder="Employer / Company..." required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <label for="salary_id">Monthly Salary (AED)</label>
                                         <select name="salary_id" class="form-select" id="basicSelect">
                                                @foreach ($salaries as $salary)
                                                    <option value="{{ $salary->id }}">{{ $salary->minimum_salary }} -
                                                        {{ $salary->maximum_salary }}</option>
                                                @endforeach
                                            </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <label for="LoanM">Loan Amount</label>
                                        <input type="number" name="LoanM" id="LoanM" placeholder="Loan Amount..."
                                            required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <label for="Loan">Type of Loan</label>
                                        <select name="Loan" id="Loan">
                                            <option value="PersonalLoan">Personal Loan</option>
                                            <option value="carloan">Car Loan</option>
                                            <option value="creditcard">Credit Card</option>
                                            <option value="Business Loan">Business Loan</option>
                                            <option value="Mortgage Loan">Mortgage Loan</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>



                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection
