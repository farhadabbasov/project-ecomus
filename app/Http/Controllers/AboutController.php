<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Gallery;

class AboutController extends Controller
{
    public function about()
    {

        $about = About::find(1);
        $gallery_items = Gallery::all();

        $formatted_gallery_items = []; //An empty array $formatted_gallery_items is created to hold the transformed data.

        foreach ($gallery_items as $gallery_item) {
            $formatted_gallery_items[$gallery_item['alias']] = $gallery_item;
        }

        return view('frontend.about-us', compact('about', 'formatted_gallery_items'));
    }


}
