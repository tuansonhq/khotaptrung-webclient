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

}
