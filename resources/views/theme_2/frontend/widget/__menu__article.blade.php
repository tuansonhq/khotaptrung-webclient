
@if(isset($datacategory))
    @foreach($datacategory as $val)
        <li class="nav-item active{{ $val->slug }}">
            <a href="/tin-tuc/{{ $val->slug }}" class="nav-link">{{ $val->title }}</a>
        </li>
    @endforeach
@endif
