<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Library\DirectAPI;

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
        if(session()->has('auth_token')){
            $data = array();
            $data['token'] = session()->get('auth_token');
            $data['secret_key'] = config('api.secret_key');
            $data['domain'] = config('api.client');
            $result_Api = DirectAPI::_makeRequest('/token',$data,'POST');
            if(isset($result_Api) && $result_Api->httpcode === 401){
                session()->forget('auth_token');
                session()->forget('exp_token');
                return redirect()->to('/logout');
            }
            if(isset($result_Api) && $result_Api->httpcode === 200){
                $result = $result_Api->data;
                if($result->status != 1){
                    session()->forget('auth_token');
                    session()->forget('exp_token');
                    return redirect()->to('/logout');
                }
            }
        }
        return $next($request);
    }
}
