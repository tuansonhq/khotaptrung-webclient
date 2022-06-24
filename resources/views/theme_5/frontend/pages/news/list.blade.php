@extends('frontend.layouts.master')
@section('scripts')
    <script src="/assets/{{env('THEME_VERSION')}}/js/js_trong/script_trong.js"></script>
@endsection
@section('content')
    <div class="container-fix container">
        {{--breadcrum--}}
        <ul class="breadcrum--list">
            <li class="breadcrum--item">
                <a href="/" class="breadcrum--link">Trang chủ</a>
            </li>
            <li class="breadcrum--item">
                <a href="" class="breadcrum--link">Hướng dẫn game</a>
            </li>
            <li class="breadcrum--item">
                <a href="" class="breadcrum--link">Tin tức</a>
            </li>
        </ul>
        {{--content--}}
        <div class="card--mobile__title">
            <a href="/tin-tuc" class="card--back">
                <img src="/assets/theme_3/image/icons/back.png" alt="">
            </a>
            <h4>Tin cộng đồng</h4>
        </div>
        <div class="card --custom mt-0 mt-lg-3 p-3" id="list-article">
            <div class="card--header">
                <div class="card--header__title">
                    <div class="title__icon mr-1"><img src="/assets/{{env('THEME_VERSION')}}/image/icons/lightning.png" alt=""></div>
                    <h4>Tin cộng đồng</h4>
                </div>
            </div>
            <div class="card--body mt-3">
                <div class="row px-2">
                    <div class="col-6 col-lg-3 px-2 mt-2 mb-3">
                        <div class="article mb-3">
                            <div class="article--thumbnail">
                                <a href="/tin-tuc/baiviet">
                                    <img
                                        src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/thumbnail-2.png"
                                        alt="" class="article--thumbnail__image">
                                </a>
                            </div>
                            <div class="article--title my-3">
                                <a href="/tin-tuc/baiviet" class="article--title__link">
                                    Hướng dẫn đăng ký PC Game Pass tại Việt Nam!
                                </a>
                            </div>
                            <div class="article--date">
                                <i class="__icon calendar mr-2"></i>
                                21/01/2022
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 px-2 mt-2 mb-3">
                        <div class="article mb-3">
                            <div class="article--thumbnail">
                                <a href="/tin-tuc/baiviet">
                                    <img
                                        src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/228194095_808723353179393_7250558363246114186_n-700x371.jpg"
                                        alt="" class="article--thumbnail__image">
                                </a>
                            </div>
                            <div class="article--title my-3">
                                <a href="/tin-tuc/baiviet" class="article--title__link">
                                    XM8 LÔI THẦN - SKIN XM8 NÂNG CẤP MẠNH NHẤT
                                </a>
                            </div>
                            <div class="article--date">
                                <i class="__icon calendar mr-2"></i>
                                21/01/2022
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 px-2 mt-2 mb-3">
                        <div class="article mb-3">
                            <div class="article--thumbnail">
                                <a href="/tin-tuc/baiviet">
                                    <img
                                        src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/free-fire-m1014-luc-long-la-gi-ma-khien-game-thu-mong-ngong-den-vay-01-700x700.jpg"
                                        alt="" class="article--thumbnail__image">
                                </a>
                            </div>
                            <div class="article--title my-3">
                                <a href="/tin-tuc/baiviet" class="article--title__link">
                                    FREE FIRE: M1014 LONG TỘC ĐÃ CHÍNH THỨC RA MẮT !!
                                </a>
                            </div>
                            <div class="article--date">
                                <i class="__icon calendar mr-2"></i>
                                21/01/2022
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 px-2 mt-2 mb-3">
                        <div class="article mb-3">
                            <div class="article--thumbnail">
                                <a href="/tin-tuc/baiviet">
                                    <img
                                        src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/Dao-gien-B27.jpg"
                                        alt="" class="article--thumbnail__image">
                                </a>
                            </div>
                            <div class="article--title my-3">
                                <a href="/tin-tuc/baiviet" class="article--title__link">
                                    NHỮNG THAY ĐỔI VÀ CÁC SKIN MỚI TRONG FREE FIRE Ở OB27
                                </a>
                            </div>
                            <div class="article--date">
                                <i class="__icon calendar mr-2"></i>
                                21/01/2022
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-3 px-2 mt-2 mb-3">
                        <div class="article mb-3">
                            <div class="article--thumbnail">
                                <a href="/tin-tuc/baiviet">
                                    <img
                                        src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/228194095_808723353179393_7250558363246114186_n-700x371.jpg"
                                        alt="" class="article--thumbnail__image">
                                </a>
                            </div>
                            <div class="article--title my-3">
                                <a href="/tin-tuc/baiviet" class="article--title__link">
                                    XM8 LÔI THẦN - SKIN XM8 NÂNG CẤP MẠNH NHẤT
                                </a>
                            </div>
                            <div class="article--date">
                                <i class="__icon calendar mr-2"></i>
                                21/01/2022
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 px-2 mt-2 mb-3">
                        <div class="article mb-3">
                            <div class="article--thumbnail">
                                <a href="/tin-tuc/baiviet">
                                    <img
                                        src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/free-fire-m1014-luc-long-la-gi-ma-khien-game-thu-mong-ngong-den-vay-01-700x700.jpg"
                                        alt="" class="article--thumbnail__image">
                                </a>
                            </div>
                            <div class="article--title my-3">
                                <a href="/tin-tuc/baiviet" class="article--title__link">
                                    FREE FIRE: M1014 LONG TỘC ĐÃ CHÍNH THỨC RA MẮT !!
                                </a>
                            </div>
                            <div class="article--date">
                                <i class="__icon calendar mr-2"></i>
                                21/01/2022
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 px-2 mt-2 mb-3">
                        <div class="article mb-3">
                            <div class="article--thumbnail">
                                <a href="/tin-tuc/baiviet">
                                    <img
                                        src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/Dao-gien-B27.jpg"
                                        alt="" class="article--thumbnail__image">
                                </a>
                            </div>
                            <div class="article--title my-3">
                                <a href="/tin-tuc/baiviet" class="article--title__link">
                                    NHỮNG THAY ĐỔI VÀ CÁC SKIN MỚI TRONG FREE FIRE Ở OB27
                                </a>
                            </div>
                            <div class="article--date">
                                <i class="__icon calendar mr-2"></i>
                                21/01/2022
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 px-2 mt-2 mb-3">
                        <div class="article mb-3">
                            <div class="article--thumbnail">
                                <a href="/tin-tuc/baiviet">
                                    <img
                                        src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/thumbnail-2.png"
                                        alt="" class="article--thumbnail__image">
                                </a>
                            </div>
                            <div class="article--title my-3">
                                <a href="/tin-tuc/baiviet" class="article--title__link">
                                    Hướng dẫn đăng ký PC Game Pass tại Việt Nam!
                                </a>
                            </div>
                            <div class="article--date">
                                <i class="__icon calendar mr-2"></i>
                                21/01/2022
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-3 px-2 mt-2 mb-3">
                        <div class="article mb-3">
                            <div class="article--thumbnail">
                                <a href="/tin-tuc/baiviet">
                                    <img
                                        src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/thumbnail-2.png"
                                        alt="" class="article--thumbnail__image">
                                </a>
                            </div>
                            <div class="article--title my-3">
                                <a href="/tin-tuc/baiviet" class="article--title__link">
                                    Hướng dẫn đăng ký PC Game Pass tại Việt Nam!
                                </a>
                            </div>
                            <div class="article--date">
                                <i class="__icon calendar mr-2"></i>
                                21/01/2022
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 px-2 mt-2 mb-3">
                        <div class="article mb-3">
                            <div class="article--thumbnail">
                                <a href="/tin-tuc/baiviet">
                                    <img
                                        src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/228194095_808723353179393_7250558363246114186_n-700x371.jpg"
                                        alt="" class="article--thumbnail__image">
                                </a>
                            </div>
                            <div class="article--title my-3">
                                <a href="/tin-tuc/baiviet" class="article--title__link">
                                    XM8 LÔI THẦN - SKIN XM8 NÂNG CẤP MẠNH NHẤT
                                </a>
                            </div>
                            <div class="article--date">
                                <i class="__icon calendar mr-2"></i>
                                21/01/2022
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 px-2 mt-2 mb-3">
                        <div class="article mb-3">
                            <div class="article--thumbnail">
                                <a href="/tin-tuc/baiviet">
                                    <img
                                        src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/free-fire-m1014-luc-long-la-gi-ma-khien-game-thu-mong-ngong-den-vay-01-700x700.jpg"
                                        alt="" class="article--thumbnail__image">
                                </a>
                            </div>
                            <div class="article--title my-3">
                                <a href="/tin-tuc/baiviet" class="article--title__link">
                                    FREE FIRE: M1014 LONG TỘC ĐÃ CHÍNH THỨC RA MẮT !!
                                </a>
                            </div>
                            <div class="article--date">
                                <i class="__icon calendar mr-2"></i>
                                21/01/2022
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 px-2 mt-2 mb-3">
                        <div class="article mb-3">
                            <div class="article--thumbnail">
                                <a href="/tin-tuc/baiviet">
                                    <img
                                        src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/Dao-gien-B27.jpg"
                                        alt="" class="article--thumbnail__image">
                                </a>
                            </div>
                            <div class="article--title my-3">
                                <a href="/tin-tuc/baiviet" class="article--title__link">
                                    NHỮNG THAY ĐỔI VÀ CÁC SKIN MỚI TRONG FREE FIRE Ở OB27
                                </a>
                            </div>
                            <div class="article--date">
                                <i class="__icon calendar mr-2"></i>
                                21/01/2022
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-3 px-2 mt-2 mb-3">
                        <div class="article mb-3">
                            <div class="article--thumbnail">
                                <a href="/tin-tuc/baiviet">
                                    <img
                                        src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/228194095_808723353179393_7250558363246114186_n-700x371.jpg"
                                        alt="" class="article--thumbnail__image">
                                </a>
                            </div>
                            <div class="article--title my-3">
                                <a href="/tin-tuc/baiviet" class="article--title__link">
                                    XM8 LÔI THẦN - SKIN XM8 NÂNG CẤP MẠNH NHẤT
                                </a>
                            </div>
                            <div class="article--date">
                                <i class="__icon calendar mr-2"></i>
                                21/01/2022
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 px-2 mt-2 mb-3">
                        <div class="article mb-3">
                            <div class="article--thumbnail">
                                <a href="/tin-tuc/baiviet">
                                    <img
                                        src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/free-fire-m1014-luc-long-la-gi-ma-khien-game-thu-mong-ngong-den-vay-01-700x700.jpg"
                                        alt="" class="article--thumbnail__image">
                                </a>
                            </div>
                            <div class="article--title my-3">
                                <a href="/tin-tuc/baiviet" class="article--title__link">
                                    FREE FIRE: M1014 LONG TỘC ĐÃ CHÍNH THỨC RA MẮT !!
                                </a>
                            </div>
                            <div class="article--date">
                                <i class="__icon calendar mr-2"></i>
                                21/01/2022
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 px-2 mt-2 mb-3">
                        <div class="article mb-3">
                            <div class="article--thumbnail">
                                <a href="/tin-tuc/baiviet">
                                    <img
                                        src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/Dao-gien-B27.jpg"
                                        alt="" class="article--thumbnail__image">
                                </a>
                            </div>
                            <div class="article--title my-3">
                                <a href="/tin-tuc/baiviet" class="article--title__link">
                                    NHỮNG THAY ĐỔI VÀ CÁC SKIN MỚI TRONG FREE FIRE Ở OB27
                                </a>
                            </div>
                            <div class="article--date">
                                <i class="__icon calendar mr-2"></i>
                                21/01/2022
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 px-2 mt-2 mb-3">
                        <div class="article mb-3">
                            <div class="article--thumbnail">
                                <a href="/tin-tuc/baiviet">
                                    <img
                                        src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/thumbnail-2.png"
                                        alt="" class="article--thumbnail__image">
                                </a>
                            </div>
                            <div class="article--title my-3">
                                <a href="/tin-tuc/baiviet" class="article--title__link">
                                    Hướng dẫn đăng ký PC Game Pass tại Việt Nam!
                                </a>
                            </div>
                            <div class="article--date">
                                <i class="__icon calendar mr-2"></i>
                                21/01/2022
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 left-right justify-content-end default-paginate">
                        <div class="row marinautooo justify-content-center">
                            <div class="col-auto">
                                <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">
                                    <ul class="pagination pagination-sm">
                                        <li class="page-item disabled">
                                            <a href="" class="page-link">
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <span class="page-link">1</span>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="">3</a>
                                        </li>
                                        <li class="page-item disabled hidden-xs">
                                            <span class="page-link">...</span>
                                        </li>
                                        <li class="page-item hidden-xs">
                                            <a class="page-link" href="">14</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="" rel="next"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
