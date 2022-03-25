@if(empty($data->data))

    @if(isset($items) && count($items) > 0)
        <div class="item_buy_list row">
            @foreach ($items as $item)

                <div class="col-sm-6 col-lg-3">
                    <div class="item_buy_list_in">
                        <div class="item_buy_list_img">
                            <a href="/acc/{{ $item->id }}">
                                @if(isset($item->image))
                                    <img class="item_buy_list_img-main" src="https://media-tt.nick.vn/{{ $item->image }}" alt="{{ $item->title }}">
                                @else
                                    <img class="item_buy_list_img-main" src="https://shopas.net/storage/images/CGuYto7yjj_1645585924.jpg" alt="{{ $item->title }}">
                                @endif

                                <span>MS: {{ $item->id }}</span>
                            </a>
                        </div>
                        <div class="item_buy_list_description">
                            bảo hành 100%,lỗi hoàn tiền
                        </div>
                        <div class="item_buy_list_info">
                            <div class="row">
                                <?php $att_values = $item->groups ?>

                                @foreach($dataAttribute as $key => $value)

                                    @if($key < 4)
                                    <?php $all_values = $value->childs ?>
                                        @foreach($att_values as $att_value)
                                            @foreach($all_values as $all_value)
                                                @if($att_value->id == $all_value -> id)
                                                    <div class="col-6 item_buy_list_info_in">
                                                        {{ $value->title }} : <b>{{ $all_value->title }}</b>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="item_buy_list_more">
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="item_buy_list_price">
                                        <span>{{ formatPrice($item->price_old) }}đ </span>
                                        {{ formatPrice($item->price) }}đ
                                    </div>

                                </div>
                                <a href="/acc/{{ $item->id }}" class="col-12">
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
    @endif

    <div class="col-md-12 left-right justify-content-end paginate__v1 paginate__v1_mobie">

        @if(isset($items))
            @if($items->total()>1)
                <div class="row marinautooo paginate__history paginate__history__fix justify-content-end">
                    <div class="col-auto paginate__category__col">
                        <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">
                            {{ $items->appends(request()->query())->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            @endif
        @endif
    </div>
    <input type="hidden" name="hidden_page" id="hidden_page_service" value="1" />
    <input type="hidden" name="service" id="append-service" value="0" />
    <script src="/assets/frontend/js/account/account-list.js"></script>
@endif





