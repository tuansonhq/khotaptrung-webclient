@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('meta_robots')
    <meta name="robots" content="noindex,nofollow" />
@endsection

<!-- Cookie  -->
@php
    if (isset($data->price_old)) {
        $sale_percent = (($data->price_old - $data->price) / $data->price_old) * 100;
        $sale_percent = round($sale_percent, 0, PHP_ROUND_HALF_UP);
    } else {
        $sale_percent = 0;
    }
@endphp
@php
    $totalaccount = 0;
    if(isset($data->category->items_count)){
        if ((isset($data->category->account_fake) && $data->category->account_fake > 1) || (isset($data->category->custom->account_fake) && $data->category->custom->account_fake > 1)){
            $totalaccount = str_replace(',','.',number_format(round(isset($data->category->custom->account_fake) ? $data->category->items_count*$data->category->custom->account_fake : $data->category->items_count*$data->category->account_fake)));
        }
    }else{
        $totalaccount = 0;
    }
@endphp
@php
    $data_cookie = Cookie::get('viewed_account') ?? '[]';
    $flag_viewed = true;
    $data_cookie = json_decode($data_cookie,true);
        foreach ($data_cookie as $key => $acc_viewed){
            if($acc_viewed['randId'] == $data->randId){
             $flag_viewed = false;
            }
        }
        if ($flag_viewed){
                if (count($data_cookie) >= config('module.acc.viewed.limit_count')) {
                     array_pop($data_cookie);
                 }
                $data_save = [
                    'image'=>$data->image,
                    'category'=>isset($data->category->custom->title) ? $data->category->custom->title :  $data->category->title,
                    'randId'=>$data->randId,
                    'price'=>$data->price,
                    'price_old'=>$data->price_old,
                    'promotion'=>$sale_percent,
                    'buy_account'=>$totalaccount,
                 ];
                array_unshift($data_cookie,$data_save);
                $data_cookie = json_encode($data_cookie);
                Cookie::queue('viewed_account',$data_cookie,43200);
        }
@endphp
@section('content')
    <div class="container c-container" id="account-detail">
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
            <div class="data__menuacc">

            </div>

            <div id="showdetailacc">
                {{--        Data detail    --}}
{{--                @include('frontend.pages.account.widget.__datadetail')--}}
            </div>

            <div id="showslideracc">
                <div class="loading-wrap c-my-24">
                    <span class="modal-loader-spin"></span>
                </div>
                {{--  TK đồng giá   --}}
{{--                @include('frontend.pages.account.widget.__same__price')--}}
            </div>


            <div>
                {{--            Siêu ưu đã   --}}
{{--                @include('frontend.pages.account.widget.__flash__sale')--}}

                {{--            Đã xem   --}}
                @include('frontend.pages.account.widget.__viewed__account')

                {{--            Dịch vụ khác   --}}
                @include('frontend.widget.__services__other')
            </div>

            {{--    Modal trả góp   --}}

            <div class="modal fade modal-big modal-tra-gop" id="traGopModal">
                <div class="modal-dialog modal-dialog-centered modal-custom">
                    <div class="modal-content c-p-24">
                        <div class="modal-header">
                            <h2 class="modal-title center">Thông báo</h2>
                            <button type="button" class="close" data-dismiss="modal"></button>
                        </div>
                        <div class="modal-body py-0 pl-0 c-pr-8 c-mt-24" id="modal-body-scroll">
{{--                            <div class="dialog--content__title fw-500 fz-13 c-mb-12 text-title-theme">--}}
{{--                                Thông tin mua thẻ--}}
{{--                            </div>--}}
                            <div class="card--gray c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                                <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                                    <div class="card--attr__value fz-13 fw-500">Tính năng sẽ được cập nhật trong thời gian tới,bạn vui lòng quay lại sau!</div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="modal-footer">--}}
{{--                            <button class="btn primary">Xác nhận</button>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>

            {{--    Modal lmht tướng--}}

            <div class="c-modal__nick-lmht c-modal__nick-lmht-tuong" style="z-index: 1005; background: rgba(67, 70, 87, 0.5);">
                <div class="header-modal__nick-lmht c-px-24 c-pt-24 pb-0 position-relative text-uppercase text-center ml-auto mr-auto fw-700">
                    <div class="row marginauto c-pb-24 header-modal__nick-lmht-row">
                        <div class="col-auto pl-0 pr-0 mb-0 c-mr-24">
                            <h2 class="fw-700 fz-24 lh-32 mb-0">Tướng</h2>
                            <p class="fw-400 fz-13 lh-20 mb-0">(100 tướng)</p>
                        </div>
                        <div class="col-auto pl-0 pr-0 form-search input-search-lmht position-relative">
                            <input id="keyword--search" type="search" placeholder="Tìm kiếm" class="has-submit input-search-lmht">
                            <button class="submit--search" type="submit"></button>
                        </div>
                        <img class="c-close-modal" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/close.svg" alt="">
                    </div>
                </div>
                <div class="body-modal__nick-lmht pb-0 c-px-18 c-pt-10 mr-auto ml-auto">
                    <div class="row marginauto modal-container-body">
                        <div class="col-md-12 c-px-6 c-py-8 body-modal__nick__text-error">
                            <div class="text-error c-mt-4">Không có kết quả phù hợp.</div>
                        </div>
                        <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                            <a href="">
                                <div class="row marginauto item-nick-lmht__border">
                                    <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                        <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                    </div>
                                    <div class="col-md-12 pl-0 pr-0 text-center">
                                        <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Axtrox</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                            <a href="">
                                <div class="row marginauto item-nick-lmht__border">
                                    <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                        <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Amumu">
                                    </div>
                                    <div class="col-md-12 pl-0 pr-0 text-center">
                                        <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Amumu</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                            <a href="">
                                <div class="row marginauto item-nick-lmht__border">
                                    <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                        <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Garen">
                                    </div>
                                    <div class="col-md-12 pl-0 pr-0 text-center">
                                        <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Garen</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                            <a href="">
                                <div class="row marginauto item-nick-lmht__border">
                                    <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                        <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Sona">
                                    </div>
                                    <div class="col-md-12 pl-0 pr-0 text-center">
                                        <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Sona</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                            <a href="">
                                <div class="row marginauto item-nick-lmht__border">
                                    <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                        <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                    </div>
                                    <div class="col-md-12 pl-0 pr-0 text-center">
                                        <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Axtrox</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                            <a href="">
                                <div class="row marginauto item-nick-lmht__border">
                                    <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                        <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Amumu">
                                    </div>
                                    <div class="col-md-12 pl-0 pr-0 text-center">
                                        <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Amumu</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="modal-footer" style="height: 16px">

                    </div>
                </div>

            </div>

            {{--   Modal trang phục   --}}
            <div class="c-modal__nick-lmht c-modal__nick-lmht-trang-phuc" style="z-index: 1005; background: rgba(67,70,87,0.5);">
                <div class="header-modal__nick-lmht c-px-24 c-pt-24 pb-0 position-relative text-uppercase text-center ml-auto mr-auto fw-700">
                    <div class="row marginauto c-pb-24 header-modal__nick-lmht-row">
                        <div class="col-auto pl-0 pr-0 mb-0 c-mr-24">
                            <h2 class="fw-700 fz-24 lh-32 mb-0">Tướng</h2>
                            <p class="fw-400 fz-13 lh-20 mb-0">(100 tướng)</p>
                        </div>
                        <div class="col-auto pl-0 pr-0 form-search input-search-lmht position-relative">
                            <input id="keyword--search" type="search" placeholder="Tìm kiếm" class="has-submit input-search-lmht">
                            <button class="submit--search" type="submit"></button>
                        </div>
                        <img class="c-close-modal" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/close.svg" alt="">
                    </div>
                </div>
                <div class="body-modal__nick-lmht pb-0 c-px-18 c-pt-10 mr-auto ml-auto">
                    <div class="row marginauto modal-container-body">
                        <div class="col-md-12 c-px-6 c-py-8 body-modal__nick__text-error">
                            <div class="text-error c-mt-4">Không có kết quả phù hợp.</div>
                        </div>
                        <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                            <a href="">
                                <div class="row marginauto item-nick-lmht__border">
                                    <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                        <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                    </div>
                                    <div class="col-md-12 pl-0 pr-0 text-center">
                                        <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Axtrox</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                            <a href="">
                                <div class="row marginauto item-nick-lmht__border">
                                    <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                        <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Amumu">
                                    </div>
                                    <div class="col-md-12 pl-0 pr-0 text-center">
                                        <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Amumu</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                            <a href="">
                                <div class="row marginauto item-nick-lmht__border">
                                    <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                        <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Garen">
                                    </div>
                                    <div class="col-md-12 pl-0 pr-0 text-center">
                                        <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Garen</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                            <a href="">
                                <div class="row marginauto item-nick-lmht__border">
                                    <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                        <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Sona">
                                    </div>
                                    <div class="col-md-12 pl-0 pr-0 text-center">
                                        <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Sona</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                            <a href="">
                                <div class="row marginauto item-nick-lmht__border">
                                    <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                        <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                    </div>
                                    <div class="col-md-12 pl-0 pr-0 text-center">
                                        <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Axtrox</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                            <a href="">
                                <div class="row marginauto item-nick-lmht__border">
                                    <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                        <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Amumu">
                                    </div>
                                    <div class="col-md-12 pl-0 pr-0 text-center">
                                        <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Amumu</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="modal-footer" style="height: 16px">

                    </div>
                </div>

            </div>

            {{--    Modal thông tin khác   --}}

            <div class="c-modal__nick-lmht c-modal__nick-lmht-ttk" style="z-index: 1005; background: rgba(67, 70, 87, 0.5);">
                <div class="header-modal__nick-lmht c-px-24 c-pt-24 pb-0 position-relative text-uppercase text-center ml-auto mr-auto fw-700">
                    <div class="row marginauto c-pb-24 header-modal__nick-lmht-row">
                        <div class="col-auto pl-0 pr-0 mb-0 c-mr-24">
                            <h2 class="fw-700 fz-24 lh-32 mb-0">Thông tin khác</h2>
                            <p class="fw-400 fz-13 lh-20 mb-0">(10)</p>
                        </div>
                        <div class="col-auto pl-0 pr-0 form-search input-search-lmht position-relative">
                            <input id="keyword--search" type="search" placeholder="Tìm kiếm" class="has-submit input-search-lmht">
                            <button class="submit--search" type="submit"></button>
                        </div>
                        <img class="c-close-modal" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/close.svg" alt="">
                    </div>
                </div>
                <div class="body-modal__nick-lmht pb-0 c-px-18 c-pt-10 mr-auto ml-auto">
                    <div class="row marginauto modal-container-body">
                        <div class="col-md-12 c-px-6 c-py-8 body-modal__nick__text-error">
                            <div class="text-error c-mt-4">Không có kết quả phù hợp.</div>
                        </div>
                        <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                            <a href="">
                                <div class="row marginauto">
                                    <div class="col-md-12 pl-0 pr-0">
                                        <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                            <a href="">
                                <div class="row marginauto">
                                    <div class="col-md-12 pl-0 pr-0">
                                        <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                            <a href="">
                                <div class="row marginauto">
                                    <div class="col-md-12 pl-0 pr-0">
                                        <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                            <a href="">
                                <div class="row marginauto">
                                    <div class="col-md-12 pl-0 pr-0">
                                        <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer" style="height: 16px">

                    </div>
                </div>

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

            <!-- Tuowngs lmht mobile -->
            <div class="bottom-sheet" id="sheet-hero" aria-hidden="true" data-height="80">
                <div class="layer"></div>
                <div class="content-bottom-sheet bar-slide" >
                    <div class="sheet-header">
                        <h2 class="text-title center">
                            Tướng(100)
                        </h2>
                        <label for="check-bottom-sheet" class="close"></label>
                    </div>
                    <div class="sheet-body">
                        <!-- body -->

                        <div class="input-group">
                            <input type="search" class="search">
                        </div>

                        <div class="row c-pl-10 c-pr-10">
                            <div class="col-md-12 c-px-6 c-py-8 body-modal__nick__text-error">
                                <div class="text-error c-mt-4">Không có kết quả phù hợp.</div>
                            </div>
                            <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                                <a href="">
                                    <div class="row marginauto item-nick-lmht__border">
                                        <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                            <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                        </div>
                                        <div class="col-md-12 pl-0 pr-0 text-center">
                                            <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Axtrox</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                                <a href="">
                                    <div class="row marginauto item-nick-lmht__border">
                                        <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                            <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Amumu">
                                        </div>
                                        <div class="col-md-12 pl-0 pr-0 text-center">
                                            <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Amumu</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                                <a href="">
                                    <div class="row marginauto item-nick-lmht__border">
                                        <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                            <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Garen">
                                        </div>
                                        <div class="col-md-12 pl-0 pr-0 text-center">
                                            <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Garen</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                                <a href="">
                                    <div class="row marginauto item-nick-lmht__border">
                                        <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                            <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Sona">
                                        </div>
                                        <div class="col-md-12 pl-0 pr-0 text-center">
                                            <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Sona</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                                <a href="">
                                    <div class="row marginauto item-nick-lmht__border">
                                        <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                            <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                        </div>
                                        <div class="col-md-12 pl-0 pr-0 text-center">
                                            <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Axtrox</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                                <a href="">
                                    <div class="row marginauto item-nick-lmht__border">
                                        <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                            <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Amumu">
                                        </div>
                                        <div class="col-md-12 pl-0 pr-0 text-center">
                                            <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Amumu</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{--            <div class="sheet-footer">--}}
                    {{--                <button class="btn ghost">Xoá bộ lọc</button>--}}
                    {{--                <button class="btn primary">Xem kết quả</button>--}}
                    {{--            </div>--}}
                </div>
            </div>

            <!-- trang phucj lmht mobile -->
            <div class="bottom-sheet" id="sheet-fashion" aria-hidden="true" data-height="80">
                <div class="layer"></div>
                <div class="content-bottom-sheet bar-slide" >
                    <div class="sheet-header">
                        <h2 class="text-title center">
                            Trang phục(100)
                        </h2>
                        <label for="check-bottom-sheet" class="close"></label>
                    </div>
                    <div class="sheet-body">
                        <!-- body -->

                        <div class="input-group">
                            <input type="search" class="search">
                        </div>

                        <div class="row c-pl-10 c-pr-10">
                            <div class="col-md-12 c-px-6 c-py-8 body-modal__nick__text-error">
                                <div class="text-error c-mt-4">Không có kết quả phù hợp.</div>
                            </div>
                            <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                                <a href="">
                                    <div class="row marginauto item-nick-lmht__border">
                                        <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                            <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                        </div>
                                        <div class="col-md-12 pl-0 pr-0 text-center">
                                            <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Axtrox</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                                <a href="">
                                    <div class="row marginauto item-nick-lmht__border">
                                        <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                            <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Amumu">
                                        </div>
                                        <div class="col-md-12 pl-0 pr-0 text-center">
                                            <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Amumu</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                                <a href="">
                                    <div class="row marginauto item-nick-lmht__border">
                                        <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                            <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Garen">
                                        </div>
                                        <div class="col-md-12 pl-0 pr-0 text-center">
                                            <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Garen</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                                <a href="">
                                    <div class="row marginauto item-nick-lmht__border">
                                        <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                            <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Sona">
                                        </div>
                                        <div class="col-md-12 pl-0 pr-0 text-center">
                                            <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Sona</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                                <a href="">
                                    <div class="row marginauto item-nick-lmht__border">
                                        <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                            <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                        </div>
                                        <div class="col-md-12 pl-0 pr-0 text-center">
                                            <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Axtrox</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                                <a href="">
                                    <div class="row marginauto item-nick-lmht__border">
                                        <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                            <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Amumu">
                                        </div>
                                        <div class="col-md-12 pl-0 pr-0 text-center">
                                            <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Amumu</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{--            <div class="sheet-footer">--}}
                    {{--                <button class="btn ghost">Xoá bộ lọc</button>--}}
                    {{--                <button class="btn primary">Xem kết quả</button>--}}
                    {{--            </div>--}}
                </div>
            </div>

            <!-- thongtin lmht mobile -->
            <div class="bottom-sheet" id="sheet-profile" aria-hidden="true" data-height="80">
                <div class="layer"></div>
                <div class="content-bottom-sheet bar-slide" >
                    <div class="sheet-header">
                        <h2 class="text-title center">
                            Thông tin khác
                        </h2>
                        <label for="check-bottom-sheet" class="close"></label>
                    </div>
                    <div class="sheet-body">
                        <!-- body -->

                        <div class="row c-pl-10 c-pr-10">

                            <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                                <a href="">
                                    <div class="row marginauto">
                                        <div class="col-md-12 pl-0 pr-0">
                                            <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                                <a href="">
                                    <div class="row marginauto">
                                        <div class="col-md-12 pl-0 pr-0">
                                            <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                                <a href="">
                                    <div class="row marginauto">
                                        <div class="col-md-12 pl-0 pr-0">
                                            <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                                <a href="">
                                    <div class="row marginauto">
                                        <div class="col-md-12 pl-0 pr-0">
                                            <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                    {{--            <div class="sheet-footer">--}}
                    {{--                <button class="btn ghost">Xoá bộ lọc</button>--}}
                    {{--                <button class="btn primary">Xem kết quả</button>--}}
                    {{--            </div>--}}
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
                            <button class="btn primary" id="handleOpenRechargeModal" data-dismiss="modal">Nạp tiền</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade modal-big" id="rechargeModal">
                <div class="modal-dialog modal-dialog-centered modal-custom">
                    <div class="modal-content p-0">
                        <div class="modal-header c-pl-24 c-pr-24 c-pt-24 c-pb-16" style="border-bottom: 1px solid #E4E5F0">
                            <h2 class="modal-title center">Nạp tiền</h2>
                            <button type="button" class="close" data-dismiss="modal" style="right: 24px;top: 36px"></button>
                        </div>
                        <div class="modal-body pl-0 pr-0 c-pt-12 c-pb-24">
                            <section class="section-category-tab">
                                <div class="c-mb-16 c-mb-lg-16">
                                    <ul class="nav nav-tabs size-auto" role="tablist" style="width: 100%;margin: 0 auto">
                                        <li class="nav-item" role="presentation">
                                            <a class="tab active" data-toggle="tab" href="#charge_card" role="tab" aria-selected="true">Nạp thẻ cào</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="tab" data-toggle="tab" href="#atm_card" role="tab" aria-selected="false">ATM tự động</a>
                                        </li>
                                    </ul>
                                </div>
        
                                <div class="tab-content c-pl-24 c-pl-lg-16 c-pr-24 c-pr-lg-16">
                                    <div class="tab-pane fade show active" id="charge_card" role="tabpanel">
                                        <div class="row text-center loader-container">
                                            <div class="col-12">
                                                <div class="loader position-relative" style="margin: 2rem 0">
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
                                        <form class="w-100" action="" id="chargeCardForm">
                                            <div class="row content-block d-none">
                                                <div class="col-12 c-pr-8">
                                                    <div class="money-form-group c-mb-16">
                                                        <label class="text-form fz-13 fw-500 c-mb-4">Nhà cung cấp</label>
                                                        <div class="col-md-12 p-0">
                                                            <select class="select-form w-100" name="type" id="telecom">
                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="money-form-group c-mb-12">
                                                        <label class="text-form fz-13 fw-500 c-mb-8">Chọn mệnh giá</label>
                                                        <div class="loader position-relative">
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
                                                        <div class="col-md-12 p-0">
                                                            <div class="row m-0 c-mx-n4" id="cardAmountModal">
                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="money-form-group c-mb-8">
                                                        <label class="text-form fz-13 fw-500 c-mb-4">Mã số thẻ</label>
                                                        <div class="col-md-12 p-0">
                                                            <div class="input-group">
                                                                <input class="input-form w-100" name="pin" type="text" placeholder="Nhập mã số thẻ của bạn">
                                                                <p class="text-error c-mb-0 c-mt-4"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="money-form-group c-mb-8">
                                                        <label class="text-form fz-13 fw-500 c-mb-4">Số sê-ri</label>
                                                        <div class="col-md-12 p-0">
                                                            <div class="input-group">
                                                                <input class="input-form w-100" name="serial" type="text" placeholder="Nhập mã số sê-ri trên thẻ">
                                                                <p class="text-error c-mb-0 c-mt-4"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="money-form-group">
                                                        <label class="text-form fz-13 fw-500 c-mb-4">Mã bảo vệ</label>
                                                        <div class="input-group">
                                                            <div class="col-md-12 p-0 d-flex">
                                                                <div style="flex: 1;">
                                                                    <input class="input-form w-100" name="captcha" type="text" placeholder="Nhập mã bảo vệ ">
                                                                </div>
                                                                <div class="captcha c-mx-8">
                                                                    <div>
                                                                    <span id="capchaImage">
                                                                        {!! captcha_img('flat') !!}
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                                <button class="refresh-captcha brs-8" type="button" id="reload_1">
                                                                    <img class="spinImg paused" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/captcha_refresh.png" alt="">
                                                                </button>
                                                            </div>
                                                            <p class="text-error c-mb-0 c-mt-4"></p>
                                                        </div>
                                                    </div>
                                                    <div class="group-btn c-mt-24 d-flex">
                                                        @if (\App\Library\AuthCustom::check())
                                                            <button class="btn primary" type="submit">Nạp ngay</button>
                                                        @else
                                                            <button class="btn primary" onclick="openLoginModal();">Nạp ngay</button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="atm_card" role="tabpanel">
                                        <div class="c-mt-8">
                                            <label class="c-mb-4 fw-500 fz-13 lh-20">Ví điện tử</label>
                                            <div class="col-md-12 p-0">
                                                <select class="default-select brs-8 fz-13" name="" id="">
                                                    <option value="">--- Chọn---</option>
                                                    <option value="">Is Text Demo</option>
                                                    <option value="">Is Text Demo</option>
                                                    <option value="">Is Text Demo</option>
                                                </select>
                                            </div>
                                        </div>
        
                                        <div class="c-mt-8">
                                            <label class="c-mb-4 fw-500 fz-13 lh-20">Số tài khoản ví</label>
                                            <div class="col-md-12 p-0">
                                                <input type="text" name="" id="" placeholder="placeholder">
                                            </div>
                                        </div>
        
                                        <div class="c-mt-8">
                                            <label class="c-mb-4 fw-500 fz-13 lh-20">Xác nhận lại số tài khoản ví</label>
                                            <div class="col-md-12 p-0">
                                                <input type="text" name="" id="" placeholder="placeholder">
                                            </div>
                                        </div>
        
                                        <div class="c-mt-12">
                                            <label class="c-mb-4 fw-500 fz-13 lh-20">Lưu ý</label>
                                            <div class="col-md-12 p-0">
                                                <span class="fz-13 fw-400 lh-28" style="color: #82869E;">
                                                    Rút về các ví điện tử, Tất cả thông tin gồm tên tài khoản, số điện thoại, hoặc email tài khoản ở ví đó
                                                </span>
                                            </div>
                                        </div>
        
                                        <div class="modal-footer c-mt-40 c-mt-lg-24">
                                            <button class="btn primary">Xem kết quả</button>
                                        </div>
                                    </div>
                                </div>
        
                            </section>
                        </div>
        
                    </div>
                </div>
            </div>

            {{--  sử lý step thanh toán --}}
            <div class="step" id="chargeConfirmStep">
                <div class="head-mobile">
                    <a href="javascript:void(0) " class="link-back close-step"></a>

                    <h1 class="head-title text-title">Xác nhận thanh toán</h1>

                    <a href="/" class="home"></a>
                </div>
                <div class="body-mobile">
                    <div class="body-mobile-content c-p-16">
                        <div class="dialog--content__title fw-700 fz-15 c-mb-12 text-title-theme">
                            Thông tin nạp thẻ
                        </div>
                        <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12 brs-8 g_mobile-content">
                            <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                <div class="card--attr__name fw-400 fz-13 text-center text-order">
                                    Nhà mạng
                                </div>
                                <div class="card--attr__value fz-13 fw-500" id="confirmTitleMobile"></div>
                            </div>
                            <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                <div class="card--attr__name fw-400 fz-13 text-center text-order">
                                    Giá niêm yết
                                </div>
                                <div class="card--attr__value fz-13 fw-500" id="confirmPriceMobile"></div>
                            </div>
                            <div class="card--attr justify-content-between d-flex text-center">
                                <div class="card--attr__name fw-400 fz-13 text-center text-order">
                                    Chiết khấu
                                </div>
                                <div class="card--attr__value fz-13 fw-500" id="confirmDiscountMobile"></div>
                            </div>
                        </div>
                        <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12 brs-8 g_mobile-content">
                            <div class="card--attr justify-content-between d-flex text-center">
                                <div class="card--attr__name fw-400 fz-13 text-center text-order">
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
                                    Số tiền thực nhận
                                </div>
                                <div class="card--attr__value fz-13 fw-500"><a href="javascript:void(0)" class="c-text-primary" id="totalBillMobile"></a></div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="footer-mobile v2">
                    <div class="group-btn" >
                        <button class="btn primary" id="confirmSubmitButtonMobile">Xác nhận</button>
                    </div>
                </div>
            </div>

            {{--    Modal xác nhận thanh toán--}}
            <div class="modal fade modal-big" id="orderCharge">
                <div class="modal-dialog modal-dialog-centered modal-custom">
                    <div class="modal-content c-p-24">
                        <div class="modal-header">
                            <h2 class="modal-title center">Xác nhận thanh toán</h2>
                            <button type="button" class="close" data-dismiss="modal"></button>
                        </div>
                        <div class="modal-body pl-0 pr-0 c-pt-24 c-pb-24">
                            <div class="dialog--content__title fw-700 fz-13 c-mb-12 text-title-theme">
                                Thông tin nạp thẻ
                            </div>
                            <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                                <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                    <div class="card--attr__name fw-400 fz-13 text-center">
                                        Nhà mạng
                                    </div>
                                    <div class="card--attr__value fz-13 fw-500" id="confirmTitle"></div>
                                </div>
                                <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                    <div class="card--attr__name fw-400 fz-13 text-center">
                                        Giá niêm yết
                                    </div>
                                    <div class="card--attr__value fz-13 fw-500" id="confirmPrice"></div>
                                </div>
                                <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                    <div class="card--attr__name fw-400 fz-13 text-center">
                                        Chiết khấu
                                    </div>
                                    <div class="card--attr__value fz-13 fw-500" id="confirmDiscount"></div>
                                </div>
                            </div>
                            <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                                <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                    <div class="card--attr__name fz-13 fw-400 text-center">
                                        Phí thanh toán
                                    </div>
                                    <div class="card--attr__value fz-13 fw-500">
                                        Miễn phí
                                    </div>
                                </div>
                            </div>
                            <div class="card--gray  c-mb-0 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                                <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                    <div class="card--attr__name fw-400 fz-13 text-center">
                                        Số tiền thực nhận
                                    </div>
                                    <div class="card--attr__value fz-13 fw-500"><a href="javascript:void(0)" class="c-text-primary" id="totalBill"></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn primary" type="button" id="confirmSubmitButton">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal thành công --}}
            <div class="modal fade modal-small" id="modalSuccessPayment">
                <div class="modal-dialog modal-dialog-centered modal-custom">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center p-0">
                            <img class="c-pt-20 c-pb-20" src="/assets/frontend/{{theme('')->theme_key}}/image/son/success.png" alt="">
                        </div>
                        <div class="modal-body text-center c-pl-24 c-pr-24 pt-0 pb-0">
                                <p class="fw-700 fz-15 c-mt-12 mb-0 text-title-theme">Nạp thẻ thành công</p>
                                <p class="fw-400 fz-13 c-mt-10 mb-0" id="successMessage"></p>
                        </div>
                        <div class="modal-footer c-p-24">
                            <a class="btn secondary" data-dismiss="modal">Trang chủ</a>
                            <button class="btn primary">Nạp thêm</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal thất bại --}}
            <div class="modal fade modal-small" id="modalFailPayment">
                <div class="modal-dialog modal-dialog-centered modal-custom">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center p-0">
                            <img class="c-pt-16 c-pb-16" src="/assets/frontend/{{theme('')->theme_key}}/image/son/thatbai.png" alt="">
                        </div>
                        <div class="modal-body text-center c-pl-24 c-pr-24 pt-0 pb-0">
                            <p class="fw-700 fz-15 c-mt-12 mb-0 text-title-theme">Nạp thẻ thất bại</p>
                            <p class="fw-400 fz-13 c-mt-10 mb-0" id="failMessage"></p>
                        </div>
                        <div class="modal-footer c-p-24">
                            <button class="btn ghost" data-dismiss="modal">Thoát</button>
                        </div>
                    </div>
                </div>
            </div>

            <input type="hidden" name="slug" class="slug" value="{{ $slug }}">

            <input type="hidden" name="slug" class="slug_category" value="{{ $slug_category }}">

            <script src="/assets/frontend/{{theme('')->theme_key}}/js/nick/buyacc.js"></script>
            <script src="/assets/frontend/{{theme('')->theme_key}}/js/nick/buyaccslider.js"></script>
        @endif
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



    </script>
@endsection


