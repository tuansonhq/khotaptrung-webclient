@if(isset($sliders) && count($sliders))

    <div class="shop_product_another pt-3">
        <div class="c-content-title-1">
            <h3 class="c-center c-font-uppercase c-font-bold title__tklienquan">Tài khoản liên quan</h3>
            <div class="c-line-center c-theme-bg"></div>
        </div>

        <div class="shop_product_another_content">
            <div class="item_buy_list row">
                @foreach($sliders as $datav2)
                    {{--                    @if($datav2->id != $data->id)--}}
                    {{--                        --}}
                    {{--                    @endif--}}
                    <div class="col-6 col-sm-6 col-lg-3 fixcssacount">
                        <div class="item_buy_list_in">
                            <div class="item_buy_list_img">
                                <a href="/acc/{{ $datav2->randId }}">
                                    @if(isset($datav2->image))

                                        <img class="lazy item_buy_list_img-main" src="{{\App\Library\MediaHelpers::media($datav2->image)}}" alt="{{ $datav2->title }}">
                                    @else
                                        <img class="item_buy_list_img-main" src="/assets/frontend/{{theme('')->theme_key}}/image/anhconten.jpg" alt="">
                                    @endif

                                    @if(isset($datav2->image_icon))
                                        <img class="lazy item_buy_list_img-sale" src="{{\App\Library\MediaHelpers::media($datav2->image_icon)}}"  alt="{{ $datav2->title }}">
                                    @else
                                        <img class="item_buy_list_img-sale" src="/assets/frontend/{{theme('')->theme_key}}/image/mgg.png"  alt="">
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
                                                    @if(isset($att_valuev2->parent[0]))
                                                        <div class="row" style="margin: 0 auto;width: 100%">
                                                            <div class="col-6 item_buy_list_info_inacc fixcssacount">
                                                                {{ $att_valuev2->parent[0]->title??null }} :
                                                            </div>
                                                            <div class="col-6 item_buy_list_info_inaccright fixcssacount" style="color: #666;font-weight: 600">
{{--                                                                {{ $att_valuev2->title??null }}--}}
                                                                {{ isset($att_valuev2->title) ? \Str::limit($att_valuev2->title,16) : null }}

                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="item_buy_list_more">
                                <div class="row">
                                    <div class="col-12 fixcssacount">
                                        <div class="item_buy_list_price">
                                            <span>{{ str_replace(',','.',number_format($datav2->price_old)) }}đ </span>
                                            {{ str_replace(',','.',number_format($datav2->price)) }}đ
                                        </div>

                                    </div>
                                    <a href="/acc/{{ $datav2->randId }}" class="col-12 fixcssacount">
                                        <div class="item_buy_list_view">
                                            Chi tiết
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endif

