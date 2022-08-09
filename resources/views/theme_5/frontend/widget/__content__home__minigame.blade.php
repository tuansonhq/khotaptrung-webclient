@if(isset($data) && count($data) > 0)
<section class="section-category c-pt-12 c-pt-lg-6 c-pb-12 c-pb-lg-6">
    <div class="section-header c-mb-24 c-mb-lg-20 justify-content-between">
        <h2 class="section-title">
            <i class="icon-title c-mr-8" style="--path:url(/assets/frontend/{{theme('')->theme_key}}/image/svg/1362.svg)"></i>
            {{ $title??'' }}
        </h2>
        <a href="/minigame" class="link arr-right">Xem thêm</a>
    </div>

    <!-- Đặt tên class cho swiper sau đó config trong file "public/assets/frontend/{{theme('')->theme_key}}/js/swiper-slider-conf/swiper-slider-conf.js" -->
    <!-- Nếu có giao diện giống nhau hoàn toàn thì có thể dùng chung config (chung tên class 'class-config-demo') -->

    <div class="swiper class-config-demo">
        <div class="swiper-wrapper">

            @foreach($data as $item)
            <div class="swiper-slide h-auto">
                <div class="item-category h-100">
                    <div class="card h-100">
                        <a href="/minigame-{{ $item->slug }}" class="card-body scale-thumb c-p-16 c-p-lg-12">
                            <div class="account-thumb c-mb-8">
                                <img onerror="imgError(this)" src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="" class="account-thumb-image">
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
                                <div class="price-current w-100">{{ str_replace(',','.',number_format($item->price)) }} đ</div>
                                @if(isset($item->params->percent_sale))
                                <div class="price-old c-mr-8">{{ str_replace(',','.',number_format(($item->params->percent_sale*$item->price)/100 + $item->price)) }} đ</div>
                                <div class="discount">{{ $item->params->percent_sale }}%</div>

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

</section>
@endif
