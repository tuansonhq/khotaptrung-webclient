<header>
    <div class="nav-bar">
        <div class="nav-bar-container container">
            <div class="nav-bar-brand">
                <a href="/">
                    <img src="https://www.shopas.net/storage/images/6BdfImoiWl_1640248137.png" alt="">
                </a>

            </div>

            <div class="nav-bar-category">
{{--                navbar--}}
                <ul class="nav">
                    @foreach($data_menu_category as $item)
                        @if ($item->parent_id == 0)
                            <li class="menu-item">
                                <a href="{{$item->url}}" @if($item->target==1) target="_blank" @endif>{{$item->title}}</a>
                                <ul class="sub-menu" >
                                    @foreach ($data_menu_category as $key_child => $child_item)
                                        @if ($item->id == $child_item->parent_id)
                                    <li class="menu-item">
                                        <a  href="{{$child_item->url}}" class="\">{{$child_item->title}}</a>
                                    </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @endif
                    @endforeach

                </ul>


{{--                @if(!session()->has('auth_token'))--}}
                <ul class="nav">
                    @if (App\Library\AuthCustom::check())
                        <li class="nav-log-in">
                            <a href="/thong-tin" ><i class="fas fa-user"></i> {{App\Library\AuthCustom::user()->username}} </a>
                        </li>
                        <li class="nav-regist">
                            <a href="/logout"><i class="fas fa-user"></i> Đăng xuất</a>
                        </li>
                    @else
                        <li class="nav-log-in">
                            <a href="/login" ><i class="fas fa-user"></i> Đăng nhập </a>
                        </li>
                        <li class="nav-regist">
                            <a href="/register"><i class="fas fa-user"></i> Đăng ký</a>
                        </li>
                    @endif

                </ul>
{{--                @else--}}
{{--                    <ul class="nav">--}}
{{--                        <li class="nav-log-in">--}}
{{--                            <a href="/" ><i class="fas fa-user"></i> Nam Hải </a>--}}
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
                        <a href="/profile"> {{App\Library\AuthCustom::user()->username}}</a>
                        <a href="/logout">Đăng xuất</a>
                    </span>
                @else
                    <span>
                        <a href="/login"> Đâng nhập</a>
                        <a href="/register">Đăng ký</a>
                    </span>
                @endif
                <label class="nav-bar-category-mobile-input" for="nav_mobile_input"><i class="fas fa-bars"></i></label>
                <input type="checkbox" hidden class="name_input" id="nav_mobile_input" >
                <nav class="nav_mobile">
                     <ul class="">
                        @foreach($data_menu_category as $item)
                            @if ($item->parent_id == 0)
                        <li>
                            <a @if($item->url!=null) href="{{$item->url}}" @else data-toggle="collapse" class="nav_mobile-collapse" href="#menuchild_item" role="button" aria-expanded="true" aria-controls="collapseExample" @endif @if($item->target==1) target="_blank" @endif>{{$item->title}}</a>
                        </li>
                         <ul class="sub-menu collapse" id="menuchild_item" >
                            @foreach ($data_menu_category as $key_child => $child_item)
                                @if ($item->id == $child_item->parent_id)
                                    <li class="menu-item">
                                        <a  href="{{$child_item->url}}" @if($item->target==1) target="_blank" @endif>{{$child_item->title}}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                          @endif
                        @endforeach
                    </ul>
                    <ul class="">
                        @if (App\Library\AuthCustom::check())
                            <li><a href="/login" class="nav_mobile-log-in"><i class="fas fa-user"></i>   {{App\Library\AuthCustom::user()->username}}</a></li>
                            <li><a href="/logout" class="nav_mobile-log-in"><i class="fas fa-user"></i>   Đăng xuất</a></li>
                        @else
                            <li><a href="/login" class="nav_mobile-log-in"><i class="fas fa-user"></i>   Đăng nhập</a></li>
                            <li><a href="/regist" class="nav_mobile-log-in"><i class="fas fa-user"></i>   Đăng ký</a></li>
                        @endif

                    </ul>
                </nav>
            </div>

        </div>
    </div>
</header>
