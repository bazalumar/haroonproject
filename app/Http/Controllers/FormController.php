<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use App\Models\FormModel;
use App\Models\SalaryModel;
use App\Models\Email;
use Illuminate\Support\Facades\Mail;

use function Pest\Laravel\delete;

class FormController extends Controller
{
    public function addNew()
    {
        $salaries = SalaryModel::all();


        return view('forms.addnew', compact('salaries'));
    }

    public function viewAll(Request $request)
    {
        $query = FormModel::query();


        if ($request->input('start_date') && $request->input('end_date')) {
            $query->whereDate('created_at', '>=', $request->start_date)
                ->whereDate('created_at', '<=', $request->end_date);
        }


        if ($request->input('salary_status')) {
            $query->where('employment', $request->salary_status);
        }


        if ($request->input('city')) {
            $query->where('city', $request->city);
        }




        if ($request->input('loan_type')) {
            $query->where('Loan', $request->loan_type);
        }

        $forms = $query->paginate(500);

        return view('forms.viewall', compact('forms'));
    }



    public function saveForm(Request $req)
    {
        $form = new FormModel();

        $form->fname = $req->fname;
        $form->email = $req->email;
        $form->contact = $req->contact;
        $form->nationality = $req->nationality;
        $form->city = $req->city;
        $form->employment = $req->Employment;
        $form->employer = $req->employer;
        $form->salary_id = $req->salary_id;
        $form->LoanM = $req->LoanM;
        $form->Loan = $req->Loan;
        $form->save();



        // dd($req->Salary, '5000-7999',$req->Salary == '5000-7999');
        $adminmails = $this->fetchEmails('admin');
        if ($req->Loan == 'creditcard') {
            $creditCardEmails = $this->fetchEmails('credit');
            if(count($creditCardEmails) > 0){
                Mail::to($form->email)->bcc($creditCardEmails)->send(new ContactFormMail($form));
            }
        }
        if ($form->salary->minimum_salary >= '5000' && $form->salary->maximum_salary <= '1000') {
            $maxEmails = $this->fetchEmails('above-5k');
            if (count($maxEmails) > 0) {
                Mail::to($maxEmails)->bcc($adminmails)->send(new ContactFormMail($form));
            }
        } else {
            $minimumEmails = $this->fetchEmails('minimum-5k');
            if(count($minimumEmails) > 0){
                (Mail::to($minimumEmails)->bcc($adminmails)->send(new ContactFormMail($form)));
            }
        }

        if(count($adminmails)>0){
            Mail::to($form->email)->bcc($adminmails)->send(new ContactFormMail($form));
        }        
        


        return redirect()->route('route-viewall');
    }

    public function fetchEmails($type){
        $emails = Email::where('email_type', $type)->where('status', 'active')->get() ?? [];
        if(count($emails) > 0){
            $emails = $emails->pluck('email')->toArray();
            return $emails;
        } else {
            return [];
        }
    }


    public function updateForm(Request $req, $id)
    {





        $form =  FormModel::find($id);

        $form->fname = $req->fname;
        $form->email = $req->email;
        $form->contact = $req->contact;
        $form->nationality = $req->nationality;
        $form->city = $req->city;
        $form->employment = $req->Employment;
        $form->employer = $req->employer;
        $form->salary_id = $req->salary_id;
        $form->LoanM = $req->LoanM;
        $form->Loan = $req->Loan;


        $form->save();
        return redirect()->route('route-viewall');
    }
    public function editForm($id)
    {
        $form = FormModel::find($id);
        $salaries = SalaryModel::all();
        $cities = ['Dubai', 'Abu Dhabi', 'Sharjah', 'Ajman', 'Ras al Khaimah', 'Umm-AL Qaiwain', 'Fujiarah', 'Al-Ain'];
        $employmentStatus = ['salaried', 'Business'];
        return view('forms.edit', compact('form', 'cities', 'employmentStatus', 'salaries'));
    }
    public function deleteform(Request $req, $id)
    {

        $form =  FormModel::find($id);
        $form->delete();

        return redirect()->route('route-viewall');
    }
}
