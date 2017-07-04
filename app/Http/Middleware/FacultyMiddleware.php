<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class FacultyMiddleware
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
        //1. user should be authenticated
        //2. should be a faculty

        if(Sentinel::check()){
            if(Sentinel::getUser()->inRole('teacher')||Sentinel::getUser()->inRole('head')){

                return $next($request);
            }else
            return redirect('/');
        }else
            return redirect('/');
        
    }
}
