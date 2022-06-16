<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Spatie\ResponseCache\Facades\ResponseCache;

class IPController extends Controller
{
    public function getIp(Request $request){
        $ch = curl_init ();
        // set URL and other appropriate options
        curl_setopt ($ch, CURLOPT_URL, "http://ipecho.net/plain");
        curl_setopt ($ch, CURLOPT_HEADER, 0);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
        // grab URL and pass it to the browser
        $ip = curl_exec ($ch);
        curl_close ($ch);
        return response()->json([
            'status' => 1,
            'message' => 'Thành công!',
            'ip' => $ip
        ]);
        
    }

}
