<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Page;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogList(){

        $pages = Page::paginate();

        $categories = Category::all();

        return view('frontend.blog-list',compact('pages','categories'));
    }
}
