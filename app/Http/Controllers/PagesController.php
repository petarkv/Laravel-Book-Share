<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function registration(){
        return view('registration');
    }
    public function uploadbooks(){
        return view('uploadbooks');
    }

    public function userDetails(){
        return view('userDetails');
    }

    public function about(){
        return view('about');
    }

    /*public function contact(){
        return view('contact');
    }*/
}
