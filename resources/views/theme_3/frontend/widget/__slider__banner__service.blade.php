@if(isset($data))

    <section class="media-web">
        <div class="container container-fix banner-container-ct">
            @foreach($data as $key => $item)
                @if($key == 0)
                    <img class="lazy" src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="">
                @endif
            @endforeach
        </div>
    </section>

@endif

