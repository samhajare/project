<?php

namespace App\Http\Middleware;

use Closure;

class product
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
       if(!$request->product || !$request->qty){
            
            dd("missing attributes");
            
       }
        return $next($request);
    }
}
