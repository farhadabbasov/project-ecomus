<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\HeaderTranslation;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index($locale)
    {
        $header = Header::all();

        return view('frontend.includes.header', compact('header'));
    }
}
