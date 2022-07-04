@if(isset($data))
<div class=" block-product mt-fix-20 mt-md-fix-8">
    <div class="product-header d-flex">
        <span>
            <img src="/assets/frontend/{{theme('')->theme_key}}/image/news.png" alt="">
        </span>
        <p class="text-title">Tin tức</p>
        <div class="navbar-spacer"></div>
        <div class="text-view-more">
            <a href="/tin-tuc" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>
        </div>
    </div>

        <div class="box-product-content ">
            <div class="box-product" role="tabpanel" >
                <div class="swiper-container list-news">
                    <div class="swiper-wrapper">
                        @foreach ($data as $news_category)
                            @foreach ($news_category->items as $news)
                                @if ($loop->index == 2)
                                    @break
                                @endif
                                <div class="swiper-slide" >
                                    <a href="/tin-tuc/{{ $news->slug }}">
                                        <div class="item-product__box-img item-news-img">
                                            <img src="{{\App\Library\MediaHelpers::media($news->image)}}" alt="">
                                        </div>
                                        <div class="item-product__box-content item-news-content">
                                            <div class="item-product__box-name">
                                                {{ $news->title }}
                                            </div>
                                            <div class="item-product__box-date">
                                                {{ formatDateTime($news->created_at) }}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

</div>

@endif
