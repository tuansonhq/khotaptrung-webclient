
@foreach($data??[] as $item)
    <div class="swiper-slide" >
        <a href="">
            <img src="https://media-tt.nick.vn{{ $item->image }}" alt=""  class="img-fluid swiper-lazy">
        </a>
    </div>
@endforeach





