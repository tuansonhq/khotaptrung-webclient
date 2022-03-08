<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\Library\DirectAPI;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class RegisterController extends Controller
{
    public function register(){
        return view('frontend.pages.regist');
    }
    public function registerApi(Request $request){

        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required',
        ],[
            'username.required' => __('Vui lòng nhập tài khoản'),
            'password.required' => __('Vui lòng nhập mật khẩu'),
            'password_confirmation.required' => __('Vui lòng nhập mật khẩu'),
        ]);

        try{
            $url = '/register';
            $method = "POST";
            $data = array();
            $data['username'] = $request->username;
            $data['password'] = $request->password;
            $data['password_confirmation'] = $request->password_confirmation;
            $data['secret_key'] = config('api.secret_key');


//            dd($data['secret_key']);
            $data['domain'] = 'youtube.com';
            $result_Api = DirectAPI::_makeRequest($url,$data,$method);

            if(isset($result_Api) && $result_Api->httpcode == 200){
                $result = $result_Api->data;
                if($result->status == 1){
                    dd($result);
                    $time = strtotime(Carbon::now());
                    $exp_token = $result->exp_token;
                    $time_exp_token = $time + $exp_token;
                    session()->put('auth_token', $result->token);
                    session()->put('exp_token', $result->exp_token);
                    session()->put('time_exp_token', $time_exp_token);
                    return redirect()->to('/');
                }
                else{
                    return redirect()->back()->withErrors($result->message);

                }
            }
        }
        catch(\Exception $e){
            Log::error($e);
            return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
        }
    }
}
