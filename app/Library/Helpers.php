<?php


namespace App\Library;


class Helpers
{
    public static function formatPrice($price){
        if ($price == null || !is_int($price)){
            return '';
        }

        return number_format($price);
    }

    public static function formatDateTime($date){

        return \Carbon\Carbon::parse($date)->format('d/m/Y H:s');
    }

}
