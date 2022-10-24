@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('meta_robots')
    <meta name="robots" content="noindex,nofollow" />
@endsection
@section('content')
    @if(isset($data->params) && isset($data->params->article_type))
        {!! $data->params->article_type !!}
    @endif
    @if($data == null)
        <div class="item_buy">
            <div class="container pt-3" style="padding-bottom: 600px">
                <div class="row pb-3 pt-3">
                    <div class="col-md-12 text-center">
                        <span style="color: red;font-size: 16px;">
                            @if(isset($message))
                                {{ $message }}
                            @else
                                Hiện tại không có dữ liệu nào phù hợp với yêu cầu của bạn! Hệ thống cập nhật dịch vụ thường xuyên bạn vui lòng theo dõi web trong thời gian tới !
                            @endif
                        </span>
                    </div>
                </div>

            </div>

        </div>
    @else
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

    <fieldset id="fieldset-one">
        <div id="pageBreadcrumb">

        </div>

        {{--   Bopđyy --}}
        <section id="detailLoader">
            <div class="loader position-relative" style="margin: 4rem 0">
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
        </section>

        <section id="showdetailacc">
            {{-- @include('frontend.pages.account.widget.__datadetail') --}}
        </section>

        <section class="media-mobile">
            <div class="row marginauto intermediary-ct" style="height: 20px;background: #EFEFEF">

            </div>
        </section>

        <section id="showslideracc">

        </section>

        <div class="modal fade login show order-modal" id="successModal" aria-modal="true">

            <div class="modal-dialog step-tab-panel modal-lg modal-dialog-centered login animated">
                <!--        <div class="image-login"></div>-->
                <div class="modal-content">
                    <div class="modal-header p-0" style="border-bottom: 0">
                        <div class="row marginauto modal-header-order-ct">
                            <div class="col-12 span__donhang text-center" style="position: relative">
                                <span>Mua tài khoản thành công</span>
                                <img class="img-close-ct close-modal-default" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/close.png" alt="">
                            </div>
                        </div>

                    </div>

                    <div class="modal-body modal-body-order-ct">
                        <div class="row marginauto">

                            <div class="col-md-12 left-right image-success">
                                <div class="row marginauto justify-content-center">
                                    <div class="col-auto">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/group.png" alt="">
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
                                                        <img class="lazy img-copy" src="/assets/frontend/theme_3/image/nick/copy.png" id="getpass" alt="">
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
                            </div> --}}

                            <div class="col-md-12 left-right title-tra-gop text-center data-time">
                            </div>

                            {{-- <div class="col-md-12 left-right padding-order-16-ct">
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
                                        <button type="button" class="button-success-secondary">
                                            <a href="/" style="display: block">Về trang chủ</a>
                                        </button>
                                    </div>
                                    <div class="col-md-6 col-6 modal-footer-success-col-right-ct">
                                        <button type="button" class="button-success-primary">
                                            <a href="/lich-su-mua-account" style="display: block">Lịch sử mua Acc</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <input type="hidden" name="previous" class="input-back-step-two" value="Trang trước"/>



    </fieldset>

    <fieldset id="fieldset-two"></fieldset>

    @if(isset($game_auto_props) && count($game_auto_props))
        @if($slug_category == 'nick-lien-minh')
        @php
            $total_tuong = 0;
            $total_bieucam = 0;
            $total_chuongluc = 0;
            $total_sandau = 0;
            $total_linhthu = 0;
            $total_trangphuc = 0;
            $total_thongtinchung = 0;

            if(isset($game_auto_props) && count($game_auto_props)){
                foreach($game_auto_props as $game_auto_prop){
                    if($game_auto_prop->key == 'champions'){
                        $total_tuong = $total_tuong + 1;
                        if(isset($game_auto_prop->childs) && count($game_auto_prop->childs)){
                            foreach($game_auto_prop->childs as $c_child){
                                $total_trangphuc = $total_trangphuc + 1;
                            }
                        }
                    }elseif ($game_auto_prop->key == 'emotes'){
                        $total_bieucam = $total_bieucam + 1;
                    }elseif ($game_auto_prop->key == 'tftdamageskins'){
                        $total_chuongluc = $total_chuongluc + 1;
                    }elseif ($game_auto_prop->key == 'tftmapskins'){
                        $total_sandau = $total_sandau + 1;
                    }elseif ($game_auto_prop->key == 'tftcompanions'){
                        $total_linhthu = $total_linhthu + 1;
                    }
                }
            }
        @endphp
        <!-- Modal Tướng -->
        <div class="modal fade show modal-lmht" id="modal-champ" aria-modal="true">
            <div class="modal-dialog modal-dialog-centered animated">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="d-block d-lg-flex w-100">
                            <div class="modal-title">Tướng ({{ $total_tuong??0 }} tướng)</div>
                            <form action="" class="form-search-modal ml-0 ml-lg-4">
                                <input type="text" class="input-primary" placeholder="Tìm kiếm...">
                                <button class="btn -primary d-none d-lg-inline-block" type="submit"></button>
                            </form>
                        </div>
                        <button type="button" class="close" data-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-invalid text-center">Không tìm thấy kết quả nào !</div>
                        <div class="row">
                            @foreach($game_auto_props as $game_auto_prop)
                                @if($game_auto_prop->key == 'champions')
                                    <div class="col-lg-2 col-6">
                                        <div class="card card-lmht">
                                            <div class="card-thumb">
                                                <img data-src="https://backend.dev.tichhop.pro/{{ $game_auto_prop->thumb }}" alt="" class="card-thumb-image lazy">
                                            </div>
                                            <div class="card-name">
                                                {{ $game_auto_prop->name }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Skin -->
        <div class="modal fade show modal-lmht" id="modal-skin" aria-modal="true">
            <div class="modal-dialog modal-dialog-centered animated">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="d-block d-lg-flex w-100">
                            <div class="modal-title">Trang phục ({{ $total_trangphuc }} Trang phục)</div>
                            <form action="" class="form-search-modal ml-0 ml-lg-4">
                                <input type="text" class="input-primary" placeholder="Tìm kiếm...">
                                <button class="btn -primary d-none d-lg-inline-block" type="submit"></button>
                            </form>
                        </div>
                        <button type="button" class="close" data-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-invalid text-center">Không tìm thấy kết quả nào !</div>
                        <div class="row">
                            @foreach($game_auto_props as $game_auto_prop)
                                @if($game_auto_prop->key == 'champions')
                                    @if(isset($game_auto_prop->childs) && count($game_auto_prop->childs))
                                        @foreach($game_auto_prop->childs as $c_child)
                                            <div class="col-lg-2 col-6">
                                                <div class="card card-lmht">
                                                    <div class="card-thumb">
                                                        <img data-src="{{\App\Library\MediaHelpers::media($c_child->thumb)}}" alt="Icon Skin" class="card-thumb-image lazy">
                                                    </div>
                                                    <div class="card-name">
                                                        {{ $c_child->name }}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Animal -->
        <div class="modal fade show modal-lmht" id="modal-animal" aria-modal="true">
            <div class="modal-dialog modal-dialog-centered animated">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="d-block d-lg-flex w-100">
                            <div class="modal-title">Linh thú TFT ({{ $total_linhthu }} linh thú)</div>
                            <form action="" class="form-search-modal ml-0 ml-lg-4">
                                <input type="text" class="input-primary" placeholder="Tìm kiếm...">
                                <button class="btn -primary d-none d-lg-inline-block" type="submit"></button>
                            </form>
                        </div>
                        <button type="button" class="close" data-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-invalid text-center">Không tìm thấy kết quả nào !</div>
                        <div class="row">
                            @foreach($game_auto_props as $game_auto_prop)
                                @if($game_auto_prop->key == 'tftcompanions')
                                    <div class="col-lg-2 col-6">
                                        <div class="card card-lmht">
                                            <div class="card-thumb">
                                                <img data-src="{{\App\Library\MediaHelpers::media($game_auto_prop->thumb)}}" alt="Icon Animal" class="card-thumb-image lazy">
                                            </div>
                                            <div class="card-name">
                                                {{ $game_auto_prop->name }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endif
    <input type="hidden" name="slug" class="slug" value="{{ $slug }}">
    <input type="hidden" name="slug" class="slug_category" value="{{ $slug_category }}">
    @endif



{{--    <script src="/js/{{theme('')->theme_key}}/nick/nick-detail.js?v={{time()}}"></script>--}}
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/nick/nick-detail.js?v={{time()}}"></script>
@endsection






