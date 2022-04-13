<?php


namespace App\Library;


class Helpers
{
    public static function formatPrice($price){
        if ($price == null || !is_int($price)){
            return '';
        }

        return str_replace(',','.',number_format($price));
    }

    public static function formatDateTime($date){

        return \Carbon\Carbon::parse($date)->format('d/m/Y H:s');
    }

    public static function formatDate($date){
        return \Carbon\Carbon::parse($date)->format('d/m/Y');
    }

    public static function Decrypt($string,$secret_key="") {
        $output = "";

        $encrypt_method = "AES-256-CBC";
        if($secret_key==null ||$secret_key==""){
            $secret_key = 'keymahoa';
        }
        $secret_iv = 'hash';

        // hash
        $key = hash('sha256', $secret_key);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        if($output==false){
            return "";
        }
        return $output;
    }


    static function encoder_num_str(){
        return ['q','s','e','r','t','y','u','i','o','p'];
    }

    public static function encodeItemID($id){
        $num_str = ['q','s','e','r','t','y','u','i','o','p'];
        $shop_id = session('shop_id')??0;
        $alpha_id = '';
        foreach (str_split($shop_id) as $i) {
            $alpha_id .= self::encoder_num_str()[intval($i)];
        }
        return strtoupper($alpha_id).($id+$shop_id*2);
    }

    public static function decodeItemID($str){
        $str = strtolower($str);
        $shop_id = '';
        $alpha = '';
        foreach (str_split($str) as $char) {
            if (!is_numeric($char)) {
                $alpha .= $char;
                $shop_id .= array_search($char, self::encoder_num_str());
            }else{
                break;
            }
        }
        if (empty($alpha)) {
            return $str;
        }
        if (empty($shop_id)) {
            $shop_id = 0;
        }
        $id = str_replace($alpha, '', $str) - ($shop_id*2);
        return intval($id);
    }

    public static function dateTimeBlog($tru){

        $day = floor($tru / 86400);
        $hours = floor(($tru -($day*86400)) / 3600);
        $minutes = floor(($tru / 60) % 60);
        $seconds = $tru % 60;

        $day_fm = $day;
        $hour_fm = $hours;
        $minute_fm = $minutes;
        $second_fm = $seconds;

        $time = null;
        if ($day < 10){
            $day_fm = "0".$day;
        }

        if ($hours < 10){
            $hour_fm = "0".$hours;
        }

        if ($minutes < 10){
            $minute_fm = "0".$minutes;
        }

        if ($seconds < 10){
            $second_fm = "0".$seconds;
        }

        if ($day == 0){
            if ($hours == 0){
                if ($minutes == 0){
                    if ($seconds == 0){
                        $time = "now";
                    }else{
                        $time = $second_fm;
                    }
                }else{
                    $time = $minute_fm." phút";
                }
            }else{
                $time = $hour_fm." giờ";
            }
        }else{
            $time = $day_fm." ngày";
        }

        return $time;
    }

}
