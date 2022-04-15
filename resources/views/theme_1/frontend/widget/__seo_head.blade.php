


<meta name="keywords" content="{{setting('sys_keyword')}}">
<link rel="shortcut icon" href="{{config('api.url_media').setting('sys_favicon') }}" type="image/x-icon">
@if(Request::is('mua-the'))
    <title>{{setting('sys_store_card_title')??setting('sys_title') }}</title>
    <meta name="description" content="{{ strip_tags(setting('sys_store_card_seo')??setting('sys_description')) }}">
@else
    <title>{{$data->title??setting('sys_title') }}</title>
    <meta name="description" content="{{ strip_tags($data->description??setting('sys_description')) }}">
@endif

