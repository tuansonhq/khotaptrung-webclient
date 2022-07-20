@extends('frontend.layouts.master')
@section('content')

<section>
        <div class="container">

            @include('frontend.widget.__slider__banner')
            <div class="main-content">

                @include('frontend.widget.__content__home__dichvu')

                @include('frontend.widget.__content__home__game')

            <div class="article-content content_post ">
                <div class="special-text">
                    {!! setting('sys_intro_text') !!}
                </div>
                <button id="btn-expand-content" class="expand-button">
                    Xem thêm nội dung
                </button>

            </div>

            <style type="text/css">

                @media        only screen and (max-width: 580px) {
                    .hidetext {
                        max-height: 220px;
                        overflow: hidden;
                    }
                    .intro-text iframe{
                        width: 100%;
                        height: 220px;
                    }
                    .intro-text img {
                        height: auto !important;
                    }
                }
                @media        only screen and (min-width: 580px) {
                    .hidetext {
                        max-height: 220px;
                        overflow: hidden;
                    }
                    .intro-text iframe{
                        width: 100%;
                        height: 641px;
                    }
                }
                .showtext {
                    max-height:initial;
                }
                .viewless,.viewmore{
                    cursor: pointer;
                    color: #f1c40f;
                    padding-top: 10px;
                    font-size: 18px;
                }

                .intro-text img {
                    max-width: 90%;
                }
            </style>
        </div>
    </div><!-- /.container -->
</section>

@endsection
