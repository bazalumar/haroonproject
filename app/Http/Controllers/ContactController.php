<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactNotification;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function addNewcontact()
    {
        return view('contact.addnewcontact');
    }

    public function viewAllContact()
    {
        $contacts = Contact::all();
        return view('contact.viewallcontact', compact('contacts'));
    }



    public function saveContact(Request $req)
    {
        $validated = $req->validate([
            'full_name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
   
        ]);
        $contact = new Contact();
        $contact->full_name = $req->full_name;
        $contact->email =$req->email;
        $contact->subject = $req->subject;
        $contact->message = $req->message;
        $contact->save();

        
        Mail::to($contact->email)->bcc(explode(',', env('CreditCardMailCC')))->send(new ContactNotification($contact));

        return redirect()->route('route-viewallcontact');
    }

    public function updatecontact(Request $req, $id)
    {
        $validated = $req->validate([
            'full_name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ]);
        $contact = Contact::find($id);
        $contact->full_name = $req->full_name;
        $contact->email = $req->email;
        $contact->subject = $req->subject;
        $contact->message = $req->message;
        $contact->save();
        
        return redirect()->route('route-viewallcontact');
    }

    public function deletecontact(Request $req, $id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect()->route('route-viewallcontact');
    }

    public function editcontact(Request $req, $id)
    {
        
        $contacts= Contact::find($id);
        return view('contact.editcontact', compact('contacts'));
    }

}
