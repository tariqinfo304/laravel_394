<?php

namespace App\Http\Middleware;

use Closure;

class APISessionMiddleware
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
        echo "We will check session of API by sending call to Database table 'api_session'";
        return $next($request);
    }
}
