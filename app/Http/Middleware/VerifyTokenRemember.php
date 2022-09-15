<?php

namespace App\Http\Middleware;

use App\Library\DirectAPI;
use Carbon\Carbon;
use Closure;
use Cookie;
use Illuminate\Http\Request;
use Session;

class VerifyTokenRemember
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

        $jwt = Session::get('jwt');

        if(empty($jwt)){
            $jwt_refresh_token = Cookie::get('jwt_refresh_token') ?? '';

            if (isset($jwt_refresh_token)){
                $url = '/refresh-token-remember';
                $method = "POST";
                $data = array();
                $data['refresh_token'] = $jwt_refresh_token;
                $result_Api = DirectAPI::_makeRequest($url,$data,$method);
                $response_data = $result_Api->response_data??null;

                if(isset($response_data) && $response_data->status == 1){

                    $time = strtotime(Carbon::now());
                    $exp_token = $response_data->exp_token;
                    $time_exp_token = $time + $exp_token;

                    Session::put('jwt',$response_data->token);
                    Session::put('exp_token',$response_data->exp_token);
                    Session::put('time_exp_token',$time_exp_token);
                    Session::put('auth_custom',$response_data->user);
                }
            }
        }

        return $next($request);
    }
}
