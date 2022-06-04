
    @if(isset($title->title))

    <title>{{$title->title }}</title>
    @elseif(isset($data->title))
        <title>{{$data->title }}</title>
        @elseif(Request::is('tin-tuc'))
            <title>Tin tức tổng hợp, hướng dẫn đổi thẻ, mua thẻ, nạp game</title>
    @else
        <title>  {{setting('sys_title') }}</title>

    @endif

    @if(Request::is('tin-tuc'))
        <meta name="description" content="Tổng hợp các thông tin mới nhất về các mua thẻ, đổi thẻ, nạp game nhanh chóng, chính xác nhất hiện nay">
    @elseif(isset($title->description))
        <meta name="description" content="{{ $title->description }}">
    @elseif(isset($data->description))
        <meta name="description" content="{{ $data->description }}">

    @else
        <meta name="description" content="{{ setting('sys_description') }}">

    @endif


{{--<meta name="description" content="{{ strip_tags($data->description??setting('sys_description')) }}">--}}

<meta name="keywords" content="{{setting('sys_keyword')}}">
<link rel="shortcut icon" href="{{\App\Library\MediaHelpers::media(setting('sys_favicon'))}}" type="image/x-icon">
    <link rel="canonical" href="{{ url()->current() }}">


@if(isset($data->title))
    <meta property="og:title" content="{{$data->title}}">
@elseif(isset($title->title))
    <meta property="og:title" content="{{$title->title}}">
@else
    <meta property="og:title" content="{{setting('sys_title')}}">
@endif
@if(isset($data->image))
    <meta property="og:image" content="{{\App\Library\MediaHelpers::media($data->image)}}">
@elseif ( setting('sys_og_image') && setting('sys_og_image') != "")
    <meta property="og:image" content="{{\App\Library\MediaHelpers::media(setting('sys_og_image'))}}">
@else
    <meta property="og:image" content="{{\App\Library\MediaHelpers::media(setting('sys_logo'))}}">
@endif
