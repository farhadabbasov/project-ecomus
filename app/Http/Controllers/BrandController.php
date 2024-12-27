<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brands($locale)
    {
        return view('frontend.brands');
    }
}
