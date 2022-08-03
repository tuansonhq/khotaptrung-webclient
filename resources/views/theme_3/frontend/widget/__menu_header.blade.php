@if(isset($data))
<ul class="nav header-main-nav d-none d-lg-flex menu-fix-theme">
    @foreach($data as $item)
    <li class="nav-item item-about active">
        <a href="{{ $item->url }}">
            <div class="d-flex">
                @if($item->image_icon)
                    <img src="{{\App\Library\MediaHelpers::media($item->image_icon)}}" alt="">
                @else
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/discount-tag.svg" alt="">
                @endif

                <div class="item-about-title">{{ $item->title }}</div>
            </div>

        </a>
    </li>

    @endforeach
</ul>
@endif
