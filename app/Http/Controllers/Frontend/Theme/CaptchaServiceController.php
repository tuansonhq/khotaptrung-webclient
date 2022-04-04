<?php

namespace App\Http\Controllers\Frontend\Theme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaptchaServiceController extends Controller
{
    //
    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
