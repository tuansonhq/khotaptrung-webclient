@extends('frontend.layouts.master')
@section('content')
    @if(isset($category))
        <div class="news">
            <div class="news_breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-auto tintuc-auto">
                            <div class="news_breadcrumbs_title"><a href="/tin-tuc" >Tin tức</a></div>
                        </div>
                        <div class="col-md-10 ml-auto">
                            <ul class="news_breadcrumbs_theme">
                                <li><a href="/" class="news_breadcrumbs_theme_trangchu news_breadcrumbs_theme_trangchu_a">Trang chủ</a></li>
                                <li>/</li>
                                <li><a href="/tin-tuc" class="news_breadcrumbs_theme_title_a"><h1 class="news_breadcrumbs_theme_title">Tin tức</h1></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <form>
                                <div class="row">

                                    <div class="col-md-4" style="margin-bottom: 15px">
                                        <input type="text" class="form-control input-news" placeholder="Nhập từ khoá...">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="submit" class="btn btn-news" value="Tìm kiếm">
                                        <a href="/tin-tuc" class="btn btn-danger">Tất Cả</a>
{{--                                        <input type="submit" class="btn btn-tatca btn-danger ml-2" value="Tất cả">--}}
                                    </div>

                                </div>
                            </form>
                            <div class="news_content_list article_data">

                            </div>
                        </div>
                        {!! widget('frontend.widget.__menu__category__article',60) !!}
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="hidden_page" class="hidden_page" value="1" />
        <input type="hidden" name="slug" class="slug-article" value="" />
        <input type="hidden" name="append" class="append-article" value="0" />
        <script src="/assets/frontend/js/article/article.js"></script>
    @else
        <div class="news">
            <div class="news_breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-auto tintuc-auto">
                            <div class="news_breadcrumbs_title"><a href="/tin-tuc" >Tin tức</a></div>
                        </div>
                        <div class="col-md-10 ml-auto">
                            <ul class="news_breadcrumbs_theme">
                                <li><a href="/" class="news_breadcrumbs_theme_trangchu news_breadcrumbs_theme_trangchu_a">Trang chủ</a></li>
                                <li>/</li>
                                <li><a href="/tin-tuc" class="news_breadcrumbs_theme_title_a"><h1 class="news_breadcrumbs_theme_title">Tin tức</h1></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <form>
                                <div class="row">

                                    <div class="col-md-4" style="margin-bottom: 15px">
                                        <input type="text" class="form-control input-news" placeholder="Nhập từ khoá...">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="submit" class="btn btn-news" value="Tìm kiếm">
                                        <a href="/tin-tuc" class="btn btn-danger">Tất Cả</a>
                                    </div>

                                </div>
                            </form>
                            <div class="news_content_list article_data">

                            </div>
                        </div>
                        {!! widget('frontend.widget.__menu__category__article',60) !!}
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="hidden_page" class="hidden_page" value="1" />
        <input type="hidden" name="slug" class="slug-article" value="{{ $slug }}" />
        <input type="hidden" name="append" class="append-article" value="0" />
        <script src="/assets/frontend/js/article/article.js"></script>
    @endif

@endsection

