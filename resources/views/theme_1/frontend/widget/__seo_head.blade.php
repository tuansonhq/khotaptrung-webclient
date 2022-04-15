


<meta name="keywords" content="{{setting('sys_keyword')}}">
<link rel="shortcut icon" href="{{config('api.url_media').setting('sys_favicon') }}" type="image/x-icon">

@if(isset($muathe))
    <title>{{ $muathe['title'] }}</title>
    <meta name="description" content="{{ $muathe['description'] }}">
@else
    <title>{{$data->title??setting('sys_title') }}</title>
    <meta name="description" content="{{ strip_tags($data->description??setting('sys_description')) }}">
@endif
