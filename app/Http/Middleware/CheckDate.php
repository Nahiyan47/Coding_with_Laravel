<?php

namespace App\Http\Middleware;

use Closure;

class CheckDate
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
        if(date("d/m/Y")=="01/10/2019"){
            return redirect('/');

        }
        return $next($request);
    }
}
