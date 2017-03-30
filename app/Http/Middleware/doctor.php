<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Redirect;

class doctor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'doctor')
    {
        if (Auth::guard($guard)->check()) {
            return $next($request);
        } elseif (Auth::guard('patient')->check()) {
            return Redirect::back();
        }
        return Redirect::to('/doctor/login');
    }
}
