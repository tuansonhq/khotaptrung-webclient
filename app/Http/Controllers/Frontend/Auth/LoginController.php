<?php


namespace App\Http\Controllers\Frontend\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use App\Library\DirectAPI;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Session;

class LoginController extends Controller
{
    public function login(){

//        if(!session()->has('auth_custom')){

//        } else{
//            return redirect('/');
//        }
        $jwt = Session::get('jwt');
        if(empty($jwt)){
            return view('frontend.pages.log_in');
        }else{
            return redirect('/');
        }

    }
    public function postLogin(Request $request){

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
            $result_Api = DirectAPI::_makeRequest($url,$data,$method);
            $response_data = $result_Api->response_data??null;

            if(isset($response_data) && $response_data->status == 1){
                $time = strtotime(Carbon::now());
                $exp_token = $response_data->exp_token;

                $time_exp_token = $time + $exp_token;
                Session::put('jwt',$response_data->token);
                Session::put('exp_token',$response_data->exp_token);
                Session::put('time_exp_token',$time_exp_token);

                $return_url = Session::get('return_url');
                return response()->json([
                    'status' => 1,
                    'message' => 'Thành công',
                    'return_url' => $return_url,
                    'data' => $result_Api->response_data,
                ]);

            }
            else{
                return response()->json([
                    'status' => 0,
                    'message'=>$response_data->message??"Không thể lấy dữ liệu"
                ]);
            }
        }
        catch(\Exception $e){
            Log::error($e);
            return response()->json([
                'status' => 0,
                'message' => 'Có lỗi phát sinh khi lấy nhà mạng nạp thẻ, vui lòng liên hệ QTV để xử lý.',
            ]);
        }





//        try{
//            $url = '/login';
//            $method = "POST";
//            $data = array();
//            $data['username'] = $request->username;
//            $data['password'] = $request->password;
//
//            $result_Api = DirectAPI::_makeRequest($url,$data,$method);
//
//            if(isset($result_Api) && $result_Api->response_code == 200){
//                $result = $result_Api->response_data;
//                if ()
//                if($result->status == 1){
//                    $time = strtotime(Carbon::now());
//                    $exp_token = $result->exp_token;
//                    $time_exp_token = $time + $exp_token;
//                    Session::put('jwt',$result->token);
//                    Session::put('exp_token',$result->exp_token);
//                    Session::put('time_exp_token',$time_exp_token);
//                    $return_url = Session::get('return_url');
//                    return response()->json([
//                        'return_url' => $return_url,
//                        'data' => $result_Api->response_data,
//                    ]);
//                }
//                else{
//
//                    return response()->json([
//                        'data' => $result_Api->dataOfApi,
//                    ]);
////                    dd(111);
////                    return redirect()->back()->withErrors($result->message);
//                }
//            }else{
//
//                return response()->json([
//                    'data' => $result_Api->dataOfApi,
//                ]);
//                //                dd(122222);
////                $result = $result_Api->data;
////                return redirect()->back()->withErrors($result->message);
//            }
//        }
//        catch(\Exception $e){
//
//            Log::error($e);
//            return response()->json([
//                'status'=>"0",
//                'message'=>'Có lỗi phát sinh.Xin vui lòng thử lại !(Catch)',
//
//            ]);
//
//
//        }
    }
    public function loginfacebook(Request $request)
    {
        $url = '/loginfacebook';
        $method = "POST";
        $data = array();
        $data['accessToken'] = $request->accessToken;
        $result_Api = DirectAPI::_makeRequest($url,$data,$method);

        if(isset($result_Api) && $result_Api->httpcode == 200) {
            $result = $result_Api->dataOfApi;
            if ($result->status == 1) {
                $time = strtotime(Carbon::now());
                $exp_token = $result->exp_token;
                $time_exp_token = $time + $exp_token;
                Session::put('jwt',$result->token);
                Session::put('exp_token',$result->exp_token);
                Session::put('time_exp_token',$time_exp_token);
                return redirect()->to('https://'.\Request::server("HTTP_HOST").Session::get('return_url').'');
            } else {
                return redirect()->back()->withErrors($result->message);
            }
        }
    }
    public function logout(Request $request){
        try{
            $url = '/logout';
            $method = "POST";
            $data = array();
            $data['token'] = $request->session()->get('jwt');
            $result_Api = DirectAPI::_makeRequest($url,$data,$method);

            if(isset($result_Api) && $result_Api->response_code == 401){
                Session::flush();
                return redirect()->to('/');
            }
            if(isset($result_Api) && $result_Api->response_code == 200){
                $result = $result_Api->response_data;
                if($result->status == 1){
                    Session::flush();
                    return redirect()->to('/');
                }
            }
            return redirect()->to('/');
        }
        catch(\Exception $e){
            Log::error($e);
            return response()->json([
                'status' => 0,
                'message' => 'Có lỗi phát sinh khi lấy nhà mạng nạp thẻ, vui lòng liên hệ QTV để xử lý.',
            ]);        }
    }


    public function changePassword(){
        return view('frontend.pages.account.changePassword');
    }
    public function changePasswordApi(Request $request){
        $this->validate($request,[
            'old_password'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required',
        ],[
            'username.required' => __('Vui lòng nhập tài khoản'),
            'password.required' => __('Vui lòng nhập mật khẩu'),
            'password_confirmation.required' => __('Vui lòng nhập mật khẩu'),
        ]);

        try{

            $url = '/current-password';
            $method = "POST";
            $data = array();
            $jwt = Session::get('jwt');
            if (empty($jwt)) {
                return response()->json([
                    'status' => "LOGIN"
                ]);
            }

            $data['token'] = $jwt;
            $data['old_password'] = $request->old_password;
            $data['password'] = $request->password;
            $data['password_confirmation'] = $request->password_confirmation;

            $result_Api = DirectAPI::_makeRequest($url,$data,$method);
            $response_data = $result_Api->response_data??null;
            if(isset($response_data) && $response_data->status == 1){
                return response()->json([
                    'status' => 1,
                    'message'=>$response_data->message
                ]);

            }
            else{
                return response()->json([
                    'status' => 0,
                    'message'=>$response_data->message??"Không thể lấy dữ liệu"
                ]);
            }
        }
        catch(\Exception $e){
            Log::error($e);
            return response()->json([
                'status' => 0,
                'message' => 'Có lỗi phát sinh khi lấy nhà mạng nạp thẻ, vui lòng liên hệ QTV để xử lý.',
            ]);        }
    }

}
