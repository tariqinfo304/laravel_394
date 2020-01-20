<?php

namespace App\Http\Middleware;

use Closure;

class ShopMiddleware
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
        echo "Hello Shop Middleware";
        /*
        //pre-middleware
        echo "Hello Shop Middleware";
        return $next($request);
        */


        //post middleware
        /*
        //$obj =  $next($request);
        //echo $obj;
        // echo "Hello Shop Middleware";
        */

        return $next($request);
    }
}
