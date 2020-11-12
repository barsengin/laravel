<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    /**
     * @param $lang
     * @return \Illuminate\Http\RedirectResponse
     */
    public  function update($lang) {
        $langs = array_keys(config('app.locales'));

        if (array_key_exists($lang, $langs)) {
            App::setLocale($lang);
        }
         dd(App::getLocale());

    }
}
