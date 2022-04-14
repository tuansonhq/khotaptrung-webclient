@extends('frontend.layouts.master')
@section('seo_head')
    {{--    @include('frontend.widget.__seo_head')--}}
@endsection
@section('content')
    <div class="site-content-body bg-white first last p-0">
        <div class="block-profile">
            <div class="block-header">
                <div class="p-3 d-flex align-items-center">
                    <div class="me-3">
                        <img src="img/temp/avatar-80.png" class="rounded-circle avatar" alt="">
                    </div>
                    <div>
                        <h6 class="mb-0">Nguyễn Minh Hiếu <i class="las la-check-circle text-success"></i></h6>
                        <p class="mb-0 text-secondary small">Tham gia: 25/03/2021</p>
                    </div>
                    <div class="ms-auto">
                        <a href="buy.html" class="btn btn-outline-primary rounded-x ps-4 pe-4">Mua thẻ / data <i class="las la-angle-right"></i></a>
                    </div>
                </div>
                <!-- BEGIN Tabs -->
                <ul class="nav nav-qp-tabs mb-0 ps-3 pe-3" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="#" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true"><span><i class="las la-user"></i> <span>Thông tin tài khoản</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#" id="history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab" aria-controls="history" aria-selected="true"><span><i class="las la-clock"></i> Lịch sử giao dịch</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#" id="item-tab" data-bs-toggle="tab" data-bs-target="#item" type="button" role="tab" aria-controls="item" aria-selected="true"><span><i class="las la-credit-card"></i> Thẻ cào đã mua</span></a>
                    </li>
                </ul>
            </div>
            <div class="block-content p-3">
                <div class="tab-content mb-4">
                    <!-- BEGIN Tab Content Profile -->
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="mb-4">
                                    <h6 class="title-style-collapse mb-3"><a href="#" class="d-block">Thông tin tài khoản</a></h6>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="mb-1">Số điện thoại</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control border-end-0" placeholder="" value="0912345678" aria-label="">
                                                    <span class="input-group-text bg-transparent text-secondary"><i class="las la-mobile"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="mb-1">Kết nối với Facebook</label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-transparent text-secondary pe-0">fb.com/</span>
                                                    <input type="text" class="form-control border-start-0 ps-0" placeholder="" value="minhhieu134" aria-label="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="mb-1">Địa chỉ Email</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control border-end-0" placeholder="" value="minhhieu@gmail.com" aria-label="">
                                                    <span class="input-group-text bg-transparent text-secondary"><i class="las la-envelope"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="mb-1">Mật khẩu</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control border-end-0" placeholder="" value="" aria-label="">
                                                    <span class="input-group-text bg-transparent text-secondary"><i class="las la-lock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <h6 class="title-style-collapse mb-3"><a href="#" class="d-block">Thông tin cá nhân</a></h6>
                                    <div class="mb-3">
                                        <div class="form-check d-inline-block me-3">
                                            <input class="form-check-input" type="radio" name="gender" id="gender" checked>
                                            <label class="form-check-label">
                                                Nam
                                            </label>
                                        </div>
                                        <div class="form-check d-inline-block">
                                            <input class="form-check-input" type="radio" name="gender" id="gender">
                                            <label class="form-check-label">
                                                Nữ
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="mb-1">Họ và tên</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="mb-1">Ngày sinh</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control border-end-0" placeholder="DD/MM/YYYY" aria-label="">
                                                    <span class="input-group-text bg-transparent text-secondary"><i class="las la-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="mb-1">Địa chỉ (Số nhà, đường)</label>
                                                <input type="text" class="form-control" placeholder="Số 124 đường Nguyễn Trãi" aria-label="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="mb-1">Thành Phố</label>
                                                        <select class="form-select">
                                                            <option>Hà Nội</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="mb-1">Quận Huyện</label>
                                                        <select class="form-select">
                                                            <option>Hoàng Mai</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <a href="#" class="btn bg-warning-gradient ps-4 pe-4 text-white pt-2 pb-2 rounded">Lưu thông tin <i class="las la-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- END Tab Content Profile -->
                    <!-- BEGIN Tab Content History -->
                    <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                        <div class="d-flex justify-content-between align-items-md-center flex-column flex-md-row">
                            <h4 class="title-style-left mb-3">Danh sách giao dịch</h4>
                            <div class="d-flex align-items-center mb-3">
                                <select class="form-select" style="max-width: 160px">
                                    <option value="0">Loại giao dịch</option>
                                </select>
                                <div class="input-group date-ranger-picker ms-3">
                                    <input type="text" class="form-control border-end-0" placeholder="DD/MM/YYYY" value="">
                                    <span class="input-group-text bg-transparent text-secondary"><i class="las la-arrow-right"></i></span>
                                    <input type="text" class="form-control border-start-0" placeholder="DD/MM/YYYY" value="">
                                    <button class="btn bg-primary text-white" type="button"><i class="las la-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table cellspacing="0" cellpadding="0" class="table table-hover">
                                <thead>
                                <tr>
                                    <th class="text-secondary">#</th>
                                    <th class="text-secondary">Tài khoản</th>
                                    <th class="text-secondary">Giao dịch</th>
                                    <th class="text-secondary">Biến động</th>
                                    <th class="text-secondary">Số dư hiện tại</th>
                                    <th class="text-secondary">Trạng thái</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="#">000234</a></td>
                                    <td>Techcombank</td>
                                    <td>Nạp tiền tài khoản</td>
                                    <td class="text-end"><span class="text-success">+ 1.200.000</span></td>
                                    <td class="text-end">1.200.000</td>
                                    <td class="text-end">Đang xử lý</td>
                                </tr>
                                <tr>
                                    <td><a href="#">000233</a></td>
                                    <td>Ví điện tử</td>
                                    <td>Mua thẻ Garena</td>
                                    <td class="text-end"><span class="text-danger">- 200.000</span></td>
                                    <td class="text-end">0.00</td>
                                    <td class="text-end">Đã hoàn thành</td>
                                </tr>
                                <tr>
                                    <td><a href="#">000232</a></td>
                                    <td>Techcombank</td>
                                    <td>Mua thẻ điện thoại</td>
                                    <td class="text-end"><span class="text-danger">- 200.000</span></td>
                                    <td class="text-end">0.00</td>
                                    <td class="text-end">Đã hoàn thành</td>
                                </tr>
                                <tr>
                                    <td><a href="#">000231</a></td>
                                    <td>Ví điện tử</td>
                                    <td>Mua thẻ điện thoại</td>
                                    <td class="text-end"><span class="text-danger">- 200.000</span></td>
                                    <td class="text-end">0.00</td>
                                    <td class="text-end">Đã hoàn thành</td>
                                </tr>
                                <tr>
                                    <td><a href="#">000230</a></td>
                                    <td>Techcombank</td>
                                    <td>Nạp tiền tài khoản</td>
                                    <td class="text-end"><span class="text-success">+ 1.200.000</span></td>
                                    <td class="text-end">0.00</td>
                                    <td class="text-end">Đã hủy</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-between align-items-md-center flex-column flex-md-row mt-2">
                            <div class="text-secondary mb-2">
                                Hiển thị 5 / 10 kết quả
                            </div>
                            <nav class="page-pagination mb-2">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="las la-angle-left"></i></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="las la-angle-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div><!-- END Tab Content History -->
                    <!-- BEGIN Tab Content Item -->
                    <div class="tab-pane fade" id="item" role="tabpanel" aria-labelledby="item-tab">
                        <div class="d-flex justify-content-between align-items-md-center flex-column flex-md-row">
                            <h4 class="title-style-left mb-3">Thẻ cào đã mua</h4>
                            <div class="d-flex align-items-center mb-3">
                                <select class="form-select" style="max-width: 160px">
                                    <option value="0">Loại thẻ cào</option>
                                </select>
                                <div class="input-group date-ranger-picker ms-3">
                                    <input type="text" class="form-control border-end-0" placeholder="DD/MM/YYYY" value="">
                                    <span class="input-group-text bg-transparent text-secondary"><i class="las la-arrow-right"></i></span>
                                    <input type="text" class="form-control border-start-0" placeholder="DD/MM/YYYY" value="">
                                    <button class="btn bg-primary text-white" type="button"><i class="las la-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- BEGIN List Items -->
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <!-- BEGIN Purchased Item -->
                                <div class="purchased-item mb-4">
                                    <div class="mb-2 item-meta small text-secondary">
                                        <i class="las la-clock"></i> 12:24 31/03/2021
                                    </div>
                                    <div class="item-content">
                                        <div class="inner">
                                            <div class="item-logo mb-2 d-flex align-items-center">
                                                <img src="img/purchased-logos/garena.png" class="logo me-2" alt=""> Thẻ Garena
                                            </div>
                                            <div class="mb-2">
                                                <label class="mb-1 text-secondary">Mã Pin</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control border-end-0" placeholder="" value="116 8335 1939 6344" aria-label="">
                                                    <span class="input-group-text bg-transparent text-secondary"><i class="las la-copy"></i></span>
                                                </div>
                                            </div>
                                            <div class="mb-2 d-flex justify-content-between">
                                                <div class="text-secondary">Số seri</div>
                                                <div>10 0017 0034 3582</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- END Purchased Item -->
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <!-- BEGIN Purchased Item -->
                                <div class="purchased-item mb-4">
                                    <div class="mb-2 item-meta small text-secondary">
                                        <i class="las la-clock"></i> 12:24 31/03/2021
                                    </div>
                                    <div class="item-content">
                                        <div class="inner">
                                            <div class="item-logo mb-2 d-flex align-items-center">
                                                <img src="img/purchased-logos/garena.png" class="logo me-2" alt=""> Thẻ Garena
                                            </div>
                                            <div class="mb-2">
                                                <label class="mb-1 text-secondary">Mã Pin</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control border-end-0" placeholder="" value="116 8335 1939 6344" aria-label="">
                                                    <span class="input-group-text bg-transparent text-secondary"><i class="las la-copy"></i></span>
                                                </div>
                                            </div>
                                            <div class="mb-2 d-flex justify-content-between">
                                                <div class="text-secondary">Số seri</div>
                                                <div>10 0017 0034 3582</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- END Purchased Item -->
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <!-- BEGIN Purchased Item -->
                                <div class="purchased-item mb-4">
                                    <div class="mb-2 item-meta small text-secondary">
                                        <i class="las la-clock"></i> 12:24 31/03/2021
                                    </div>
                                    <div class="item-content">
                                        <div class="inner">
                                            <div class="item-logo mb-2 d-flex align-items-center">
                                                <img src="img/purchased-logos/viettel.png" class="logo me-2" alt="">
                                            </div>
                                            <div class="mb-2">
                                                <label class="mb-1 text-secondary">Mã Pin</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control border-end-0" placeholder="" value="116 8335 1939 6344" aria-label="">
                                                    <span class="input-group-text bg-transparent text-secondary"><i class="las la-copy"></i></span>
                                                </div>
                                            </div>
                                            <div class="mb-2 d-flex justify-content-between">
                                                <div class="text-secondary">Số seri</div>
                                                <div>10 0017 0034 3582</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- END Purchased Item -->
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <!-- BEGIN Purchased Item -->
                                <div class="purchased-item mb-4">
                                    <div class="mb-2 item-meta small text-secondary">
                                        <i class="las la-clock"></i> 12:24 31/03/2021
                                    </div>
                                    <div class="item-content">
                                        <div class="inner">
                                            <div class="item-logo mb-2 d-flex align-items-center">
                                                <img src="img/purchased-logos/viettel.png" class="logo me-2" alt="">
                                            </div>
                                            <div class="mb-2">
                                                <label class="mb-1 text-secondary">Mã Pin</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control border-end-0" placeholder="" value="116 8335 1939 6344" aria-label="">
                                                    <span class="input-group-text bg-transparent text-secondary"><i class="las la-copy"></i></span>
                                                </div>
                                            </div>
                                            <div class="mb-2 d-flex justify-content-between">
                                                <div class="text-secondary">Số seri</div>
                                                <div>10 0017 0034 3582</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- END Purchased Item -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <!-- BEGIN Purchased Item -->
                                <div class="purchased-item mb-4">
                                    <div class="mb-2 item-meta small text-secondary">
                                        <i class="las la-clock"></i> 12:24 31/03/2021
                                    </div>
                                    <div class="item-content">
                                        <div class="inner">
                                            <div class="item-logo mb-2 d-flex align-items-center">
                                                <img src="img/purchased-logos/vinaphone.png" class="logo me-2" alt="">
                                            </div>
                                            <div class="mb-2">
                                                <label class="mb-1 text-secondary">Mã Pin</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control border-end-0" placeholder="" value="116 8335 1939 6344" aria-label="">
                                                    <span class="input-group-text bg-transparent text-secondary"><i class="las la-copy"></i></span>
                                                </div>
                                            </div>
                                            <div class="mb-2 d-flex justify-content-between">
                                                <div class="text-secondary">Số seri</div>
                                                <div>10 0017 0034 3582</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- END Purchased Item -->
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <!-- BEGIN Purchased Item -->
                                <div class="purchased-item mb-4">
                                    <div class="mb-2 item-meta small text-secondary">
                                        <i class="las la-clock"></i> 12:24 31/03/2021
                                    </div>
                                    <div class="item-content">
                                        <div class="inner">
                                            <div class="item-logo mb-2 d-flex align-items-center">
                                                <img src="img/purchased-logos/viettel.png" class="logo me-2" alt="">
                                            </div>
                                            <div class="mb-2">
                                                <label class="mb-1 text-secondary">Mã Pin</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control border-end-0" placeholder="" value="116 8335 1939 6344" aria-label="">
                                                    <span class="input-group-text bg-transparent text-secondary"><i class="las la-copy"></i></span>
                                                </div>
                                            </div>
                                            <div class="mb-2 d-flex justify-content-between">
                                                <div class="text-secondary">Số seri</div>
                                                <div>10 0017 0034 3582</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- END Purchased Item -->
                            </div>

                        </div>
                        <!-- END List Items -->
                        <div class="d-flex justify-content-between align-items-md-center flex-column flex-md-row mt-2">
                            <div class="text-secondary mb-2">
                                Hiển thị 5 / 10 kết quả
                            </div>
                            <nav class="page-pagination mb-2">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="las la-angle-left"></i></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="las la-angle-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div><!-- BEGIN Tab Content Item -->
                </div>
            </div>
        </div>
    </div>
    <div class="after"></div>
@endsection
