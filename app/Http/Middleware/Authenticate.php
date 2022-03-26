<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {

        if(!session('auth_custom')){
            return route('login');
        }
//
//        if (! $request->expectsJson()) {
//            return route('login');
//        }
    }


     public function handle(Request $request, Closure $next)
     {
//         if($jwt=$request->cookie('jwt')){
//             $request->header()
//         }

         if(!session('auth_custom')){
             if($request->ajax()){
                 return response()->json([
                     'status' => 401,
                     'message'=>"unauthencation"
                 ]);
             }
             else{
                 return route('login');
             }


         }

         return $next($request);
     }



}
