@extends('frontend.layouts.master')
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/script_trong.js"></script>
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
            <a href="" class="card--back">
                <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/back.png" alt="">
            </a>
            <h4>Tin tức</h4>
        </div>
{{--       Article Slider  --}}
        <div class="card --custom">
            <div class="swiper article--slider">
                <div class="swiper-wrapper">
                    <div class="article swiper-slide">
                        <div class="row py-3 m-0">
                            <div class="col -12 col-lg-8 px-3 mb-3 mb-lg-0">
                                <div class="article--thumbnail">
                                    <a href="/tin-tuc/baiviet" class="article--link">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/article-thumbnail/thumbnail-1.png"
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
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/article-thumbnail/shopas_vn_ob29.jpg"
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
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/article-thumbnail/leon-800x450.png"
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
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/article-thumbnail/thumbnail-1.png"
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
{{--        Hot news--}}
        <div class="card --custom mt-3 px-3 pt-3">
            <div class="product-header d-flex">
                    <span>
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news.png" alt="">
                    </span>
                <p class="text-title">Tin nổi bật</p>
                <div class="product-catecory ">
                    <ul class="nav d-g-md-none" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-toggle="tab" href="#all-news" role="tab"
                               aria-selected="true">Tất cả</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#game-news" role="tab" aria-selected="false">Tin
                                game</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#betting-news   " role="tab"
                               aria-selected="false">Tin
                                cá độ</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#news_soccer" role="tab" aria-selected="false">Tin
                                bóng đá</a>
                        </li>
                    </ul>
                </div>
                <a href="/tin-tuc/slug" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>
            </div>
            <div class="d-none d-g-lg-block py-3" id="nav--article__mobile">
                <ul class="nav" role="tablist">
                    <li class="nav-item mr-2" role="presentation">
                        <a class="active" data-toggle="tab" href="#all-news" role="tab" aria-selected="true">Tất cả</a>
                    </li>
                    <li class="nav-item mr-2" role="presentation">
                        <a class="" data-toggle="tab" href="#game-news" role="tab" aria-selected="false">Game</a>
                    </li>
                    <li class="nav-item mr-2" role="presentation">
                        <a class="" data-toggle="tab" href="#betting-news" role="tab" aria-selected="false">Cá độ</a>
                    </li>
                    <li class="nav-item mr-2" role="presentation">
                        <a class="" data-toggle="tab" href="#news_soccer" role="tab" aria-selected="false">Bóng đá</a>
                    </li>
                    <li class="nav-item mr-2" role="presentation">
                        <a class="" data-toggle="tab" href="#news_soccer" role="tab" aria-selected="false">Bóng đá</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="article--news">
                <div class="tab-pane fade active show py-3 px-2" role="tabpanel" id="all-news">
                    <div class="row">
                        <div class="col-12 col-lg-2 px-2 mb-3">
                            <div class="article">
                                <div class="article--thumbnail col-4 col-lg-12 p-0 m-lg-0 mr-1">
                                    <a href="/tin-tuc/baiviet">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt=""
                                             class="article--thumbnail__image">
                                    </a>
                                    <div class="article--tag d-none d-lg-flex">
                                        <a href="/tin-tuc/slug" class="article--tag__link">
                                            Bóng đá
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12 p-0 m-lg-0 ml-2">
                                    <div class="article--title m-0 mb-3 mt-lg-3 mb-lg-1">
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
                        </div>
                        <div class="col-12 col-lg-2 px-2 mb-3">
                            <div class="article">
                                <div class="article--thumbnail col-4 col-lg-12 p-0 m-lg-0 mr-1">
                                    <a href="/tin-tuc/baiviet">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image//article-thumbnail/nv mới(1).jpg" alt=""
                                             class="article--thumbnail__image">
                                    </a>
                                    <div class="article--tag d-none d-lg-flex">
                                        <a href="/tin-tuc/slug" class="article--tag__link">
                                            Bóng đá
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12 p-0 m-lg-0 ml-2">
                                    <div class="article--title m-0 mb-3 mt-lg-3 mb-lg-1">
                                        <a href="/tin-tuc/baiviet" class="article--title__link">
                                            NHÂN VẬT MỚI THIVA VÀ DJ DIMITRI
                                        </a>
                                    </div>
                                    <div class="article--date">
                                        <i class="__icon calendar mr-2"></i>
                                        21/01/2022
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2 px-2 mb-3">
                            <div class="article">
                                <div class="article--thumbnail col-4 col-lg-12 p-0 m-lg-0 mr-1">
                                    <a href="/tin-tuc/baiviet">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt=""
                                             class="article--thumbnail__image">
                                    </a>
                                    <div class="article--tag d-none d-lg-flex">
                                        <a href="/tin-tuc/slug" class="article--tag__link">
                                            Bóng đá
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12 p-0 m-lg-0 ml-2">
                                    <div class="article--title m-0 mb-3 mt-lg-3 mb-lg-1">
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
                        </div>
                        <div class="col-12 col-lg-2 px-2 mb-3">
                            <div class="article">
                                <div class="article--thumbnail col-4 col-lg-12 p-0 m-lg-0 mr-1">
                                    <a href="/tin-tuc/baiviet">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image//article-thumbnail/nv mới(1).jpg" alt=""
                                             class="article--thumbnail__image">
                                    </a>
                                    <div class="article--tag d-none d-lg-flex">
                                        <a href="/tin-tuc/slug" class="article--tag__link">
                                            Bóng đá
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12 p-0 m-lg-0 ml-2">
                                    <div class="article--title m-0 mb-3 mt-lg-3 mb-lg-1">
                                        <a href="/tin-tuc/baiviet" class="article--title__link">
                                            NHÂN VẬT MỚI THIVA VÀ DJ DIMITRI
                                        </a>
                                    </div>
                                    <div class="article--date">
                                        <i class="__icon calendar mr-2"></i>
                                        21/01/2022
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2 px-2 mb-3">
                            <div class="article">
                                <div class="article--thumbnail col-4 col-lg-12 p-0 m-lg-0 mr-1">
                                    <a href="/tin-tuc/baiviet">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt=""
                                             class="article--thumbnail__image">
                                    </a>
                                    <div class="article--tag d-none d-lg-flex">
                                        <a href="/tin-tuc/slug" class="article--tag__link">
                                            Bóng đá
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12 p-0 m-lg-0 ml-2">
                                    <div class="article--title m-0 mb-3 mt-lg-3 mb-lg-1">
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
                        </div>
                        <div class="col-12 col-lg-2 px-2 mb-3">
                            <div class="article">
                                <div class="article--thumbnail col-4 col-lg-12 p-0 m-lg-0 mr-1">
                                    <a href="/tin-tuc/baiviet">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image//article-thumbnail/nv mới(1).jpg" alt=""
                                             class="article--thumbnail__image">
                                    </a>
                                    <div class="article--tag d-none d-lg-flex">
                                        <a href="/tin-tuc/slug" class="article--tag__link">
                                            Bóng đá
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12 p-0 m-lg-0 ml-2">
                                    <div class="article--title m-0 mb-3 mt-lg-3 mb-lg-1">
                                        <a href="/tin-tuc/baiviet" class="article--title__link">
                                            NHÂN VẬT MỚI THIVA VÀ DJ DIMITRI
                                        </a>
                                    </div>
                                    <div class="article--date">
                                        <i class="__icon calendar mr-2"></i>
                                        21/01/2022
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade py-3 px-2" role="tabpanel" id="game-news">
                    <div class="row">
                        <div class="col-12 col-lg-2 px-2 mb-3">
                            <div class="article">
                                <div class="article--thumbnail col-4 col-lg-12 p-0 m-lg-0 mr-1">
                                    <a href="/tin-tuc/baiviet">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image//article-thumbnail/nv mới(1).jpg" alt=""
                                             class="article--thumbnail__image">
                                    </a>
                                    <div class="article--tag d-none d-lg-flex">
                                        <a href="/tin-tuc/slug" class="article--tag__link">
                                            Bóng đá
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12 p-0 m-lg-0 ml-2">
                                    <div class="article--title m-0 mb-3 mt-lg-3 mb-lg-1">
                                        <a href="/tin-tuc/baiviet" class="article--title__link">
                                            NHÂN VẬT MỚI THIVA VÀ DJ DIMITRI
                                        </a>
                                    </div>
                                    <div class="article--date">
                                        <i class="__icon calendar mr-2"></i>
                                        21/01/2022
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2 px-2 mb-3">
                            <div class="article">
                                <div class="article--thumbnail col-4 col-lg-12 p-0 m-lg-0 mr-1">
                                    <a href="/tin-tuc/baiviet">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt=""
                                             class="article--thumbnail__image">
                                    </a>
                                    <div class="article--tag d-none d-lg-flex">
                                        <a href="/tin-tuc/slug" class="article--tag__link">
                                            Bóng đá
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12 p-0 m-lg-0 ml-2">
                                    <div class="article--title m-0 mb-3 mt-lg-3 mb-lg-1">
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
                        </div>
<div class="col-12 col-lg-2 px-2 mb-3">
                            <div class="article">
                                <div class="article--thumbnail col-4 col-lg-12 p-0 m-lg-0 mr-1">
                                    <a href="/tin-tuc/baiviet">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image//article-thumbnail/nv mới(1).jpg" alt=""
                                             class="article--thumbnail__image">
                                    </a>
                                    <div class="article--tag d-none d-lg-flex">
                                        <a href="/tin-tuc/slug" class="article--tag__link">
                                            Bóng đá
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12 p-0 m-lg-0 ml-2">
                                    <div class="article--title m-0 mb-3 mt-lg-3 mb-lg-1">
                                        <a href="/tin-tuc/baiviet" class="article--title__link">
                                            NHÂN VẬT MỚI THIVA VÀ DJ DIMITRI
                                        </a>
                                    </div>
                                    <div class="article--date">
                                        <i class="__icon calendar mr-2"></i>
                                        21/01/2022
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2 px-2 mb-3">
                            <div class="article">
                                <div class="article--thumbnail col-4 col-lg-12 p-0 m-lg-0 mr-1">
                                    <a href="/tin-tuc/baiviet">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt=""
                                             class="article--thumbnail__image">
                                    </a>
                                    <div class="article--tag d-none d-lg-flex">
                                        <a href="/tin-tuc/slug" class="article--tag__link">
                                            Bóng đá
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12 p-0 m-lg-0 ml-2">
                                    <div class="article--title m-0 mb-3 mt-lg-3 mb-lg-1">
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
                        </div>
<div class="col-12 col-lg-2 px-2 mb-3">
                            <div class="article">
                                <div class="article--thumbnail col-4 col-lg-12 p-0 m-lg-0 mr-1">
                                    <a href="/tin-tuc/baiviet">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image//article-thumbnail/nv mới(1).jpg" alt=""
                                             class="article--thumbnail__image">
                                    </a>
                                    <div class="article--tag d-none d-lg-flex">
                                        <a href="/tin-tuc/slug" class="article--tag__link">
                                            Bóng đá
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12 p-0 m-lg-0 ml-2">
                                    <div class="article--title m-0 mb-3 mt-lg-3 mb-lg-1">
                                        <a href="/tin-tuc/baiviet" class="article--title__link">
                                            NHÂN VẬT MỚI THIVA VÀ DJ DIMITRI
                                        </a>
                                    </div>
                                    <div class="article--date">
                                        <i class="__icon calendar mr-2"></i>
                                        21/01/2022
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2 px-2 mb-3">
                            <div class="article">
                                <div class="article--thumbnail col-4 col-lg-12 p-0 m-lg-0 mr-1">
                                    <a href="/tin-tuc/baiviet">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt=""
                                             class="article--thumbnail__image">
                                    </a>
                                    <div class="article--tag d-none d-lg-flex">
                                        <a href="/tin-tuc/slug" class="article--tag__link">
                                            Bóng đá
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12 p-0 m-lg-0 ml-2">
                                    <div class="article--title m-0 mb-3 mt-lg-3 mb-lg-1">
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
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade py-3 px-2" role="tabpanel" id="betting-news">
                    <div class="row">
                        <div class="col-12 col-lg-2 px-2 mb-3">
                            <div class="article">
                                <div class="article--thumbnail col-4 col-lg-12 p-0 m-lg-0 mr-1">
                                    <a href="/tin-tuc/baiviet">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt=""
                                             class="article--thumbnail__image">
                                    </a>
                                    <div class="article--tag d-none d-lg-flex">
                                        <a href="/tin-tuc/slug" class="article--tag__link">
                                            Bóng đá
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12 p-0 m-lg-0 ml-2">
                                    <div class="article--title m-0 mb-3 mt-lg-3 mb-lg-1">
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
                        </div>
                        <div class="col-12 col-lg-2 px-2 mb-3">
                            <div class="article">
                                <div class="article--thumbnail col-4 col-lg-12 p-0 m-lg-0 mr-1">
                                    <a href="/tin-tuc/baiviet">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image//article-thumbnail/nv mới(1).jpg" alt=""
                                             class="article--thumbnail__image">
                                    </a>
                                    <div class="article--tag d-none d-lg-flex">
                                        <a href="/tin-tuc/slug" class="article--tag__link">
                                            Bóng đá
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12 p-0 m-lg-0 ml-2">
                                    <div class="article--title m-0 mb-3 mt-lg-3 mb-lg-1">
                                        <a href="/tin-tuc/baiviet" class="article--title__link">
                                            NHÂN VẬT MỚI THIVA VÀ DJ DIMITRI
                                        </a>
                                    </div>
                                    <div class="article--date">
                                        <i class="__icon calendar mr-2"></i>
                                        21/01/2022
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2 px-2 mb-3">
                            <div class="article">
                                <div class="article--thumbnail col-4 col-lg-12 p-0 m-lg-0 mr-1">
                                    <a href="/tin-tuc/baiviet">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt=""
                                             class="article--thumbnail__image">
                                    </a>
                                    <div class="article--tag d-none d-lg-flex">
                                        <a href="/tin-tuc/slug" class="article--tag__link">
                                            Bóng đá
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12 p-0 m-lg-0 ml-2">
                                    <div class="article--title m-0 mb-3 mt-lg-3 mb-lg-1">
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
                        </div>
                        <div class="col-12 col-lg-2 px-2 mb-3">
                            <div class="article">
                                <div class="article--thumbnail col-4 col-lg-12 p-0 m-lg-0 mr-1">
                                    <a href="/tin-tuc/baiviet">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image//article-thumbnail/nv mới(1).jpg" alt=""
                                             class="article--thumbnail__image">
                                    </a>
                                    <div class="article--tag d-none d-lg-flex">
                                        <a href="/tin-tuc/slug" class="article--tag__link">
                                            Bóng đá
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12 p-0 m-lg-0 ml-2">
                                    <div class="article--title m-0 mb-3 mt-lg-3 mb-lg-1">
                                        <a href="/tin-tuc/baiviet" class="article--title__link">
                                            NHÂN VẬT MỚI THIVA VÀ DJ DIMITRI
                                        </a>
                                    </div>
                                    <div class="article--date">
                                        <i class="__icon calendar mr-2"></i>
                                        21/01/2022
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2 px-2 mb-3">
                            <div class="article">
                                <div class="article--thumbnail col-4 col-lg-12 p-0 m-lg-0 mr-1">
                                    <a href="/tin-tuc/baiviet">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt=""
                                             class="article--thumbnail__image">
                                    </a>
                                    <div class="article--tag d-none d-lg-flex">
                                        <a href="/tin-tuc/slug" class="article--tag__link">
                                            Bóng đá
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12 p-0 m-lg-0 ml-2">
                                    <div class="article--title m-0 mb-3 mt-lg-3 mb-lg-1">
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
                        </div>
                        <div class="col-12 col-lg-2 px-2 mb-3">
                            <div class="article">
                                <div class="article--thumbnail col-4 col-lg-12 p-0 m-lg-0 mr-1">
                                    <a href="/tin-tuc/baiviet">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image//article-thumbnail/nv mới(1).jpg" alt=""
                                             class="article--thumbnail__image">
                                    </a>
                                    <div class="article--tag d-none d-lg-flex">
                                        <a href="/tin-tuc/slug" class="article--tag__link">
                                            Bóng đá
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-12 p-0 m-lg-0 ml-2">
                                    <div class="article--title m-0 mb-3 mt-lg-3 mb-lg-1">
                                        <a href="/tin-tuc/baiviet" class="article--title__link">
                                            NHÂN VẬT MỚI THIVA VÀ DJ DIMITRI
                                        </a>
                                    </div>
                                    <div class="article--date">
                                        <i class="__icon calendar mr-2"></i>
                                        21/01/2022
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="card --custom mt-3 p-3">
            <div class="card--header">
                <div class="card--header__title">
                    <div class="title__icon mr-1"><img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/lightning.png"
                                                       alt=""></div>
                    <h4>Hướng dẫn game</h4>
                </div>
                <div class="card--header__tools">
                    <a href="/tin-tuc/slug" class="global__link">Xem thêm <i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>
                </div>
            </div>
            <div class="card--body mt-3">
                <div class="swiper article--slider__news overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="article">
                                <div class="article--thumbnail">
                                    <a href="/tin-tuc/baiviet">
                                        <img
                                            src="/assets/frontend/{{theme('')->theme_key}}/image/article-thumbnail/thumbnail-2.png"
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
                        <div class="swiper-slide">
                            <div class="article">
                                <div class="article--thumbnail">
                                    <a href="/tin-tuc/baiviet">
                                        <img
                                            src="/assets/frontend/{{theme('')->theme_key}}/image/article-thumbnail/228194095_808723353179393_7250558363246114186_n-700x371.jpg"
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
                        <div class="swiper-slide">
                            <div class="article">
                                <div class="article--thumbnail">
                                    <a href="/tin-tuc/baiviet">
                                        <img
                                            src="/assets/frontend/{{theme('')->theme_key}}/image/article-thumbnail/free-fire-m1014-luc-long-la-gi-ma-khien-game-thu-mong-ngong-den-vay-01-700x700.jpg"
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
                        <div class="swiper-slide">
                            <div class="article">
                                <div class="article--thumbnail">
                                    <a href="/tin-tuc/baiviet">
                                        <img
                                            src="/assets/frontend/{{theme('')->theme_key}}/image/article-thumbnail/Dao-gien-B27.jpg"
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

                    </div>
                </div>
            </div>
        </div>
        <div class="card --custom mt-3 p-3">
            <div class="card--header">
                <div class="card--header__title">
                    <div class="title__icon mr-1"><img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/lightning.png"
                                                       alt=""></div>
                    <h4>Tin cộng đồng</h4>
                </div>
                <div class="card--header__tools">
                    <a href="/tin-tuc/slug" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>
                </div>
            </div>
            <div class="card--body mt-3">
                <div class="swiper article--slider__news overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="article">
                                <div class="article--thumbnail">
                                    <a href="/tin-tuc/baiviet">
                                        <img
                                            src="/assets/frontend/{{theme('')->theme_key}}/image/article-thumbnail/thumbnail-2.png"
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
                        <div class="swiper-slide">
                            <div class="article">
                                <div class="article--thumbnail">
                                    <a href="/tin-tuc/baiviet">
                                        <img
                                            src="/assets/frontend/{{theme('')->theme_key}}/image/article-thumbnail/228194095_808723353179393_7250558363246114186_n-700x371.jpg"
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
                        <div class="swiper-slide">
                            <div class="article">
                                <div class="article--thumbnail">
                                    <a href="/tin-tuc/baiviet">
                                        <img
                                            src="/assets/frontend/{{theme('')->theme_key}}/image/article-thumbnail/free-fire-m1014-luc-long-la-gi-ma-khien-game-thu-mong-ngong-den-vay-01-700x700.jpg"
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
                        <div class="swiper-slide">
                            <div class="article">
                                <div class="article--thumbnail">
                                    <a href="/tin-tuc/baiviet">
                                        <img
                                            src="/assets/frontend/{{theme('')->theme_key}}/image/article-thumbnail/Dao-gien-B27.jpg"
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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
