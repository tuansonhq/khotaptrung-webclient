<?php

namespace App\Library;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;

class AuthFrontendCustom{
    public static function check(){
        if(session()->has('jwt')){
            return true;
        }
        return false;
    }
    public static function user(){
        if(session()->has('jwt')){
            return session()->get('jwt');
        }
        return null;
    }
//    public static function check(){
//        if(session()->has('jwt')){
//            return true;
//        }
//        return false;
//    }
//    public static function user(){
//        if(session()->has('jwt')){
//            return session()->get('jwt');
//        }
//        return null;
//    }
}
