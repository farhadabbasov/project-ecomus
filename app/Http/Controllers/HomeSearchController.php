<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeSearchController extends Controller
{
    public function homeSearch()
    {
        return view('frontend.home-search');
    }
}
