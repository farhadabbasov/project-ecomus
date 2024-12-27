<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeSearchController extends Controller
{
    public function homeSearch($locale)
    {
        return view('frontend.home-search');
    }
}
