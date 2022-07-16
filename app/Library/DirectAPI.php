<?php



namespace App\Library;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class DirectAPI{
    public static function _makeRequest($url, array $data, $method,$log = false){

        $http_url = \Request::server ("HTTP_HOST");
        if (config('api.app_env') !== 'local'){

            $data ['domain'] = config('api.client');
            $data ['client'] =  config('api.client');
        }else{
            $data ['domain'] = str_replace('www.','',$http_url);
            $data ['client'] =  str_replace('www.','',$http_url);
        }


        $data['secret_key'] = config('api.secret_key');
        if(is_array($data)){
            $dataPost = http_build_query($data);
        }else{
            $dataPost = $data;
        }
        if($log == true){
            $myfile = fopen(storage_path() ."/logs/CACHE1-".Carbon::now()->format('Y-m-d').".txt", "a") or die("Unable to open file!");
            $txt = Carbon::now()." : [DATA: ".json_encode($data,JSON_UNESCAPED_UNICODE)."]";
            fwrite($myfile, $txt ."\n");
            fclose($myfile);
        }
        $url = config('api.host').$url;
        if($method == "GET"){
            $url = $url.'?'.$dataPost;
        }
        $loopTime=0;
        $resultChange = new \stdClass();
        while ($loopTime<3){

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            if($method == "POST"){
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $dataPost);
                $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                curl_setopt($ch, CURLOPT_REFERER, $actual_link);
            }
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 60);
            $resultRaw = curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if($httpcode==0){
                Log::error($resultRaw);
                $loopTime++;
                continue;
            }
            else{
//                if($httpcode==401){
//                    session()->flush();
//                }

                $result = json_decode($resultRaw);

                $resultChange->response_code = $httpcode;
                $resultChange->response_data = $result;
                return $resultChange;
            }
            //timeout
            $resultChange->response_code = 408;
            $resultChange->response_data = null;
            return $resultChange;


        }

    }
}
