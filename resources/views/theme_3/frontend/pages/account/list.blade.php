@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('meta_robots')
    <meta name="robots" content="index,follow" />
@endsection
@section('content')
    {{--  Header mobile  --}}
    <section class="media-mobile">
        <div class="container container-fix banner-mobile-container-ct">

            <div class="row marginauto banner-mobile-row-ct">
                <div class="col-auto left-right" style="width: 10%">
                    <a href="/mua-acc" class="previous-step-one" style="line-height: 28px">
                        <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/back.png" alt="" >
                    </a>
                </div>

                <div class="col-auto left-right banner-mobile-span text-center" style="width: 80%">
                    <p>Mua Acc</p>
                </div>
                <div class="col-auto left-right" style="width: 10%">
                </div>
            </div>

        </div>
    </section>

    {{--    Banner--}}

    @if($data == null)
        <div class="item_buy">

            <div class="container pt-3">
                <div class="row pb-3 pt-3">
                    <div class="col-md-12 text-center">
                        <span style="color: red;font-size: 16px;">
                            @if(isset($message))
                                {{ $message }}
                            @else
                                Hiện tại không có dữ liệu nào phù hợp với yêu cầu của bạn! Hệ thống cập nhật nick thường xuyên bạn vui lòng theo dõi web trong thời gian tới !
                            @endif
                        </span>
                    </div>
                </div>

            </div>

        </div>
    @else
    {{--  Menu  --}}
    <section class="media-web">
        <div class="container container-fix menu-container-ct">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li class="menu-container-li-ct"><img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/arrow-right.png" alt=""></li>
                <li class="menu-container-li-ct"><a href="/mua-acc">Danh mục Shop Account</a></li>
                <li class="menu-container-li-ct"><img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/arrow-right.png" alt=""></li>
                <li class="menu-container-li-ct"><a href="/mua-acc/{{ $data->slug }}">{{ $data->custom->title ? $data->custom->title : $data->title }}</a></li>
                <li class="menu-container-li-ct"><img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/arrow-right.png" alt=""></li>
                <li class="menu-container-li-ct"><a href="/mua-acc/{{ $data->slug }}">Danh sách Nick</a></li>
            </ul>
        </div>
    </section>
    {{--   Bopđyy --}}
    <section>
        <div class="container container-fix body-container-ct">
            <div class="row marginauto body-container-row-ct body-container-row-mobile-ct">

                <div class="col-md-12 left-right">
                    <div class="row marginauto nick-list-bg" style="background: #FFFFFF">
                        <div class="col-md-12 left-right">
                            <img class="lazy theme_3_imagebanner" src="{{ isset($data->custom->image_banner) ? \App\Library\MediaHelpers::media($data->custom->image_banner) : \App\Library\MediaHelpers::media($data->image_banner) }}" alt="">
                        </div>
                    </div>
                    <div class="row marginauto body-row-nick-ct">

                        <div class="col-md-12 left-right">
                            <div class="row marginauto body-header-ct">
                                <div class="col-auto left-right">
                                    <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/caythue.png" alt="">
                                </div>
                                <div class="col-md-10 col-10 body-header-col-ct">
                                    <span class="body-header-col-ct-titile">{{ $data->custom->title ? $data->custom->title : $data->title }}</span>
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

{{--                        Find    --}}
                        <div class="col-md-12 left-right">

                            <div class="row marginauto">
                                <div class="col-12 left-right">
                                    <form id="idFilterForm" method="POST">
                                        <div class="row marginauto body-form-search-ct">
                                            <div class="col-auto left-right">
                                                <input autocomplete="off" type="text" name="search" class="input-search-ct" placeholder="Nhập từ khóa">
                                                <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/search.png" alt="">
                                            </div>
                                            <div class="col-4 body-form-search-button-ct media-web">
                                                <button type="submit" class="timkiem-button-ct">Tìm kiếm</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-auto ml-auto left-right">

                                    <div class="row marginauto justify-content-end nick-findter-row">

                                        <div class="col-auto nick-findter" style="position: relative">
                                            <ul>
                                                <li class="li-boloc">Bộ lọc</li>
                                                <li class="margin-findter">
                                                    <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/nick/filter.png" alt="">
                                                    <span class="overlay-find">
                                                        0
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row marginauto nick-findter-data">

                            </div>
                        </div>
{{--End find   --}}
                        <div class="col-md-12 left-right d-none d-lg-block">
                            <div class="row marginauto body-search-ct sort-nick">
                                <div class="col-auto text-left left-right sort-nick-left">
                                    <span class="nick_total"></span>
                                </div>
                                <div class="col-auto left-right sort-nick-right">
                                    <div class="row marginauto align-items-center">
                                        <div class="col-auto left-right">
                                            <span>Sắp xếp theo:</span>
                                        </div>
                                        <div class="col-auto left-right item-sort-nick">
                                            <input checked id="sort-1" class="sort" type="radio" name="sort" value="random" hidden>
                                            <label for="sort-1" class="item-sort-nick-label">
                                                <span>Ngẫu nhiên</span>
                                            </label>
                                        </div>
                                        <div class="col-auto left-right item-sort-nick">
                                            <input id="sort-2" class="sort" type="radio" name="sort" value="price_start" hidden>
                                            <label for="sort-2" class="item-sort-nick-label">
                                                <span>Giá giảm dần</span>
                                            </label>
                                        </div>
                                        <div class="col-auto left-right item-sort-nick">
                                            <input id="sort-3" class="sort" type="radio" name="sort" value="price_end" hidden>
                                            <label for="sort-3" class="item-sort-nick-label">
                                                <span>Giá tăng dần</span>
                                            </label>
                                        </div>
                                        <div class="col-auto left-right item-sort-nick">
                                            <input id="sort-4" class="sort" type="radio" name="sort" value="created_at_start" hidden>
                                            <label for="sort-4" class="item-sort-nick-label">
                                                <span>Mới nhất</span>
                                            </label>
                                        </div>
                                        <div class="col-auto left-right item-sort-nick">
                                            <input id="sort-5" class="sort" type="radio" name="sort" value="created_at_end" hidden>
                                            <label for="sort-5" class="item-sort-nick-label">
                                                <span>Cũ nhất</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="account_data" style="width: 100%;">

                        </div>

                        <div id="listLoader" class="w-100" style="min-height: 500px">
                            <div class="loader position-relative" style="padding: 1rem">
                                <div class="loading-spokes">
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="media-mobile">
        <div class="row marginauto intermediary-ct" style="height: 20px;background: #EFEFEF">

        </div>
    </section>

    @include('frontend.pages.account.widget.__related__category')

    @include('frontend.pages.account.widget.__category__content')

    <div class="modal fade login show order-modal" id="openFinter" aria-modal="true">

        <div class="modal-dialog step-tab-panel modal-lg modal-dialog-centered login animated">
            <!--        <div class="image-login"></div>-->
            <div class="modal-content">
                <div class="modal-header p-0" style="border-bottom: 0">
                    <div class="row marginauto modal-header-nick-ct">
                        <div class="col-12 left-right text-left" style="position: relative">
                            <span>Bộ lọc</span>
                            <img class="lazy img-close-nick-ct close-modal-default" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/close.png" alt="">
                        </div>
                    </div>

                </div>

                <div class="modal-body modal-body-order-ct">
                    <form id="data_sort" action="">
                        <div class="row marginauto">

                            <div class="col-md-12 left-right">
                                <div class="row marginauto">
                                    <div class="col-12 left-right background-nick-col-top-ct">
                                        <small>Mã số</small>
                                    </div>
                                    <div class="col-12 left-right background-nick-col-bottom-ct">
                                        <input autocomplete="off" class="input-defautf-ct id" type="text" data-query="id_data" placeholder="Nhập mã số">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 left-right modal-nick-padding">
                                <div class="row marginauto">
                                    <div class="col-12 left-right background-nick-col-top-ct">
                                        <small>Giá tiền</small>
                                    </div>
                                    <div class="col-12 left-right background-nick-col-bottom-ct price-finter-nick">
                                        <select class="wide price" data-query="price_data">
                                            <option value="" selected disabled>Chọn giá tiền</option>
                                            <option value="0-50000">Dưới 50K</option>
                                            <option value="50000-200000">Từ 50K - 200K</option>
                                            <option value="200000-500000">Từ 200K - 500K</option>
                                            <option value="500000-1000000">Từ 500K - 1 Triệu</option>
                                            <option value="1000000-5000000">Trên 1 Triệu</option>
                                            <option value="5000000-10000000">Trên 5 Triệu</option>
                                            <option value="10000000">Trên 10 Triệu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

{{--                            <div class="col-md-12 left-right modal-nick-padding">--}}
{{--                                <div class="row marginauto">--}}
{{--                                    <div class="col-12 left-right background-nick-col-top-ct">--}}
{{--                                        <small>Trạng thái</small>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12 left-right background-nick-col-bottom-ct status-finter-nick">--}}
{{--                                        <select class="wide status" name="status_data">--}}
{{--                                            <option value="" selected disabled>Chọn trạng thái</option>--}}
{{--                                            <option value="1">Chưa bán</option>--}}
{{--                                            <option value="2">Đã bán</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            @if(isset($dataAttribute) && count($dataAttribute) > 0)
                                @foreach($dataAttribute as $key_val => $val)
                                    @if($val->position == 'select')
                                        <div class="col-md-12 left-right modal-nick-padding">
                                            <div class="row marginauto">
                                                <div class="col-12 left-right background-nick-col-top-ct">
                                                    <small>{{ $val->title }}</small>
                                                </div>
                                                <div class="col-12 left-right background-nick-col-bottom-ct">
                                                    <select class="wide account-filter-field" data-query="select_data_{{ $key_val }}"  data-title="{{ $val->title }}">
                                                        <option value="" selected disabled>--Không chọn--</option>
                                                        @foreach($val->childs as $child)
                                                            <option value="{{ $child->id }}">{{ $child->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif

                            <div class="col-md-12 left-right padding-nicks-footer-ct">

                                <div class="row marginauto justify-content-center">
                                    <div class="col-md-6 col-6 modal-footer-success-col-left-ct">
                                        <div class="row marginauto modal-footer-success-row-not-ct">
                                            <div class="col-md-12 left-right">
                                                <a href="javascript:void(0)" class="button-not-bg-ct reset-find"><span>Thiết lập lại</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-6 modal-footer-success-col-right-ct">
                                        <div class="row marginauto">
                                            <div class="col-md-12 left-right">
                                                <button class="button-default-modal-ct button-modal-nick btn-ap-dung" type="button">Áp dụng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

    <div class="modal fade login show order-modal" id="successModal" aria-modal="true">

        <div class="modal-dialog step-tab-panel modal-lg modal-dialog-centered login animated">
            <!--        <div class="image-login"></div>-->
            <div class="modal-content">
                <div class="modal-header p-0" style="border-bottom: 0">
                    <div class="row marginauto modal-header-order-ct">
                        <div class="col-12 span__donhang text-center" style="position: relative">
                            <span>Mua tài khoản thành công</span>
                            <img class="lazy img-close-ct close-modal-success" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/close.png" alt="">
                        </div>
                    </div>

                </div>

                <div class="modal-body modal-body-order-ct">
                    <div class="row marginauto">

                        <div class="col-md-12 left-right image-success">
                            <div class="row marginauto justify-content-center">
                                <div class="col-auto">
                                    <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/group.png" alt="">
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-md-12 left-right title-tra-gop-success">
                            <div class="row body-title-detail-ct">
                                <div class="col-md-12 text-left body-title-detail-col-ct">
                                    <div class="row marginauto">
                                        <div class="col-md-12 left-right body-title-detail-span-ct">
                                            <span>Tài khoản</span>
                                        </div>
                                        <div class="col-md-12 left-right body-title-detail-select-ct email-success-nick  data-tai-khoan">
                                           <input readonly autocomplete="off" class="input-defautf-ct" id="email" type="text" value="">
                                           <img class="lazy " src="/assets/frontend/{{theme('')->theme_key}}/image/nick/copy.png" alt="" id="getCopyemail">
                                        </div>
                                        <div class="col-md-12 left-right">
                                            <div class="row marginauto title-tra-gop-success-row">
                                                <div class="col-md-12 left-right body-title-detail-span-ct">
                                                    <span>Mật khẩu</span>
                                                </div>
                                                <div class="col-md-12 left-right body-title-detail-select-ct taikhoan-success-nick data-password">
                                                    <input id="password" readonly autocomplete="off" class="input-defautf-ct" type="password" value="" placeholder="******">
                                                    <img class="lazy img-copy" src="/assets/frontend/{{theme('')->theme_key}}/image/nick/copy.png" id="getpass" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 left-right data-child">

                                        </div>

                                        <div class="col-md-12 left-right data-ttbxung">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 left-right title-tra-gop text-center data-time">
                        </div>

                        <div class="col-md-12 left-right padding-order-16-ct">
                            <div class="row marginauto">
                                <div class="col-md-12 left-right background-order-ct">
                                    <div class="row marginauto title-success-thanh-cong">
                                        <div class="col-md-12 left-right">
                                            <span>Để tránh các trường hợp xấu xảy ra, quý khách vui lòng thêm thông tin (Email và Số điện thoại) Để đảm bảo không có vấn đề sau khi giao dịch tại shop! Xin cảm ơn!</span>
                                        </div>
                                        <div class="col-md-12 left-right padding-order-ct">
                                            <span>Để tránh các trường hợp xấu xảy ra, quý khách vui lòng thêm thông tin (Email và Số điện thoại) Để đảm bảo không có vấn đề sau khi giao dịch tại shop! Xin cảm ơn!</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> --}}

                        <div class="col-md-12 left-right">
                            <div class="row marginauto justify-content-center gallery-right-footer">
                                <div class="col-md-6 col-6 modal-footer-success-col-left-ct">
                                    <div class="row marginauto modal-footer-success-row-not-ct">
                                        <div class="col-md-12 left-right">
                                            {{-- <a href="javascript:void(0)" class="button-not-bg-ct close-modal-default"><span>Đóng</span></a> --}}
                                            <a href="/" class="button-not-bg-ct"><span>Về trang chủ</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6 modal-footer-success-col-right-ct">
                                    <div class="row marginauto modal-footer-success-row-ct">
                                        <div class="col-md-12 left-right">
                                            <a href="/lich-su-mua-account" class="button-bg-ct"><span>Lịch sử mua Acc</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade login show order-modal" id="openOrder" aria-modal="true">

        <div class="modal-dialog step-tab-panel modal-lg modal-dialog-centered login animated">
            <!--        <div class="image-login"></div>-->
            <div class="modal-content data-account-random">
            </div>
        </div>

    </div>

    <input type="hidden" value="{{ $slug }}" name="slug" class="slug">

    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/handle-history-table.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/nick/nick--update.js?v={{time()}}"></script>
    @endif
@endsection






