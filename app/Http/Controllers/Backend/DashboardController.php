<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $pages = Page::all()->count();
        $categories = Category::all()->count();
        $menus = Menu::all()->count();
        $users = User::all()->count();
        $settings = Setting::all()->count();
        $contacts = Contact::all()->count();
        return view('backend.dashboard', compact('pages', 'categories', 'menus', 'users', 'settings', 'contacts'));
    }
}
