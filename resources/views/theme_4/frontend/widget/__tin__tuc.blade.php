<div class=" block-product mt-fix-20 mt-md-fix-8 service-mobile">
    <div class="product-header d-flex">
                    <span>
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news.png" alt="">
                    </span>
        <p class="text-title">Tin tức</p>
        <div class="product-catecory " >
            <ul class="nav d-g-md-none" role="tablist" >
                @forelse($data as $k_news => $cat_news)
                <li class="nav-item" role="presentation">
                    <a class="nav-link {{ !$k_news ? 'active' : '' }}"  data-toggle="tab" href="#{{ @$cat_news->slug }}" role="tab" aria-selected="true">{{ @$cat_news->title }}</a>
                </li >
                    @empty
                @endforelse
            </ul>
        </div>


        <div class="text-view-more">

            <a href="/tin-tuc" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>

        </div>
    </div>
    <div class="product-catecory d-none d-g-lg-block pt-fix-16 pr-fix-16 pl-fix-16" >
        <ul class="nav justify-content-between row" role="tablist" >
            @forelse($data as $k_news => $cat_news)
                <li class="nav-item col-3 p-0 col-md-4 p-md-0" role="presentation">
                    <a  class="pb-fix-8 d-flex justify-content-center {{ !$k_news ? 'active' : '' }}"  data-toggle="tab" href="#{{ @$cat_news->slug }}" role="tab" aria-selected="true">{{ @$cat_news->title }}</a>
                </li>
            @empty
            @endforelse
        </ul>
    </div>
    <div class="box-product-content tab-content">
        @forelse($data as $k_news => $cat_news)
            <div class="box-product tab-pane fade {{ !$k_news ? 'active show' : '' }}" id="{{ @$cat_news->slug }}" role="tabpanel" >
                <div class="swiper-container  list-news" >
                    <div class="swiper-wrapper">
                        @forelse($cat_news->items as $k_article => $article)
                        <div class="swiper-slide" >
                            <a href="/tin-tuc/{{@$article->slug}}">
                                <div class="item-product__box-img item-news-img">
                                    <img src="{{ @$article->image }}" alt="{{ @$article->title }}">
                                </div>
                                <div class="item-product__box-content item-news-content">
                                    <div class="item-product__box-name">
                                        {{ @$article->title }}
                                    </div>
                                    <div class="item-product__box-date">
                                        {{ formatDateTime($article->created_at) }}
                                    </div>
                                </div>
                            </a>
                        </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </div>

</div>
