@extends('frontend.'.theme('')->theme_key.'.layouts.master')
@section('seo_head')
    {{--    @include('frontend.widget.__seo_head')--}}
@endsection
@section('content')

    <div class="site-content-body alt first pt-0 pb-0 d-flex justify-content-between align-items-center">
        <ul class="nav nav-line">
            <li class="nav-item active">
                <a href="#" class="nav-link">Tin tức chung</a>
            </li>
            @if(isset($datacategory))
                @foreach($datacategory as $val)
                    <li class="nav-item">
                        <a href="/blog/{{ $val->slug }}" class="nav-link">{{ $val->title }}</a>
                    </li>
                @endforeach
            @endif
        </ul>
        <div>
            <div class="input-group input-group-search">
                <form class="form_new">
                <input type="text" value="" placeholder="Từ khóa" class="form-control btn_new">
                <button class="btn bg-transparent text-secondary" type="submit"><i class="las la-search"></i></button>
                </form>
            </div>
        </div>

    </div>
    <div class="site-content-body bg-white last">
        <h4 class="title-style-left mb-3">Tin tức tổng hợp</h4>
        <div class="row">
            <div class="col-lg-9 article_data">
                @include('frontend.theme_2.pages.article.function.__new__data')
            </div>
            <div class="col-lg-3">
                <!-- BEGIN Recent Posts -->
                <div class="mb-4">
                    <h6 class="title-style-tab"><span>Bài viết hay</span></h6>
                    <ul class="list-posts">
                        <li class="item d-flex mb-2">
                            <div class="item-thumb me-3">
                                <div class="media-placeholder rounded">
                                    <div class="bg rounded"></div>
                                </div>
                            </div>
                            <div class="item-content">
                                <a href="#" class="post-link">Jinx sẽ trở thành ‘mối hiểm họa’ ở bản cập nhật 11.3</a>
                            </div>
                        </li>
                        <li class="item d-flex mb-2">
                            <div class="item-thumb me-3">
                                <div class="media-placeholder rounded">
                                    <div class="bg rounded"></div>
                                </div>
                            </div>
                            <div class="item-content">
                                <a href="#" class="post-link">Những vị tướng LMHT đang rơi vào trạng thái ‘chết’ ..</a>
                            </div>
                        </li>
                        <li class="item d-flex mb-2">
                            <div class="item-thumb me-3">
                                <div class="media-placeholder rounded">
                                    <div class="bg rounded"></div>
                                </div>
                            </div>
                            <div class="item-content">
                                <a href="#" class="post-link">LMHT: Taliyah đi rừng có thể sẽ biến mất sau ..</a>
                            </div>
                        </li>
                        <li class="item d-flex mb-2">
                            <div class="item-thumb me-3">
                                <div class="media-placeholder rounded">
                                    <div class="bg rounded"></div>
                                </div>
                            </div>
                            <div class="item-content">
                                <a href="#" class="post-link">Sơn Tùng M-TP hợp tác cùng Free Fire cho ra mắt ...</a>
                            </div>
                        </li>
                        <li class="item d-flex mb-2">
                            <div class="item-thumb me-3">
                                <div class="media-placeholder rounded">
                                    <div class="bg rounded"></div>
                                </div>
                            </div>
                            <div class="item-content">
                                <a href="#" class="post-link">Dia1 tự tin đẩy Zeros lên hàng ghế dự bị chỉ sau...</a>
                            </div>
                        </li>
                    </ul>
                </div><!-- END Recent Posts -->
                <!-- BEGIN Banner Block -->
                <div class="mb-4">
                    <div class="media-placeholder ratio-4-3">
                        <div class="bg" style="background-image: url(img/temp/jxm-banner.jpg);background-position: 60% 50%;background-size: auto 100%;"></div>
                        <div class="media-inner bg-overlay gradient-from-bottom d-flex align-items-end">
                            <div class="p-3 text-white">
                                <p class="lead mb-0">Nạp thẻ liền tay</p>
                                <h5 class="mb-0">Ăn ngay khuyến mãi</h5>
                                <button class="btn btn-sm rounded-x bg-warning-gradient text-white mt-2 ps-3 pe-3">Xem chi tiết <i class="las la-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div><!-- BEGIN Banner Block -->
            </div>
        </div>
    </div>
    <div class="after"></div>

    <input type="hidden" name="hidden_page" class="hidden_page" value="1" />
    <input type="hidden" name="slug" class="slug-article" value="" />

    <script src="/assets/frontend/{{theme('')->theme_key}}/js/article/article.js"></script>
@endsection
