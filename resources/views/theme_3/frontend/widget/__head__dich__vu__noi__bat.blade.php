
@if(isset($data))
<div class="menu-category">
    <div class="container container-fix">
        <ul>
            @foreach($data as $item)
                <li>
                    @if($item->target)
                    <a  href="{{ $item->url }}">
                    @else
                    <a target="_blank" href="{{ $item->url }}">
                    @endif
                    </a>
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/service1.png" alt="">
                    <span id="nav-charge">{{ $item->title }}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endif
