@if(isset($data))
<div class="menu-category">
    <div class="container container-fix">
        <ul>
            @foreach($data as $item)
                <li>
                   <a   @if($item->target == 1) target="_blank" href="{{ $item->url }}"     @elseif($item->target == 3) @if(!App\Library\AuthCustom::check()) onclick="openLoginModal();" href="#" @else href="{{ $item->url }}"   @endif @else href="{{ $item->url }}"   @endif>
                        @if($item->image_icon)
                             <img src="{{\App\Library\MediaHelpers::media($item->image_icon)}}" alt="">
                        @else
                             <img src="/assets/frontend/{{theme('')->theme_key}}/image/service1.png" alt="">
                        @endif

                        <span id="nav-charge">{{ $item->title }}</span>
                    </a>

            </li>
            @endforeach
        </ul>
    </div>
</div>
@endif
