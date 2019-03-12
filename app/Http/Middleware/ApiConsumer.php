<?php

namespace App\Http\Middleware;

use Closure;

class ApiConsumer
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
        if ($request->apiToken !=  "OverlySimpleToken1" ) {
           $statusCode = 401;

            $ans['unauthorised'] ="It is not given that you are an API consumer :(";
            
        
            return response()->json([
            $ans
        ], $statusCode); }

       
        return $next($request);
    }
}
