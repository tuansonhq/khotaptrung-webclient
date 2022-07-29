@if(isset($datacate))
<section class="section-related-service related-service">
    <div class="section-header c-mb-16 c-mb-lg-8 justify-content-between">
        <h2 class="section-title fz-15 fz-lg-20 lh-lg-24">
            Dịch vụ liên quan
        </h2>
        <a href="/dich-vu" class="link arr-right">Xem tất cả</a>
    </div>
    <div class="swiper swiper-related-service">
        <div class="swiper-wrapper">
            @forelse($datacate as $k_cat => $service)
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-body c-p-16 scale-thumb">
                        <a href="/dich-vu/{{@$service->id}}">
                            <div class="card-thumb c-mb-8">
                                <img src="{{@\App\Library\MediaHelpers::media($service->image)}}" alt="" class="card-thumb-image">
                            </div>
                            <div class="card-attr">
                                <div class="text-title fw-700">
                                    {{@$service->title}}
                                </div>
                                <div class="info-attr">
                                    @if(isset($service->total_order))
                                        @if($service->params_plus)
                                            @foreach($service->params_plus as $key => $val)
                                                @if($key == 'fk_buy')
                                                    <span>Giao dịch: {{ str_replace(',','.',number_format($service->total_order + $val)) }}</span>
                                                @endif
                                            @endforeach

                                        @else
                                            <span>Giao dịch: {{ str_replace(',','.',number_format($service->total_order)) }}</span>
                                        @endif

                                    @else
                                        @if($service->params_plus)
                                            @foreach($service->params_plus as $key => $val)
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
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforelse
        <div class="navigation slider-next"></div>
        <div class="navigation slider-prev"></div>
    </div>
</section>
@endif
