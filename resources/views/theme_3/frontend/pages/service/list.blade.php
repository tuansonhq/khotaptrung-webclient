@extends('frontend.layouts.master')

@section('content')
    {{--  Header mobile  --}}
    <section class="media-mobile">
        <div class="container container-fix banner-mobile-container-ct">
            <div class="row marginauto banner-mobile-row-ct">
                <div class="col-auto left-right" style="width: 10%">
                    <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/back.png" alt="" >
                </div>

                <div class="col-auto left-right banner-mobile-span text-center" style="width: 80%">
                    <h3>Cày Thuê</h3>
                </div>
                <div class="col-auto left-right" style="width: 10%">
                </div>
            </div>
        </div>
    </section>
    {{--    Banner--}}
    <section class="media-web">
        <div class="container container-fix banner-container-ct">
            <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/banner-home.png" alt="">
        </div>
    </section>
    {{--  Menu  --}}
    <section class="media-web">
        <div class="container container-fix menu-container-ct">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li class="menu-container-li-ct"><img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/arrow-right.png" alt=""></li>
                <li class="menu-container-li-ct"><a href="/dich-vu">Cày thuê</a></li>
            </ul>
        </div>
    </section>

    {{--   Bopđyy --}}
    <section>
        <div class="container container-fix body-container-ct">
            <div class="row marginauto body-container-row-ct body-container-row-mobile-ct">
                <div class="col-md-12 left-right">
                    <div class="row marginauto body-row-ct">

                        <div class="col-md-12 left-right">
                            <div class="row marginauto body-header-ct">
                                <div class="col-auto left-right">
                                    <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/caythue.png" alt="">
                                </div>
                                <div class="col-md-10 col-8 body-header-col-ct">
                                    <h3>Cày thuê</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 left-right media-mobile">
                            <div class="row marginauto banner-container-ct">
                                <div class="col-md-12 text-left left-right">
                                    <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/banner-home.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 left-right">
                            <div class="row marginauto body-title-ct">
                                <div class="col-md-12 text-left left-right">
                                    <span>Chọn game muốn Cày</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 left-right">
                            <div class="row marginauto body-search-ct">
                                <div class="col-md-12 text-left left-right">
                                    <span>Tìm kiếm</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 left-right media-web">
                            <form action="" method="POST">
                                <div class="row marginauto body-form-search-ct">
                                    <div class="col-auto left-right">
                                        <input type="text" name="search" class="input-search-ct" placeholder="Tìm kiếm theo game">
                                        <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/search.png" alt="">
                                    </div>
                                    <div class="col-4 body-form-search-button-ct">
                                        <button type="submit" class="timkiem-button-ct">Tìm kiếm</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                        <div class="col-md-12 left-right media-mobile">
                            <form action="" method="POST">
                                <div class="row marginauto body-form-search-ct">
                                    <div class="col-12 left-right">
                                        <input type="text" name="search-mobile" class="input-search-ct" placeholder="Tìm kiếm theo game">
                                        <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/search.png" alt="">
                                    </div>
                                </div>
                            </form>

                        </div>

                        @include('frontend.pages.service.widget.__data__list')
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('frontend.pages.service.widget.__category__content')

    <script src="/assets/frontend/{{theme('')->theme_key}}/js/cay-thue/cay-thue.js?v={{time()}}"></script>
@endsection



