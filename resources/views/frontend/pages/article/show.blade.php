@extends('frontend.layouts.master')
@section('content')
    <div class="news">
        <div class="news_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>{{ $data->title }}</h1>
                        <div class="news_content_line"></div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="news_detail">
                            <div class="news_detail_content">
                                {!! $data->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

