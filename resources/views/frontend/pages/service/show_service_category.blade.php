@extends('frontend.layouts.master')
@section('content')
    <div class="layout-page">
        <div class="content-layout" >

            <div class="content-items">
                <div class="container">
                    <div class="items-title">
                        <h4>DANH MỤC DỊCH VỤ</h4>
                        <div class="items-title-lines"></div>
                    </div>
                    <div class="game-list row row-flex-safari game-list" id="showcategoryservice_data">
                        @if(isset($data) && count($data) > 0)
                            @foreach($data as $items)
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3  p-5 ppk">
                                    <div class="game-list-content">
                                        <div class="game-list-image">
                                            <a href="/quay-ngay">
                                                <img class="game-list-image-sticky" src="https://www.shopas.net/storage/images/pBYgoKE7bt_1621190862.png" alt="">
                                                <img class="game-list-image-in" src="https://nick.vn/storage/images/CbbP8yFiqg_1623227606.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="game-list-title">
                                            <a href="/quay-ngay">
                                                <p><strong>{{ $items->title }}</strong></p>
                                            </a>
                                        </div>

                                        <div class="game-list-description">
                                            <div class="countime"> </div>
                                            <p>Đã quay: 388</p>
                                            <span class="game-list-description-old-price">49,000đ</span>
                                            <span class="game-list-description-new-price">49,000đ</span>
                                        </div>

                                        <div class="game-list-more">
                                            <div class="game-list-more-view" >
                                                <a href="/quay-ngay">
                                                    <img src="https://www.shopas.net//storage/images/7Zsng4N5vn_1623839229.gif" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="slug" id="slug" value="{{ $slug }}" />
    <input type="hidden" name="hidden_page" id="hidden_page_service" value="1" />
    <input type="hidden" name="service" id="append-service" value="0" />
    <script src="/assets/frontend/js/service/show-service.js"></script>
@endsection



