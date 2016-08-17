<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Monitor
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
        if (Auth::user()->i_codrol == 2) {
          return $next($request);
        } else {
          return response('Unauthorized.', 401);
        }

    }
}
