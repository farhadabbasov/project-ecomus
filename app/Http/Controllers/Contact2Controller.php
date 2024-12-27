<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact2Controller extends Controller
{
    public function contact2($locale)
    {
        return view('frontend.contact-2');
    }
}
