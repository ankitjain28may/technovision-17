<?php

namespace App\Http\Middleware;

use Closure;

class patient
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'patient')
    {
        if (Auth::guard($guard)->check()) {
            return $next($request);
        } elseif (Auth::guard('doctor')->check()) {
            return Redirect::back();
        }
        return Redirect::to('/patient/login');
    }
}
