<?php

namespace App\Http\Middleware;

use Closure;

use Sentinel;

class LogInMiddleware
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
        if(
            Sentinel::check() 
            && 
            Sentinel::getUser()->roles()
            ->where('roles.name', 'like', 'dev')
            // ->orWhere('roles.name', 'like', 'manager')
            ->count() 
        > 0){
            return $next($request);
        }else
        	return redirect()->action('LoginController@getAutoActiveUserLogin');
    }
}
