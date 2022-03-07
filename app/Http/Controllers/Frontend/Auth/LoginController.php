<?php


namespace App\Http\Controllers\Frontend\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use App\Library\DirectAPI;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class LoginController extends Controller
{
    public function login(){
        return view('frontend.pages.log_in');
    }
    public function loginApi(Request $request){

        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
        ],[
            'username.required' => __('Vui lòng nhập tài khoản'),
            'password.required' => __('Vui lòng nhập mật khẩu'),
        ]);

        try{

            $url = '/login';
            $method = "POST";
            $data = array();
            $data['username'] = $request->username;
            $data['password'] = $request->password;
            $data['secret_key'] = config('api.secret_key');
//            dd($data['secret_key']);
            $data['domain'] = 'youtube.com';
            $result_Api = DirectAPI::_makeRequest($url,$data,$method);
            if(isset($result_Api) && $result_Api->httpcode == 200){
                $result = $result_Api->data;
                if($result->status == 1){
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
            }else{
                return 'sai';
            }
        }
        catch(\Exception $e){
            Log::error($e);
            return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
        }
    }

    public function logout(Request $request){

        try{

            $url = '/logout';
            $method = "POST";
            $data = array();
            $data['token'] = session()->get('auth_token');
            $result_Api = DirectAPI::_makeRequest($url,$data,$method);

            if(isset($result_Api) && $result_Api->httpcode == 200){
                $result = $result_Api->data;
                if($result->status == 1){
//                    Clear
//                    $time = strtotime(Carbon::now());
//                    $exp_token = $result->exp_token;
//                    $time_exp_token = $time + $exp_token;
//                    session()->put('auth_token', $result->token);
//                    session()->put('exp_token', $result->exp_token);
//                    session()->put('time_exp_token', $time_exp_token);
//                    sessionStorage.clear();
//                    return 'Đăng xuất thành công';
//                    return redirect()->back();
//                    return 'aaaa';

                    $request->session()->flush();
                    return redirect()->to('/');
                    return view('frontend.pages.index');

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
    // public function loginApi(Request $request){


    //     $http = new \GuzzleHttp\Client;

    //     $username = $request->username;
    //     $password = $request->password;

    //     $response = $http->post('https://backend-tt.nick.vn/api/v1/login?',[
    //         'query'=>[
    //             'username'=>$username,
    //             'password'=>$password,
    //             'secret_key'=>'ZmpVMXozMTJQVDFoSFUrSmFkYVdNZWNpVDg0eHpZRVBjbEl4SE0zUVk0dz0=',
    //             'domain'=>'youtube.com',
    //         ]
    //     ]);

    //     $result = json_decode((string)$response->getBody(),true);
    //     return dd($result);
    //     return view('frontend.pages.log_in');
    // }
}
