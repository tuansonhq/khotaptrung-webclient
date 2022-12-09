<section class="c_section-category section-related-service lien-quan">
    <div class="section-header c-mb-24 c-mb-lg-16 justify-content-between">
        <h2 class="section-title">
            {{--            <i class="icon-title c-mr-8" style="--path:url(/assets/frontend/{{theme('')->theme_key}}/image/svg/1362.svg)"></i>--}}
            Mini game liên quan
        </h2>
        <a href="/minigame" class="link arr-right ml-auto">Xem thêm</a>
    </div>

    <!-- Đặt tên class cho swiper sau đó config trong file "public/assets/frontend/{{theme('')->theme_key}}/js/swiper-slider-conf/swiper-slider-conf.js" -->
    <!-- Nếu có giao diện giống nhau hoàn toàn thì có thể dùng chung config (chung tên class 'class-config-demo') -->
    @if(isset($data) && count($data) > 0)
    <div class="swiper class-config-demo card-list swiper-container-horizontal">
        <div class="swiper-wrapper">
            @foreach($data as $key => $item)
                @if (isset($data_minigame))
                    @if ($item->id === $data_minigame)
                        @continue
                    @endif
                @endif
            <div class="swiper-slide h-auto">
                <div class="item-category h-100">
                    <div class="card h-100">
                        <a href="/minigame-{{ $item->slug }}" class="card-body scale-thumb c-p-16 c-p-lg-12">
                            <div class="account-thumb c-mb-8">
                                @if(isset($item->image))
                                    <img src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="{{ $item->title }}" class="account-thumb-image lazy">
                                @endif
                            </div>
                            <div class="account-title">
                                <div class="text-title fw-700 text-limit limit-1">{{ $item->title }}</div>
                            </div>
                            <div class="account-info c-mb-8">
                                <div class="info-attr">
                                    Đã chơi: {{isset($item->params->fake_num_play)?($item->params->fake_num_play+$item->order_gate_count):$item->order_gate_count}}
                                </div>
                            </div>
                            <div class="price">
                                <div class="price-current w-100"> {{ str_replace(',','.',number_format($item->price)) }}đ</div>
                                @if(isset($item->params->percent_sale))
                                    <div class="price-old c-mr-8">{{ str_replace(',','.',number_format(($item->params->percent_sale*$item->price)/100 + $item->price)) }} đ</div>
                                @endif
                                @if(isset($item->params->percent_sale))
                                    <div class="discount">
                                        -{{ $item->params->percent_sale }}%
                                    </div>
                                @endif

                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="navigation slider-next"></div>
        <div class="navigation slider-prev"></div>
    </div>
    @endif
</section>


