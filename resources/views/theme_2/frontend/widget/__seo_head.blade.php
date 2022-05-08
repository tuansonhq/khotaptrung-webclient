
    @if(isset($title->title))

    <title>{{$title->title }}</title>
    @elseif(isset($data->title))
        <title>{{$data->title }}</title>
    @else
        <title>  {{setting('sys_title') }}</title>

    @endif


<meta name="description" content="{{ strip_tags($data->description??setting('sys_description')) }}">

<meta name="keywords" content="{{setting('sys_keyword')}}">
<link rel="shortcut icon" href="{{\App\Library\MediaHelpers::media(setting('sys_favicon'))}}" type="image/x-icon">



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
