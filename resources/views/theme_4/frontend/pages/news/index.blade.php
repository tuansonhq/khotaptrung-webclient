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
                <a href="" class="breadcrum--link">Tin tức</a>
            </li>
        </ul>
        {{--content--}}
        <div class="card--mobile__title">
            <span class="card--back box-account-mobile_open">
                <img src="/assets/theme_3/image/icons/back.png" alt="">
            </span>
            <h4>Tin tức</h4>
        </div>
{{--       Article Slider  --}}
        <div class="card --custom mb-lg-3">
            <div class="swiper article--slider">
                <div class="swiper-wrapper">
                    <div class="article swiper-slide">
                        <div class="row py-3 m-0">
                            <div class="col -12 col-lg-8 px-3 mb-3 mb-lg-0">
                                <div class="article--thumbnail">
                                    <a href="/tin-tuc/baiviet" class="article--link">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/thumbnail-1.png"
                                             alt="" class="article--thumbnail__image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 p-0 px-3 px-lg-0 pr-lg-3">
                                <a href="/tin-tuc/baiviet" class="article--link">
                                    <h3 class="article--title mb-2 mb-lg-4 p-lg-2">
                                        Game sơn súng, không giật lại còn cho phép thi đấu bằng PC nhưng dù có 3080 thì "max
                                        setting" cũng thế này thôi
                                    </h3>
                                </a>
                                <p class="article--description mb-3 mb-lg-0">
                                    Vốn nổi tiếng là một tựa game khá đặc biệt khi được cộng đồng game thủ gọi bằng biệt
                                    danh “sơn súng”, nay lại còn thi đấu cả bằng PC.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="article swiper-slide">
                        <div class="row py-3 m-0">
                            <div class="col -12 col-lg-8 px-3 mb-3 mb-lg-0">
                                <div class="article--thumbnail">
                                    <a href="/tin-tuc/baiviet" class="article--link">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/shopas_vn_ob29.jpg"
                                             alt="" class="article--thumbnail__image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 p-0 px-3 px-lg-0 pr-lg-3">
                                <a href="/tin-tuc/baiviet" class="article--link">
                                    <h3 class="article--title mb-2 mb-lg-4 p-lg-2">
                                        Game sơn súng, không giật lại còn cho phép thi đấu bằng PC nhưng dù có 3080 thì "max
                                        setting" cũng thế này thôi
                                    </h3>
                                </a>
                                <p class="article--description mb-3 mb-lg-0">
                                    Vốn nổi tiếng là một tựa game khá đặc biệt khi được cộng đồng game thủ gọi bằng biệt
                                    danh “sơn súng”, nay lại còn thi đấu cả bằng PC.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="article swiper-slide">
                        <div class="row py-3 m-0">
                            <div class="col -12 col-lg-8 px-3 mb-3 mb-lg-0">
                                <div class="article--thumbnail">
                                    <a href="/tin-tuc/baiviet" class="article--link">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/leon-800x450.png"
                                             alt="" class="article--thumbnail__image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 p-0 px-3 px-lg-0 pr-lg-3">
                                <a href="/tin-tuc/baiviet" class="article--link">
                                    <h3 class="article--title mb-2 mb-lg-4 p-lg-2">
                                        Game sơn súng, không giật lại còn cho phép thi đấu bằng PC nhưng dù có 3080 thì "max
                                        setting" cũng thế này thôi
                                    </h3>
                                </a>
                                <p class="article--description mb-3 mb-lg-0">
                                    Vốn nổi tiếng là một tựa game khá đặc biệt khi được cộng đồng game thủ gọi bằng biệt
                                    danh “sơn súng”, nay lại còn thi đấu cả bằng PC.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="article swiper-slide">
                        <div class="row py-3 m-0">
                            <div class="col -12 col-lg-8 px-3 mb-3 mb-lg-0">
                                <div class="article--thumbnail">
                                    <a href="/tin-tuc/baiviet" class="article--link">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/thumbnail-1.png"
                                             alt="" class="article--thumbnail__image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 p-0 px-3 px-lg-0 pr-lg-3">
                                <a href="/tin-tuc/baiviet" class="article--link">
                                    <h3 class="article--title mb-2 mb-lg-4 p-lg-2">
                                        Game sơn súng, không giật lại còn cho phép thi đấu bằng PC nhưng dù có 3080 thì "max
                                        setting" cũng thế này thôi
                                    </h3>
                                </a>
                                <p class="article--description mb-3 mb-lg-0">
                                    Vốn nổi tiếng là một tựa game khá đặc biệt khi được cộng đồng game thủ gọi bằng biệt
                                    danh “sơn súng”, nay lại còn thi đấu cả bằng PC.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 pagination--layout">
                    <div class="col -12 col-lg-8 px-3">
                    </div>
                    <div class="col-12 col-lg-4 p-0 pb-3 pr-lg-3">
                        <div class="swiper-pagination --custom  py-3 py-lg-0"></div>
                    </div>
                </div>
            </div>
        </div>
{{--        End--}}

        <div class="row flex-column-reverse flex-lg-row mx-0" id="card--body__news">
            <div class="col-lg-8 px-0 pr-lg-3 mt-1 mt-lg-0" id="list-article">
                <div class="card --custom p-3" id="new-article-update">
                    <div class="card--header">
                        <div class="card--header__title">
                            <img src="/assets/theme_3/image/icons/icon-news-title.png" class="mr-1" alt=""> Mới cập nhật
                        </div>
                    </div>

                    <div class="card--body">
                        <div class="article px-3">
                            <div class="row">
                                <div class="col-4 col-lg-4 p-0">
                                    <div class="article--thumbnail">
                                        <a href="/tin-tuc/baiviet">
                                            <img src="/assets/theme_3/image/article-thumbnail/leon-800x450.png" alt="" class="article--thumbnail__image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-8 article--info">
                                    <div class="article--title mb-3 mb-lg-0">
                                        <a href="/tin-tuc/baiviet" class="article--title__link">
                                            Liên minh huyền thoại Việt Nam vô địch Chung Kết thế giới lần thứ 12
                                        </a>
                                    </div>
                                    <div class="article--description d-none d-lg-block">
                                        Mỗi người một ý, đối với mình việc để cây xanh trong góc PC khá là thư giãn, thoải mái và thả lỏng tâm trạng hiệu quả Góc PC là...
                                    </div>
                                    <div class="article--date">
                                        <i class="__icon calendar mr-2"></i>
                                        21/01/2022
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="article px-3">
                            <div class="row">
                                <div class="col-4 col-lg-4 p-0">
                                    <div class="article--thumbnail">
                                        <a href="/tin-tuc/baiviet">
                                            <img src="/assets/theme_3/image/article-thumbnail/leon-800x450.png" alt="" class="article--thumbnail__image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-8 article--info">
                                    <div class="article--title mb-3 mb-lg-0">
                                        <a href="/tin-tuc/baiviet" class="article--title__link">
                                            Liên minh huyền thoại Việt Nam vô địch Chung Kết thế giới lần thứ 12
                                        </a>
                                    </div>
                                    <div class="article--description d-none d-lg-block">
                                        Mỗi người một ý, đối với mình việc để cây xanh trong góc PC khá là thư giãn, thoải mái và thả lỏng tâm trạng hiệu quả Góc PC là...
                                    </div>
                                    <div class="article--date">
                                        <i class="__icon calendar mr-2"></i>
                                        21/01/2022
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="article px-3">
                            <div class="row">
                                <div class="col-4 col-lg-4 p-0">
                                    <div class="article--thumbnail">
                                        <a href="/tin-tuc/baiviet">
                                            <img src="/assets/theme_3/image/article-thumbnail/leon-800x450.png" alt="" class="article--thumbnail__image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-8 article--info">
                                    <div class="article--title mb-3 mb-lg-0">
                                        <a href="/tin-tuc/baiviet" class="article--title__link">
                                            Liên minh huyền thoại Việt Nam vô địch Chung Kết thế giới lần thứ 12
                                        </a>
                                    </div>
                                    <div class="article--description d-none d-lg-block">
                                        Mỗi người một ý, đối với mình việc để cây xanh trong góc PC khá là thư giãn, thoải mái và thả lỏng tâm trạng hiệu quả Góc PC là...
                                    </div>
                                    <div class="article--date">
                                        <i class="__icon calendar mr-2"></i>
                                        21/01/2022
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="article px-3">
                            <div class="row">
                                <div class="col-4 col-lg-4 p-0">
                                    <div class="article--thumbnail">
                                        <a href="/tin-tuc/baiviet">
                                            <img src="/assets/theme_3/image/article-thumbnail/leon-800x450.png" alt="" class="article--thumbnail__image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-8 article--info">
                                    <div class="article--title mb-3 mb-lg-0">
                                        <a href="/tin-tuc/baiviet" class="article--title__link">
                                            Liên minh huyền thoại Việt Nam vô địch Chung Kết thế giới lần thứ 12
                                        </a>
                                    </div>
                                    <div class="article--description d-none d-lg-block">
                                        Mỗi người một ý, đối với mình việc để cây xanh trong góc PC khá là thư giãn, thoải mái và thả lỏng tâm trạng hiệu quả Góc PC là...
                                    </div>
                                    <div class="article--date">
                                        <i class="__icon calendar mr-2"></i>
                                        21/01/2022
                                    </div>
                                </div>
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
            <div class="col-lg-4 px-0 mb-2 mb-lg-0">
                <div class="card --custom">
                    <div class="nav-bar-hr">
                        <div class="row marginauto nav-bar-nick nav-bar-parent">
                            <div class="col-md-12 left-right">
                                <div class="row marginauto nav-bar-parent-title">
                                    <div class="col-12 left-right">
                                        <span>Danh mục</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row marginauto nav-bar-nick nav-bar-child add-active_withdraw-money">
                            <div class="col-12 left-right">
                                <a href="/tin-tuc/slug">
                                    <div class="row marginauto">
                                        <div class="col-auto left-right">
                                            <i class="__icon --md --path__custom" style="--path : url('https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Sample_code_icon.svg/2048px-Sample_code_icon.svg.png')"></i>
                                        </div>
                                        <div class="col-10 nav-bar-log-top-body-col">
                                            <span>Tất cả</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row marginauto nav-bar-nick nav-bar-child add-active_withdraw-items">
                            <div class="col-12 left-right">
                                <a href="/tin-tuc/slug">
                                    <div class="row marginauto">
                                        <div class="col-auto left-right">
                                            <i class="__icon --md --path__custom" style="--path : url(/assets/theme_3/image/icons/cat-news-game.png)"></i>
                                        </div>
                                        <div class="col-10 nav-bar-log-top-body-col">
                                            <span>Tin game</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row marginauto nav-bar-nick nav-bar-child add-active_withdraw-items">
                            <div class="col-12 left-right">
                                <a href="">
                                    <div class="row marginauto">
                                        <div class="col-auto left-right">
                                            <i class="__icon --md --path__custom" style="--path : url(/assets/theme_3/image/icons/cat-news-guide.png)"></i>
                                        </div>
                                        <div class="col-10 nav-bar-log-top-body-col">
                                            <span>Hướng dẫn</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row marginauto nav-bar-nick nav-bar-child add-active_withdraw-items">
                            <div class="col-12 left-right">
                                <a href="">
                                    <div class="row marginauto">
                                        <div class="col-auto left-right">
                                            <i class="__icon --md --path__custom" style="--path : url(/assets/theme_3/image/icons/cat-news-about.png)"></i>
                                        </div>
                                        <div class="col-10 nav-bar-log-top-body-col">
                                            <span>Về chúng tôi</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
