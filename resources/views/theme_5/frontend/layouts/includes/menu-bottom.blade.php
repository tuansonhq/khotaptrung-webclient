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

                <span class="menu-bottom_text">Home</span>
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

                <span class="menu-bottom_text">Dịch vụ</span>
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

                <span class="menu-bottom_text">Nạp tiền</span>
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

                <span class="menu-bottom_text">Mini Game</span>
            </a>
        </li>
        <li class="menu-bottom-item px-0   @if(Request::is('menu-profile')) is-active @endif">
            <a href="/menu-profile" class="d-flex justify-content-center c-p-5 fz-13 fw-400 flex-column align-items-center">
                    <span class="menu-bottom_icon c-pt-6 c-pb-2  text-center  c-mb-4 brs-24">
                       @if(Request::is('menu-profile'))
                            <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/nam/menu-bottom-profile_active.svg)"></i>

                        @else
                            <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/nam/menu-bottom-profile.svg)"></i>

                        @endif

                    </span>

                <span class="menu-bottom_text">Tài khoản</span>
            </a>
        </li>
    </ul>
</div>
