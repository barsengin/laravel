<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class AdminPageLanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $langs = [
            'tr',
            'en'
        ];

        if(session()->has('lang') && array_key_exists(session()->getLocale('lang'), $langs))
            {
                dd(session()->get('lang'));
            \app()->setLocale(session()->get('lang'));
            App::setLocale('en');
            }

        return $next($request);
    }
}
