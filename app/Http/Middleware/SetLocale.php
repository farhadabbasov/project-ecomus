<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//        $locale = $request->get('locale', config('app.locale'));
//        app()->setLocale($locale);

        $locale = $request->segment(1);
        if ( in_array($locale, ['en', 'az'])) {
            App::setLocale($locale);
        } else {
            // set default / fallback locale
            App::setLocale('en');
        }

        return $next($request);
    }
}
