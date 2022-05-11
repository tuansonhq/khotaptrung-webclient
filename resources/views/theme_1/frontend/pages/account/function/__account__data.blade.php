@if(empty($data->data))

    @if(isset($items) && count($items) > 0)
        <div class="item_buy_list row">
            @foreach ($items as $item)
{{--            @dd($item)--}}
{{--                Nick random--}}
                @if($item->status == 1)
                    @if($data->display_type == 2)

                        <div class="col-6 col-sm-6 col-lg-3">
                            <div class="item_buy_list_in">
                                <div class="item_buy_list_img">
                                    <a href="javascript:void(0)" class="buyacc" data-id="{{ $item->randId }}">
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
                                                    $index++;
                                                    ?>
                                                    @if($index < 5)
                                                        <div class="row" style="margin: 0 auto;width: 100%">
                                                            <div class="col-6 item_buy_list_info_inacc">
                                                                {{ $att_value->parent[0]->title??null }} :
                                                            </div>
                                                            <div class="col-6 item_buy_list_info_inaccright" style="color: #666;font-weight: 600">
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
                                        <div class="col-6 ">
                                            <div class="item_buy_list_price2 p7">
                                                @if(isset($data->params->price) && isset($data->params))
                                                    {{ str_replace(',','.',number_format($data->params->price)) }}đ
                                                @else
                                                    {{ str_replace(',','.',number_format($item->price)) }}đ
                                                @endif
                                            </div>

                                        </div>
                                        <a href="javascript:void(0)" class="col-6 buyacc" data-id="{{ $item->randId }}">
                                            <div class="item_buy_list_view">
                                                Mua ngay
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                    @else
                        {{--                    Nick thường--}}
                        <div class="col-6 col-sm-6 col-lg-3">
                            <div class="item_buy_list_in">
                                <div class="item_buy_list_img">
                                    <a href="/acc/{{ $item->randId }}">
                                        @if(isset($item->image))

                                            <img class="item_buy_list_img-main" src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="{{ $item->title }}">
                                        @else
                                            <img class="item_buy_list_img-main" src="https://shopas.net/storage/images/CGuYto7yjj_1645585924.jpg" alt="{{ $item->title }}">
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
{{--                                            @dd($att_values)--}}
                                            @foreach($att_values as $att_value)
{{--            @dd($att_value)--}}
                                                @if($att_value->module == 'acc_label' && $att_value->is_slug_override == null)
                                                    @if(isset($att_value->parent[0]))
                                                        <?php
                                                        $index++;
                                                        ?>
                                                        @if($index < 5)
                                                                <div class="row" style="margin: 0 auto;width: 100%">
                                                                    <div class="col-6 item_buy_list_info_inacc">
                                                                        {{ $att_value->parent[0]->title??null }} :
                                                                    </div>
                                                                    <div class="col-6 item_buy_list_info_inaccright" style="color: #666;font-weight: 600">
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
                                            @if($index < 4)
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
                                        <div class="col-12 ">
                                            <div class="item_buy_list_price">
                                                <span>{{ str_replace(',','.',number_format($item->price_old)) }}đ </span>
                                                {{ str_replace(',','.',number_format($item->price)) }}đ
{{--                                                {{ formatPrice($item->price) }}đ--}}
                                            </div>

                                        </div>
                                        <a href="/acc/{{ $item->randId }}" class="col-12">
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





