<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($locale)
    {



        return view('frontend.index');
    }
}
