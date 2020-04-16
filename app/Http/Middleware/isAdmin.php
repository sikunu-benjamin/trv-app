<?php

namespace App\Http\Middleware;

use Closure;

class isAdmin
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
        if (!auth()->user()){
            return redirect(route('welcome'));
        } else {
            if (!auth()->user()->isAdmin()) {
                return redirect(route('home'));
            }
        }
        return $next($request);
    }
}
