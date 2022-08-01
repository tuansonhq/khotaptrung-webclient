@extends('frontend.layouts.master')
@section('content')
    @dd($data)
    <div class="container container-fix" style="max-width: 1232px">
        {{--breadcrum--}}
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="/" class="breadcrumb-link">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/tin-tuc" class="breadcrumb-link">Tin tức</a>
            </li>
            <li class="breadcrumb-item">
                <a href="" class="breadcrumb-link">Chi tiết tin tức</a>
            </li>
        </ul>
        <div class="head-mobile">
            <a href="/tin-tuc" class="link-back"></a>

            <h1 class="head-title text-title">Chi tiết tin tức</h1>

            <a href="/" class="home"></a>
        </div>
        {{--content--}}
        <div class=" --custom p-3 mb-3 content-detail">
            <article id="article--detail">
                <h3 class="article--title">
                    Hướng dẫn đăng ký PC Game Pass tại Việt Nam!
                </h3>
                <div class="article--info">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/duong/time.svg"
                         class="c-mr-6"><span>21/01/2022</span>
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/duong/group.svg"
                         class="c-mr-6 c-ml-6"><span>An Nguyen</span>
                </div>
                <div class="article--thumbnail py-4">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/article-thumbnail/thumbnail-5.png" alt="" class="article--thumbnail__image py-3">
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
        <div class="c-pb-24">
            @include('frontend.widget.__related__articles')
        </div>

    </div>
@endsection
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_duong/style.js"></script>
@endsection
