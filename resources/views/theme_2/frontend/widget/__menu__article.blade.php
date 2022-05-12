@if(isset($data))
    @foreach($data as $val)
        <li class="nav-item active{{ $val->slug }}">
            <a href="/tin-tuc/{{ $val->slug }}" class="nav-link">{{ $val->title }}</a>
        </li>
    @endforeach
@endif
