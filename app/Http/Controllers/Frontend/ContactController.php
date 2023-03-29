<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'mobile' => 'required',
                'message' => 'required'


            ]
        );
$emailids=['sp58258@gmail.com','sp990047@gmail.com'];
        $contact = new Contact;
        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->mobile = $request['mobile'];
        $contact->message = $request['message'];
        $contact->save();

        Mail::to($emailids)->send(new SendMail($contact));
        return back()->with('success', 'Thanks for contacting us!');

        return Redirect('/contact');
    }

    public function view(Request $request)
    {
        $contacts = Contact::all();
        $data = compact('contacts');
        return view('frontend.admindashboard')->with($data);
    }
    public function delete($id)
    {
        $contacts = Contact::find($id)->delete();
        return redirect()->back();
    }
}
