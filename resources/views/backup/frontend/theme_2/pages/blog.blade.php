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
            <li class="nav-item">
                <a href="#" class="nav-link">Games</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Hướng dẫn</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Sự kiện &amp; Giải đấu</a>
            </li>
        </ul>
        <div>
            <div class="input-group input-group-search">
                <input type="text" value="" placeholder="Từ khóa" class="form-control">
                <button class="btn bg-transparent text-secondary" type="button"><i class="las la-search"></i></button>
            </div>
        </div>

    </div>
    <div class="site-content-body bg-white last">
        <nav class="site-breadcrumb mb-3">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Tin tức</a></li>
                <li class="breadcrumb-item active" aria-current="page">Games</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-lg-9">
                <div class="article-single mb-4">
                    <div class="article-thumb mb-4">
                        <div class="media-placeholder ratio-2-1 rounded">
                            <div class="bg rounded" style="background-image: url(/assets/frontend/{{theme('')->theme_key}}/img/temp/dr-mundo-lan-dau-tro-lai-dau-truong-chuyen-nghiep-sau-7-nam-vang-bong-1.jpg);"></div>
                            <div class="media-inner d-flex aling-items-end">
                                <div class="d-flex align-items-end h-100 p-lg-4 p-3 text-white">
                                    <h3 class="item-title"><a href="single.html" class="text-white">Dr. Mundo đi rừng lần đầu trở lại đấu trường LEC sau 7 năm vắng bóng</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article-main d-flex pt-4 elsticky-wrap">
                        <div class="social-share">
                            <ul class="nav social-icons flex-column elsticky">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="las la-share"></i></a>
                                </li>
                                <li class="nav-item facebook">
                                    <a href="#" class="nav-link"><i class="lab la-facebook-f"></i></a>
                                </li>
                                <li class="nav-item twitter">
                                    <a href="#" class="nav-link"><i class="lab la-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="article-content flex-grow-1">
                            <p>Vậy là vòng bảng LPL Mùa Xuân 2021 đã kết thúc sau gần ba tháng tranh tài. Những thế lực cũ tưởng như đã tàn lụi bất ngờ trỗi dậy, đánh bật những gã khổng lồ mới nổi một vài mùa gần đây.</p>
                            <p>
                                Royal Never Give Up và EDward Gaming không còn là những “bóng ma” tại LPL, họ đã hồi sinh mạnh mẽ sau những nỗ lực cải tổ đầu mùa hiệu quả. Còn nhớ tại vòng bảng Mùa Hè năm ngoái, RNG và EDG đã nắm tay nhau đứng ngoài cuộc chơi, chứng kiến Top Esports, JD Gaming và Suning cạnh tranh tấm vé đi CKTG. Không ai dám chắc chừng nào họ trở lại trong bối cảnh LMHT Trung Quốc cạnh tranh quá khốc liệt.
                            </p>
                            <p class="small text-center op-5">Chú thích cho hình ảnh</p>
                            <p>Đội đầu bảng Mùa Xuân năm nay là RNG, thật khó tin khi một RNG thất thường năm 2020 lại thi đấu chắc chắn đến thế. Ngay cả cựu xạ thủ huyền thoại Uzi cũng từng nhận định một cách bi quan, rằng RNG không còn là đối thủ xứng tầm với Suning. Kết quả RNG thắng 2-1. Trận thắng SN là khởi đầu của một chuỗi “hiệu ứng” bộc phát giúp RNG bùng nổ xuyên suốt mùa giải. Công thần Xiaohu lần đầu tiên trong sự nghiệp chơi vai trò đường trên, anh và đồng đội thi đấu xuất sắc như thể trong đội hình vẫn còn những Mlxg, Uzi, AmazingJ thời đỉnh cao phong độ.</p>
                            <p>
                                Về phần EDG, đội tuyển này đã biến mất khỏi top đầu LPL kể từ sau năm 2018. Họ thi đấu nhạt nhòa với những đội hình gồm nhiều nhân tố mới. Một mình đường giữa Scout không thể làm nên chuyện khi xung quanh anh là những người đồng đội vẫn còn thiếu kinh nghiệm. Giờ đây, mọi thứ đã thay đổi, Viper và Flandre đã trở thành hai mảnh ghép hoàn hảo đưa EDG trở lại top đầu LPL. </p>
                            <p>Với ngôi nhất và nhì bảng LPL, RNG và EDG có cơ hội gặp nhau trong trận chung kết. Vòng Playoffs năm nay được chia thành 2 nhánh riêng biệt, các đội từ vòng 1 đến vòng 3 sẽ bị loại trực tiếp chỉ sau một trận BO5. </p>
                        </div>
                    </div>
                </div>
                <div class="mb-4 border-top pt-3">
                    <h4 class="title-style-left mb-3">Tin tức liên quan</h4>
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- BEGIN Item Article -->
                            <div class="item-article mb-4">
                                <div class="item-thumb mb-2">
                                    <div class="media-placeholder ratio-2-1">
                                        <div class="bg" style="background-image: url(/assets/frontend/{{theme('')->theme_key}}/img/temp/cerberus-esports-chieu-mo-thanh-cong-nguoi-di-duong-tren-toi-tu-han-quoc-1.jpg);"></div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="item-title"><a href="#">Cerberus Esports chiêu mộ thành công người đi đường trên tới từ Hàn Quốc</a></h6>
                                </div>
                            </div><!-- BEGIN Item Article -->
                        </div>
                        <div class="col-lg-4">
                            <!-- BEGIN Item Article -->
                            <div class="item-article mb-4">
                                <div class="item-thumb mb-2">
                                    <div class="media-placeholder ratio-2-1">
                                        <div class="bg" style="background-image: url(/assets/frontend/{{theme('')->theme_key}}/img/temp/vcs-mua-xuan-2021-tong-hop-tuan-2-su-hut-hoi-cua-dkvd-team-flash-1.jpg);"></div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="item-title"><a href="#">[VCS Mùa Xuân 2021] Tổng kết tuần 2: Pentakill đầu tiên xuất hiện, ĐKVĐ Team Flash vẫn trắng tay</a></h6>
                                </div>
                            </div><!-- BEGIN Item Article -->
                        </div>
                        <div class="col-lg-4">
                            <!-- BEGIN Item Article -->
                            <div class="item-article mb-4">
                                <div class="item-thumb mb-2">
                                    <div class="media-placeholder ratio-2-1">
                                        <div class="bg" style="background-image: url(/assets/frontend/{{theme('')->theme_key}}/img/temp/lpl-mua-xuan-2021-tuan-5-sofm-gianh-mvp-suning-gianh-chien-thang-thu-hai-lien-tiep-1.jpg);"></div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="item-title"><a href="#">LPL Mùa Xuân 2021 – Tuần 5: SofM giành MVP, SN hủy diệt LGD để có chiến thắng thứ 2 liên tiếp</a></h6>
                                </div>
                            </div><!-- BEGIN Item Article -->
                        </div>
                    </div>
                </div>
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
                        <div class="bg" style="background-image: url(/assets/frontend/{{theme('')->theme_key}}/img/temp/jxm-banner.jpg);background-position: 60% 50%;background-size: auto 100%;"></div>
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
@endsection
