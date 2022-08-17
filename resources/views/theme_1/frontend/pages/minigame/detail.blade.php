@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$group]))
@endsection
@section('content')

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

        <div class="item_play">
            <div class="container data_minigame_detail">

                <div class="body-box-loadding result-amount-loadding" style="display: flex;justify-content: center;align-items: center">
                    <div class="d-flex justify-content-center">
                        <span class="pulser"></span>
                    </div>
                </div>

            </div>
        </div>

        <div class="item_play" style="padding-bottom: 32px">
            <div class="container">
                @if($groups_other!=null)
                    <div class="item_play_title">
                        <p>Các minigame khác</p>
                        <div class="item_play_line"></div>
                    </div>
                    <div class="item_play_dif">
                        <div class="row" style="position: relative">
                            <div class="col-12 item_play_dif_slide" >
                                <div class="swiper-container item_play_dif_slide_detail">
                                    <div class="swiper-wrapper">
                                        @foreach($groups_other as $item)
                                            <div class="swiper-slide" >
                                                <div class="item_play_dif_slide_detail_in">
                                                    <div class="item_play_dif_slide_img">
                                                        <a href="{{route('getIndex',[$item->slug])}}">
                                                            <img src="{{ \App\Library\MediaHelpers::media($item->image) }}" alt="{{$item->title}}"  class="img-fluid swiper-lazy item_play_dif_slide_img_main">
                                                            @if(isset($item->params->image_percent_sale) && $item->params->image_percent_sale!=null)
                                                                <img src="{{ \App\Library\MediaHelpers::media($item->params->image_percent_sale) }}" alt="{{$item->title}}" class="item_play_dif_slide_img_sale">
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="item_play_dif_slide_title">
                                                        <p><strong>{{$item->title}}</strong></p>
                                                    </div>
                                                    <div class="item_play_dif_slide_description">
                                                        <div class="countime"> </div>
                                                        <p>Đã chơi: {{isset($item->params->fake_num_play)?($item->params->fake_num_play+$item->order_gate_count):$item->order_gate_count}}</p>
                                                        <span class="item_play_dif_slide_description-old-price">{{number_format($item->price*100/80)}}đ</span>
                                                        <span class="item_play_dif_slide_description-new-price">{{number_format($item->price)}}đ</span>
                                                    </div>
                                                    <div class="item_play_dif_slide_more">
                                                        <div class="item_play_dif_slide_more_view" >
                                                            <a href="{{route('getIndex',[$item->slug])}}">
                                                                @if(isset($item->params->image_view_all) && $item->params->image_view_all!=null)
                                                                    <img src="{{ \App\Library\MediaHelpers::media($item->params->image_view_all) }}"  alt="{{$item->title}}">
                                                                @else
                                                                    Chơi ngay
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <div class="swiper-button-prev">
                                    <i class="fas fa-chevron-left"></i>
                                </div>
                                <div class="swiper-button-next">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <input type="hidden" name="id_group" class="id_group" value="{{ $id_group }}">
        <input type="hidden" name="module" class="module" value="{{ $module }}">
        <input type="hidden" name="slug" class="slug" value="{{ $slug }}">
        <script src="/assets/frontend/{{theme('')->theme_key}}/js/minigame/detail.js?v={{time()}}"></script>
    @endif

@endsection
