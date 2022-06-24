@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/style_trong.css">
@endsection
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
                <a href="/tin-tuc" class="breadcrum--link">Tin tức</a>
            </li>
            <li class="breadcrum--item">
                <a href="/tin-tuc/slug" class="breadcrum--link">Hướng dẫn game</a>
            </li>
        </ul>
        {{--content--}}
        <div class="card--mobile__title">
            <a href="/tin-tuc" class="card--back">
                <img src="/assets/theme_3/image/icons/back.png" alt="">
            </a>
            <h4>Chi tiết tin tức</h4>
        </div>
        <div class="card --custom p-3 mb-3">
            <article id="article--detail">
                <h3 class="article--title">
                    Hướng dẫn đăng ký PC Game Pass tại Việt Nam!
                </h3>
                <div class="article--info">
                    29/03/2022 bởi Catou
                </div>
                <div class="article--thumbnail py-4">
                    <img src="/assets/{{env('THEME_VERSION')}}/image/article-thumbnail/thumbnail-5.png" alt="" class="article--thumbnail__image py-3">
                </div>
                <div class="article--content pb-3">
                    <div class="article--content__text pb-2">
                        PC Game Pass – Microsoft vừa bất ngờ thông báo ra mắt PC Game Pass (trước đó được biết đến với tên gọi Xbox Game Pass for PC) tại năm nước Đông Nam Á, trong đó có cả Việt Nam, với mức giá “hơn cả bất ngờ”: 59.000 VND / tháng.
                        <br>
                        <br>
                        Đặc biệt trong giai đoạn đầu triển khai dịch vụ, Microsoft sẽ ưu đãi mức phí cho tháng đầu đăng ký chỉ còn… 2.500 VND, với hơn 100 tựa game đến từ Xbox Game Studios (gồm cả Bethesda Softworks) ra mắt trên dịch vụ ngay từ ngày đầu, kèm theo đó là gói thành viên EA Play đầy đủ.
                        <br>
                        <br>
                        Tuy nhiên, làm sao để đăng ký thử nghiệm dịch vụ?
                        <br>
                        <br>
                        Bài hướng dẫn đăng ký PC Game Pass sau sẽ chỉ cách để bạn có thể trải nghiệm dịch vụ chơi game cực “đáng đồng tiền bát gạo” này nhé!
                        <br>
                        <br>
                        <h5>
                            1. CHUYỂN MÃ VÙNG VIỆT NAM
                        </h5>
                        <br>
                        <br>
                        Trước khi bắt đầu đăng ký, hãy kiểm tra xem bạn đã cài đặt vùng của tài khoản Windows máy bạn ở “Việt Nam” chưa.
                        <br>
                        <br>
                        Sau đó, hãy tiến hành cập nhật Microsoft Store và ứng dụng Xbox trên máy của bạn.
                    </div>
                </div>
            </article>
        </div>
{{--        Cùng chủ đề--}}
        <div class="card --custom mt-1 p-3">
            <div class="card--header">
                <div class="card--header__title">
                    <div class="title__icon mr-1"><img src="/assets/{{env('THEME_VERSION')}}/image/icons/lightning.png" alt=""></div>
                    <h4>Bài viết cùng chủ đề</h4>
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
                        <div class="swiper-slide">
                            <div class="article">
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
                        <div class="swiper-slide">
                            <div class="article">
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
                        <div class="swiper-slide">
                            <div class="article">
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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
