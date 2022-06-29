{{--@dd($data[1])--}}
<div class=" block-product mt-fix-20 mt-md-fix-8 service-mobile">
    <div class="product-header d-flex">
                    <span>
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news.png" alt="">
                    </span>
        <p class="text-title">Tin tức</p>
        <div class="navbar-spacer"></div>


        <div class="text-view-more">

            <a href="/tin-tuc" class="global__link">Xem thêm<i class="__icon --sm --link ml-1"
                                                               style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>

        </div>
    </div>
    <div class="box-product-content">
        <div class="box-product swiper">
            <div class="swiper-container list-article">
                <div class="swiper-wrapper">
                    @forelse($data[0]->items as $k_article => $article)
                        <div class="swiper-slide">
                            <a href="/tin-tuc/{{@$article->slug}}">
                                <div class="item-product__box-img item-news-img">
                                    <img src="{{ @$article->image }}" alt="{{ @$article->title }}">
                                </div>
                                <div class="item-product__box-content item-news-content">
                                    <div class="item-product__box-name">
                                        {{ @$article->title }}
                                    </div>
                                    <div class="item-product__box-date">
                                        {{ date('d/m/Y',strtotime($article->created_at)) }}
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
