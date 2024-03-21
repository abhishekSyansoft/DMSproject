<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
     public function handle($request, Closure $next)
            {
                if(!Auth::check()){
                    return redirect()->route('login');
                }
        
                if(Auth::user()->isAdmin == true){
                    return $next($request);
                }
        
                return redirect()->back()->with('unauthorised', 'You are 
                  unauthorised to access this page');
            }
    
}
