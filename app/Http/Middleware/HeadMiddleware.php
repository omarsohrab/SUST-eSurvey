<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class HeadMiddleware
{
    /**
     * Handle an incoming request from detp head of head of survey commity.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Sentinel::check()&& Sentinel::getUser()->inRole('head')){

            return $next($request);
        }else
            return redirect('/');
    }
}
