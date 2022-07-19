<header>

    <nav class="navbar navbar-default navbar-top  navbar-expand-lg navbar-light  fixed-top">
        <div class="container justify-content-between">
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="/">
                <img class="navbar-brand " src="/assets/frontend/{{theme('')->theme_key}}/image/FZwGMPO8PK_1627292059.png" height="50px" alt="logo">
            </a>
            <div class="span-search d-lg-none">
                <a  href="#" id="btn-search" ><i class="fas fa-search"></i></a>
            </div>

            <div class="account-profile account-profile-mobile d-lg-none">
                <div class="span-account login box-account-mobile box-account-mobile_data">

                </div>
                <div class="box-loading btn-loading" >
                    <div class="loading">
                        <div class="loading-child"></div>
                    </div>
                </div>

            </div>

            <form id="form-search" action="" class=" d-lg-none" style="display: none">
                <div class="input-group mb-3">
                    <input type="text" id="input-search"  name="query" placeholder="Tìm kiếm..." value="" class="form-control" autocomplete="off" >
                    <div class="input-group-append">
                        <span class="input-group-text"><button class="btn-submit"><i class="fas fa-search"></i></button></span>
                    </div>
                </div>
            </form>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul  class="navbar-nav ml-auto mr-2">
                    <li class="nav-item ">
                        <a  rel=""  href="/" class="c-link nav-link">Trang chủ</a>
                    </li>
                    <li class="nav-item ">
                        <a  rel=""  href="#modalLogin" class="c-link nav-link">Nạp Tiền<span class="c-arrow c-toggler1"></span></a>
                        <ul id="children-of-1265" class=" dropdown-menu c-menu-type-classic c-pull-left " >
                            <li class="nav-item ">
                                <a  rel="" href="/nap-the" class="">Nạp Thẻ C&agrave;o</a>
                            </li>
                            <li class="nav-item ">
                                <a  rel="" href="/recharge-atm" class="">Nạp ATM / V&iacute; Tự Động</a></li>
                            <li class="nav-item ">
                                <a target='_blank' rel="" href="/tin-tuc/slug" class="">Hướng Dẫn Nạp ATM Tự Động</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a  rel=""  href="/mua-the" class="c-link nav-link">Mua thẻ</a>
                    </li>
                    <li class="nav-item ">
                        <a  rel=""  href="/tin-tuc/slug" class="c-link nav-link">UY T&Iacute;N SHOP</a>
                    </li>
                    <li class="nav-item ">
                        <a  rel=""  href="/tin-tuc" class="c-link nav-link">Tin tức</a>
                    </li>
                </ul>
                {{--                    Chưa đang nhập--}}
                <div class="text-center box-logined box-logined_data"  style="border: 1px solid #cccccc;border-radius: 5px;padding: 10px 19px;">

                </div>
                {{--                    Đã đăng nhập--}}
                <div class="box-account box-account_data">

                </div>

                <div class="box-loading btn-loading" >
                    <div class="loading">
                        <div class="loading-child"></div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
    @csrf
</form>
