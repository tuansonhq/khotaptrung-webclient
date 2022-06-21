@if(empty($data->data))

    <div class="col-md-12 left-right">
        <div class="row marginauto body-detail-ct">
            @if(isset($items) && count($items) > 0)

                <div class="col-md-12 text-left left-right">
                    <div class="row body-detail-row-ct">

                        @foreach ($items as $item)

                            @if($item->status == 1)
                                @if($data->display_type == 2)

                                    <div class="col-auto body-detail-nick-col-ct">
                                        <a href="javascript:void(0)" class="list-item-nick-hover buy-random-acc">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right default-overlay-nick-ct">
                                                    @if(isset($data->params->thumb_default) && isset($data->params))
                                                        <img class="lazy" src="{{\App\Library\MediaHelpers::media($data->params->thumb_default)}}" alt="{{ $item->title }}" >
                                                    @else

                                                        @if(isset($item->image))
                                                            <img class="lazy" src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="{{ $item->title }}">
                                                        @else
                                                        @endif
                                                    @endif
                                                </div>
                                                <div class="col-md-12 left-right list-item-nick">
                                                    <div class="row marginauto list-item-nick-body">
                                                        <div class="col-md-12 left-right text-left body-detail-account-col-span-ct">
                                                            <span>{{ $item->title }}</span>
                                                        </div>
                                                        <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                            <small>ID: {{ $item->randId }}</small>
                                                        </div>
                                                        <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                            <ul>
                                                                @if(isset($data->params) && isset($data->params->price))                                                                    
                                                                    <li class="fist-li-account">{{ str_replace(',','.',number_format($data->params->price)) }}đ</li>
                                                                    <li class="second-li-account">{{ str_replace(',','.',number_format($data->params->price_old??$data->params->price)) }}đ</li>
                                                                    @php
                                                                        if (isset($data->params->price_old)) {
                                                                            $sale_percent = (($data->params->price_old - $data->params->price) / $data->params->price_old) * 100;
                                                                            $sale_percent = round($sale_percent, 0, PHP_ROUND_HALF_UP);
                                                                        } else {
                                                                            $sale_percent = 0;
                                                                        }
                                                                    @endphp
                                                                    <li class="three-li-account">-{{$sale_percent}}%</li>
                                                                @else
                                                                    <li class="fist-li-account">{{ str_replace(',','.',number_format($item->price)) }}đ</li>
                                                                    <li class="second-li-account">{{ str_replace(',','.',number_format($item->price_old??$item->price)) }}đ</li>
                                                                    @php
                                                                        if (isset($item->price_old)) {
                                                                            $sale_percent = (($item->price_old - $item->price) / $item->price_old) * 100;
                                                                            $sale_percent = round($sale_percent, 0, PHP_ROUND_HALF_UP);
                                                                        } else {
                                                                            $sale_percent = 0;
                                                                        }
                                                                    @endphp
                                                                    <li class="three-li-account">-{{$sale_percent}}%</li>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                @else

                                    <div class="col-auto body-detail-nick-col-ct">
                                        <a href="/acc/{{ $item->randId }}" class="list-item-nick-hover">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right default-overlay-nick-ct">
                                                    @if(isset($item->image))

                                                        <img class="item_buy_list_img-main lazy" src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="{{ $item->title }}">
                                                    @else
                                                        {{--                                            <img class="item_buy_list_img-main" src="https://shopas.net/storage/images/CGuYto7yjj_1645585924.jpg" alt="{{ $item->title }}">--}}
                                                    @endif
                                                </div>
                                                <div class="col-md-12 left-right list-item-nick">
                                                    <div class="row marginauto list-item-nick-body">
                                                        <div class="col-md-12 left-right text-left body-detail-account-col-span-ct">
                                                            <span>{{ $item->title }}</span>
                                                        </div>
                                                        <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                            <small>ID: {{ $item->randId }}</small>
                                                        </div>
                                                        <?php
                                                            $total = 0;
                                                        ?>
                                                        @if(isset($item->groups))
                                                            <?php
                                                                $att_values = $item->groups;
                                                            ?>
                                                            @foreach($att_values as $att_value)
                                                                @if($att_value->module == 'acc_label' && $att_value->is_slug_override == null)
                                                                    @if(isset($att_value->parent))
                                                                        @if($total < 4)
                                                                            <?php
                                                                                $total = $total + 1;
                                                                            ?>

                                                                            <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                                                <small>{{ $att_value->parent->title??null }}: {{ isset($att_value->title)? \Str::limit($att_value->title,16) : null }}</small>
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

                                                                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                                                                    <small>{{ $child->title??null }}: {{ isset($param) ? \Str::limit($param,16) : null }}</small>
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

                                                        <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                            <ul>
                                                                @if(isset($data->params) && isset($data->params->price))                                                                    
                                                                    <li class="fist-li-account">{{ str_replace(',','.',number_format($data->params->price)) }}đ</li>
                                                                    <li class="second-li-account">{{ str_replace(',','.',number_format($data->params->price_old??$data->params->price)) }}đ</li>
                                                                    @php
                                                                        if (isset($data->params->price_old)) {
                                                                            $sale_percent = (($data->params->price_old - $data->params->price) / $data->params->price_old) * 100;
                                                                            $sale_percent = round($sale_percent, 0, PHP_ROUND_HALF_UP);
                                                                        } else {
                                                                            $sale_percent = 0;
                                                                        }
                                                                    @endphp
                                                                    <li class="three-li-account">-{{$sale_percent}}%</li>
                                                                @else
                                                                    <li class="fist-li-account">{{ str_replace(',','.',number_format($item->price)) }}đ</li>
                                                                    <li class="second-li-account">{{ str_replace(',','.',number_format($item->price_old??$item->price)) }}đ</li>
                                                                    @php
                                                                        if (isset($item->price_old)) {
                                                                            $sale_percent = (($item->price_old - $item->price) / $item->price_old) * 100;
                                                                            $sale_percent = round($sale_percent, 0, PHP_ROUND_HALF_UP);
                                                                        } else {
                                                                            $sale_percent = 0;
                                                                        }
                                                                    @endphp
                                                                    <li class="three-li-account">-{{$sale_percent}}%</li>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif

                            @endif

                        @endforeach

                    </div>
                </div>
            @else
            @endif

            <div class="col-md-12 left-right justify-content-end default-paginate-addpadding default-paginate">
                @if(isset($items))
                    @if($items->total()>1)
        
                        <div class="row marinautooo justify-content-center">
                            <div class="col-auto">
                                <div class="data_paginate paginate__v1 paging_bootstrap paginations_custom" style="text-align: center">
                                    {{ $items->appends(request()->query())->links('pagination::bootstrap-default-4') }}
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            </div>

        </div>
    </div>
@endif
