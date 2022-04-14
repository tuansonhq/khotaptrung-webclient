

@if(isset($data_slider) && count($data_slider) > 0)
    @foreach($data_slider as $val)
        <div class="swiper-slide" >
            <a href="">
                <img src="https://media-tt.nick.vn{{ $val->image }}" alt=""  class="img-fluid swiper-lazy">
            </a>
        </div>
    @endforeach
@else
    <div class="swiper-slide" >
        <a href="">
            <img src="https://www.shopas.net/storage/images/be8usiPKee_1634524598.gif" alt=""  class="img-fluid swiper-lazy">
        </a>
    </div>
    <div class="swiper-slide" >
        <a href="">
            <img src="https://www.shopas.net/storage/images/be8usiPKee_1634524598.gif" alt=""  class="img-fluid swiper-lazy">
        </a>
    </div>
    <div class="swiper-slide" >
        <a href="">
            <img src="https://www.shopas.net/storage/images/be8usiPKee_1634524598.gif" alt=""  class="img-fluid swiper-lazy">
        </a>
    </div>
    <div class="swiper-slide" >


        <a href="">
            <img src="https://www.shopas.net/storage/images/be8usiPKee_1634524598.gif" alt=""  class="img-fluid swiper-lazy">
        </a>

    </div>
    <div class="swiper-slide" >


        <a href="">
            <img src="https://www.shopas.net/storage/images/be8usiPKee_1634524598.gif" alt=""  class="img-fluid swiper-lazy">
        </a>

    </div>
    <div class="swiper-slide" >


        <a href="">
            <img src="https://www.shopas.net/storage/images/be8usiPKee_1634524598.gif" alt=""  class="img-fluid swiper-lazy">
        </a>

    </div>
    <div class="swiper-slide" >


        <a href="">
            <img src="https://www.shopas.net/storage/images/be8usiPKee_1634524598.gif" alt=""  class="img-fluid swiper-lazy">
        </a>

    </div>
@endif



