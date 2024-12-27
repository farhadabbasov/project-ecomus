<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    public function blogDetail($locale,$id){

        $page = Page::findOrFail($id)->translate($locale);
        $pages = Page::limit(6)->get();
dd($page);
        return view('frontend.blog-detail',compact('page','pages'));
    }
}
