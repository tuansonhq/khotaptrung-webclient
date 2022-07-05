<div class="block-product gaming-recharge mt-fix-20">
    <div class="gaming-recharge-header d-flex">
            <span>
                <img src="/assets/frontend/{{theme('')->theme_key}}/image/gaming_icon.png" alt="">
            </span>
        <p>Chọn Game nạp giá rẻ</p>
    </div>
    <div class="gaming-recharge-search">
        <div class="gaming-recharge-search-header">
            <p>Chọn game muốn nạp</p>
        </div>
        <div class="gaming-recharge-search-form">
            <h6>Tìm kiếm</h6>
            <form action="" method="POST" class="gaming-recharge-form-detail" id="service-form">
                <div class="row marginauto body-form-search-ct">
                    <div class="col-md-auto col-12 left-right">
                        <input type="text" name="search" class="input-search-ct" id="keyword--search" placeholder="Tìm dịch vụ">
                        <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/search.png" alt="">
                    </div>
                    <div class="col-4 body-form-search-button-ct">
                        <button type="submit" class="timkiem-button-ct">Tìm kiếm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="box-product">
        <div class=" list-product d-flex flex-wrap" >
         @foreach($data as $service)
            <div class="item-product item-nick js-service">
                <a href="/mua-acc/{{$service->slug}}">
                    <div class="item-nick-img">
                        <img src="{{\App\Library\MediaHelpers::media($service->image)}}" alt="{{$service->title}}">
                    </div>
                    <div class="item-nick-name">{{$service->title}}</div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/service.js?" type="text/javascript"></script>
@endsection
