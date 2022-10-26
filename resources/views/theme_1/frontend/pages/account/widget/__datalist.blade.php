

<div class="item_buy_list row">
    @if(isset($items) && count($items) > 0)
        @foreach ($items as $item)
            <div class="col-6 fixcssacount col-sm-6 col-lg-3">
                <div class="item_buy_list_in d-flex flex-column">
                    <div class="item_buy_list_img item_buy_list_img_custom">
                        <a href="/acc/{{ $item->slug }}">
                            @if(isset($item->image))

                                <img class="item_buy_list_img-main" src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="{{ $item->slug }}">
                            @else
                                {{--                                            <img class="item_buy_list_img-main" src="https://shopas.net/storage/images/CGuYto7yjj_1645585924.jpg" alt="{{ $item->title }}">--}}
                            @endif

                            <span>MS: #{{ $item->id }}</span>
                        </a>
                    </div>
                    <div class="item_buy_list_description">
                        bảo hành 100%,lỗi hoàn tiền
                    </div>
                    @php
                        $attribute_list = array();


                        if (isset($item->product_attribute) && count($item->product_attribute)>0){
                            foreach ($item->product_attribute as $item_list){
                                $attribute_list[$item_list->attribute->id][$item_list->attribute->title][] = $item_list->product_attribute_value_able->title;
                            }
                        }

                    @endphp
                    <div class="item_buy_list_info item_buy_list_info_custom" style="flex: 1">
                        <div class="row item_buy_list_info__row">
                            @if(isset($item->product_attribute) && count($item->product_attribute))
                            @foreach($attribute_list as $key => $item_list)
                                @foreach($item_list as $key_att => $item_att)
                                        <div class="row" style="margin: 0 auto;width: 100%">
                                            <div class="col-auto text-left fixcssacount item_buy_list_info_inacc">
                                                {{$key_att}}:
                                            </div>
                                            <div class="col-auto text-right fixcssacount item_buy_list_info_inaccright" style="color: #666;font-weight: 600;margin-left: auto;">
                                                {{--                                                                    {{ $att_value->title??null }}--}}
                                                @foreach($item_att as $key_att_item  => $item_att_val)
                                                    @if(count($item_att) > 1)
                                                        @if($key_att_item < 1 )
                                                            <div  class="attr_tooltip" data-tooltip="{{$item_att_val}} (+{{count($item_att)}} {{$key_att}})">
                                                                <div style="text-overflow: ellipsis;    white-space: nowrap;word-wrap: break-word;overflow-x: hidden;    width: 8.5em;">

                                                                    {{$item_att_val}} (+{{count($item_att)}} <span class="text-lowercase" style="font-size: 16px;    color: #666">{{$key_att}}</span>)

                                                                </div>
                                                            </div>

                                                        @endif
                                                    @else

                                                        <div style="text-overflow: ellipsis;    white-space: nowrap;word-wrap: break-word;overflow: hidden;    width: 8.5em;" >
                                                        {{$item_att_val}}
                                                        </div>

                                                    @endif

                                                @endforeach

                                            </div>

                                        </div>







{{--                                        <div class="row" style="margin: 0 auto;width: 100%">--}}
{{--                                            <div class="col-auto item_buy_list_info_inacc fixcssacount">--}}
{{--                                                {{$key_att}}--}}
{{--                                            </div>--}}
{{--                                            <div class="col-auto item_buy_list_info_inaccright fixcssacount" style="color: #666;font-weight: 600;margin-left: auto">--}}
{{--                                                --}}{{--                                                                {{ $att_valuev2->title??null }}--}}
{{--                                                @foreach($item_att as $key_att_item  => $item_att_val)--}}
{{--                                                    @if(count($item_att) > 1)--}}
{{--                                                        @if($key_att_item < 1 )--}}

{{--                                                            {{$item_att_val}} (và {{count($item_att)}} <span class="text-lowercase" style="font-size: 16px;    color: #666">{{$key_att}}</span>  khác)--}}
{{--                                                        @endif--}}
{{--                                                    @else--}}
{{--                                                        {{$item_att_val}}--}}
{{--                                                    @endif--}}
{{--                                                @endforeach--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
                                @endforeach
                            @endforeach
                            @endif







{{--                                @if(isset($item->product_attribute) && count($item->product_attribute))--}}
{{--                                    @php--}}
{{--                                        $product_attribute = $item->product_attribute;--}}
{{--                                    @endphp--}}
{{--                                    @foreach($product_attribute as $key => $attribute)--}}
{{--                                        @if($key < 4)--}}

{{--                                            <div class="row" style="margin: 0 auto;width: 100%">--}}
{{--                                                <div class="col-auto text-left fixcssacount item_buy_list_info_inacc">--}}
{{--                                                {{ $attribute->attribute->title??null }}--}}
{{--                                                </div>--}}
{{--                                                <div class="col-auto text-right fixcssacount item_buy_list_info_inaccright" style="color: #666;font-weight: 600;margin-left: auto">--}}
{{--                                                    --}}{{--                                                                    {{ $att_value->title??null }}--}}
{{--                                                    {{ $attribute->product_attribute_value_able->title??null }}--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        @endif--}}
{{--                                    @endforeach--}}

{{--                                @endif--}}


                        </div>
                    </div>
                    @php
                        if (isset($item->price_old)) {
                            $sale_percent = (($item->price_old - $item->price) / $item->price_old) * 100;
                            $sale_percent = round($sale_percent, 0, PHP_ROUND_HALF_UP);
                        } else {
                            $sale_percent = 0;
                        }
                    @endphp
                    <div class="item_buy_list_more">
                        <div class="row">
                            <div class="col-12 fixcssacount">
                                <div class="item_buy_list_price">
                                    @if ($sale_percent > 0)
                                        <span>
                                    {{ str_replace(',','.',number_format($item->price_old)) }}đ
                                </span>
                                        {{ str_replace(',','.',number_format($item->price)) }}đ
                                    @else

                                    {{ str_replace(',','.',number_format($item->price)) }}đ

                                    @endif

                                    {{--                                                {{ formatPrice($item->price) }}đ--}}
                                </div>
                            </div>
                            <a href="/acc/{{ $item->slug }}" class="col-12 fixcssacount">
                                <div class="item_buy_list_view">
                                    Chi tiết
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    @endif

{{--        <div class="col-md-12 left-right justify-content-end paginate__v1 paginate__v1_mobie frontend__panigate">--}}
{{--            @if(isset($data->product))--}}
{{--                @if($data->product->total>1)--}}
{{--                    <div class="row marinautooo paginate__history paginate__history__fix justify-content-center">--}}
{{--                        <div class="col-auto paginate__category__col">--}}
{{--                            <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">--}}
{{--                                --}}
{{--                                {{ $data->product->appends(request()->query())->links('pagination::bootstrap-4') }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--            @endif--}}
{{--        </div>--}}

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

</div>

