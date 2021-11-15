<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Session;
use Illuminate\Http\Request;
class Lang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $langArr = array("en", "ar");
        if (($request->server('HTTP_ACCEPT_LANGUAGE') != null)) {
            $languages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
        } else {
            $languages[0] = "en";
        }
//        dd(Session::get('locale'));
        if (session()->has('locale')) {
            app()->setLocale(session()->get('locale'));
        }else {
            if (in_array($languages[0], $langArr))
                App::setLocale($languages[0]);
        }
        return $next($request);
    }
}
