
<title>{{$data->title??setting('sys_title') }}</title>
<meta name="description" content="{{ strip_tags($data->description??setting('sys_description')) }}">

<meta name="keywords" content="{{setting('sys_keyword')}}">
<link rel="shortcut icon" href="{{config('api.url_media').setting('sys_logo') }}" type="image/x-icon">

