<?php


namespace App\Library;
use Illuminate\Support\Facades\Auth;
use Html;

class ApiLog
{
    public static function LogIn($username,$password)

    {
        $url = 'https://backend-tt.nick.vn/api/v1/login?username='.$username.'&password='.$password;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec ($ch);
        $err = curl_error($ch);  //if you need
        curl_close ($ch);
        return $response;


    }
}
