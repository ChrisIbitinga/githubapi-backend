<?php

namespace App\Http\Middleware\Api\v1;

use Closure;
use Exception;
use Illuminate\Http\Request;

class ApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {


        if($request->header('api_key') !== 'base64:ZO+HA/RV7uwcFiYPgybRNDSyYXZk3wbbDmskQxuCbug=')
            return response()->json([
                'status' => 'error',
                'message' => ['Api Key invalid'],
            ], status: 401);



        return $next($request);
    }
}
