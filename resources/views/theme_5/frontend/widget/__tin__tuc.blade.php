@if(isset($data))
<section class="news">
    <div class="section-header c-mb-24 c-mb-lg-24 justify-content-between">
        <h2 class="section-title">
            <i class="icon-title c-mr-8" style="--path:url(/assets/frontend/{{theme('')->theme_key}}/image/svg/speaker.svg)"></i>
            Tin tức
        </h2>
        <a href="/tin-tuc" class="link arr-right">Xem thêm</a>
    </div>
    <!-- Desktop -->
    <div class="swiper js-swiper-news d-none d-lg-block">
        <div class="swiper-wrapper">
            @foreach($data as $key => $item)
                @if($key == 0)
                    @if(isset($item->items))
                        @foreach($item->items as $val)
                        <div class="swiper-slide">
                            <div class="card news">
                                <a href="/tin-tuc/{{ $val->slug }}" class="news-link scale-thumb">
                                    <div class="card-body">
                                        <div class="news-thumb">
                                            <img src="{{\App\Library\MediaHelpers::media($val->image)}}" alt="" class="news-thumb-image">
                                        </div>
                                        <div>
                                            <div class="news-title c-mt-12 c-mb-4 text-limit limit-2">{{ $val->title }} </div>
                                            <div class="datetime">
                                                {{ formatDateTime($val->created_at) }}
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    @endif
                @endif
            @endforeach

        </div>
        <div class="navigation slider-next"></div>
        <div class="navigation slider-prev"></div>
    </div>
    <!-- End Desktop -->
    <!-- Mobile -->
    <ul class="news-list d-block d-lg-none">

        @foreach($data as $key => $item)
            @if($key == 0)
                @if(isset($item->items))
                    @foreach($item->items as $val)
                    <li class="news-item">
                        <a href="/tin-tuc/{{ $val->slug }}" class="news-link">
                            <div class="news-article">
                                <div class="article-thumb-wrap">
                                    <div class="news-thumb">
                                        <img src="{{\App\Library\MediaHelpers::media($val->image)}}" alt="" class="news-thumb-image">
                                    </div>
                                </div>
                                <div class="news-info">
                                    <div class="news-title text-limit limit-3 fz-lg-13 lh-lg-20 c-mb-4">{{ $val->title }}</div>
                                    <div class="datetime">{{ formatDateTime($val->created_at) }}</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endforeach
                @endif
            @endif
        @endforeach

    </ul>
    <!-- End Mobile -->
</section>
@endif

