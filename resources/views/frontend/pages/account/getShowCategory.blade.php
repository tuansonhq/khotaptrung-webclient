@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('content')

    <div class="item_buy">
        <div class="container">
            @if(isset($data))
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="item_buy_info">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 style="font-size: 20px">{{ $data->title }}</h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="item_buy_list row">
                @if(isset($data->childs) && count($data->childs) > 0)
                    @foreach($data->childs as $item)
                    <div class="col-6 col-sm-6 col-lg-3">
                    <div class="item_buy_list_in">
                        <div class="item_buy_list_img">
                            <a href="/{{ $data->slug }}/{{ $item->slug }}">
                                <img class="item_buy_list_img-main" src="https://media-tt.nick.vn/{{ $item->image }}" alt="">
                             </a>
                        </div>

                        <div class="item_buy_list_info">
                            <div class="row">
                                <div class="col-12 item_buy_list_info_in">
                                    <span style="font-weight: bold;color: #f7b03c;font-size: 16px;">  {{ $item->title }} </span>
                                </div>

                                <div class="col-12 item_buy_list_info_in">
                                    <span>Số tài khoản: 9999</span>
                                </div>

                                <div class="col-12 item_buy_list_info_in">
{{--                                   <span>Giao dịch:</span>--}}
                                </div>

                            </div>
                        </div>

                        <div class="item_buy_list_more">
                            <div class="row">

                                <a href="/{{ $data->slug }}/{{ $item->slug }}" class="col-12">
                                    <div class="item_buy_list_view">
                                        CHI TIẾT
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif
            </div>

        </div>
    </div>

@endsection
