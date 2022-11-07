@if(isset($data) && count($data) > 0)

<div class="main-title" style="margin-top: 0;margin-bottom: 24px">
    <h2 style="font-size: 20px;text-transform: uppercase;margin-bottom: 0">Các dịch vụ liên quan</h2>
</div>

<div class="entries" style="margin-bottom: 0">

  <div class="swiper-container swiper-service-related overflow-hidden" style="background: none;box-shadow: none">
    <div class=" swiper-wrapper">
        @foreach($data as $item)

        <div class=" image swiper-slide">
            <a href="/dich-vu/{{ $item->slug}}">
                <img style="width: 100%;height: 120px;border-radius: 8px" src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="{{ $item->title   }}" width="120px">
                <div>
                    <h3 class="text-title">{{ $item->title}}</h3>
                </div>
            </a>

        </div>

        @endforeach

    </div>
  </div>
</div>
@endif
@section('scripts')
    <script>
        new Swiper('.swiper-service-related', {
            autoplay: false,
            updateOnImagesReady: true,
            watchSlidesVisibility: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingOnTransitionStart: false,
            loop: false,
            centeredSlides: false,
            slidesPerView: 5,
            speed: 800,
            spaceBetween: 16,
            freeMode: true,
            touchMove: true,
            freeModeSticky:true,
            grabCursor: true,
            observer: true,
            observeParents: true,
            keyboard: {
                enabled: true,
            },
            breakpoints: {

                992: {
                    slidesPerView: 5,
                },
                768: {
                    slidesPerView: 3,
                },

                480: {
                    slidesPerView: 1.8,
                    spaceBetween: 6,
                }
            }
        });
    </script>
@endsection
