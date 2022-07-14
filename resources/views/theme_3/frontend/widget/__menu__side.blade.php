<div class="menu-side" style=" ">
    @foreach($data??[] as $item)
    <div class="menu-side-item" style="">
        <a href="{{$item->url??'/'}}">
            <span data-tooltip="{{ $item->title }}" class="coming-soon">
                @if($item->image_icon)
                    <img src="{{\App\Library\MediaHelpers::media($item->image_icon)}}" alt="">
                @else
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/service1.png" alt="">
                @endif
            </span>
        </a>

    </div>
    @endforeach

    <div class="menu-side-item" style="" >
        <a href="#" class=" go-top">
            <img src="/assets/frontend/{{theme('')->theme_key}}/image/back-top.svg" alt="" style=" ">
        </a>

    </div>

</div>

