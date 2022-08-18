@extends('theme_3.frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head')
@endsection
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$group]))
@endsection
@section('styles')
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_phu/breadcrumb.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_phu/layout_page.css">
@endsection
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_phu/spin.js"></script>
@endsection

@section('content')

    {{--         Vong quay vong vong      --}}
    @if($group == null)
        <div class="item_buy">

            <div class="container pt-3">
                <div class="row pb-3 pt-3">
                    <div class="col-md-12 text-center">
                        <span style="color: red;font-size: 16px;">
                            @if(isset($message))
                                {{ $message }}
                            @else
                                Hiện tại không có dữ liệu nào phù hợp với yêu cầu của bạn! Hệ thống cập nhật minigame thường xuyên bạn vui lòng theo dõi web trong thời gian tới !
                            @endif
                        </span>
                    </div>
                </div>

            </div>

        </div>
    @else
        <div class="container_page container">
            <section class="breadcrumb-container">
                <ul class="breadcrumb breadcrumb-arrow">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="minigame">Danh mục vòng quay</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">{{ $group->title }}</a></li>
                </ul>
            </section>
            <section class="breadcrumb-mobile">
                <a href="/minigame" style="display: block">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/back.svg" alt="">
                </a>
                <p>{{ $group->title }}</p>
            </section>
            <section class="rotation-content data_minigame_detail">
                <div id="listLoader" style="width: 100%;display: flex;justify-content: center;align-items: center">
                    <div class="loader position-relative" style="padding: 3rem;top: 0;left: 0;transform: translate(-0%,-0%);">
                        <div class="loading-spokes" >
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
            </section>


            @if($groups_other!=null)
                <div class=" block-product mt-fix-20 ">
                    <div class="product-header d-flex">
                    <span>
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/flash_sales.png" alt="">
                    </span>
                        <p class="text-title"><span>Mini game liên quan</span></p>
                        <div class="product-catecory"></div>

                    </div>
                    <div class="box-product minigame-detail_swiper">
                        <div class="swiper-container list-minigame list-product" >
                            <div class="swiper-wrapper">
                                @foreach($groups_other as $key => $item)
                                    <div class="swiper-slide" >
                                        <a href="{{route('getIndex',[$item->slug])}}">
                                            <div class="item-product__box-img">

                                                <img src="{{ \App\Library\MediaHelpers::media($item->image) }}" alt="{{$item->title}}">

                                            </div>
                                            <div class="item-product__box-content">


                                                <div class="item-product__box-name">
                                                    {{$item->title}}
                                                </div>
                                                <div class="item-product__box-sale">
                                                    Đã bán: {{isset($item->params->fake_num_play)?($item->params->fake_num_play+$item->order_gate_count):$item->order_gate_count}}
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">{{number_format($item->price)}} đ</div>

                                                    @if(isset($item->params->percent_sale))
                                                        <div class="old-price">{{ str_replace(',','.',number_format(($item->params->percent_sale*$item->price)/100 + $item->price)) }} đ</div>
                                                    @else
                                                    @endif
                                                    @if(isset($item->params->percent_sale))
                                                        <div class="item-product__sticker-percent">
                                                            -{{number_format($item->params->percent_sale)}}%
                                                        </div>
                                                    @endif
                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-button-prev">
                            <img src="./assets/frontend/theme_3/image/swiper-prev.svg" alt="">
                        </div>
                        <div class="swiper-button-next">
                            <img src="./assets/frontend/theme_3/image/swiper-next.svg" alt="">
                        </div>
                    </div>
                </div>
            @endif
        </div>


        <input type="hidden" name="id_group" class="id_group" value="{{ $id_group }}">
        <input type="hidden" name="module" class="module" value="{{ $module }}">
        <input type="hidden" name="slug" class="slug" value="{{ $slug }}">
        <script src="/assets/frontend/{{theme('')->theme_key}}/js/minigame/detail.js?v={{time()}}"></script>
    @endif

@endsection


