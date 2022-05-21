@if(empty($data->data))

    @if(isset($items) && count($items) > 0)

        <div class="item_buy_list row">
            @foreach ($items as $item)
{{--                @dd($item)--}}
                {{--                Nick random--}}
                @if($item->status == 1)
                    @if($data->display_type == 2)

                        <div class="col-6 fixcssacount col-sm-6 col-lg-3">
                            <div class="item_buy_list_in">
                                <div class="item_buy_list_img">
                                    <a href="javascript:void(0)" class="buyacc" data-balance="{{ $balance }}" data-params="{{ isset($item->params) && isset($item->params->ext_info) ? json_encode($item->params->ext_info) : '' }}" data-groups="{{ isset($item->groups) ? json_encode($item->groups) : '' }}" data-price="{{ $item->price }}" data-game="{{ isset($data->custom->title) ? $data->custom->title :  $data->title }}" data-attribute="{{ json_encode($dataAttribute) }}" data-id="{{ $item->randId }}">
                                        @if(isset($data->params->thumb_default) && isset($data->params))
                                            <img class="item_buy_list_img-main" src="{{\App\Library\MediaHelpers::media($data->params->thumb_default)}}" alt="{{ $item->title }}">
                                        @else

                                            @if(isset($item->image))
                                                <img class="item_buy_list_img-main" src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="{{ $item->title }}">
                                            @else
                                                <img class="item_buy_list_img-main" src="https://shopas.net/storage/images/CGuYto7yjj_1645585924.jpg" alt="{{ $item->title }}">
                                            @endif
                                        @endif

                                        <span>MS: {{ $item->randId }}</span>
                                    </a>
                                </div>
                                <div class="item_buy_list_description">
                                    bảo hành 100%,lỗi hoàn tiền
                                </div>
                                <div class="item_buy_list_info">
                                    <div class="row item_buy_list_info__row">
                                        <?php
                                        $index = 0;
                                        ?>
                                        @if(isset($item->groups))
                                            <?php
                                            $att_values = $item->groups;
                                            ?>
                                            @foreach($att_values as $att_value)

                                                @if($att_value->module == 'acc_label' && $att_value->is_slug_override == null)
                                                    @if(isset($att_value->parent[0]))
                                                        <?php
                                                        $index = $index + 1;
                                                        ?>
                                                        @if($index < 5)
                                                            <div class="row" style="margin: 0 auto;width: 100%">
                                                                <div class="col-6 fixcssacount item_buy_list_info_inacc">
                                                                    {{ $att_value->parent[0]->title??null }} :
                                                                </div>
                                                                <div class="col-6 fixcssacount item_buy_list_info_inaccright" style="color: #666;font-weight: 600">
                                                                    {{ $att_value->title??null }}
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif

                                        @if(isset($item->params) && isset($item->params->ext_info))
                                            <?php
                                            $params = json_decode(json_encode($item->params->ext_info),true);
                                            ?>
                                            @if($index < 5)

                                                @if(!is_null($dataAttribute) && count($dataAttribute)>0)
                                                    @foreach($dataAttribute as $index=>$att)
                                                        @if($att->position == 'text')
                                                            @if(isset($att->childs))
                                                                @foreach($att->childs as $child)
                                                                    @foreach($params as $key => $param)
                                                                        @if($key == $child->id && $child->is_slug_override == null)
                                                                            <?php
                                                                            $index++;
                                                                            ?>
                                                                            @if($index < 5)
                                                                                <div class="row" style="margin: 0 auto;width: 100%">
                                                                                    <div class="col-6 item_buy_list_info_inacc">
                                                                                        {{ $child->title??null }} :
                                                                                    </div>
                                                                                    <div class="col-6 item_buy_list_info_inaccright" style="color: #666;font-weight: 600">
                                                                                        {{ $param??null }}
                                                                                    </div>
                                                                                </div>

                                                                            @endif
                                                                        @endif
                                                                    @endforeach
                                                                @endforeach
                                                            @endif

                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endif
                                        @endif
                                    </div>
                                </div>
                                <div class="item_buy_list_more">
                                    <div class="row">
                                        <div class="col-12 fixcssacount">
                                            <div class="item_buy_list_price2 p7">
                                                {{ str_replace(',','.',number_format($item->price)) }}đ
                                            </div>

                                        </div>
                                        <a href="javascript:void(0)" class="col-12 buyacc fixcssacount" data-balance="{{ $balance }}" data-params="{{ isset($item->params) && isset($item->params->ext_info) ? json_encode($item->params->ext_info) : '' }}" data-groups="{{ isset($item->groups) ? json_encode($item->groups) : '' }}" data-price="{{ $item->price }}" data-game="{{ isset($data->custom->title) ? $data->custom->title :  $data->title }}" data-attribute="{{ json_encode($dataAttribute) }}" data-id="{{ $item->randId }}">
                                            <div class="item_buy_list_view">
                                                Mua ngay
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="formDonhangAccount{{ $item->randId }} hide">
                        <form class="formDonhangAccount" action="/acc/{{ $item->randId }}/databuy" method="POST">
                            {{ csrf_field() }}

                            <div class="modal-header">
                                <h4 class="modal-title">Xác nhận mua tài khoản</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="c-content-tab-4 c-opt-3" role="tabpanel">
                                    <ul class="nav nav-justified nav-justified__ul" role="tablist">
                                        <li role="presentation" class="active justified__ul_li">
                                            <a href="#paymentv2" role="tab" data-toggle="tab" aria-selected="true" class="c-font-16 active">Thanh toán</a>
                                        </li>
                                        <li role="presentation" class="justified__ul_li">
                                            <a href="#info2" role="tab" data-toggle="tab" aria-selected="false" class="c-font-16">Tài khoản</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active show" id="paymentv2">
                                            <ul class="c-tab-items p-t-0 p-b-0 p-l-5 p-r-5">
                                                <li class="c-font-dark">
                                                    <table class="table table-striped">
                                                        <tbody><tr>
                                                            <th colspan="2">Thông tin tài khoản #{{ $item->randId }}</th>
                                                        </tr>
                                                        </tbody><tbody>
                                                        <tr>
                                                            <td>Nhà phát hành:</td>
                                                            <th>{{ $item->groups[0]->title }}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Tên game:</td>
                                                            {{--                                    @dd($data_category)--}}
                                                            <th>{{ isset($data->custom->title) ? $data->custom->title :  $data->title }}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Giá tiền:</td>
                                                            <th class="text-info">
                                                                {{--                                                                @if(isset($data->params->price) && isset($data->params))--}}
                                                                {{--                                                                    {{ str_replace(',','.',number_format($data->params->price)) }} đ--}}
                                                                {{--                                                                @else--}}
                                                                {{--                                                                    --}}
                                                                {{--                                                                @endif--}}
                                                                {{ str_replace(',','.',number_format($item->price)) }} đ
                                                            </th>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </li>
                                            </ul>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="info2">
                                            <ul class="c-tab-items p-t-0 p-b-0 p-l-5 p-r-5">
                                                <li class="c-font-dark">
                                                    <table class="table table-striped">
                                                        <tbody>
                                                        <tr>
                                                            <th colspan="2">Chi tiết tài khoản #{{ $item->randId }}</th>
                                                        </tr>
                                                        @if(isset($item->groups))
                                                            <?php $att_values = $item->groups ?>
                                                            @foreach($att_values as $att_value)
                                                                @if($att_value->module == 'acc_label' && $att_value->is_slug_override == null)
                                                                    @if(isset($att_value->parent[0]))
                                                                        <tr>
                                                                            <td style="width:50%">{{ $att_value->parent[0]->title??null }}:</td>
                                                                            <td class="text-danger" style="font-weight: 700">{{ $att_value->title??null }}</td>
                                                                        </tr>
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                        @if(isset($item->params) && isset($item->params->ext_info))
                                                            <?php $params = json_decode(json_encode($item->params->ext_info),true) ?>
                                                            @if(!is_null($dataAttribute) && count($dataAttribute)>0)
                                                                @foreach($dataAttribute as $index=>$att)
                                                                    @if($att->position == 'text')
                                                                        @if(isset($att->childs))
                                                                            @foreach($att->childs as $child)
                                                                                @foreach($params as $key => $param)
                                                                                    @if($key == $child->id)
                                                                                        <tr>
                                                                                            <td style="width:50%">{{ $child->title }}:</td>
                                                                                            <td class="text-danger" style="font-weight: 700">{{ $param }}</td>
                                                                                        </tr>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endforeach
                                                                        @endif

                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group form-group_buyacc ">
                                    @if(App\Library\AuthCustom::check())

                                        @if(App\Library\AuthCustom::user()->balance < $item->price)
                                            <div class="col-md-12"><label class="form-control-label text-danger" style="text-align: center;margin: 10px 0; ">Bạn không đủ số dư để mua tài khoản này. Bạn hãy click vào nút nạp thẻ để nạp thêm và mua tài khoản.</label></div>
                                        @else
                                            <div class="col-md-12"><label class="form-control-label" style="text-align: center;margin: 10px 0; ">Tài khoản của bạn chưa cấu hình bảo mật ODP nên chỉ cần click vào nút xác nhận mua để hoàn tất giao dịch</label></div>
                                        @endif

                                    @else
                                        <label class="col-md-12 form-control-label text-danger" style="text-align: center;margin: 10px 0; ">Bạn phải đăng nhập mới có thể mua tài khoản tự động.</label>
                                    @endif

                                </div>

                                <div style="clear: both"></div>
                            </div>

                            <div class="modal-footer">

                                @if(App\Library\AuthCustom::check())

                                    @if(App\Library\AuthCustom::user()->balance > $item->price)
                                        <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold loginBox__layma__button__displayabs"  id="d3" style="position: relative">Xác nhận mua<div class="row justify-content-center loading-data__muangay"></div></button>
                                    @else
                                        <a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold gallery__bottom__span_bg__2" href="/nap-the" id="d3">Nạp thẻ cào</a>
                                        <a class="btn c-bg-green-4 c-font-white c-btn-square c-btn-uppercase c-btn-bold load-modal gallery__bottom__span_bg__2" style="color: #FFFFFF" data-dismiss="modal" rel="/atm" data-dismiss="modal">Nạp từ ATM - Ví điện tử</a>
                                    @endif
                                @else
                                    <a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" href="/login?return_url=/acc/{{ $item->randId }}">Đăng nhập</a>
                                @endif
                                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                            </div>
                        </form>
                    </div>

                    @else
                        {{--                    Nick thường--}}
                        <div class="col-6 fixcssacount col-sm-6 col-lg-3">
                            <div class="item_buy_list_in">
                                <div class="item_buy_list_img">
                                    <a href="/acc/{{ $item->randId }}">
                                        @if(isset($item->image))

                                            <img class="item_buy_list_img-main" src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="{{ $item->title }}">
                                        @else
                                            {{--                                            <img class="item_buy_list_img-main" src="https://shopas.net/storage/images/CGuYto7yjj_1645585924.jpg" alt="{{ $item->title }}">--}}
                                        @endif

                                        <span>MS: {{ $item->randId }}</span>
                                    </a>
                                </div>
                                <div class="item_buy_list_description">
                                    bảo hành 100%,lỗi hoàn tiền
                                </div>
                                <div class="item_buy_list_info">
                                    <div class="row item_buy_list_info__row">
                                        <?php
                                        $total = 0;
                                        ?>
                                        @if(isset($item->groups))
                                            <?php
                                            $att_values = $item->groups;
                                            ?>

                                            {{--                                            @dd($att_values)--}}
                                            @foreach($att_values as $att_value)
                                                {{--            @dd($att_value)--}}
                                                @if($att_value->module == 'acc_label' && $att_value->is_slug_override == null)
                                                    @if(isset($att_value->parent[0]))
                                                        @if($total < 4)
                                                            <?php
                                                                $total = $total + 1;
                                                            ?>
                                                            <div class="row" style="margin: 0 auto;width: 100%">
                                                                <div class="col-5 fixcssacount item_buy_list_info_inacc">
                                                                    {{ $att_value->parent[0]->title??null }} :
                                                                </div>
                                                                <div class="col-7 fixcssacount item_buy_list_info_inaccright" style="color: #666;font-weight: 600">
                                                                    {{ $att_value->title??null    }}
                                                                </div>
                                                            </div>

                                                        @endif
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif

                                        @if(isset($item->params) && isset($item->params->ext_info))
                                            <?php
                                            $params = json_decode(json_encode($item->params->ext_info),true);
                                            ?>

                                            @if($total < 4)
                                                @if(!is_null($dataAttribute) && count($dataAttribute)>0)
                                                    @foreach($dataAttribute as $index=>$att)
                                                        @if($att->position == 'text')
                                                            @if(isset($att->childs))
                                                                @foreach($att->childs as $child)
                                                                    @foreach($params as $key => $param)
                                                                        @if($key == $child->id && $child->is_slug_override == null)

                                                                            @if($total < 4)
                                                                                    <?php
                                                                                    $total = $total + 1;
                                                                                    ?>
                                                                                <div class="row" style="margin: 0 auto;width: 100%">
                                                                                    <div class="col-5 item_buy_list_info_inacc">
                                                                                        {{ $child->title??null }} :
                                                                                    </div>
                                                                                    <div class="col-7 item_buy_list_info_inaccright" style="color: #666;font-weight: 600">
                                                                                        {{ $param??null }}
                                                                                    </div>
                                                                                </div>
                                                                            @else
                                                                            @endif
                                                                        @endif
                                                                    @endforeach
                                                                @endforeach
                                                            @endif

                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endif
                                        @endif
                                    </div>
                                </div>

                                <div class="item_buy_list_more">
                                    <div class="row">
                                        <div class="col-12 fixcssacount">
                                            <div class="item_buy_list_price">
                                                <span>{{ str_replace(',','.',number_format($item->price_old)) }}đ </span>
                                                {{ str_replace(',','.',number_format($item->price)) }}đ
                                                {{--                                                {{ formatPrice($item->price) }}đ--}}
                                            </div>

                                        </div>
                                        <a href="/acc/{{ $item->randId }}" class="col-12 fixcssacount">
                                            <div class="item_buy_list_view">
                                                Chi tiết
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endif
                @endif
            @endforeach
        </div>
    @else

    @endif

    <div class="col-md-12 left-right justify-content-end paginate__v1 paginate__v1_mobie frontend__panigate">

        @if(isset($items))
            @if($items->total()>1)
                <div class="row marinautooo paginate__history paginate__history__fix justify-content-center">
                    <div class="col-auto paginate__category__col">
                        <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">
                            {{ $items->appends(request()->query())->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            @endif
        @endif
    </div>

@endif
