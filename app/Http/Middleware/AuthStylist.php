<?php

namespace App\Http\Middleware;

use Closure;

class AuthStylist
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
        if (auth()->check()) {
            if (auth()->user()->user_type == 'stylist') {
                return $next($request);
            }
        }

        return redirect('/');
    }
}
