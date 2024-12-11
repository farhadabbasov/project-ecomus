<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Category;
use App\Models\Menu;
use App\Models\User;
use App\Models\Setting;
use App\Models\Contact;


class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');


        $pages = Page::where('name', 'LIKE', "%{$query}%")->get();
        $categories = Category::where('name', 'LIKE', "%{$query}%")->get();
        $menus = Menu::where('name', 'LIKE', "%{$query}%")->get();
        $users = User::where('name', 'LIKE', "%{$query}%")->get();
        $settings = Setting::where('name', 'LIKE', "%{$query}%")->get();
        $contacts = Contact::where('name', 'LIKE', "%{$query}%")->get();

        return response()->json([
            'pages' => $pages,
            'categories' => $categories,
            'menus' => $menus,
            'users' => $users,
            'settings' => $settings,
            'contacts' => $contacts
        ]);
    }
}
