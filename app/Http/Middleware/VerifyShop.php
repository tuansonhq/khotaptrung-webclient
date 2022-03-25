<?php

namespace App\Http\Middleware;

use App\Library\DirectAPI;
use Cache;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use Illuminate\Http\Request;

class VerifyShop extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */


    public function handle(Request $request, Closure $next)
    {
        $result_Api= Cache::rememberForever('verify_shop', function()  {
            $result_Api = true;
        });
        if(!$result_Api){
            return  response('Shop không có quyền truy cập',403);
        }


    }
}
