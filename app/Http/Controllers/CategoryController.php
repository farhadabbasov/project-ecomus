<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryDetail($locale,$id)
    {

        $category = Category::with('pages')->findOrFail($id);
        $categories = Category::all();
        return view('frontend.category-list', compact('category','categories'));
    }
}
