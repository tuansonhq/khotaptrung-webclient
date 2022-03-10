<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Library\DirectAPI;
use Carbon\Carbon;
use Cookie;

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
        if($request->hasCookie('jwt')){
            $data = array();
            $data['token'] = $request->cookie('jwt');
            $data['secret_key'] = config('api.secret_key');
            $data['domain'] = config('api.client');
            $result_Api = DirectAPI::_makeRequest('/token',$data,'POST');
            if(isset($result_Api) && $result_Api->httpcode === 401){
                session()->forget('auth_custom');
                return redirect()->to('/logout')->withCookie(Cookie::forget('jwt'))->withCookie(Cookie::forget('exp_token'));
            }
            // if($result->status != 1){
            //     session()->forget('auth_custom');
            //     return redirect()->to('/logout')->withCookie(Cookie::forget('jwt'))->withCookie(Cookie::forget('exp_token'));
            // }
            if(isset($result_Api) && $result_Api->httpcode === 200){
                $result = $result_Api->data;
                $request->session()->put('auth_custom', $result->data);
            }
        }
        return $next($request);
    }
}
