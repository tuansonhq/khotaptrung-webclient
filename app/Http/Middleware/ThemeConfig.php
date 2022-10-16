<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ThemeConfig
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if(\App\Library\Theme::getTheme('') == true) {
            View::getFinder()->prependLocation(
                resource_path('views') . '/'.theme('')->theme_key
            );
            $theme = \App\Library\Theme::getTheme('');

            if (isset($theme->shop)){
                if ($theme->shop == 2 || $theme->shop == 3){
                    return redirect('/405');
                }else{
                    View::getFinder()->prependLocation(
                        resource_path('views') . '/'.theme('')->theme_key
                    );
                }
            }else{
                return response('Shop không có quyền truy cập!'.\Request::server ("HTTP_HOST"),403);
            }
        }
        return $next($request);
    }
}
