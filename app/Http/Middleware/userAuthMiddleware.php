<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class userAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $usermobile=Session::get('usermobile');
        $user_name=Session::get('user_name');
        if(empty($usermobile) && empty($user_name)){
            return redirect()->route('user_login');
        }
        elseif(!empty($usermobile) && !empty($user_name)){
            return $next($request);
        }
       else{
        return redirect()->route('user_login');
       }
    }
}
