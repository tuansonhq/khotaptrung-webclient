<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaptchaServiceController extends Controller
{
    //
    public function myCaptcha()
    {
        return response()->json(['captcha'=> captcha_img('flat')]);
    }
    public function reloadCaptcha()
    {

        return response()->json(['captcha'=> captcha_img('flat')]);
    }
}
