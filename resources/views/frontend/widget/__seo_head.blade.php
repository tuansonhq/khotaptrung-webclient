@if (isset($data->title))
    <title>{{$data->title}}</title>
@else
    <title id="metatitle">{{setting('sys_title')}}</title>
@endif
<meta name="description" content="{{setting('sys_description')}}">
<meta name="keywords" content="{{setting('sys_keyword')}}">
<link rel="shortcut icon" href="{{config('api.url_media').setting('sys_logo') }}" type="image/x-icon">

