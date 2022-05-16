<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    public function index() {
        return view('index');
    }

    public function capthcaFormValidate(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'captcha' => 'required|captcha'
        ]);
        dd('thanh cong');
    }

    public function reloadCaptcha() {
        return response()->json(['captcha' => captcha_img()]);
    }
}
