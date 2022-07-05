
<div class=" block-product mt-fix-20 mt-md-fix-8">
    <div class="d-flex product-header-item product-header">
                    <span>
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news.png" alt="">
                    </span>
        <p class="text-title text-content-service">Các dịch vụ liên quan</p>
        <div class="product-catecory"></div>
        <div class="text-view-more">
            <a href="/mua-acc" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/theme_4/image/icons/arrow-right-blue.png)"></i></a>
        </div>
    </div>
    <div class="box-product-content tab-content">
        <div class="box-product tab-pane fade active show" role="tabpanel" >
            <div class="swiper-container list-service-1 ">
                <div class="swiper-wrapper">
                    @foreach($data as $service)
                    <div  class="swiper-slide ">
                        <a href="/dich-vu">
                            <div class="item-product__box-img item-news-img item-service-image">
                                <img src="{{@\App\Library\MediaHelpers::media($service->image)}}" alt="">
                            </div>
                            <div class="item-product__box-content item-news-content">
                                <div class="item-product__box-name item-service__box-name">
                                    {{$service->title}}
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
