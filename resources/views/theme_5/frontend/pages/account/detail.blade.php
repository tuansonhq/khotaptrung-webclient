@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('meta_robots')
    <meta name="robots" content="noindex,nofollow" />
@endsection


@section('content')
    <div class="container c-container" id="account-detail">

        <div class="data__menuacc">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-item">
                    <a href="/" class="breadcrumb-link">Trang chủ</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/mua-acc" class="breadcrumb-link">Shop Account</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="" class="breadcrumb-link">{{$data->title}}</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)" class="breadcrumb-link">Chi tiết nick</a>
                </li>
            </ul>
            <div class="head-mobile">
                <a href="" class="link-back"></a>

                <h1 class="head-title text-title text-limit limit-1">Danh sách Nick Ninja School</h1>

                <a href="/" class="home"></a>
            </div>
        </div>

        <div id="showdetailacc">
            {{--                   V2 --}}


            @if(isset($data))
                <section class="acc-detail data-account-detail">
                    <div class="section-content row">
                        <div class="col-12 col-lg-7 c-pr-8 c-pr-lg-15">
                            <div class="card account-thumb">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab-thumb" role="tabpanel">
                                        <div class="card-body c-p-16 c-p-lg-0 mx-n3 mx-lg-0 d-flex">
                                            <div class="swiper gallery-top d-none d-lg-block">
                                                <div class="swiper-wrapper">
                                                    @foreach(explode('|',$data->image_extension) as $val)

                                                        <div class="swiper-slide">
                                                            <div class="gallery-photo" >
                                                                <img class="lazy" onerror="imgError(this)" src="{{\App\Library\MediaHelpers::media($val)}}" alt="mua-nick" >
                                                            </div>
                                                        </div>

                                                    @endforeach


                                                </div>
                                            </div>

                                            <div class="swiper gallery-thumbs c-ml-16 c-ml-lg-0">
                                                <div class="swiper-wrapper">
                                                    @foreach(explode('|',$data->image_extension) as $val)
                                                        <div class="swiper-slide">
                                                            <div class="gallery-photo d-none d-lg-block" data-target="#accDetail" data-toggle="modal" data-backdrop="static" data-keyboard="false">
                                                                <img class="lazy" onerror="imgError(this)" src="{{\App\Library\MediaHelpers::media($val)}}" alt="mua-nick" >
                                                            </div>

                                                            <div class="gallery-photo d-lg-none" data-fancybox="galleryNickDetail" href="{{\App\Library\MediaHelpers::media($val)}}">
                                                                <img class="lazy" onerror="imgError(this)" src="{{\App\Library\MediaHelpers::media($val)}}" alt="mua-nick" >
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-video" role="tabpanel">
                                        Coming soon...
                                    </div>
                                </div>
                                <div class="nav-controller c-px-lg-0 c-my-lg-12">
                                    <div class="swiper-pagination d-none d-lg-flex">
                                        <div class="navigation slider-prev v2 c-mr-8"></div>
                                        <div class="navigation slider-next v2"></div>
                                    </div>
                                    <ul class="nav nav-tabs size-auto" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="tab-show-acc active count-thumb" data-toggle="tab" href="#tab-thumb" role="tab"
                                               aria-selected="true"></a>
                                        </li>
                                        <li class="c-mx-4"></li>
                                        <li class="nav-item" role="presentation">
                                            <a class="tab-show-acc video" data-toggle="tab" href="#tab-video" role="tab"
                                               aria-selected="false">Video</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="group-btn d-flex d-lg-none" style="--data-between: 12px">
                                    <a href="javascript:void(0);" class="handle-recharge-modal btn pink two-line" data-tab="1">
                                        <span class="line-1">Mua bằng Thẻ cào</span>
                                        <span class="line-2">{{ 10.000 }} đ</span>
                                    </a>
                                    <a href="javascript:void(0);" class="handle-recharge-modal btn pink two-line" data-tab="2">
                                        <span class="line-1">Mua bằng ATM, Momo</span>
                                        <span class="line-2">{{  20.000 }} đ</span>
                                    </a>
                                </div>

                                <div class="d-block d-lg-none c-pt-28 c-pb-16">
                                    <hr>
                                </div>

                                <div class="d-block d-lg-none c-pt-28 c-pb-16">
                                    <hr>
                                </div>
                                @if(isset($data->product_attribute) && count($data->product_attribute))

                                    <div class="text-title c-py-8 d-block d-lg-none">
                                        Thông tin acc
                                    </div>

                                    <table class="table-acc-info c-mb-24 d-table d-lg-none">
                                        @foreach($data->product_attribute as $product_attribute)
                                        <tr>
                                            <td>
                                            <span class="link-color">
                                               {{$product_attribute->attribute->title}}
                                            </span>
                                            </td>
                                            <td>
                                            <span>
                                               {{$product_attribute->product_attribute_value_able->title}}
                                            </span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>

                                @endif

                            </div>
                        </div>

                        <div class="col-12 col-lg-5 c-pl-8 c-pl-lg-15">
                            <div class="card account-detail-info js_sticky" data-top="140">
                                <div class="card-body c-p-16 mx-n3 mx-lg-0">
                                    <div class="section-title title-color fz-lg-18 lh-lg-24">{{ isset($data->category->custom->title) ? $data->category->custom->title :  $data->category->title }}</div>
                                    <div class="text-title fw-700 c-mb-6 d-none d-lg-block">Mã số: #{{ $data->slug }}</div>
                                    <span class="d-block d-lg-none link-color c-mb-8">
                                        Mã số: {{ $data->slug }}
                                    </span>
                                    <hr>
                                    <div class="d-block d-lg-none c-pb-12"></div>

                                    @if(isset($data->product_attribute) && count($data->product_attribute))

                                        <div class="text-title c-py-8 d-none d-lg-block">
                                            Thông tin acc
                                        </div>

                                        <table class="table-acc-info c-mb-24 d-none d-lg-table">
                                            @foreach($data->product_attribute as $product_attribute)
                                                <tr>
                                                    <td>
                                            <span class="link-color">
                                               {{$product_attribute->attribute->title}}
                                            </span>
                                                    </td>
                                                    <td>
                                            <span>
                                               {{$product_attribute->product_attribute_value_able->title}}
                                            </span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>

                                    @endif


                                    @php
                                        if (isset($data->price_old)) {
                                            $sale_percent = (($data->price_old - $data->price) / $data->price_old) * 100;
                                            $sale_percent = round($sale_percent, 0, PHP_ROUND_HALF_UP);
                                        } else {
                                            $sale_percent = 0;
                                        }
                                    @endphp

                                    <div class="card disabled-color">
                                        <div class="card-body text-center c-p-0">
                                            <div class="price-acc">
                                                @if(isset($data->price_old))
                                                    <div class="price-old fz-lg-12 lh-lg-16">
                                                        {{ str_replace(',','.',number_format($data->price_old)) }}đ

                                                    </div>
                                                @endif

                                                <div class="price-current fz-lg-20 lh-lg-28 c-mx-8">
                                                    {{ str_replace(',','.',number_format($data->price)) }}đ

                                                </div>

                                                @if ($sale_percent > 0)
                                                    <div class="discount">
                                                        -{{ $sale_percent }}%
                                                    </div>
                                                @endif
                                            </div>
                                            <span>Rẻ vô đối, giá tốt nhất thị trường</span>
                                        </div>
                                    </div>
                                    <div class="c-py-24 d-none d-lg-block">
                                        <hr>
                                    </div>
                                    <div class="group-btn c-mb-16 d-none d-lg-flex " style="--data-between: 12px">
                                        <button class="btn secondary tinhnang">Trả góp</button>
                                        <button type="button" class="btn primary btn-muangay">Mua ngay</button>
                                        {{--                                                        @if(\App\Library\AuthCustom::check())--}}
                                        {{--                                                            @if(\App\Library\AuthCustom::user()->balance < $data->price)--}}
                                        {{--                                                                <button type="button" class="btn primary the-cao-atm">Mua ngay</button>--}}
                                        {{--                                                            @else--}}
                                        {{--                                                                --}}
                                        {{--                                                            @endif--}}
                                        {{--                                                        @else--}}
                                        {{--                                                            <button type="button" class="btn primary" onclick="openLoginModal()">Mua ngay</button>--}}
                                        {{--                                                        @endif--}}


                                    </div>
                                    <div class="group-btn d-none d-lg-flex" style="--data-between: 12px">
                                        <a href="javascript:void(0);"  class="handle-recharge-modal btn pink two-line" data-tab="1">
                                            <span class="line-1" style="white-space: nowrap;">Mua bằng Thẻ cào</span>
                                            <span class="line-2">10.000 đ</span>
                                        </a>
                                        <a href="javascript:void(0);"  class="handle-recharge-modal btn pink two-line" data-tab="2">
                                            <span class="line-1" style="white-space: nowrap;">Mua bằng ATM, Momo</span>
                                            <span class="line-2">20.000 đ</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="footer-mobile">
                        <div class="group-btn" style="--data-between: 12px">
                            <button class="btn secondary tinhnang">Mua trả góp</button>
                            <button class="btn primary js-step" data-target="#step2">Mua Ngay</button>
                            {{--                                            @if(App\Library\AuthCustom::check())--}}
                            {{--                                                @if(App\Library\AuthCustom::user()->balance < $data->price)--}}
                            {{--                                                    <button class="btn primary the-cao-atm">Mua Ngay</button>--}}
                            {{--                                                @else--}}
                            {{--                                                    <button class="btn primary js-step" data-target="#step2">Mua Ngay</button>--}}
                            {{--                                                @endif--}}
                            {{--                                            @else--}}
                            {{--                                                <button class="btn primary" onclick="openLoginModal()">Mua Ngay</button>--}}
                            {{--                                            @endif--}}

                        </div>
                    </div>

                    {{--  sử lý step  --}}

                    <div class="step" id="step2">
                        <form class="formDonhangAccount" action="/ajax/acc/{{ $data->slug }}/databuy" method="POST">
                            {{ csrf_field() }}
                            <div class="head-mobile">
                                <a href="javascript:void(0) " class="link-back close-step"></a>

                                <h1 class="head-title text-title">Xác nhận thanh toán</h1>

                                <a href="/" class="home"></a>
                            </div>
                            <div class="body-mobile">

                                <div class="body-mobile-content c-p-16">
                                    <div class="dialog--content__title fw-700 fz-15 c-mb-12 text-title-theme">
                                        Thông tin mua Acc
                                    </div>
                                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12 brs-8 g_mobile-content">
                                        <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                            <div class="card--attr__name fw-400 fz-13 text-center text-order">
                                                Game
                                            </div>
                                            <div class="card--attr__value fz-13 fw-500">{{ isset($data->category->custom->title) ? $data->category->custom->title :  $data->category->title }}</div>
                                        </div>
                                        <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                            <div class="card--attr__name fw-400 fz-13 text-center text-order">
                                                Giá tiền
                                            </div>
                                            <div class="card--attr__value fz-13 fw-500">{{ str_replace(',','.',number_format($data->price)) }} đ</div>
                                        </div>
                                    </div>
                                    @if(isset($data->product_attribute) && count($data->product_attribute))
                                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12 brs-8 g_mobile-content">
                                        @foreach($data->product_attribute as $product_attribute)
                                        <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                            <div class="card--attr__name fw-400 fz-13 text-center text-order">
                                                {{$product_attribute->attribute->title}}
                                            </div>
                                            <div class="card--attr__value fz-13 fw-500"> {{$product_attribute->product_attribute_value_able->title}}</div>
                                        </div>
                                        @endforeach

                                    </div>
                                    @endif


                                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12 brs-8 g_mobile-content">
                                        <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                            <div class="card--attr__name fz-13 fw-400 text-center text-order">
                                                Phương thức thanh toán
                                            </div>
                                            <div class="card--attr__value fz-13 fw-500">
                                                Tài khoản Shopbrand
                                            </div>
                                        </div>
                                        <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                            <div class="card--attr__name fw-400 fz-13 text-center">
                                                Phí thanh toán
                                            </div>
                                            <div class="card--attr__value fz-13 fw-500">
                                                Miễn phí
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card--gray c-mb-0 c-pt-8 c-pb-8 c-pl-12 brs-8 c-pr-12 g_mobile-content">
                                        <div class="card--attr__total justify-content-between d-flex text-center">
                                            <div class="card--attr__name fw-400 fz-13 text-center text-order">
                                                Tổng thanh toán
                                            </div>
                                            <div class="card--attr__value fz-13 fw-500"><a href="javascript:void(0)" class="c-text-primary">{{ str_replace(',','.',number_format($data->price)) }} đ</a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="footer-mobile">
                                <div class="group-btn" style="--data-between: 12px">
                                    <button type="submit" class="btn primary">Xác nhận</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="step" id="step3">
                        <div class="head-mobile">
                            <a href="javascript:void(0) " class="link-back close-step"></a>

                            <h1 class="head-title text-title">Xác nhận thanh toán</h1>

                            <a href="/" class="home"></a>
                        </div>
                        <div class="body-mobile">
                            <div class="body-mobile-content c-p-16">
                                <div class="dialog--content__title fw-700 fz-15 c-mb-12 text-title-theme">
                                    Thông tin mua thẻ
                                </div>
                                <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12 brs-8 g_mobile-content">
                                    <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                        <div class="card--attr__name fw-400 fz-13 text-center text-order">
                                            Loại thẻ
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500">10.000đ</div>
                                    </div>
                                    <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                        <div class="card--attr__name fw-400 fz-13 text-center text-order">
                                            Mệnh giá
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500">10.000đ</div>
                                    </div>
                                    <div class="card--attr justify-content-between d-flex c-mb-8 text-cente text-order">
                                        <div class="card--attr__name fw-400 fz-13 text-center">
                                            Số lượng
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500">01</div>
                                    </div>
                                    <div class="card--attr justify-content-between d-flex c-mb-8 text-center text-order">
                                        <div class="card--attr__name fw-400 fz-13 text-center">
                                            Chiết khấu
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500">1%</div>
                                    </div>
                                </div>
                                <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12 brs-8 g_mobile-content">
                                    <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                        <div class="card--attr__name fz-13 fw-400 text-center text-order">
                                            Phương thức thanh toán
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500">
                                            Tài khoản Shopbrand
                                        </div>
                                    </div>
                                    <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                        <div class="card--attr__name fw-400 fz-13 text-center">
                                            Phí thanh toán
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500">
                                            Miễn phí
                                        </div>
                                    </div>
                                </div>
                                <div class="card--gray c-mb-0 c-pt-8 c-pb-8 c-pl-12 brs-8 c-pr-12 g_mobile-content">
                                    <div class="card--attr__total justify-content-between d-flex text-center">
                                        <div class="card--attr__name fw-400 fz-13 text-center text-order">
                                            Tổng thanh toán
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500"><a href="javascript:void(0)" class="c-text-primary">9.900 đ</a></div>
                                    </div>
                                </div>

                                <div class="dialog--content__title c-mt-24 fw-500 fz-15 c-mb-12 text-title-theme">
                                    Thông tin trả góp
                                </div>

                                {{--                Thoong tin tra gop    --}}
                                <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12 brs-8 g_mobile-content">
                                    <div class="c-mt-8">
                                        <label class="c-mb-4 fw-500 fz-13 lh-20">Trả lần 1</label>
                                        <div class="col-md-12 p-0">
                                            <input type="text" name="" id="" placeholder="placeholder">
                                        </div>
                                    </div>
                                    <div class="c-mt-8">
                                        <label class="c-mb-4 fw-500 fz-13 lh-20">Trả lần 2</label>
                                        <div class="col-md-12 p-0">
                                            <input type="text" name="" id="" placeholder="placeholder">
                                        </div>
                                    </div>
                                    <div class="c-mt-12">
                                        <label class="c-mb-4 fw-500 fz-13 lh-20">Mã bảo vệ</label>
                                        <div class="col-md-12 p-0 d-flex">
                                            <input class="input-form w-100" type="text" placeholder="Nhập mã bảo vệ">
                                            <div class="c-ml-8 c-mr-8">
                                                <div>
                                    <span>
                                          <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/son/macacha.png" alt="">
                                    </span>
                                                </div>
                                            </div>
                                            <button class="refresh-captcha">
                                                <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/son/refresh.png" alt="">
                                            </button>

                                        </div>
                                    </div>
                                </div>


                                <div class="dialog--content__title c-mt-24 fw-500 fz-13 c-mb-12 text-title-theme">
                                    Quy định trả góp
                                </div>
                                <div class="c-mt-8 m_content-tra-gop brs-8">
                                    <div class="col-md-12 c-py-12 c-px-8">
                                        <ul class="c-pl-20">
                                            <li>Trả góp ban đầu 20% giá trị tài khoản dự kiến mua để giữ tài khoản. Áp dụng cho tài khoản trị giá từ 200.000đ trở lên.</li>
                                            <li>Thời gian trả góp: 7 ngày. Không tính ngày xác nhận trả góp.</li>
                                            <li>Phí trả góp: 0%</li>
                                            <li>Trong thời gian trả góp bạn phải hoàn tất phần còn lại để giao dịch hoàn tất.</li>
                                            <li>Trường hợp quá thời gian trả góp giao dịch của bạn sẽ tự động bị hủy bỏ và hoàn lại 20% số tiền đã góp ban đầu.Lúc này tài khoản được tự do. (Ví dụ: tài khoản cần mua trị giá 1 triệu, trả góp ban đầu 200.000đ.</li>
                                            <li>Nếu quá thời gian giao dịch trả góp bị hủy bỏ thì bạn sẽ nhận lại 20% tức 40.000đ trong tài khoản) Quy trình giao dịch đều xử lý tự động, bạn không thể gọi hỗ trợ gia hạn thêm ngày trả góp hoặc đổi khác quy định trên.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="footer-mobile">
                            <div class="group-btn" style="--data-between: 12px">
                                <button class="btn primary btn-success-mobile">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                </section>
            @else
                <div class="item_buy">

                    <div class="container pt-3">
                        <div class="row pb-3 pt-3">
                            <div class="col-md-12 text-center">
                        <span style="color: red;font-size: 16px;">
                            Tài khoản không tồn tại,hoặc đã được mua!
                        </span>
                            </div>
                        </div>

                    </div>

                </div>
            @endif


            {{--    Modal xác nhận thanh toán--}}
            <div class="modal fade modal-big loadModal__acount" id="orderModal">
                <div class="modal-dialog modal-dialog-centered modal-custom">
                    <div class="modal-content c-p-24">
                        <form class="formDonhangAccount" action="/ajax/acc/{{ $data->slug }}/databuy" method="POST">
                            {{ csrf_field() }}
                            <div class="modal-header">
                                <h2 class="modal-title center">Xác nhận thanh toán</h2>
                                <button type="button" class="close" data-dismiss="modal"></button>
                            </div>
                            <div class="modal-body pl-0 pr-0 c-pt-24 c-pb-24">
                                <div class="dialog--content__title fw-700 fz-13 c-mb-12 text-title-theme">
                                    Thông tin mua Acc
                                </div>
                                <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                                    <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                                        <div class="card--attr__name fw-400 fz-13 text-center">
                                            Game
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500">{{ isset($data->category->custom->title) ? $data->category->custom->title :  $data->category->title }}</div>
                                    </div>
                                    <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                                        <div class="card--attr__name fw-400 fz-13 text-center">
                                            Giá tiền
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500">{{ str_replace(',','.',number_format($data->price)) }} đ</div>
                                    </div>
                                </div>
                                @if(isset($data->product_attribute) && count($data->product_attribute))

                                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                                        @foreach($data->product_attribute as $product_attribute)
                                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                                            <div class="card--attr__name fw-400 fz-13 text-center">
                                                {{$product_attribute->attribute->title}}
                                            </div>
                                            <div class="card--attr__value fz-13 fw-500">{{$product_attribute->product_attribute_value_able->title}}</div>
                                        </div>

                                        @endforeach

                                    </div>

                                @endif

                                <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                                    <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                                        <div class="card--attr__name fz-13 fw-400 text-center">
                                            Phương thức thanh toán
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500">
                                            Tài khoản Shopbrand
                                        </div>
                                    </div>
                                    <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                                        <div class="card--attr__name fw-400 fz-13 text-center">
                                            Phí thanh toán
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500">
                                            Miễn phí
                                        </div>
                                    </div>
                                </div>
                                <div class="card--gray c-mb-0 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                                    <div class="card--attr__total justify-content-between d-flex c-mb-16 text-center">
                                        <div class="card--attr__name fw-400 fz-13 text-center">
                                            Tổng thanh toán
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500"><a href="javascript:void(0)" class="c-text-primary">{{ str_replace(',','.',number_format($data->price)) }} đ</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn primary">Xác nhận</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{--    Modal xác nhận thanh toán--}}
            <div class="modal fade modal-big" id="orderModalNot">
                <div class="modal-dialog modal-dialog-centered modal-custom">
                    <div class="modal-content c-p-24">
                        <div class="modal-header">
                            <h2 class="modal-title center">Xác nhận thanh toán</h2>
                            <button type="button" class="close" data-dismiss="modal"></button>
                        </div>
                        <div class="modal-body pl-0 pr-0 c-pt-24 c-pb-24">
                            <div class="dialog--content__title fw-700 fz-13 c-mb-12 text-title-theme">
                                Thông tin mua thẻ
                            </div>
                            <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                                <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                                    <div class="card--attr__name fw-400 fz-13 text-center">
                                        Loại thẻ
                                    </div>
                                    <div class="card--attr__value fz-13 fw-500">10.000đ</div>
                                </div>
                                <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                                    <div class="card--attr__name fw-400 fz-13 text-center">
                                        Mệnh giá
                                    </div>
                                    <div class="card--attr__value fz-13 fw-500">10.000đ</div>
                                </div>
                                <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                                    <div class="card--attr__name fw-400 fz-13 text-center">
                                        Số lượng
                                    </div>
                                    <div class="card--attr__value fz-13 fw-500">01</div>
                                </div>
                                <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                                    <div class="card--attr__name fw-400 fz-13 text-center">
                                        Chiết khấu
                                    </div>
                                    <div class="card--attr__value fz-13 fw-500">1%</div>
                                </div>
                            </div>
                            <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                                <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                                    <div class="card--attr__name fz-13 fw-400 text-center">
                                        Phương thức thanh toán
                                    </div>
                                    <div class="card--attr__value fz-13 fw-500">
                                        Tài khoản Shopbrand
                                    </div>
                                </div>
                                <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                                    <div class="card--attr__name fw-400 fz-13 text-center">
                                        Phí thanh toán
                                    </div>
                                    <div class="card--attr__value fz-13 fw-500">
                                        Miễn phí
                                    </div>
                                </div>
                            </div>
                            <div class="card--gray c-mb-0 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                                <div class="card--attr__total justify-content-between d-flex c-mb-16 text-center">
                                    <div class="card--attr__name fw-400 fz-13 text-center">
                                        Tổng thanh toán
                                    </div>
                                    <div class="card--attr__value fz-13 fw-500"><a href="javascript:void(0)" class="c-text-primary">9.900 đ</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn primary">Xác nhận</button>

                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade login show order-modal" id="accDetail" aria-modal="true" data-backdrop="static" data-keyboard="false">

                <div class="modal-dialog step-tab-panel  modal-dialog-centered  animated">
                    <!--        <div class="image-login"></div>-->
                    <div class="modal-content p-0">
                        <div class="modal-header p-0" style="border-bottom: 0">
                            <div class="row marginauto modal-header-order-ct pt-fix-16 pb-fix-16">
                                <div class="col-12 span__donhang" style="position: relative">
                                    <div class="row marginauto ">
                                        <div class="col-md-12 left-right">
                                            <span class="fw-600">Mã số: {{ $data->slug }}</span>
                                        </div>
                                        <div class="col-md-12 left-right">
                                            <small>MỤC: {{ isset($data->category->custom->title) ? $data->category->custom->title :  $data->category->title }}</small>
                                        </div>
                                    </div>
                                    <div class="close" data-dismiss="modal" aria-label="Close">
                                        <img class="lazy img-close-ct close-modal-default" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/close.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-body modal-body-order-ct">
                            <div class="row marginauto">

                                <div class="d-flex">
                                {{--                                <div id="myCarousel" class="carousel slide acc-holder" data-ride="carousel">--}}
                                {{--                                    <!-- Indicators -->--}}
                                {{--                                    <ol class="">--}}
                                {{--                                        @foreach(explode('|',$data->image_extension) as $key => $val)--}}
                                {{--                                            <li data-target="#myCarousel" data-slide-to="{{$key+1}}" class="acc-holder_slides">--}}
                                {{--                                                <img src="{{\App\Library\MediaHelpers::media($val)}}" alt="" />--}}
                                {{--                                            </li>--}}

                                {{--                                        @endforeach--}}
                                {{--                                    </ol>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="prevAccount">--}}
                                {{--                                    <a class="prev" onclick="plusSlides(-1)">--}}
                                {{--                                        <img src="/assets/frontend/theme_3/image/swiper-prev.svg" alt="">--}}
                                {{--                                    </a>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="nextAccount">--}}
                                {{--                                    <a class="next" onclick="plusSlides(1)">--}}
                                {{--                                        <img src="/assets/frontend/theme_3/image/swiper-next.svg" alt="">--}}
                                {{--                                    </a>--}}
                                {{--                                </div>--}}



                                <!-- main images -->
                                    <div class="acc-holder ">
                                        @foreach(explode('|',$data->image_extension) as $key => $val)

                                            <div class="acc-holder_slides " >
                                                <a class="acc-holder_expand" data-fancybox="galleryAccount" href="{{\App\Library\MediaHelpers::media($val)}}">
                                                    <i class="__icon__profile --sm__profile --link__profile --link--acc" style="--path : url(/assets/frontend/theme_5/image/nam/expand-acc.svg)"></i>
                                                    {{--                                            <img src="/assets/frontend/theme_3/image/svg/expand-acc.svg" alt="">--}}
                                                </a>
                                                <div class="acc-holder_badge">{{$key+1}} / {{count(explode('|',$data->image_extension))}}</div>
                                                <img src="{{\App\Library\MediaHelpers::media($val)}}" alt="" />
                                            </div>
                                        @endforeach


                                        <div class="prevAccount">
                                            <a class="prev" onclick="plusSlides(-1)">
                                                <img src="/assets/frontend/theme_3/image/swiper-prev.svg" alt="">
                                            </a>
                                        </div>
                                        <div class="nextAccount">
                                            <a class="next" onclick="plusSlides(1)">
                                                <img src="/assets/frontend/theme_3/image/swiper-next.svg" alt="">
                                            </a>
                                        </div>


                                    </div>

                                    <!-- thumnails in a row -->
                                    <div class="flex-grow-1 ml-fix-12">
                                        <div class="row acc-thumbnail  mx-0">
                                            @foreach(explode('|',$data->image_extension) as $key => $val)
                                                <div class="acc-thumbnail_column col-md-3 c-px-6 c-mb-12 ">
                                                    <div class="acc-thumbnail_badge" onclick="currentSlide({{$key+1}})">{{$key+1}}</div>
                                                    <img class="acc-thumbnail-image" src="{{\App\Library\MediaHelpers::media($val)}}" onclick="currentSlide({{$key+1}})" alt="Caption One">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <script>

                var slideIndex = 1;
                var slideIndex1 = 1;
                var ImageIndex = 0;
                function swipe(event, direction){
                    var midpoint = Math.floor(screen.width/2);
                    var px = event.pageX;
                    var items = document.getElementsByClassName('acc-holder_slides');
                    var itemActive = items[ImageIndex];
                    if (direction === 'left') {
                        itemActive.style.marginLeft = '-100%';
                        itemActive.style.transition = '1s ';
                        ImageIndex = ImageIndex < items.length - 1 ? ImageIndex + 1 : ImageIndex;
                    }else{
                        itemActive.style.marginLeft = '0';
                        itemActive.style.transition = '1s ';
                        ImageIndex = ImageIndex >= 1 ? ImageIndex - 1 : 0;
                    }
                }
                showSlides(slideIndex);

                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }

                function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("acc-holder_slides");
                    var dots = document.getElementsByClassName("acc-thumbnail_column");
                    if (n > slides.length) {slideIndex = 1}
                    if (n < 1) {slideIndex = slides.length}

                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                        // slides[i].style.display = "inline";
                    }



                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";
                    // slides[slideIndex-1].style.display = "inline";
                    dots[slideIndex-1].className += " active";
                }



            </script>

            {{--                   V2 --}}
        </div>

        <div id="showslideracc">

        </div>


        <div>
            {{--            Siêu ưu đã   --}}
            {{--                @include('frontend.pages.account.widget.__flash__sale')--}}

            {{--            Đã xem   --}}
            @include('frontend.pages.account.widget.__viewed__account')

            {{--            Dịch vụ khác   --}}
            @include('frontend.widget.__services__other')
        </div>


        {{-- Thanh toans thanhf coong  --}}
        <div class="modal fade modal-small" id="orderSuccses">
            <div class="modal-dialog modal-dialog-centered modal-custom">
                <div class="modal-content">
                    <div class="modal-header justify-content-center p-0">
                        <img class="c-pt-20 c-pb-20" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/success.png" alt="">
                    </div>
                    <div class="modal-body text-center c-pl-24 c-pr-24 pt-0 pb-0">
                        <p class="fw-700 fz-15 c-mt-12 mb-0 text-title-theme">Mua tài khoản thành công</p>
                        <p class="fw-400 fz-13 c-mt-10 mb-0">
                            Để bảo mật bạn vui lòng thay đổi mật khẩu và tên đăng nhập của tải khoản đã mua!
                        </p>
                    </div>
                    <div class="modal-footer c-p-24">
                        <a class="btn primary" data-dismiss="modal">Lịch sử</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 04 -->
        <div class="modal fade modal-small" id="notInbox">
            <div class="modal-dialog modal-dialog-centered modal-custom">
                <div class="modal-content">
                    <div class="modal-header justify-content-center p-0">
                        <img class="c-pt-16 c-pb-16" src="/assets/frontend/{{theme('')->theme_key}}/image/son/tinhnang.svg" alt="">
                    </div>
                    <div class="modal-body text-center c-pl-24 c-pr-24 pt-0 pb-0">

                        <p class="fw-700 fz-15 c-mt-12 mb-0 text-title-theme">Tính năng đang phát triển</p>
                        <p class="fw-400 fz-13 c-mt-10 mb-0">Tính năng này đang được xây dựng và phát triển, bạn vui lòng quay lại sau nha ^^</p>

                    </div>
                    <div class="modal-footer c-p-24">
                        <button class="btn ghost" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 04 -->
        <div class="modal fade modal-small" id="notBuy">
            <div class="modal-dialog modal-dialog-centered modal-custom">
                <div class="modal-content">
                    <div class="modal-header justify-content-center p-0">
                        <img class="c-pt-16 c-pb-16" src="/assets/frontend/{{theme('')->theme_key}}/image/son/thatbai.png" alt="">
                    </div>
                    <div class="modal-body text-center c-pl-24 c-pr-24 pt-0 pb-0">
                        <p class="fw-700 fz-15 c-mt-12 mb-0 text-title-theme">Mua thẻ nick thất bại</p>
                        <p class="fw-400 fz-13 c-mt-10 mb-0">Rất tiếc việc mua nick đã thất bại do tài khoản của bạn không đủ, vui lòng nạp tiền để tiếp tục giao dịch!</p>
                    </div>
                    <div class="modal-footer c-p-24">
                        <button class="btn primary handle-recharge-modal" data-tab="1" data-dismiss="modal">Nạp tiền</button>
                    </div>
                </div>
            </div>
        </div>

        {{--            <input type="hidden" name="slug" class="slug" value="{{ $slug }}">--}}

        {{--            <input type="hidden" name="slug" class="slug_category" value="{{ $slug_category }}">--}}

        <script src="/assets/frontend/{{theme('')->theme_key}}/js/nick/buyacc.js"></script>
        <script src="/assets/frontend/{{theme('')->theme_key}}/js/nick/buyaccslider.js"></script>


    </div>



@endsection

@section('scripts')
    <script>

        $('body').on('click','#account-detail .btn-muangay',function(e){
            e.preventDefault();
            $('#orderModal').modal('show');
        })

        $('body').on('click','#account-detail .btn-muangay-not',function(e){
            e.preventDefault();

            $('#orderModalNot').modal('show');
        })

        $('body').on('click','#account-detail .btn-tragop',function(e){
            e.preventDefault();
            $('#traGopModal').modal('show');
        })

        $('body').on('click','#account-detail .btn-show-tuong',function(e){
            e.preventDefault();
            $('.c-modal__nick-lmht-tuong').css('display','block');
        })

        $('body').on('click','.c-close-modal',function(e){
            e.preventDefault();
            $('.c-modal__nick-lmht-tuong').css('display','none');
            $('.c-modal__nick-lmht-trang-phuc').css('display','none');
            $('.c-modal__nick-lmht-ttk').css('display','none');
        })

        $('body').on('click','#account-detail .btn-trangphuc',function(e){
            e.preventDefault();
            $('.c-modal__nick-lmht-trang-phuc').css('display','block');
        })

        $('body').on('click','#account-detail .btn-thongtinkhac',function(e){
            e.preventDefault();
            $('.c-modal__nick-lmht-ttk').css('display','block');
        })

        $('body').on('click','#account-detail .btn-success-mobile',function(e){
            e.preventDefault();
            $('#orderSuccses').modal('show');
        })



        function convertToSlug(title) {
            var slug;
            //Đổi chữ hoa thành chữ thường
            slug = title.toLowerCase();
            //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\<|\'|\"|\:|\;|_/gi, '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            // trả về kết quả
            return slug;
        }

        $('body').on('click','.show-modal-champ',function (e) {
            e.preventDefault();
            $('#modal-champ').modal('show');
        })
        $('body').on('click','.show-modal-skin',function (e) {
            e.preventDefault();
            $('#modal-skin').modal('show');
        })
        $('body').on('click','.show-modal-animal',function (e) {
            e.preventDefault();
            $('#modal-animal').modal('show');
        })

        $('.form-search-modal').on('submit',function (e) {
            e.preventDefault();
            let keyword = $(this).find('input').val();
            keyword = convertToSlug(keyword);

            let $elements = $(this).closest('.modal').find('.row > .col-6');
            Array.from($elements).forEach(function (elm) {
                let text = $(elm).find('.card-name').text().trim();
                text = convertToSlug(text);
                let condition = text.indexOf(keyword) * 1 > -1;
                $(elm).toggle(condition);
            });
            let has_result = $($elements).filter(function() {
                return $(this).css('display') !== 'none';
            }).length;

            $(this).closest('.modal').find('.text-invalid').toggle(!has_result);
        });

        $('.modal-lmht .modal-body').on('scroll',function () {
            $('html body').trigger('scroll');
        });
    </script>
@endsection


