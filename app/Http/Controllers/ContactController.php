<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function contact() {
        return view('front.contact');
    }
    //->with('success', 'Message sent successfully')

    public function store(Request $request) {
       
        $this->validate($request,[
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();
        return redirect(route('contact'))->with('success', 'Message sent successfully');
    }
}
