@php
    $data_viewed = Cookie::get('viewed_account') ?? '[]';
    $data_viewed = json_decode($data_viewed,true);
@endphp
@if(count($data_viewed))
<div class="container container-fix body-container-ct">
    <div class="row marginauto body-container-row-ct body-container-row-mobile-ct">
        <div class="col-md-12 left-right">
            <div class="row marginauto body-row-ct media-ctbg-ct">

                <div class="col-md-12 left-right napgamekhac">
                    <div class="row marginauto">
                        <div class="col-md-12 text-left left-right">
                            <span>Tài khoản đã xem</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 left-right">
                    <div class="row nick-sider-header">
                        <div class="swiper-container view_dong_gia class-config-account-viewed col-md-12 text-left left-right">
                            <div class="swiper-wrapper data_watched">
                                @forelse($data_viewed as $key => $acc_viewed)
                                    <div class="swiper-slide body-detail-nick-slider-ct">
                                        <a href="/acc/{{ @$acc_viewed['randId'] }}" class="list-item-nick-hover">
                                            <div class="row marginauto ">
                                                <div class="col-md-12 left-right default-overlay-nick-ct related-acc-detail"><img class="lazy" src="{{\App\Library\MediaHelpers::media($acc_viewed['image'])}}" alt=""></div>
                                                <div class="col-md-12 left-right list-item-nick">
                                                    <div class="row marginauto list-item-nick-body">
                                                        <div class="col-md-12 left-right text-left body-detail-account-col-span-ct"><span>ID: #{{ @$acc_viewed['randId'] }}</span></div>
                                                        <div class="col-md-12 left-right text-left body-detail-account-small-span-ct"><small>Đã bán: {{ @$acc_viewed['buy_account'] }}</small></div>
                                                        <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                            <ul>
                                                                <li class="fist-li-account">{{ str_replace(',','.',number_format($acc_viewed['price'])) }}đ</li>
                                                                <li class="second-li-account">{{ str_replace(',','.',number_format($acc_viewed['price_old'])) }}đ</li>
                                                                <li class="three-li-account">-{{ @$acc_viewed['promotion'] }}%</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endif




