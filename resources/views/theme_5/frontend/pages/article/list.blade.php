@extends('frontend.layouts.master')
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/article/article.js"></script>
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/swiper/swiper.min.css">
@endsection
@section('content')
    <div class="container-fix container">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="/" class="breadcrumb-link">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
                <a href="javascript:void(0)" class="breadcrumb-link">Tin tức</a>
            </li>
        </ul>
        <div class="head-mobile">
            <a href="/" class="link-back"></a>

            <h1 class="head-title text-title">Tin tức</h1>

            <a href="/" class="home"></a>
        </div>
         @include('frontend.widget.__slide__news')
        <div class="card--mobile__title c-pt-24">
            <h4>Danh mục tin tức</h4>
        </div>
        <div class="row flex-column-reverse " id="card--body__news">
            <div class=" px-0 mt-lg-0" id="list-article" style="max-width: 100%">
                <div class=" --custom p-3" id="new-article-update">
                    <div>
                        <ul class="nav nav-tabs article-list" role="tablist">
                            <li class="nav-item"  role="presentation">
                                <a class="tab active new-all"  data-toggle="tab" href="#tab-1" role="tab" aria-selected="true">
                                    <span>Tất cả tin tức</span>
                                </a>
                            </li>
                            <li class="nav-item"  role="presentation">
                                <a class="tab new-all new-all-icon-2"  data-toggle="tab" href="#tab-2" role="tab" aria-selected="false">
                                    <span>Tin game</span>
                                </a>
                            </li>
                            <li class="nav-item"  role="presentation">
                                <a class="tab new-all new-all-icon-3"  data-toggle="tab" href="#tab-3" role="tab" aria-selected="false">
                                    <span>Hướng dẫn</span>
                                </a>
                            </li>
                            <li class="nav-item"  role="presentation">
                                <a class="tab new-all new-all-icon-4"  data-toggle="tab" href="#tab-4" role="tab" aria-selected="false">
                                    <span>Về chúng tôi</span>
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div class="tab-content mt-4">
                        <div class="card--body tab-pane fade show active" id="tab-1">
                            <div class="item-article c-mt-16" >
                                <div class="article px-3">
                                    <div class="row">
                                        <div class="col-3 col-lg-3 c-pr-0 c-pl-8">
                                            <div class="article--thumbnail">
                                                <a href="/tin-tuc/baiviet">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/article-thumbnail/leon-800x450.png" alt="" class="article--thumbnail__image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-9 col-lg-9 article--info c-pr-0 c-pl-0">
                                            <div class="article--title  mb-lg-0 article-title-mobile">
                                                <a href="/tin-tuc/baiviet" class="article--title__link text-limit limit-2">
                                                    Riot cho ra mắt phần mới của nhóm trang phục Vệ Binh Tinh Tú, cộng đồng
                                                    vẫn chê ‘không bằng Tốc Chiến’
                                                </a>
                                            </div>
                                            <div class="article--description d-none d-lg-block c-pt-16">
                                                Mỗi người một ý, đối với mình việc để cây xanh trong góc PC khá là thư giãn,
                                                thoải mái và thả lỏng tâm trạng hiệu quả Góc PC là...
                                            </div>
                                            <div>
                                                <div class="article--date c-pt-3">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/duong/time.svg"
                                                         class="c-mr-8"><span>21/01/2022</span>
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/duong/group.svg"
                                                         class="c-mr-8 c-ml-16"><span>An Nguyen</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-article c-mt-16">
                                <div class="article px-3">
                                    <div class="row">
                                        <div class="col-3 col-lg-3 c-pr-0 c-pl-8">
                                            <div class="article--thumbnail">
                                                <a href="/tin-tuc/baiviet">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/article-thumbnail/leon-800x450.png"
                                                         alt="" class="article--thumbnail__image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-9 col-lg-9 article--info c-pr-0 c-pl-0">
                                            <div class="article--title mb-lg-0 article-title-mobile">
                                                <a href="/tin-tuc/baiviet" class="article--title__link text-limit limit-2">
                                                    Riot cho ra mắt phần mới của nhóm trang phục Vệ Binh Tinh Tú, cộng đồng
                                                    vẫn chê ‘không bằng Tốc Chiến’
                                                </a>
                                            </div>
                                            <div class="article--description d-none d-lg-block c-pt-16">
                                                Mỗi người một ý, đối với mình việc để cây xanh trong góc PC khá là thư giãn,
                                                thoải mái và thả lỏng tâm trạng hiệu quả Góc PC là...
                                            </div>
                                            <div>
                                                <div class="article--date c-pt-3">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/duong/time.svg"
                                                         class="c-mr-8"><span>21/01/2022</span>
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/duong/group.svg"
                                                         class="c-mr-8 c-ml-16"><span>An Nguyen</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-article c-mt-16">
                                <div class="article px-3">
                                    <div class="row">
                                        <div class="col-3 col-lg-3 c-pr-0 c-pl-8">
                                            <div class="article--thumbnail">
                                                <a href="/tin-tuc/baiviet">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/article-thumbnail/leon-800x450.png"
                                                         alt="" class="article--thumbnail__image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-9 col-lg-9 article--info c-pr-0 c-pl-0">
                                            <div class="article--title  mb-lg-0 article-title-mobile">
                                                <a href="/tin-tuc/baiviet" class="article--title__link text-limit limit-2">
                                                    Riot cho ra mắt phần mới của nhóm trang phục Vệ Binh Tinh Tú, cộng đồng
                                                    vẫn chê ‘không bằng Tốc Chiến’
                                                </a>
                                            </div>
                                            <div class="article--description d-none d-lg-block c-pt-16">
                                                Mỗi người một ý, đối với mình việc để cây xanh trong góc PC khá là thư giãn,
                                                thoải mái và thả lỏng tâm trạng hiệu quả Góc PC là...
                                            </div>
                                            <div>
                                                <div class="article--date c-pt-3">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/duong/time.svg"
                                                         class="c-mr-8"><span>21/01/2022</span>
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/duong/group.svg"
                                                         class="c-mr-8 c-ml-16"><span>An Nguyen</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-article c-mt-16">
                                <div class="article px-3">
                                    <div class="row">
                                        <div class="col-3 col-lg-3 c-pr-0 c-pl-8">
                                            <div class="article--thumbnail">
                                                <a href="/tin-tuc/baiviet">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/article-thumbnail/leon-800x450.png"
                                                         alt="" class="article--thumbnail__image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-9 col-lg-9 article--info c-pr-0 c-pl-0">
                                            <div class="article--title mb-lg-0 article-title-mobile">
                                                <a href="/tin-tuc/baiviet" class="article--title__link text-limit limit-2">
                                                    Riot cho ra mắt phần mới của nhóm trang phục Vệ Binh Tinh Tú, cộng đồng
                                                    vẫn chê ‘không bằng Tốc Chiến’
                                                </a>
                                            </div>
                                            <div class="article--description d-none d-lg-block c-pt-16">
                                                Mỗi người một ý, đối với mình việc để cây xanh trong góc PC khá là thư giãn,
                                                thoải mái và thả lỏng tâm trạng hiệu quả Góc PC là...
                                            </div>
                                            <div>
                                                <div class="article--date c-pt-3">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/duong/time.svg"
                                                         class="c-mr-8"><span>21/01/2022</span>
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/duong/group.svg"
                                                         class="c-mr-8 c-ml-16"><span>An Nguyen</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                        <div class="tab-pane fade" id="tab-2" role="tabpanel">tab 2</div>
                        <div class="tab-pane fade" id="tab-3" role="tabpanel">tab 3</div>
                        <div class="tab-pane fade" id="tab-4" role="tabpanel">tab 4</div>
                    </div>
                        <div class="default-paginate c-pt-32">
                        <ul class="pagination pagination-custom">
                            <li class="page-item disabled">
                                <a href="" class="page-link"></a>
                            </li>
                            <li class="page-item">
                                <a href="" class="page-link"></a>
                            </li>
                            <li class="page-item active">
                                <span class="page-link">1</span>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="">3</a>
                            </li>
                            <li class="page-item disabled hidden-xs">
                                <span class="page-link">...</span>
                            </li>
                            <li class="page-item hidden-xs">
                                <a class="page-link" href="">14</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="" rel="next"></a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="" rel="next"></a>
                            </li>
                        </ul>
                    </div></div>
                    </div>
                </div>
            </div>
@endsection



