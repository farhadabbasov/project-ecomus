<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    public function blogDetail($id){

        $page = Page::findOrFail($id);
        $pages = Page::limit(6)->get();

        return view('frontend.blog-detail',compact('page','pages'));
    }
}
