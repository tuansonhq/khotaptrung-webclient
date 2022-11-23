<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedirectUrl extends Controller
{
    public function index(Request $request,$slug){

        if(setting('sys_google_plus') != ''){
            if (\Request::server("HTTP_HOST") == 'muanickcf.net'){
                if ($slug == 'nick-cf'){

                }
            }
        }else{
            return view('frontend.404.404');
        }
        return 111111;
    }
}
