<div class="banner-home " style=" background: url({{$data[0]->image}}) no-repeat center center / cover;">
    <div class="container container-fix">
        <div class="d-flex justify-content-between">
            <div class=" d-g-lg-none">
                <div class="box-list-service">
                    <p>Dịch vụ</p>
                    <ul class="list-service">
                        <li class="item-service">
                            <a href="/mua-the">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant2.png" alt="">
                                <div>Nạp tiền</div>
                            </a>

                        </li>
                        <li class="item-service">
                            <a href="/dich-vu">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant4.png" alt="">
                                <div>Shop acc giá rẻ</div>
                            </a>

                        </li>
                        <li class="item-service">
                            <a href="/recharge-game">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant6.png" alt="">
                                <div>Vòng quay</div>
                            </a>

                        </li>
                        <li class="item-service">
                            <a href="/tin-tuc">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant9.png" alt="">
                                <div>Tin tức</div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="rotation-notify text-slider text-slider-mobile">
                <img class="img-text-slider" src="/assets/theme_5/image/images_1/sound.svg" alt="">
                <marquee class="rotation-marquee marquee-move">
                    <div class="rotation-marquee-item marquee-item">
                        {!! setting('sys_marquee') !!}
                    </div>
                </marquee>
            </div>
            <div class="box-list-top top-list d-g-lg-none">
                <p><img src="/assets/frontend/{{theme('')->theme_key}}/image/star_top.png" alt=""> Top nạp T6</p>
                <div class="top-days default-tab pr-fix-16 pl-fix-16">
                    <ul class="nav justify-content-between row" role="tablist" >
                        <li class="nav-item col-md-4 p-md-0" role="presentation">
                            <a  class=" active pb-fix-8 d-flex justify-content-center" id="sevendays-tab" data-toggle="tab" href="#sevendays" role="tab" aria-selected="true">7 ngày</a>
                        </li>
                        <li class="nav-item col-md-4 p-md-0" role="presentation">
                            <a  class="pb-fix-8 pb-fix-8 d-flex justify-content-center"  id="thirtyday-tab" data-toggle="tab" href="#thirtydays" role="tab" aria-selected="false"> 30 ngày</a>
                        </li>
                        <li class="nav-item col-md-4 p-md-0" role="presentation">
                            <a  class="pb-fix-8 pb-fix-8 d-flex justify-content-center" id="sixty-tab" data-toggle="tab" href="#sixtydays" role="tab" aria-selected="false">60 ngày</a>
                        </li>
                    </ul>
                </div>
                <div class="top-content tab-content">
                    <div class="tab-pane fade active show item-top mt-3" id="sevendays" role="tabpanel" aria-labelledby="sevendays-tab" >
                        <ul class="nav flex-column">
                            <li class="d-flex">
                                <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                <span class="top-name">Tên dài hai dòng </span>
                                <span class="float-right top-amount">100.000.000đ</span>
                            </li>
                            <li class="d-flex">
                                <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                <span class="top-name">Yến Munn </span>
                                <span class="float-right top-amount">100.000đ</span>
                            </li>
                            <li class="d-flex">
                                <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                <span class="top-name">Yan </span>
                                <span class="float-right top-amount">100.000đ</span>
                            </li>
                            <li class="d-flex">
                                <span class="top-rank"><div style="">4</div></span>
                                <span class="top-name">Yugi-Oh</span>
                                <span class="float-right top-amount">100.000đ</span>
                            </li>
                            <li class="d-flex">
                                <span class="top-rank"><div style="">5</div></span>
                                <span class="top-name">Yaiba</span>
                                <span class="float-right top-amount">100.000đ</span>
                            </li>
                            <li class="d-flex">
                                <span class="top-rank"><div style="">6</div></span>
                                <span class="top-name">Yaiba</span>
                                <span class="float-right top-amount">100.000đ</span>
                            </li>
                            <li class="d-flex">
                                <span class="top-rank"><div style="">7</div></span>
                                <span class="top-name">Yaiba</span>
                                <span class="float-right top-amount">100.000đ</span>
                            </li>
                            <a href="/nap-the"><button type="button" class="btn -primary btn-big" id="btn-confirm">Nạp ngay</button></a>
                        </ul>
                    </div>
                    <div class="tab-pane fade item-top mt-3" id="thirtydays" role="tabpanel" aria-labelledby="thirtyday-tab">
                        <ul class="nav flex-column">
                            <li class="d-flex">
                                <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                <span class="top-name">Tên dài hai dòng </span>
                                <span class="float-right top-amount">100.000.000đ</span>
                            </li>
                            <li class="d-flex">
                                <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                <span class="top-name">Tên dài </span>
                                <span class="float-right top-amount">100.000.000đ</span>
                            </li>
                            <li class="d-flex">
                                <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                <span class="top-name">Tên dài </span>
                                <span class="float-right top-amount">100.000.000đ</span>
                            </li>
                            <li class="d-flex">
                                <span class="top-rank"><div style="">4</div></span>
                                <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                <span class="float-right top-amount">100.000.000đ</span>
                            </li>
                            <li class="d-flex">
                                <span class="top-rank"><div style="">5</div></span>
                                <span class="top-name">Tên dài hai dòngg</span>
                                <span class="float-right top-amount">100.000.000đ</span>
                            </li>
                            <li class="d-flex">
                                <span class="top-rank"><div style="">6</div></span>
                                <span class="top-name">Tên dài hai dòngg</span>
                                <span class="float-right top-amount">100.000.000đ</span>
                            </li>


                        </ul>
                    </div>
                    <div class="tab-pane  fade item-top mt-3" id="sixtydays"  role="tabpanel" aria-labelledby="sixty-tab">
                        <ul class="nav flex-column">
                            <li class="d-flex">
                                <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                <span class="top-name">Tên dài hai dòng </span>
                                <span class="float-right top-amount">100.000.000đ</span>
                            </li>
                            <li class="d-flex">
                                <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                <span class="top-name">Tên dài </span>
                                <span class="float-right top-amount">100.000.000đ</span>
                            </li>
                            <li class="d-flex">
                                <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                <span class="top-name">Tên dài </span>
                                <span class="float-right top-amount">100.000.000đ</span>
                            </li>
                            <li class="d-flex">
                                <span class="top-rank"><div style="">4</div></span>
                                <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                <span class="float-right top-amount">100.000.000đ</span>
                            </li>
                            <li class="d-flex">
                                <span class="top-rank"><div style="">5</div></span>
                                <span class="top-name">Tên dài hai dòngg</span>
                                <span class="float-right top-amount">100.000.000đ</span>
                            </li>
                            <li class="d-flex">
                                <span class="top-rank"><div style="">6</div></span>
                                <span class="top-name">Tên dài hai dòngg</span>
                                <span class="float-right top-amount">100.000.000đ</span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

