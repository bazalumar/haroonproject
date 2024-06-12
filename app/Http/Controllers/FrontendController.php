<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\FormModel;
use App\Models\SalaryModel;
use App\Models\Email;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\ContactNotification;

class FrontendController extends Controller
{
    public function homeIndex()
    
    {
        return view('frontend.home');
    }
    public function termcondtion()
    {
        return view('frontend.terms_condition');
    }
    public function policycondtion()
    {
        return view('frontend.policy');
    }
    public function privacycondtion()
    {
        return view('frontend.privacy');
    }


    public function carservicedetails()
    {
        return view('frontend.servicedetails.autocarloan');
    }
    public function creditservicedetails()
    {
        return view('frontend.servicedetails.creditloan');
    }
    public function homeservicedetails()
    {
        return view('frontend.servicedetails.homeloan');
    }
    public function businessservicedetails()
    {
        return view('frontend.servicedetails.businessloan');
    }
    public function educationservicedetails()
    {
        return view('frontend.servicedetails.educationloan');
    }
    public function personalservicedetails()
    {
        return view('frontend.servicedetails.personel');
    }

 

    public function servicesIndex()
    {
        return view('frontend.services');
    }

    public function loanIndex()
    {         $salaries = SalaryModel::all();
        return view('frontend.loanform',compact('salaries'));
    }

    public function contactIndex()
    {
        return view('frontend.contact');
    }

    public function contactSubmit(Request $req)
    {
        $validatedData = $req->validate([
            'full_name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

       
    
        $contact = new Contact();
        $contact->full_name = $req->full_name;
        $contact->email = $req->email;
        $contact->subject = $req->subject;
        $contact->message = $req->message;
        $contact->save();

        Mail::to($contact->email)->bcc(explode(',', env('CreditCardMailCC')))->send(new ContactNotification($contact));


        return redirect()->route('route-thanks');
    }

    public function thanksIndex()
    {
        return view('frontend.thankyou');
    }

    public function loanForm(Request $req)
    {
        $form = new FormModel();
        $form->fname = $req->fname;
        $form->email = $req->email;
        $form->contact = $req->contact;
        $form->nationality = $req->nationality;
        $form->city = $req->city;
        $form->employment = $req->employment;
        $form->employer = $req->employer;
        $form->salary_id = $req->salary_id;
        $form->LoanM = $req->LoanM;
        $form->Loan = $req->Loan;
        $form->save();

        // if ($req->Loan == 'creditcard') {
        //     if (env('EmailsActive')) {
        //         Mail::to(env('CreditCardMail'))->bcc(explode(',', env('CreditCardMailCC')))->send(new ContactFormMail($form));
        //     }
        // }

        // if ($form->salary->minimum_salary >= 5000 && $form->salary->maximum_salary <= 7999) {
        //     Mail::to(env('MinimumSalaryMail'))->send(new ContactFormMail($form));
        // } else {
        //     Mail::to(env('AboveMaximumSalary'))->send(new ContactFormMail($form));
        // }
        
       
        return redirect()->route('route-thanks');
    }
}
