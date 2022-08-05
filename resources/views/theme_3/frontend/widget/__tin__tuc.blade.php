@if(isset($data))
<div class=" block-product mt-fix-20 mt-md-fix-8">
    <div class="product-header d-flex">
        <span>
            <img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/tintucindex.svg" alt="">
        </span>
        <h2 class="text-title">Tin tức</h2>

        <div class="navbar-spacer"></div>
        <div class="text-view-more">

            <a href="/tin-tuc" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/svg/arrowright.svg)"></i></a>

        </div>
    </div>
{{--    <div class="box-product-content tab-content">--}}
    <div class="box-product-content ">


{{--                <div class="box-product tab-pane fade show active" id="news_game-{{ $item->slug }}" role="tabpanel" >--}}
            <div class="box-product news-home" role="tabpanel" >
                <div class="swiper-container  list-news" >
                    <div class="swiper-wrapper">
                        @foreach($data as $val)

                        <div class="swiper-slide" >
                            <a href="/tin-tuc/{{ $val->slug }}">
                                <div class="item-product__box-img item-news-img">
                                    <img src="{{\App\Library\MediaHelpers::media($val->image)}}" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        {{ $val->title }}
                                    </div>
                                    <div class="item-product__box-date">
                                        {{ formatDateTime($val->created_at) }}
                                    </div>


                                </div>
                            </a>
                        </div>

                        @endforeach
                    </div>
                    <div class="swiper-button-prev">
                        <img src="./assets/frontend/theme_3/image/swiper-prev.svg" alt="">
                    </div>
                    <div class="swiper-button-next">
                        <img src="./assets/frontend/theme_3/image/swiper-next.svg" alt="">
                    </div>

                </div>

            </div>


    </div>

</div>
@endif
