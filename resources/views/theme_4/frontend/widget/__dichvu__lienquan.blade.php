@if(isset($data) && count($data) > 0)

<div class="main-title" style="margin-top: 30px">
    <h2 style="font-size: 20px;text-transform: uppercase;">Các dịch vụ liên quan</h2>
</div>

<div class="entries" style="margin-bottom: 50px">


    <div class="slick-slider">
        @foreach($data as $item)

        <div class="item image">
            <a href="/dich-vu/{{ $item->slug}}">
                <img style="width: 100%;height: 160px;border-radius: 8px" src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="{{ $item->title   }}" width="120px">
                <h3 class="text-title">{{ $item->title   }}</h3>
            </a>
        </div>

        @endforeach

    </div>
</div>

@endif
