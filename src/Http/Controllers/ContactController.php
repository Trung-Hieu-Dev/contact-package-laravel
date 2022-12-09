<?php

namespace Bitfumes\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Bitfumes\Contact\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Bitfumes\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        // return $request->all();
        
        
        // Mail::to('dangtrunghieusg@gmail.com')
        //     ->send(new ContactMailable($request->get('message'), $request->get('name')));

        Mail::to(config('contact.send_email_to'))
            ->send(new ContactMailable($request->get('message'), $request->get('name')));
        
        Contact::create($request->all());

        return redirect(route('contact'));
    }
}
