<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SalaryModel;


class SalaryController extends Controller
{
    public function addNewsalary()
    {
        return view('forms.addnewsalary');
    }

    public function viewAllsalary()
    {
        $salarys = SalaryModel::all();
        return view('forms.viewallsalary', compact('salarys'));
    }


    public function saveSalary(Request $req)
    {
        $salary = new SalaryModel();
        $salary->minimum_salary = $req->minimum_salary;
        $salary->maximum_salary = $req->maximum_salary;
        $salary->save();

        return redirect()->route('route-viewallsalary');
    }

    public function updateSalary(Request $req, $id)
    {
        $salary = SalaryModel::find($id);
        $salary->minimum_salary = $req->minimum_salary;
        $salary->maximum_salary = $req->maximum_salary;
        $salary->save();

        return redirect()->route('route-viewallsalary');
    }

    public function deleteSalary(Request $req, $id)
    {
        $salary = SalaryModel::find($id);
        $salary->delete();

        return redirect()->route('route-viewallsalary');
    }

    public function editSalary(Request $req, $id)
    {
        $salarys = SalaryModel::find($id);
        return view('forms.editsalary', compact('salarys'));
    }

}
