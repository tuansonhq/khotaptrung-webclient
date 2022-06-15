@if(isset($data))

    <ul class="breadcrum--list">
        @foreach($data as $key => $item)
        <li class="breadcrum--item">
            <a href="{{ $key }}" class="breadcrum--link">{{ $item }}</a>
        </li>
        @endforeach
    </ul>

@endif
