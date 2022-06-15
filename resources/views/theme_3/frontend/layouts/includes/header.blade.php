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
                    <img src="https://cdn.upanh.info/storage/upload/images/LOGO-SHOPNGOCRONG-NET.png" alt="">
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
                            <img src="https://media.passionzone.net/storage/upload_client/uenyodh6b1nrvudqbgqzndztaisyut09/dARAcxhD8b_1652346785.jpg" alt="">
                        </div>
                        <div class="account-triangle ">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/triangle.png" alt="">
                        </div>
                        <div class="account-logined-content">
                            <!--                                <div class="arrow down"></div>-->
                            <div class=" d-flex">
                                <div class="acount-logined_img">
                                    <img src="https://media.passionzone.net/storage/upload_client/uenyodh6b1nrvudqbgqzndztaisyut09/dARAcxhD8b_1652346785.jpg" alt="">
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
                                <div class="account-menu_nav mb-fix-16">
                                    <div class="account-menu_parent mb-fix-12">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/account_info.png" alt=""> Tài khoản

                                    </div>
                                    <div class="account-menu_child pt-fix-4 pb-fix-4">
                                        <a href="/profile">
                                            <div class="pr-fix-8"><img src="/assets/frontend/{{theme('')->theme_key}}/image/arrow-right.png" alt=""> </div> <span> Thông tin tài khoản</span>
                                        </a>

                                    </div>
                                    <div class="account-menu_child pt-fix-4 pb-fix-4">
                                        <a href="/change-password">
                                            <div class="pr-fix-8"><img src="/assets/frontend/{{theme('')->theme_key}}/image/arrow-right.png" alt=""> </div> <span> Đổi mật khẩu</span>
                                        </a>

                                    </div>
                                </div>
                                <div class="account-menu_nav mb-fix-16">
                                    <div class="account-menu_parent mb-fix-12">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/account_trans.png" alt=""> Quản lý giao dịch
                                    </div>
                                    <div class="account-menu_child pt-fix-4 pb-fix-4">

                                        <a href="/rut-tien">
                                            <div class="pr-fix-8"><img src="/assets/frontend/{{theme('')->theme_key}}/image/arrow-right.png" alt=""> </div> <span> Rút tiền ATM - Ví điện tử</span>
                                        </a>
                                    </div>
                                    <div class="account-menu_child pt-fix-4 pb-fix-4">
                                        <a href="/rut-vat-pham">
                                            <div class="pr-fix-8"><img src="/assets/frontend/{{theme('')->theme_key}}/image/arrow-right.png" alt=""> </div> <span> Rút Vật phẩm</span>
                                        </a>

                                    </div>
                                </div>
                                <div class="account-menu_nav mb-fix-16">
                                    <div class="account-menu_parent mb-fix-12">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/account_trans_history.png" alt=""> Lịch sử giao dịch
                                    </div>
                                    <div class="account-menu_child pt-fix-4 pb-fix-4">
                                        <a href="/lich-su-giao-dich">
                                            <div class="pr-fix-8"><img src="/assets/frontend/{{theme('')->theme_key}}/image/arrow-right.png" alt=""> </div> <span> Biến động số dư</span>
                                        </a>
                                    </div>
                                    <div class="account-menu_child pt-fix-4 pb-fix-4">
                                        <a href="/lich-su-nap-the">
                                            <div class="pr-fix-8"><img src="/assets/frontend/{{theme('')->theme_key}}/image/arrow-right.png" alt=""> </div> <span>Lịch sử nạp thẻ</span>
                                        </a>

                                    </div>
                                    <div class="account-menu_child pt-fix-4 pb-fix-4">
                                        <a href="/the-cao-da-mua">
                                            <div class="pr-fix-8"><img src="/assets/frontend/{{theme('')->theme_key}}/image/arrow-right.png" alt=""> </div> <span>Thẻ cào đã mua</span>
                                        </a>

                                    </div>
                                    <div class="account-menu_child pt-fix-4 pb-fix-4">
                                        <a href="/lich-su-dich-vu">
                                            <div class="pr-fix-8"><img src="/assets/frontend/{{theme('')->theme_key}}/image/arrow-right.png" alt=""> </div> <span>Dịch vụ đã mua</span>
                                        </a>

                                    </div>
                                    <div class="account-menu_child pt-fix-4 pb-fix-4">
                                        <a href="/lich-su-atm-tu-dong">
                                            <div class="pr-fix-8"><img src="/assets/frontend/{{theme('')->theme_key}}/image/arrow-right.png" alt=""> </div> <span>Lịch sử nạp ATM tự động</span>
                                        </a>

                                    </div>
                                    <div class="account-menu_child pt-fix-4 pb-fix-4">
                                        <a href="/lich-su-mua-nick">
                                            <div class="pr-fix-8"><img src="/assets/frontend/{{theme('')->theme_key}}/image/arrow-right.png" alt=""> </div> <span>Tài khoản đã mua</span>
                                        </a>

                                    </div>
                                    <div class="account-menu_child pt-fix-4 pb-fix-4">
                                        <a href="/lich-su-tra-gop">
                                            <div class="pr-fix-8"><img src="/assets/frontend/{{theme('')->theme_key}}/image/arrow-right.png" alt=""> </div> <span>Tài khoản trả góp</span>
                                        </a>

                                    </div>
                                </div>
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

            <div class="box-login">
                    <div class="box-account-mobile d-block d-md-none">
                        <div class="box-account-logined box-account-mobile_open">

                            <div class="account-avatar">
                                <img src="https://media.passionzone.net/storage/upload_client/uenyodh6b1nrvudqbgqzndztaisyut09/dARAcxhD8b_1652346785.jpg" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="box-account-mobile ">
                        <div class="box-account-logined box-account-mobile_close">

                            <div class="account-avatar">
                                <img src="https://media.passionzone.net/storage/upload_client/uenyodh6b1nrvudqbgqzndztaisyut09/dARAcxhD8b_1652346785.jpg" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>



    </nav>

</header>
<div class="header ">

    <div class="menu-category">
        <div class="container container-fix">
            <ul>
                <li>
                    <a href="/nap-the">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/service1.png" alt="">
                        <span id="nav-charge">Nạp thẻ cào</span>
                    </a>
                </li>
                <li>
                    <a href="/nap-the#atm_card">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/service1.png" alt="">
                        <span >Nạp ATM -Ví</span>
                    </a>
                </li>
                <li>
                    <a href="/nap-the#wallet_card">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/service1.png" alt="">
                        <span >Nạp ví điện tử</span>
                    </a>
                </li>
                <li>
                    <a href="/mua-the">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/service1.png" alt="">
                        <span id="nav-store">Mua thẻ Game</span>
                    </a>
                </li>
                <li>
                    <a href="/mua-acc">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/service1.png" alt="">
                        <span id="nav-buy__acc">Mua Acc Game</span>
                    </a>
                </li>
                <li>
                    <a href="/dich-vu">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/service1.png" alt="">
                        <span id="nav-service">Dịch vụ Game</span>
                    </a>
                </li>
                <li>
                    <a href="/recharge-game">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/service1.png" alt="">
                        <span id="nav-recharge_game">Nạp game</span>
                    </a>
                </li>
                <li>
                    <a href="/minigame">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/service1.png" alt="">
                        <span id="nav-minigame">Vòng quay</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="menu-profile-mobile">
        <div class="row marginauto">
            {{--Bắt đầu vòng lặp --}}
            <div class="col-md-12 left-right nav-bar-hr">
                {{--                                    Vong lap thang bố--}}
                <div class="row marginauto nav-bar-nick nav-bar-parent">
                    <div class="col-md-12 left-right">
                        <div class="row marginauto nav-bar-parent-title">
                            <div class="col-12 left-right">
                                <span>TÀI KHOẢN</span>
                            </div>
                        </div>
                    </div>

                </div>

                {{--                                    Vong lap thang con--}}
                <div class="row marginauto nav-bar-nick nav-bar-child add-active_profile">
                    <div class="col-12 left-right">
                        <a href="/profile" class="">
                            <div class="row marginauto">
                                <div class="col-auto left-right">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.12 12.7805C12.05 12.7705 11.96 12.7705 11.88 12.7805C10.12 12.7205 8.71997 11.2805 8.71997 9.51047C8.71997 7.70047 10.18 6.23047 12 6.23047C13.81 6.23047 15.28 7.70047 15.28 9.51047C15.27 11.2805 13.88 12.7205 12.12 12.7805Z" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M18.74 19.3805C16.96 21.0105 14.6 22.0005 12 22.0005C9.40001 22.0005 7.04001 21.0105 5.26001 19.3805C5.36001 18.4405 5.96001 17.5205 7.03001 16.8005C9.77001 14.9805 14.25 14.9805 16.97 16.8005C18.04 17.5205 18.64 18.4405 18.74 19.3805Z" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="col-10 nav-bar-log-top-body-col">
                                    <span>Thông tin tài khoản</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row marginauto nav-bar-nick nav-bar-child add-active_change-password">
                    <div class="col-12 left-right">
                        <a href="/change-password">
                            <div class="row marginauto">
                                <div class="col-auto left-right">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.83551 6.91304C8.83551 5.13595 10.2215 3.75 11.9986 3.75C13.7756 3.75 15.1616 5.13595 15.1616 6.91304V9.29346H8.83551V6.91304ZM7.33551 9.29346V6.91304C7.33551 4.30753 9.39304 2.25 11.9986 2.25C14.6041 2.25 16.6616 4.30753 16.6616 6.91304V9.29346H17.042C18.5608 9.29346 19.792 10.5247 19.792 12.0435V19C19.792 20.5188 18.5608 21.75 17.042 21.75H6.95508C5.4363 21.75 4.20508 20.5188 4.20508 19V12.0435C4.20508 10.5247 5.43629 9.29346 6.95508 9.29346H7.33551ZM5.70508 12.0435C5.70508 11.3531 6.26472 10.7935 6.95508 10.7935H17.042C17.7324 10.7935 18.292 11.3531 18.292 12.0435V19C18.292 19.6903 17.7324 20.25 17.042 20.25H6.95508C6.26472 20.25 5.70508 19.6903 5.70508 19V12.0435ZM11.9986 13.9238C11.5483 13.9238 11.1833 14.2888 11.1833 14.739C11.1833 15.1869 11.5445 15.5504 11.9914 15.5542C11.9938 15.5542 11.9962 15.5542 11.9986 15.5542C12.0009 15.5542 12.0033 15.5542 12.0057 15.5542C12.4526 15.5504 12.8138 15.1869 12.8138 14.739C12.8138 14.2888 12.4488 13.9238 11.9986 13.9238ZM12.7486 16.9301C13.6591 16.6185 14.3138 15.7552 14.3138 14.739C14.3138 13.4604 13.2772 12.4238 11.9986 12.4238C10.7199 12.4238 9.68334 13.4604 9.68334 14.739C9.68334 15.7552 10.338 16.6185 11.2486 16.9301V17.8694C11.2486 18.2836 11.5843 18.6194 11.9986 18.6194C12.4128 18.6194 12.7486 18.2836 12.7486 17.8694V16.9301Z" fill="#434657"/>
                                    </svg>
                                </div>
                                <div class="col-10 nav-bar-log-top-body-col">
                                    <span>Đổi mật khẩu</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                {{--                                    Vong lap thang con--}}
            </div>

            <div class="col-md-12 left-right nav-bar-hr">
                {{--                                    Vong lap thang bố--}}
                <div class="row marginauto nav-bar-nick nav-bar-parent">
                    <div class="col-md-12 left-right">
                        <div class="row marginauto nav-bar-parent-title">
                            <div class="col-12 left-right">
                                <span>QUẢN LÝ GIAO DỊCH</span>
                            </div>
                        </div>
                    </div>

                </div>

                {{--                                    Vong lap thang con--}}
                <div class="row marginauto nav-bar-nick nav-bar-child add-active">
                    <div class="col-12 left-right">
                        <a href="/rut-tien">
                            <div class="row marginauto">
                                <div class="col-auto left-right">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 8.5H11" stroke="#434657" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 16.5H8" stroke="#434657" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10.5 16.5H14.5" stroke="#434657" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M22 12.03V16.11C22 19.62 21.11 20.5 17.56 20.5H6.44C2.89 20.5 2 19.62 2 16.11V7.89C2 4.38 2.89 3.5 6.44 3.5H11" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16.0276 9.22016V4.51367" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M19.1104 9.22016V4.51367" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M22.1934 9.22016V4.51367" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15 9.2207H23.2209" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15 4.51445H23.2209V2.68221L19.1105 1L15 2.68221V4.51445Z" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="col-10 nav-bar-log-top-body-col">
                                    <span>Rút tiền ATM - Ví điện tử</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row marginauto nav-bar-nick nav-bar-child add-active">
                    <div class="col-12 left-right">
                        <a href="/rut-vat-pham">
                            <div class="row marginauto">
                                <div class="col-auto left-right">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.33325 4.91643C5.35218 4.34561 5.59684 3.80561 6.01354 3.41501C6.43023 3.02441 6.98489 2.81512 7.55575 2.8331C10.8424 2.8331 11.9999 6.99977 11.9999 6.99977H7.55575C6.98489 7.01774 6.43023 6.80846 6.01354 6.41785C5.59684 6.02725 5.35218 5.48726 5.33325 4.91643V4.91643Z" stroke="#434657" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"/>
                                        <path d="M16.4442 6.99977H12C12 6.99977 13.1575 2.8331 16.4442 2.8331C17.015 2.81512 17.5697 3.02441 17.9864 3.41501C18.4031 3.80561 18.6477 4.34561 18.6667 4.91643C18.6477 5.48726 18.4031 6.02725 17.9864 6.41785C17.5697 6.80846 17.015 7.01774 16.4442 6.99977Z" stroke="#434657" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"/>
                                        <path d="M19.5 12.834V19.5006C19.5 19.9427 19.3244 20.3666 19.0118 20.6792C18.6993 20.9917 18.2754 21.1673 17.8333 21.1673H6.16667C5.72464 21.1673 5.30072 20.9917 4.98816 20.6792C4.67559 20.3666 4.5 19.9427 4.5 19.5006V12.834" stroke="#434657" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M21.1666 7H2.83325V10.3333H21.1666V7Z" stroke="#434657" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 7V21.1667" stroke="#434657" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"/>
                                    </svg>
                                </div>
                                <div class="col-10 nav-bar-log-top-body-col">
                                    <span>Rút vật phẩm</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                {{--                                    Vong lap thang con--}}
            </div>

            <div class="col-md-12 left-right nav-bar-hr">
                {{--                                    Vong lap thang bố--}}
                <div class="row marginauto nav-bar-nick nav-bar-parent">
                    <div class="col-md-12 left-right">
                        <div class="row marginauto nav-bar-parent-title">
                            <div class="col-12 left-right">
                                <span>LỊCH SỬ GIAO DỊCH</span>
                            </div>
                        </div>
                    </div>

                </div>

                {{--                                    Vong lap thang con--}}
                <div class="row marginauto nav-bar-nick nav-bar-child add-active_lich-su-giao-dich">
                    <div class="col-12 left-right">
                        <a href="/lich-su-giao-dich">
                            <div class="row marginauto">
                                <div class="col-auto left-right">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 7V17C21 18.0609 20.5786 19.0783 19.8284 19.8284C19.0783 20.5786 18.0609 21 17 21H7C5.93913 21 4.92172 20.5786 4.17157 19.8284C3.42143 19.0783 3 18.0609 3 17V7C3 5.93913 3.42143 4.92172 4.17157 4.17157C4.92172 3.42143 5.93913 3 7 3H17C18.0609 3 19.0783 3.42143 19.8284 4.17157C20.5786 4.92172 21 5.93913 21 7Z" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10.333 16.167V12.834C10.3331 12.7245 10.3117 12.6161 10.2699 12.5149C10.2281 12.4137 10.1667 12.3218 10.0894 12.2443C10.012 12.1669 9.92014 12.1054 9.81901 12.0635C9.71788 12.0216 9.60948 12 9.5 12H7.833C7.61207 12 7.4002 12.0878 7.24398 12.244C7.08776 12.4002 7 12.6121 7 12.833V16.06" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13.667 16.167V8.66698C13.667 8.44606 13.5792 8.23418 13.423 8.07796C13.2668 7.92175 13.0549 7.83398 12.834 7.83398H11.167C10.9461 7.83398 10.7342 7.92175 10.578 8.07796C10.4217 8.23418 10.334 8.44606 10.334 8.66698V16.167" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17 16.062V10.751C17 10.53 16.9122 10.3182 16.756 10.1619C16.5998 10.0057 16.3879 9.91797 16.167 9.91797H14.5C14.2791 9.91797 14.0672 10.0057 13.911 10.1619C13.7548 10.3182 13.667 10.53 13.667 10.751V16.168" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17 16.1699H7" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="col-10 nav-bar-log-top-body-col">
                                    <span>Biến động số dư</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row marginauto nav-bar-nick nav-bar-child add-active_lich-su-nap-the">
                    <div class="col-12 left-right">
                        <a href="/lich-su-nap-the">
                            <div class="row marginauto">
                                <div class="col-auto left-right">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.718 7.98438V12.6354L15.374 14.8644" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M3.05908 11C3.25214 9.27324 3.94091 7.63927 5.04223 6.29537C6.14355 4.95147 7.61035 3.9551 9.26552 3.42654C10.9207 2.89798 12.6935 2.85983 14.3699 3.3167C16.0462 3.77358 17.5545 4.70594 18.7126 6.00122C19.8708 7.2965 20.6292 8.89933 20.8963 10.6162C21.1635 12.333 20.928 14.0905 20.2182 15.6765C19.5084 17.2624 18.3547 18.609 16.8965 19.5536C15.4382 20.4983 13.7376 21.0006 12.0001 21" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M2 16.4V19.2C2 19.5713 2.1475 19.9274 2.41005 20.1899C2.6726 20.4525 3.0287 20.6 3.4 20.6H7.6C7.9713 20.6 8.3274 20.4525 8.58995 20.1899C8.8525 19.9274 9 19.5713 9 19.2V16.4C9 16.0287 8.8525 15.6726 8.58995 15.4101C8.3274 15.1475 7.9713 15 7.6 15H3.4C3.0287 15 2.6726 15.1475 2.41005 15.4101C2.1475 15.6726 2 16.0287 2 16.4V16.4Z" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9 17.5996H2" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <div class="col-10 nav-bar-log-top-body-col">
                                    <span>Lịch sử nạp thẻ</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="row marginauto nav-bar-nick nav-bar-child add-active_the-cao-da-mua">
                    <div class="col-12 left-right">
                        <a href="/the-cao-da-mua">
                            <div class="row marginauto">
                                <div class="col-auto left-right">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.3799 17.0001L16.3899 17.0301C16.4428 17.2271 16.4563 17.4325 16.4295 17.6347C16.4028 17.8369 16.3365 18.0319 16.2343 18.2084C16.1321 18.3849 15.9961 18.5395 15.834 18.6634C15.672 18.7872 15.4871 18.8778 15.2899 18.9301L7.77993 20.9501C7.3808 21.0568 6.95564 21.001 6.59762 20.7948C6.2396 20.5886 5.97792 20.2489 5.86993 19.8501L3.04993 9.33008C2.94457 8.931 3.00102 8.50647 3.20701 8.14879C3.413 7.79112 3.75187 7.52923 4.14993 7.42008L10.1099 5.83008" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M20.1411 3H10.9701C10.4957 3 10.1111 3.38459 10.1111 3.859V16.141C10.1111 16.6154 10.4957 17 10.9701 17H20.1411C20.6155 17 21.0001 16.6154 21.0001 16.141V3.859C21.0001 3.38459 20.6155 3 20.1411 3Z" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16.23 7.91939L17.485 9.51639C17.5995 9.66533 17.6617 9.84797 17.6617 10.0359C17.6617 10.2238 17.5995 10.4064 17.485 10.5554L16.229 12.1524C16.1628 12.2402 16.0771 12.3114 15.9787 12.3605C15.8803 12.4095 15.7719 12.4351 15.662 12.4351C15.552 12.4351 15.4436 12.4095 15.3452 12.3605C15.2468 12.3114 15.1611 12.2402 15.095 12.1524L13.839 10.5554C13.7241 10.4064 13.6619 10.2235 13.6619 10.0354C13.6619 9.84726 13.7241 9.66442 13.839 9.51539L15.095 7.91939C15.1611 7.83159 15.2468 7.76036 15.3452 7.7113C15.4436 7.66225 15.552 7.63672 15.662 7.63672C15.7719 7.63672 15.8803 7.66225 15.9787 7.7113C16.0771 7.76036 16.1628 7.83159 16.229 7.91939H16.23Z" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <div class="col-10 nav-bar-log-top-body-col">
                                    <span>Thẻ cào đã mua</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row marginauto nav-bar-nick nav-bar-child add-active_lich-su-dich-vu">
                    <div class="col-12 left-right">
                        <a href="/lich-su-dich-vu">
                            <div class="row marginauto">
                                <div class="col-auto left-right">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 21H8C6.67392 21 5.40215 20.4732 4.46447 19.5355C3.52678 18.5979 3 17.3261 3 16V8C3 6.67392 3.52678 5.40215 4.46447 4.46447C5.40215 3.52678 6.67392 3 8 3H16C17.3261 3 18.5979 3.52678 19.5355 4.46447C20.4732 5.40215 21 6.67392 21 8V10" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7 8.505L7.83 9.25L9.5 7.75" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 9H17" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7 13.505L7.83 14.25L9.5 12.75" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M20.5 22H13.625C13.3266 22 13.0405 21.8815 12.8295 21.6705C12.6185 21.4595 12.5 21.1734 12.5 20.875V15.954C12.4999 15.5488 12.5819 15.1477 12.741 14.775L13.176 13.759C13.2722 13.5339 13.4323 13.3419 13.6366 13.207C13.8408 13.0721 14.0802 13.0001 14.325 13H19.674C19.9189 12.9998 20.1584 13.0716 20.3628 13.2063C20.5673 13.3411 20.7276 13.5329 20.824 13.758L21.258 14.775C21.4176 15.1479 21.4999 15.5494 21.5 15.955V21C21.5 21.2652 21.3946 21.5196 21.2071 21.7071C21.0196 21.8946 20.7652 22 20.5 22Z" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17 13V16.384" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M21.5 20.8848V17.3848C21.5 17.1195 21.3946 16.8652 21.2071 16.6777C21.0196 16.4901 20.7652 16.3848 20.5 16.3848H13.5C13.2348 16.3848 12.9804 16.4901 12.7929 16.6777C12.6054 16.8652 12.5 17.1195 12.5 17.3848V20.8848" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <div class="col-10 nav-bar-log-top-body-col">
                                    <span>Dịch vụ đã mua</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row marginauto nav-bar-nick nav-bar-child add-active_lich-su-atm-tu-dong">
                    <div class="col-12 left-right">
                        <a href="/lich-su-atm-tu-dong">
                            <div class="row marginauto">
                                <div class="col-auto left-right">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 21H3" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M4 21V5C4 4.46957 4.21071 3.96086 4.58579 3.58579C4.96086 3.21071 5.46957 3 6 3H15C15.5304 3 16.0391 3.21071 16.4142 3.58579C16.7893 3.96086 17 4.46957 17 5V10" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13.5 6H7.5C7.22386 6 7 6.22386 7 6.5V9.5C7 9.77614 7.22386 10 7.5 10H13.5C13.7761 10 14 9.77614 14 9.5V6.5C14 6.22386 13.7761 6 13.5 6Z" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7 14H9" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14 21V16.5" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17 21V16.5" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M20 21V16.5" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 21H21" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13 14.65V16.5H21V14.65L17 13L13 14.65Z" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <div class="col-10 nav-bar-log-top-body-col">
                                    <span>Lịch sử nạp ATM tự động</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row marginauto nav-bar-nick nav-bar-child add-active">
                    <div class="col-12 left-right">
                        <a href="#">
                            <div class="row marginauto">
                                <div class="col-auto left-right">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 10V8C3 6.67392 3.52678 5.40215 4.46447 4.46447C5.40215 3.52678 6.67392 3 8 3H16C17.3261 3 18.5979 3.52678 19.5355 4.46447C20.4732 5.40215 21 6.67392 21 8V16C21 17.3261 20.4732 18.5979 19.5355 19.5355C18.5979 20.4732 17.3261 21 16 21H13" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M18.0576 9.66694L14.3346 5.94402C13.8176 5.42697 12.9793 5.42697 12.4622 5.94402L10.9434 7.46289C10.4263 7.97994 10.4263 8.81825 10.9434 9.33531L14.6663 13.0582C15.1833 13.5753 16.0216 13.5753 16.5387 13.0582L18.0576 11.5394C18.5746 11.0223 18.5746 10.184 18.0576 9.66694Z" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16.2 7.80078L12.8 11.2008" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.5 21C5.60999 21 4.73996 20.7361 3.99994 20.2416C3.25991 19.7471 2.68314 19.0443 2.34254 18.2221C2.00195 17.3998 1.91283 16.495 2.08647 15.6221C2.2601 14.7492 2.68868 13.9474 3.31802 13.318C3.94736 12.6887 4.74918 12.2601 5.6221 12.0865C6.49501 11.9128 7.39981 12.0019 8.22208 12.3425C9.04434 12.6831 9.74715 13.2599 10.2416 13.9999C10.7361 14.74 11 15.61 11 16.5C11 17.6935 10.5259 18.8381 9.68198 19.682C8.83807 20.5259 7.69348 21 6.5 21" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.39307 14.9844V16.7424L7.77507 17.5854" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <div class="col-10 nav-bar-log-top-body-col">
                                    <span>Lịch sử quay thưởng</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row marginauto nav-bar-nick nav-bar-child add-active_lich-su-mua-nick">
                    <div class="col-12 left-right">
                        <a href="/lich-su-mua-nick">
                            <div class="row marginauto">
                                <div class="col-auto left-right">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 22C20.2091 22 22 20.2091 22 18C22 15.7909 20.2091 14 18 14C15.7909 14 14 15.7909 14 18C14 20.2091 15.7909 22 18 22Z" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M19.5171 14.2999C20.158 12.4765 20.1604 10.4894 19.524 8.66448C18.8876 6.83952 17.65 5.28491 16.0143 4.25548C14.3785 3.22605 12.4415 2.78288 10.5208 2.99861C8.60014 3.21434 6.80973 4.07617 5.44307 5.44283C4.07641 6.80949 3.21458 8.5999 2.99885 10.5206C2.78312 12.4412 3.2263 14.3782 4.25573 16.014C5.28516 17.6498 6.83977 18.8873 8.66473 19.5238C10.4897 20.1602 12.4767 20.1578 14.3001 19.5169" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11.5001 7C11.9395 7 12.3691 7.13032 12.7346 7.37447C13.1 7.61863 13.3848 7.96566 13.5529 8.37168C13.7211 8.77769 13.7651 9.22447 13.6794 9.65549C13.5936 10.0865 13.382 10.4824 13.0713 10.7932C12.7605 11.1039 12.3646 11.3156 11.9336 11.4013C11.5025 11.487 11.0558 11.443 10.6498 11.2749C10.2437 11.1067 9.89671 10.8219 9.65255 10.4565C9.40839 10.0911 9.27808 9.66147 9.27808 9.222C9.27808 8.63269 9.51218 8.06751 9.92889 7.65081C10.3456 7.2341 10.9108 7 11.5001 7" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.451 14.908C15.288 14.537 15.02 14.2218 14.6801 14.0011C14.3402 13.7805 13.9432 13.664 13.538 13.666H9.463C9.04011 13.6669 8.62716 13.7943 8.27731 14.0318C7.92746 14.2694 7.65674 14.6063 7.5 14.999" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M18 22C20.2091 22 22 20.2091 22 18C22 15.7909 20.2091 14 18 14C15.7909 14 14 15.7909 14 18C14 20.2091 15.7909 22 18 22Z" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M19.4731 17.2637L17.6311 19.1057L16.5271 17.9997" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>


                                </div>
                                <div class="col-10 nav-bar-log-top-body-col">
                                    <span>Tài khoản đã mua</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row marginauto nav-bar-nick nav-bar-child add-active_lich-su-tra-gop">
                    <div class="col-12 left-right">
                        <a href="/lich-su-tra-gop">
                            <div class="row marginauto">
                                <div class="col-auto left-right">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.47 3.02245C13.1247 3.67753 13.4923 4.56586 13.492 5.49201C13.4917 6.41816 13.1236 7.30626 12.4685 7.96095C12.1441 8.28512 11.7591 8.54222 11.3353 8.71758C10.9116 8.89295 10.4575 8.98313 9.99891 8.98299C9.07276 8.98271 8.18466 8.61453 7.52997 7.95945C6.87515 7.30436 6.50738 6.41598 6.50757 5.48974C6.50776 4.5635 6.87588 3.67527 7.53097 3.02045C8.18605 2.36563 9.07443 1.99786 10.0007 1.99805C10.9269 1.99823 11.8151 2.36636 12.47 3.02145" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14.363 12.7952C13.064 12.2762 11.54 11.9902 10 11.9902C5.952 11.9902 2 13.9572 2 16.9822V17.9822C2 18.2475 2.10536 18.5018 2.29289 18.6893C2.48043 18.8769 2.73478 18.9822 3 18.9822H12.413" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17 22C15.6739 22 14.4021 21.4732 13.4645 20.5355C12.5268 19.5979 12 18.3261 12 17C12 14.296 14.3 11.997 17.004 12C18.3301 12.0005 19.6016 12.5278 20.5389 13.4659C21.4763 14.4039 22.0025 15.6759 22.002 17.002C22.0015 18.3281 21.4742 19.5996 20.5361 20.537C19.5981 21.4743 18.3261 22.0005 17 22Z" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M18.512 16.9605H16.488V14.9375" stroke="#434657" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="col-10 nav-bar-log-top-body-col">
                                    <span>Tài khoản trả góp</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                {{--                                    Vong lap thang con--}}

            </div>
        </div>
    </div>

    <div class="menu-category-mobile">
        <ul class=" ">
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
            <li>
                <a href="/nap-the">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/menu_category3.png" alt="">
                    <span>Nạp thẻ cào</span>
                </a>
            </li>

            <li>
                <a href="/nap-the">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/menu_category4.png" alt="">
                    <span>Nạp ATM-Ví</span>
                </a>
            </li>
            <li>
                <a href="/mua-the">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/menu_category7.png" alt="">
                    <span>Mua thẻ</span>
                </a>
            </li>
            <li>
                <a href="/mua-acc">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/menu_category5.png" alt="">
                    <span>Mua Acc Game</span>
                </a>
            </li>
            <li>
                <a href="/dich-vu">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/menu_category8.png" alt="">
                    <span>Dịch vụ Game</span>
                </a>
            </li>
            <li>
                <a href="/minigame">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/menu_category9.png" alt="">
                    <span>Vòng quay</span>
                </a>
            </li>
            <div class="menu-category-mobile-partition"></div>
            <li>
                <a href="">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/menu_category6.png" alt="">
                    <span>Đăng nhập/ Đăng ký</span>
                </a>
            </li>
        </ul>
    </div>
</div>
