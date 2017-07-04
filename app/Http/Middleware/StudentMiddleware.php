<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
class StudentMiddleware
{
    /**
     * Handle an incoming request from student
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Sentinel::check()&& Sentinel::getUser()->inRole('student')){

            return $next($request);
        }else
            return redirect('/');
    }
}
