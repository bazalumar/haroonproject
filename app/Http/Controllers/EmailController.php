<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Email;

class EmailController extends Controller
{
    //

    public function addNewemail()
    {
        return view('bkemails.addnewemails');
    }

    public function viewAllemail()
    {
        $emails = Email::all();
        return view('bkemails.viewallemail', compact('emails'));
    }



    public function saveemail(Request $req)
    {
        $validated = $req->validate([
            'email' => 'required',
            'email_type' => 'required',
            'status' => 'required',
           


        ]);
        $email = new Email();
        $email->email = $req->email;
        $email->email_type = $req->email_type;
        $email->status = $req->status;
      
        
        $email->save();


        // $emails = Email::where('email_type', 'credit')->where('status', 'Active')->get();
        // $emails = $emails->pluck('email')->toArray();
        // Mail::to($contact->email)->bcc($emails)->send(new ContactNotification($contact));

       

        return redirect()->route('route-viewallemail');
    }

    public function updateemail(Request $req, $id)
    {
        $validated = $req->validate([
                'email' => 'required',
                'email_type' => 'required',
                'status' => 'required',
            ]);

        // Fetch the existing email record by its ID
        $email = Email::findOrFail($id);

        // Update the attributes
        $email->email = $req->email;
        $email->email_type = $req->email_type;
        $email->status = $req->status;

        // Save the changes
        $email->save();

        return redirect()->route('route-viewallemail');
    }

    public function deleteemail(Request $req, $id)
    {
        $email = Email::find($id);
        $email->delete();

        return redirect()->route('route-viewallemail');
    }

    public function editemail(Request $req, $id)
    {

        $emails = Email::find($id);
        return view('bkemails.editemail', compact('emails'));
    }
}
