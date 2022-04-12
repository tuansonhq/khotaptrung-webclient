<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\Library\DirectAPI;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Session;


class RegisterController extends Controller
{
    public function showFormRegister(){
        return view('frontend.'.theme('')->theme_key.'.pages.regist');
    }
    public function register(Request $request){
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
            $result_Api = DirectAPI::_makeRequest($url,$data,$method);
            if(isset($result_Api) && $result_Api->httpcode == 200){
                $result = $result_Api->data;
                if($result->status == 1){
                    $time = strtotime(Carbon::now());
                    $exp_token = $result->exp_token;
                    $time_exp_token = $time + $exp_token;
                    Session::put('jwt',$result->token);
                    Session::put('exp_token',$result->exp_token);
                    Session::put('time_exp_token',$time_exp_token);
                    return Response()->json($result_Api->data);
//                    return redirect()->to('/');
                }
                else{
                    return Response()->json($result_Api->data);
//                    return redirect()->back()->withErrors($result->message);

                }
            }
            else{
                return Response()->json($result_Api->data);
//                $result = $result_Api->data;
//                return redirect()->back()->withErrors($result->message);
            }
        }
        catch(\Exception $e){
            Log::error($e);
            return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
        }
    }
}
