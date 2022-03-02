<?php


namespace App\Http\Controllers\Frontend\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class LoginController
{
    public function login(){


        return view('frontend.pages.log_in');
    }
    public function loginApi(Request $request){


        $http = new \GuzzleHttp\Client;

        $username = $request->username;
        $password = $request->password;

        $response = $http->post('https://backend-tt.nick.vn/api/v1/login?',[
            'query'=>[
                'username'=>$username,
                'password'=>$password,
                'secret_key'=>'ZmpVMXozMTJQVDFoSFUrSmFkYVdNZWNpVDg0eHpZRVBjbEl4SE0zUVk0dz0=',
                'domain'=>'youtube.com',
            ]
        ]);

        $result = json_decode((string)$response->getBody(),true);
        return dd($result);
        return view('frontend.pages.log_in');
    }
}
