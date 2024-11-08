<?php

namespace App\Http\Middleware;

use Closure;

//use Illuminate\Container\Attributes\Auth;

use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class Vendor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->usertype !='vendedor'){

            return redirect('dashboard');
        }
        return $next($request);
    }


    
}