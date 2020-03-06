<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Validator;

class NewslettersController extends Controller
{
    //
    function index(){
        return view('newsletter');
    }

    function send(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $data = array(
            'name' => $request->name,
            'email' =>$request->email,
        );

        Mail::to($request->email)->send(new SendMail($data));
        return back()->with('success', $request->name.', Thanks for subscribing on our Newsletter! Enjoy!');
    }
}
