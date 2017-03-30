<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Redirect;

class RedirectIfLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::guard('patient')->check() || Auth::guard('doctor')->check()) {
            return Redirect::to('/');
        }
        return $next($request);
    }
}
