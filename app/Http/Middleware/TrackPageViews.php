<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackPageViews
{
     public function handle($request, Closure $next)
    {
        if (!$request->session()->has('page_views')) {
            $request->session()->put('page_views', 1);
        } else {
            $request->session()->increment('page_views');
        }

        return $next($request);
    }
}
