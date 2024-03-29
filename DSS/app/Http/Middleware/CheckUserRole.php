<?php

namespace App\Http\Middleware;

Use closure;
Use Auth;

class CheckUserRole{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->role=='admin')
            return $next($request);
        else
            return abort(403, 'Unauthorized');
    }
}
