@if(isset($data) && count($data) > 0)
    <div>
        <ul class="nav nav-tabs article-list" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="tab {{ request()->is('tin-tuc') ? 'active' : '' }} icon-custom" href="/tin-tuc" style="--path-icon:url('/assets/frontend/theme_5/image/svg/news-all.svg')">
                    <span>Tất cả tin tức</span>
                </a>
            </li>
            @foreach($data as $val)
                <li class="nav-item" role="presentation">
                    <a class="tab {{ request()->is('tin-tuc/'.$val->slug) ? 'active' : '' }} icon-custom" href="/tin-tuc/{{$val->slug}}" style="--path-icon:url({{ $val->image_icon ?? '/assets/frontend/theme_5/image/svg/news-all.svg' }})">
                        <span> {{ $val->title }} </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endif

