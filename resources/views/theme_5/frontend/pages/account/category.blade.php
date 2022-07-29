@extends('frontend.layouts.master')

@section('content')
    <div class="container c-container" id="account-category">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="/" class="breadcrumb-link">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/mua-acc" class="breadcrumb-link">Shop Account</a>
            </li>
        </ul>

        {{--            Slider baner    --}}
        @include('frontend.widget.__slider__banner')
        {{--            Top hôm nay    --}}
        @include('frontend.pages.account.widget.__top__today')

        <section class="listing-service c-mb-16">
            <div class="section-header justify-content-between c-pb-20 c-pb-lg-16">
                <h2 class="section-title fw-700 fz-20 lh-28 ">Danh sách mục Shop Account</h2>
                <form action="" class="form-search">
                    <input type="search" placeholder="Chọn game muốn mua account" class="has-submit media-web">
                    <input type="search" placeholder="Tìm kiếm" class="search media-mobile">
                    <button class="media-web" type="submit"></button>
                </form>
            </div>
            <hr>
            <div class="text-title fw-700 c-py-16 c-py-lg-8 c-mb-lg-8">
                Chọn game muốn mua account
            </div>

            <div class="list-service">
                <div class="item-service">
                    <div class="card">
                        <a href="/mua-acc/id" class="card-body scale-thumb c-p-16">
                            <div class="account-thumb c-mb-8">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/trong/frame19996s8.png" alt="" class="account-thumb-image">
                            </div>
                            <div class="account-title">
                                <div class="text-title fw-700 text-limit limit-1">Liên quân Mobile</div>
                            </div>
                            <div class="account-info">
                                <div class="info-attr">
                                    Giao dịch: 45.000
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item-service">
                    <div class="card">
                        <a href="/mua-acc/id" class="card-body scale-thumb c-p-16">
                            <div class="account-thumb c-mb-8">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/trong/frame19996s8.png" alt="" class="account-thumb-image">
                            </div>
                            <div class="account-title">
                                <div class="text-title fw-700 text-limit limit-1">Liên quân Mobile</div>
                            </div>
                            <div class="account-info">
                                <div class="info-attr">
                                    Giao dịch: 45.000
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item-service">
                    <div class="card">
                        <a href="/mua-acc/id" class="card-body scale-thumb c-p-16">
                            <div class="account-thumb c-mb-8">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/trong/frame19996s8.png" alt="" class="account-thumb-image">
                            </div>
                            <div class="account-title">
                                <div class="text-title fw-700 text-limit limit-1">Liên quân Mobile</div>
                            </div>
                            <div class="account-info">
                                <div class="info-attr">
                                    Giao dịch: 45.000
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item-service">
                    <div class="card">
                        <a href="/mua-acc/id" class="card-body scale-thumb c-p-16">
                            <div class="account-thumb c-mb-8">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/trong/frame19996s8.png" alt="" class="account-thumb-image">
                            </div>
                            <div class="account-title">
                                <div class="text-title fw-700 text-limit limit-1">Liên quân Mobile</div>
                            </div>
                            <div class="account-info">
                                <div class="info-attr">
                                    Giao dịch: 45.000
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item-service">
                    <div class="card">
                        <a href="/mua-acc/id" class="card-body scale-thumb c-p-16">
                            <div class="account-thumb c-mb-8">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/trong/frame19996s8.png" alt="" class="account-thumb-image">
                            </div>
                            <div class="account-title">
                                <div class="text-title fw-700 text-limit limit-1">Liên quân Mobile</div>
                            </div>
                            <div class="account-info">
                                <div class="info-attr">
                                    Giao dịch: 45.000
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item-service">
                    <div class="card">
                        <a href="/mua-acc/id" class="card-body scale-thumb c-p-16">
                            <div class="account-thumb c-mb-8">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/trong/frame19996s8.png" alt="" class="account-thumb-image">
                            </div>
                            <div class="account-title">
                                <div class="text-title fw-700 text-limit limit-1">Liên quân Mobile</div>
                            </div>
                            <div class="account-info">
                                <div class="info-attr">
                                    Giao dịch: 45.000
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item-service">
                    <div class="card">
                        <a href="/mua-acc/id" class="card-body scale-thumb c-p-16">
                            <div class="account-thumb c-mb-8">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/trong/frame19996s8.png" alt="" class="account-thumb-image">
                            </div>
                            <div class="account-title">
                                <div class="text-title fw-700 text-limit limit-1">Liên quân Mobile</div>
                            </div>
                            <div class="account-info">
                                <div class="info-attr">
                                    Giao dịch: 45.000
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item-service">
                    <div class="card">
                        <a href="/mua-acc/id" class="card-body scale-thumb c-p-16">
                            <div class="account-thumb c-mb-8">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/trong/frame19996s8.png" alt="" class="account-thumb-image">
                            </div>
                            <div class="account-title">
                                <div class="text-title fw-700 text-limit limit-1">Liên quân Mobile</div>
                            </div>
                            <div class="account-info">
                                <div class="info-attr">
                                    Giao dịch: 45.000
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item-service">
                    <div class="card">
                        <a href="/mua-acc/id" class="card-body scale-thumb c-p-16">
                            <div class="account-thumb c-mb-8">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/trong/frame19996s8.png" alt="" class="account-thumb-image">
                            </div>
                            <div class="account-title">
                                <div class="text-title fw-700 text-limit limit-1">Liên quân Mobile</div>
                            </div>
                            <div class="account-info">
                                <div class="info-attr">
                                    Giao dịch: 45.000
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item-service">
                    <div class="card">
                        <a href="/mua-acc/id" class="card-body scale-thumb c-p-16">
                            <div class="account-thumb c-mb-8">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/trong/frame19996s8.png" alt="" class="account-thumb-image">
                            </div>
                            <div class="account-title">
                                <div class="text-title fw-700 text-limit limit-1">Liên quân Mobile</div>
                            </div>
                            <div class="account-info">
                                <div class="info-attr">
                                    Giao dịch: 45.000
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{--            Dịch vụ khác   --}}
        @include('frontend.widget.__services__other')
    </div>

@endsection

