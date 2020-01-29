<?php

namespace App\Http\Middleware;

use Closure;
use DB;

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



        if(session()->has("username"))
        {

            //it will check right for route to spacific user id
            $rights = DB::table("users as  u")
            ->join("user_right as us","u.id","=","us.user_id")
            ->join("rights as r","us.right_id","=","r.id")
            ->where("u.id",session()->get("id"))
            ->get();

            $route =  $request->path();
            $route = explode("/", $route);
            if(!empty($route) && isset($route[0]))
            {
                $route = $route[0];
            }
            $is = 0;
            foreach ($rights as $row) {
                if($route == $row->right)
                {
                    return $next($request);
                }
            }
             return redirect("shop");
        }
        else
        {
            return redirect("login");
        }
      //  echo "Hello Shop Middleware";
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

       
    }
}
