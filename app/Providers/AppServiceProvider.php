<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Header;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $header = Header::all();
        $pages = Page::paginate();

        $categories = Category::all();
        $gallery_items = Gallery::all();



        $formatted_gallery_items = [];
        foreach ($gallery_items as $gallery_item) {
            $formatted_gallery_items[$gallery_item['alias']] = $gallery_item;
        }



        $allSettings = Setting::all();

        $mainSettings = [];
        foreach ($allSettings as $item) {
            $mainSettings[$item['key']] = $item['value'];
        }

        View::share('menu_header',$header);
        View::share('formatted_gallery_items', $formatted_gallery_items);
        View::share('pages', $pages);
        View::share('categories', $categories);
        View::share('allSettings', $mainSettings);
    }

}
