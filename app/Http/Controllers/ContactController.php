<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }



    public function contact_form(){
        return view('website.contact_us.contact');


    }
}
