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

}
