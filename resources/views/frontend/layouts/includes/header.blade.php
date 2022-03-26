<header>
    <div class="nav-bar">
        <div class="nav-bar-container container">
            <div class="nav-bar-brand">
                <a href="/">
                    <img src="{{config('api.url_media').setting('sys_logo') }}" alt="">
{{--                    <img src="https://www.shopas.net/storage/images/6BdfImoiWl_1640248137.png" alt="">--}}
                </a>

            </div>

            <div class="nav-bar-category">
                <ul class="nav">
                    {!! widget('frontend.widget.__menu_category_desktop',60) !!}
                </ul>
                <ul class="nav">


                    <li class="nav-log-in">
                        <a href="#" id="info">
                            <div class="loading"></div>
                        </a>
                    </li>
                    <li class="nav-log-in">
                        <a href="#" id="logout">
                            <div class="loading"></div>
                        </a>
                    </li>

{{--                     <li class="nav-regist">--}}
{{--                        <a href="/register"><i class="fas fa-user"></i> Đăng ký</a>--}}
{{--                    </li> --}}
{{--                     @if (App\Library\AuthCustom::check())--}}
{{--                        <li class="nav-log-in">--}}
{{--                            <a href="/thong-tin" ><i class="fas fa-user"></i> {{App\Library\AuthCustom::user()->fullname ? Str::limit(App\Library\AuthCustom::user()->fullname,10) : Str::limit(App\Library\AuthCustom::user()->username,10)}}  -    $ {{App\Library\AuthCustom::user()->balance ? str_replace(',','.',number_format(Str::limit(App\Library\AuthCustom::user()->balance,10))) : 0}} </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-regist">--}}
{{--                            <a href="/logout"><i class="fas fa-user"></i> Đăng xuất</a>--}}
{{--                        </li>--}}
{{--                    @else--}}
{{--                        <li class="nav-log-in">--}}
{{--                            <a href="/login" ><i class="fas fa-user"></i> Đăng nhập </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-regist">--}}
{{--                            <a href="/register"><i class="fas fa-user"></i> Đăng ký</a>--}}
{{--                        </li>--}}
{{--                            <li class="nav-log-in">--}}
{{--                                <a href="/login" ><div class="loading"></div></a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-regist">--}}
{{--                                <a href="/register"><i class="fas fa-user"></i> Đăng ký</a>--}}
{{--                            </li>--}}

{{--                    @endif --}}

                </ul>
{{--                @else--}}
{{--                    <ul class="nav">--}}
{{--                        <li class="nav-log-in">--}}
{{--                            <a href="/" >--}}
{{--                                <div class="info">--}}
{{--                                    <i class="fas fa-user"></i> Nam Hải--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-register">--}}
{{--                            <a href="/logout"><i class="fas fa-user"></i> Đăng xuất</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                @endif--}}
            </div>
            <div class="nav-bar-category-mobile">
                @if (App\Library\AuthCustom::check())
                    <span>
                        <a href="/profile"> {{App\Library\AuthCustom::user()->fullname ? Str::limit(App\Library\AuthCustom::user()->fullname,10) : Str::limit(App\Library\AuthCustom::user()->username,10)}}  -   $ {{App\Library\AuthCustom::user()->balance ? str_replace(',','.',number_format(Str::limit(App\Library\AuthCustom::user()->balance,10))) : 0}} </a>
                        <a href="/logout">Đăng xuất</a>
                    </span>
                @else
                    <span>
                        <a href="/login"> Đăng nhập</a>
                        <a href="/register">Đăng ký</a>
                    </span>
                @endif
                <label class="nav-bar-category-mobile-input" for="nav_mobile_input"><i class="fas fa-bars"></i></label>
                <input type="checkbox" hidden class="name_input" id="nav_mobile_input" >
                <nav class="nav_mobile">
                     <ul class="">
                         {!! widget('frontend.widget.__menu_category_mobile',60) !!}
                    </ul>
                    <ul class="">
                        @if (App\Library\AuthCustom::check())
                            <li><a href="/login" class="nav_mobile-log-in"><i class="fas fa-user"></i> {{App\Library\AuthCustom::user()->fullname ? Str::limit(App\Library\AuthCustom::user()->fullname,10) : Str::limit(App\Library\AuthCustom::user()->username,10)}}  -   $ {{App\Library\AuthCustom::user()->balance ? str_replace(',','.',number_format(Str::limit(App\Library\AuthCustom::user()->balance,10))) : 0}} </a></li>
                            <li><a href="/logout" class="nav_mobile-log-in"><i class="fas fa-user"></i>   Đăng xuất</a></li>
                        @else
                            <li><a href="/login" class="nav_mobile-log-in"><i class="fas fa-user"></i>   Đăng nhập</a></li>
                            <li><a href="/regist" class="nav_mobile-log-in"><i class="fas fa-user"></i>   Đăng ký</a></li>
                        @endif

                    </ul>
                </nav>
            </div>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </div>
    </div>
</header>
