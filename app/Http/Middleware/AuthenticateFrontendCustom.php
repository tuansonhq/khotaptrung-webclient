<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Library\DirectAPI;
use Carbon\Carbon;

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
            if(session()->has('time_exp_token')){
                // trường hợp cần lấy lại token duy trì đăng nhập
                if(session()->get('time_exp_token') - strtotime(Carbon::now()) < 900){
                    $data_refresh = array();
                    $data_refresh['token'] = session()->get('auth_token');
                    $data_refresh['secret_key'] = config('api.secret_key');
                    $data_refresh['domain'] = config('api.client');
                    $result_Api_refresh = DirectAPI::_makeRequest('/refresh',$data_refresh,'POST');
                    if(isset($result_Api_refresh) && $result_Api_refresh->httpcode === 200){
                        $result_refresh = $result_Api_refresh->data;
                        if($result_refresh->status == 1){
                            $time = strtotime(Carbon::now());
                            $exp_token = $result->exp_token;
                            $time_exp_token = $time + $exp_token;
                            session()->put('auth_token', $result->token);
                            session()->put('exp_token', $result->exp_token);
                            session()->put('time_exp_token', $time_exp_token);
                        }
                    }
                }
            }
        }
        return $next($request);
    }
}
