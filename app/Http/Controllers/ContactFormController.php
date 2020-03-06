<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $data = \request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        //dd(\request()->all());

        // Send An Email
        Mail::to('bookshareonline@gmail.com')->send(new ContactFormMail($data));

        return redirect('contact')->with('success', $data['name'].', Thank you for your message! Enjoy!');


    }
}
