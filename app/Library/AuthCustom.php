<?php

namespace App\Library;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;

class AuthCustom{
    public static function check(){
        if(session()->has('auth_custom')){
            return true;
        }
        return false;
    }
    public static function user(){
        if(session()->has('auth_custom')){
            return session()->get('auth_custom');
        }
        return null;
    }
}
