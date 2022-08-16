<div id="menu-bottom-tabs" class="tabs">
    <ul class="d-flex justify-content-between px-0 c-mb-8 flex-grow-1 flex-shrink-0 ">
        <li class="menu-bottom-item px-0  @if(Request::is('/')) is-active @endif @if(Request::is('/')) is-active @endif">
            <a href="/" class="d-flex justify-content-center c-p-5 fz-13 fw-400 flex-column align-items-center">

                    <span class="menu-bottom_icon c-pt-6 c-pb-2 text-center  c-mb-4 brs-24">
                        @if(Request::is('/'))
                            <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/nam/menu-bottom-home_active.svg)"></i>
                        @else
                            <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/nam/menu-bottom-home.svg)"></i>

                        @endif
                    </span>

                <span class="menu-bottom_text fz-12">Home</span>
            </a>
        </li>
        <li class="menu-bottom-item px-0  @if(Request::is('service-mobile')) is-active @endif">
            <a href="/service-mobile" class="d-flex justify-content-center c-p-5 fz-13 fw-400 flex-column align-items-center">
                    <span class="menu-bottom_icon c-pt-6 c-pb-2 text-center  c-mb-4 brs-24">
                      @if(Request::is('service-mobile'))
                            <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/nam/menu-bottom-service_active.svg)"></i>
                        @else
                            <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/nam/menu-bottom-service.svg)"></i>
                        @endif
                    </span>

                <span class="menu-bottom_text fz-12">Dịch vụ</span>
            </a>
        </li>
        <li class="menu-bottom-item px-0 @if(Request::is('nap-the') || Request::is('recharge-atm')) is-active @endif ">
            <a href="/nap-the" class="d-flex justify-content-center c-p-5 fz-13 fw-400 flex-column align-items-center">
                    <span class="menu-bottom_icon c-pt-6 c-pb-2 text-center  c-mb-4 brs-24">
                         @if(Request::is('nap-the') || Request::is('recharge-atm'))
                            <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/nam/menu-bottom-charge_active.svg)"></i>
                        @else
                            <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/nam/menu-bottom-charge.svg)"></i>
                        @endif
                    </span>

                <span class="menu-bottom_text fz-12">Nạp tiền</span>
            </a>
        </li>
        <li class="menu-bottom-item px-0 @if(Request::is('minigame')) is-active @endif ">
            <a href="/minigame" class="d-flex justify-content-center c-p-5 fz-13 fw-400 flex-column align-items-center">
                    <span class="menu-bottom_icon c-pt-6 c-pb-2 text-center  c-mb-4 brs-24">
                       @if(Request::is('minigame'))
                            <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/nam/menu-bottom-minigame_active.svg)"></i>
                        @else
                            <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/nam/menu-bottom-minigame.svg)"></i>
                        @endif
                    </span>

                <span class="menu-bottom_text fz-12">Mini Game</span>
            </a>
        </li>
        <li class="menu-bottom-item px-0   @if(Request::is('profile')) is-active @endif">
            <a href="/profile" class="d-flex justify-content-center c-p-5 fz-13 fw-400 flex-column align-items-center">
                    <span class="menu-bottom_icon c-pt-6 c-pb-2  text-center  c-mb-4 brs-24">
                       @if(Request::is('profile'))
                            <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/nam/menu-bottom-profile_active.svg)"></i>

                        @else
                            <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/nam/menu-bottom-profile.svg)"></i>

                        @endif

                    </span>

                <span class="menu-bottom_text fz-12">Tài khoản</span>
            </a>
        </li>
    </ul>
</div>
