@if(isset($data) && count($data) > 0)
    <!--popup work start here-->
    <div class="d-flex justify-content-between mobile__content wapper-blog_c">
        <div class="main-title">
            <h2 style="color: #2F6A7C;">{{ $title??'Danh mục dịch vụ' }}</h2>
        </div>
        <h5 style="margin-bottom: 0;line-height: 30px">
            <a class="hvr-underline-from-left see-more" href="/dich-vu" style="color: #2F6A7C">Xem tất cả
                <svg class="svg-inline--fa fa-angles-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angles-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"></path>
                </svg><!-- <i class="fas fa-angle-double-right"></i> Font Awesome fontawesome.com -->
            </a>
        </h5>
    </div>

    @php
        $total_key_service = 8;
        $flag_slide_service = 0;
        if(setting('sys_theme_service_list') != ''){
            if (setting('sys_theme_service_list') > 1){
                $total_key_service = (int)setting('sys_theme_service_list')*4;
            }elseif (setting('sys_theme_service_list') == 1){
                $flag_slide_service = 1;
            }
        }
    @endphp
    @if($flag_slide_service == 0)
        <div class="item_buy_list row">
            @foreach($data as $key => $item)
                @if($key < $total_key_nick)
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 ppk">
                    <div class="game-list-content">
                        <div class="game-list-image">
                            <a class="account_category" href="/dich-vu/{{ $item->slug}}">
                                <img src="{{\App\Library\MediaHelpers::media($item->image)}}"
                                     alt="{{ $item->slug   }}" class="list-item-img">
                            </a>
                        </div>
                        <div class="game-list-title" style="padding-left: 8px;padding-right: 8px">
                            <a class="account_category text-limit limit-1" href="/dich-vu/{{ $item->slug}}">
                                <h3 style="padding-bottom: 0"><strong>{{ $item->title }}</strong></h3>
                            </a>
                        </div>
                        <div class="game-list-description" style="margin-bottom: 8px">
                            <div class="countime"></div>

                            @if(isset($item->total_order))
                                @if($item->params_plus)
                                    @foreach($item->params_plus as $key => $val)
                                        @if($key == 'fk_buy')
                                            <span>Giao dịch: {{ str_replace(',','.',number_format($item->total_order + $val)) }}</span>
                                        @endif
                                    @endforeach

                                @else
                                    <span>Giao dịch: {{ str_replace(',','.',number_format($item->total_order)) }}</span>
                                @endif

                            @else
                                @if($item->params_plus)
                                    @foreach($item->params_plus as $key => $val)
                                        @if($key == 'fk_buy')
                                            <span>Giao dịch: {{ str_replace(',','.',number_format($val)) }}</span>
                                        @endif
                                    @endforeach
                                @else
                                    <span>Giao dịch: 0</span>
                                @endif

                            @endif
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    @else
        <div class="container swiper  item_play_dif__img swiper-service-home swiper-banner swiper-container">
            <div class="swiper-wrapper">
                @foreach ($data as $item)
                    <div class="swiper-slide fixcssacount fixslidercsssev">
                        <div class="game-list-content">
                            <div class="game-list-image">
                                <a class="account_category" href="/dich-vu/{{ $item->slug}}">
                                    <img src="{{\App\Library\MediaHelpers::media($item->image)}}"
                                         alt="{{ $item->slug   }}" class="list-item-img">
                                </a>
                            </div>
                            <div class="game-list-title" style="padding-left: 8px;padding-right: 8px">
                                <a class="account_category text-limit limit-1" href="/dich-vu/{{ $item->slug}}">
                                    <h3 style="padding-bottom: 0"><strong>{{ $item->title }}</strong></h3>
                                </a>
                            </div>
                            <div class="game-list-description" style="margin-bottom: 8px">
                                <div class="countime"></div>

                                @if(isset($item->total_order))
                                    @if($item->params_plus)
                                        @foreach($item->params_plus as $key => $val)
                                            @if($key == 'fk_buy')
                                                <span>Giao dịch: {{ str_replace(',','.',number_format($item->total_order + $val)) }}</span>
                                            @endif
                                        @endforeach

                                    @else
                                        <span>Giao dịch: {{ str_replace(',','.',number_format($item->total_order)) }}</span>
                                    @endif

                                @else
                                    @if($item->params_plus)
                                        @foreach($item->params_plus as $key => $val)
                                            @if($key == 'fk_buy')
                                                <span>Giao dịch: {{ str_replace(',','.',number_format($val)) }}</span>
                                            @endif
                                        @endforeach
                                    @else
                                        <span>Giao dịch: 0</span>
                                    @endif

                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="navigation slider-next "></div>
            <div class="navigation slider-prev "></div>
        </div>
    @endif
@endif



