<div class="header ">
    <div class="search-active" >
        <div class="search-input_out">
            <div class="search-input_out_nav">
                <div class=" search-input_in">
                    <span class="hide" id='messageMobile'></span>
                    <form action="/idol-list" class="formSearchHeader">
                        <div class='search-input'>
                            <input class='input-search' id="searchFormMobile" name="q" placeholder='Tìm kiếm' type='text'  autocomplete="off">
                        </div>
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/icon_search.png" class="icon-search-close" alt="">

                    </form>
                </div>
            </div>
            <div class="search-input_in_content ">
                <div class="" id="result-search-mobile">

                </div>

            </div>
        </div>
    </div>

    <div class="top-navigation d-none d-lg-block">
        <div class="container">
            <ul>
                <li>
                    <a href="">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/top-navigation1.png" alt="">
                        <span>
                                Ứng dụng di động
                            </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/top-navigation2.png" alt="">
                        <span>
                                Tin tức

                            </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/top-navigation3.png" alt="">
                        <span>
                                Facebook Group
                            </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/top-navigation4.png" alt="">
                        <span>
                                Facebook fanpage
                            </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/top-navigation5.png" alt="">
                        <span>
                                Zalo: 1234 5678
                            </span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/top-navigation6.png" alt="">
                        <span>
                                CSKH: 1234 5678
                            </span>
                    </a>
                </li>

            </ul>
        </div>
    </div>


</div>
<header id="heading">
    <nav class="heading">
        <div class="header-container  container">
            <div class="open-hamburger-sidebar">
                <img src="/assets/frontend/{{theme('')->theme_key}}/image/hamburger_nav.png" alt="">
            </div>
            <div class="close-hamburger-sidebar">
                <img src="/assets/frontend/{{theme('')->theme_key}}/image/hamburger_nav.png" alt="">
            </div>
            <div class="box-logo d-none d-lg-block">
                <a href="/">
                    <img src="{{\App\Library\MediaHelpers::media(setting('sys_logo'))}}" alt="">
                </a>
            </div>
            <div class="box-search">
                <form action="">
                    <div class="group-input">
                        <input type="text" placeholder="Tìm kiếm" class="form-control">
                        <div class="input-group-btn">
                            <button type="submit" class="btn px-3 border-0 shadow-none outline-none text-dark">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/search.png" alt="">
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="box-about">
                <ul class="nav header-main-nav d-none d-lg-flex">
                    <li class="nav-item item-about active">
                        <a href="">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/promotion.png" alt="">
                            <div class="item-about-title">Khuyến mãi</div>
                        </a>
                    </li>
                    <li class="nav-item item-about">
                        <a href="">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/notification.png" alt="">
                            <div class="item-about-title">Thông báo</div>
                        </a>
                    </li>
                    <li class="nav-item item-about">
                        <a href="">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/hot_event.png" alt="">
                            <div class="item-about-title">Sự kiện hot</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navbar-spacer"></div>
            <div class="box-about-mobile">
                <div class="nav header-main-nav  d-lg-flex">
                    <div class="nav-item-mobile item-search-mobile">
                        <a href="">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/search_mobile.png" alt="">
                        </a>

                    </div>
                    <div class="nav-item-mobile item-notification-mobile">
                        <a href="">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/notification_mobile.png" alt="">
                        </a>
                        <div class="item-notification-badges">
                            3
                        </div>
                    </div>

                </div>
            </div>
            <div class="box-login">
                <div class="box-loading btn-loading">
                    <div class="loading"></div>
                </div>
                <div class="box-logined box-deposit">
                    {{--                    <a class="btn btn-submit" onclick="openLoginModal();">--}}
                    {{--                        Đăng nhập--}}
                    {{--                    </a>--}}
                </div>
                {{--                d-none d-md-block--}}
                <div class="box-account ">
                    <div class="box-account-logined">
                        <div class="account-name">
                            <div id="account-name" class="text-center"></div>
                            <div  class="account-balance"></div>
                        </div>
                        <div class="account-avatar">

                            <img src="/assets/frontend/theme_3/image/avatar.jpg" alt="">
                        </div>
                        <div class="account-triangle ">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/triangle.png" alt="">
                        </div>
                        <div class="account-logined-content">
                            <!--                                <div class="arrow down"></div>-->
                            <div class=" d-flex">
                                <div class="acount-logined_img">
                                    <img src="/assets/frontend/theme_3/image/avatar.jpg" alt="">
                                </div>
                                <div class="account-logined_info">
                                    <div id="account-id">

                                    </div>
                                    <div id="account-balance">

                                    </div>
                                    {{--                                    <div class="">--}}
                                    {{--                                        <span class="">Xu khóa: </span>0 xu--}}
                                    {{--                                    </div>--}}
                                </div>

                            </div>
                            <hr>
                            <div class="account-menu-content">
                                @include('frontend.widget.__menu_profile_desktop')

                            </div>
                            <div class="w-100 log-out-button text-center">


                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="box-login">
                <div class="box-loading btn-loading">
                    <div class="loading"></div>
                </div>
                <div class="box-deposit-charge box-deposit">
                    <a class="btn btn-submit">
                        Nạp thẻ
                    </a>
                </div>
                <div class="box-registed box-deposit">
                    <a class="btn btn-submit" onclick="openRegisterModal();">
                        Đăng ký
                    </a>
                </div>
            </div>


            {{--                mobile--}}

            <div class="box-login-mobile">
                <div class="box-loading-mobile ">
                    <div class="loading"></div>
                </div>

                <div class="box-account-mobile">
                    {{--                    <div class="box-account-logined " onclick="openMenuProfile()">--}}
                    {{--                        <div class="account-avatar">--}}
                    {{--                            <img src="/assets/frontend/theme_3/image/avatar.jpg" alt="">--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>

        </div>



    </nav>

</header>
<div class="header ">

    @include('frontend.widget.__head__dich__vu__noi__bat')

    <div class="menu-profile-mobile">
        <div class="row marginauto">
            {{--Bắt đầu vòng lặp --}}
            <div class="col-md-12 left-right nav-bar-hr">
                {{--                                    Vong lap thang bố--}}
                <div class="acount-logined_mobile d-flex m-3">
                    <div class="acount-logined_img">
                        <img src="/assets/frontend/theme_3/image/avatar.jpg" alt="">
                    </div>
                    <div class="account-logined_info">
                        <div id="account-id-mobile">
                            {{--                            <span class="">ID: </span>1234567--}}
                        </div>
                        <div id="account-balance-mobile">
                            {{--                            <span class="">Số dư: </span>0 đ--}}
                        </div>

                    </div>

                </div>

                @include('frontend.widget.__menu_profile')
            </div>


        </div>
    </div>

    <div class="menu-category-mobile">
        <ul class=" ">
            <li>
                <a href="/">
                    <img src="./assets/frontend/{{theme('')->theme_key}}/image/home.png" alt="">
                    <span>Trang chủ</span>
                    <div class="mobile-logo">
                        <img src="{{\App\Library\MediaHelpers::media(setting('sys_logo'))}}" alt="">
                    </div>

                </a>
            </li>
            <li>
                <a href="">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/menu_category1.png" alt="">
                    <span>Khuyến mãi</span>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/menu_category2.png" alt="">
                    <span>Sư kiện hot</span>
                </a>
            </li>
            <div class="menu-category-mobile-partition"></div>
            @include('frontend.widget.__head__dich__vu__noi__bat__mobile')
            <div class="menu-category-mobile-partition"></div>
            <li id="login_menu">
                {{--                <a href="">--}}
                {{--                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/menu_category6.png" alt="">--}}
                {{--                    <span>Đăng nhập/ Đăng ký</span>--}}
                {{--                </a>--}}
            </li>
        </ul>
    </div>
</div>
<form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
    @csrf
</form>
