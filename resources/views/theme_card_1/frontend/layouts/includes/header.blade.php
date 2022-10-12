<header>
    <div class="nav-top">
        <div class="container">
            <div class="logo">
                <a href="/" title="Mua thẻ cao online"><img src="/upload-usr/images/7zFjHlXli6_1617873683.png"  alt="Mua thẻ cào online" /></a>
            </div>
            <nav id="navmenutop">
                <a class="shownewx"><img src="/assets/frontend/images/new_index/ic_openmenu.svg" alt="Menu" /></a>
                <ul class="menu showmore">
                    <span class="close_nav"><img src="/assets/frontend/images/new_index/close_nav.svg" alt="close"></span>
                    <li class="m1 mmt "><a href="mua-ma-the.html" title="mua thẻ điện thoại">Mua thẻ điện thoại</a></li>
                    <li class="m1 "><a href="/" title="trang chủ">Trang chủ</a></li>

                    <li class="m1 "><a href="nap-the" title="nạp tiền" data-toggle=modal data-target=#signin>Nạp tiền</a></li>
                    <li class="m1 "><a href="/atm" rel="/atm" title="nạp ví - atm" class="load-modal">Nạp Ví - ATM</a></li>

                    <li class="m1 "><a href="/user/tran-log" title="Lịch sử giao dịch" data-toggle=modal data-target=#signin>Lịch sử giao dịch</a></li>
                    <li class="m1"> <a href="/blog" title="Giới thiệu">Tin tức</a>
                    <li class="m1 box-loading ">
                        <div class="btn-loading" >
                            <div class="loading">
                                <div class="loading-child"></div>
                            </div>
                        </div>
                    </li>
                    <li class="m1 wp_login box-logined" >
{{--                        <div class="login">--}}
{{--                            <span class="btn_login" data-toggle="modal" data-target="#signin"><i class="icon_account ic_login"><img src="/assets/frontend/images/new_index/icon_login.svg" alt="login"></i>Đăng nhập</span>--}}
{{--                            <span style="border: 1px solid #FFFFFF;transform: rotate(104.43deg);background:#ffffff;width:20px;display:inline-block; vertical-align:middle;"></span>--}}
{{--                            <span class="btn_register" onclick="window.location.href = 'https://thegarenagiare.com/register';"><i class="icon_account ic_register"><img src="/assets/frontend/images/new_index/icon_register.svg" alt="register"></i>Đăng ký</span>--}}
{{--                        </div>--}}
                    </li>
                    <li class="m1 after_login box-account">
                        <div  id="manageAcount">


                        </div>
                        <ul class="mini_menu">
                            <li class="money_sum">  </li>
                            <li> <a rel="nofollow" href="/user/profile"><i class="icon_user"><img src="/assets/frontend/images/new_index/card_history.svg" alt="Thông tin tài khoản"></i>Thông tin tài khoản</a> </li>
                            <li> <a rel="nofollow" href="/user/tran-log"><i class="fas fa-handshake"></i> Lịch sử giao dịch</a> </li>
                            <li> <a rel="nofollow" href="/user/change-password"><i class="fas fa-key"></i> Thay đổi mật khẩu</a> </li>
                            <li class="account_logout"></li>
                        </ul>
                    </li>
                    <form id="logout-form" action="{{ url('/ajax/logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
            </nav>
            <div class="bg_gra"></div>
        </div>
    </div>
    <!--second nav work end-->
</header>
