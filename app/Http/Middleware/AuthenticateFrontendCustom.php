<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Library\DirectAPI;
use Carbon\Carbon;
use Cookie;
use Session;

class AuthenticateFrontendCustom
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
//        session()->has('auth_custom');
        $jwt = Session::get('jwt');
        if(empty($jwt)){
            Session::forget('return_url');
            Session::put('return_url', $_SERVER['REQUEST_URI']);
//            if($request->ajax()){
//                return response()->json([
//                    'status' => 401,
//                    'message'=>"unauthencation"
//                ]);
//            }
//            else{
//                return redirect('login');
//            }




            return redirect('login');
        }
        return $next($request);
    }
}
