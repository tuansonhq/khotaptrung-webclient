@if(isset($sliders) && count($sliders))

    <div class="shop_product_another pt-3">
        <div class="c-content-title-1">
            <h3 class="c-center c-font-uppercase c-font-bold title__tklienquan">Tài khoản liên quan</h3>
            <div class="c-line-center c-theme-bg"></div>
        </div>

        <div class="shop_product_another_content">
            <div class="item_buy_list row">
                @foreach($sliders as $datav2)
                    @if($datav2->id != $data->id)
                        <div class="col-6 col-sm-6 col-lg-3">
                            <div class="item_buy_list_in">
                                <div class="item_buy_list_img">
                                    <a href="/acc/{{ $datav2->randId }}">
                                        @if(isset($datav2->image))

                                            <img class="item_buy_list_img-main" src="{{\App\Library\MediaHelpers::media($datav2->image)}}" alt="{{ $datav2->title }}">
                                        @else
                                            <img class="item_buy_list_img-main" src="https://shopas.net/storage/images/21TIENMOyn_1646042037.jpg" alt="">
                                        @endif

                                        @if(isset($datav2->image_icon))
                                            <img class="item_buy_list_img-sale" src="{{\App\Library\MediaHelpers::media($datav2->image_icon)}}"  alt="{{ $datav2->title }}">
                                        @else
                                            <img class="item_buy_list_img-sale" src="https://shopas.net/storage/images/qf9WoDujJ6_1618225522.png"  alt="">
                                        @endif
                                        <span>MS: {{ $datav2->randId }} </span>
                                    </a>
                                </div>
                                <div class="item_buy_list_description">
                                    bảo hành 100%,lỗi hoàn tiền
                                </div>
                                <div class="item_buy_list_info">
                                    <div class="row">
                                        <?php
                                        $index = 0;
                                        ?>

                                        @if(isset($datav2->groups))
                                            <?php
                                            $att_valuesv2 = $datav2->groups;
                                            ?>
                                            {{--                                                @dd($att_valuesv2)--}}
                                            @foreach($att_valuesv2 as $att_valuev2)

                                                @if(isset($att_valuev2->module) && $att_valuev2->module == 'acc_label' && $att_valuev2->is_slug_override == null)
                                                    <?php
                                                    $index++;
                                                    ?>
                                                    @if($index < 5)
                                                        <div class="row" style="margin: 0 auto;width: 100%">
                                                            <div class="col-6 item_buy_list_info_inacc">
                                                                {{ $att_valuev2->parent[0]->title }} :
                                                            </div>
                                                            <div class="col-6 item_buy_list_info_inaccright" style="color: #666;font-weight: 600">
                                                                {{ $att_valuev2->title }}
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif
                                        @if(isset($datav2->params) && isset($datav2->params->ext_info))
                                            <?php $paramsv2 = json_decode(json_encode($datav2->params->ext_info),true) ?>
                                            @if(!is_null($dataAttribute) && count($dataAttribute)>0)
                                                @foreach($dataAttribute as $index=>$att)
                                                    @if($att->position == 'text')
                                                        @if(isset($att->childs))
                                                            @foreach($att->childs as $child)
                                                                @foreach($paramsv2 as $key => $paramv2)
                                                                    @if($key == $child->id && $child->is_slug_override == null)
                                                                        <?php
                                                                        $index++;
                                                                        ?>
                                                                        @if($index < 5)
                                                                            <div class="row" style="margin: 0 auto;width: 100%">
                                                                                <div class="col-6 item_buy_list_info_inacc">
                                                                                    {{ $child->title }} :
                                                                                </div>
                                                                                <div class="col-6 item_buy_list_info_inaccright" style="color: #666;font-weight: 600">
                                                                                    {{ $paramv2 }}
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
                                    </div>
                                </div>
                                <div class="item_buy_list_more">
                                    <div class="row">
                                        <div class="col-12 ">
                                            <div class="item_buy_list_price">
                                                <span>{{ formatPrice($datav2->price_old) }}đ </span>
                                                {{ formatPrice($datav2->price) }}đ
                                            </div>

                                        </div>
                                        <a href="/acc/{{ $datav2->randId }}" class="col-12">
                                            <div class="item_buy_list_view">
                                                Chi tiết
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endif
