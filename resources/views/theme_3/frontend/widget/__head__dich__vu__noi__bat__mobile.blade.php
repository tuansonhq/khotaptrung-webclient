

@if(isset($data))

    @foreach($data as $item)
        <li>

            <a class="{{ '/'.request()->path() == $item->url ? 'nav-profile-active' : ''}}"  @if($item->target == 1) target="_blank" href="{{ $item->url }}"     @elseif($item->target == 3) @if(!App\Library\AuthCustom::check()) onclick="openLoginModal();" href="#" @else href="{{ $item->url }}"   @endif @else href="{{ $item->url }}"   @endif>

                @if($item->image_icon)
                     <img src="{{\App\Library\MediaHelpers::media($item->image_icon)}}" alt="">
                @else
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/service1.png" alt="">
                @endif
                <span>{{ $item->title }}</span>
            </a>

        </li>
    @endforeach

@endif

