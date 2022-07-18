@extends('frontend.layouts.master')
@section('content')

    <section>
        <div class="container">

            <div class="row user-manager">
                @include('frontend.pages.widget.__menu_profile')

                <div class="col-12 col-md-8 col-lg-9 site-form " style="min-height: 212.568px;background: #ffffff;border-radius: 8px">
                    <div class="account_sidebar_content" style="padding: 16px 8px">
                        <div class="c-layout-sidebar-content ">
                            <!-- BEGIN: PAGE CONTENT -->
                            <!-- BEGIN: CONTENT/SHOPS/SHOP-ORDER-HISTORY-2 -->
                            <div class="account_sidebar_content_title">
                                <p>Chi tiết yêu cầu #7630 </p>
                                <div class="account_sidebar_content_line"></div>
                            </div>

                            <div class="account_content_transaction_history">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="btnDestroy__data">
                                            <button class="btn btn-danger" type="button" id="btnDestroy" data-id="7630" title="">Hủy bỏ yêu cầu</button>
                                        </div>

                                        <script>
                                            $(document).on('click', '#btnDestroy',function(event){
                                                $('#destroyModal').modal('show');
                                            })
                                        </script>
                                        <div class="modal fade" id="destroyModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form method="POST" action="https://frontend.dev.tichhop.pro/dich-vu-da-mua-7630/destroy" accept-charset="UTF-8" class="m-form destroyForm"><input name="_token" type="hidden" value="mXWkGqxgoRV3z7iAG5N7BnuVR0ih8IaDY2UcyyLc">
                                                        <div class="modal-header" style="padding-left: 16px;padding-right: 16px">
                                                            <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;text-align: center">Chỉnh sửa thông tin</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="error__deleteserrvice" style="width: 100%;text-align: center;margin-bottom: 0">

                                                        </div>
                                                        <div class="modal-body" style="padding-right: 16px;padding-left: 16px">

                                                            <span class="mb-15 control-label bb" style="font-size: 14px;color: black;padding-bottom: 8px;">Lỗi thuộc về:</span>
                                                            <div class="mb-15" style="margin-top: 8px">
                                                                <select required="" class="form-control" name="mistake_by"><option value="" selected="selected">-- Không chọn --</option><option value="1">Khách</option><option value="0">QTV</option><option value="2">Game</option></select>
                                                            </div>
                                                            <span class="mb-15 control-label bb">Nội dung:</span>
                                                            <textarea style="min-height:100px;" type="text" class="form-control" name="note" placeholder="Nội dung ít nhất 10 ký tự"></textarea>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" style="background: rgb(238, 70, 35);border: 2px solid rgb(238, 70, 35);color: #ffffff">Xác nhận</button>
                                                            <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="padding-left" style="font-family: Roboto, sans-serif;">
                                <div class="cand-details" id="about" style="float: left;width: 100%">
                                    <h2>Tên dịch vụ</h2>
                                    <p><a class="thea_dichvu" href="/dich-vu/up-suc-manh-su-phu-nro">Úp Sức Mạnh Sư Phụ NRO</a></p>

                                    <h2>Công việc</h2>
                                    <div class="edu-history-sec" id="education">
                                        <div class="edu-history">
                                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                                            <div class="edu-hisinfo">
                                                <h3>Ss - 200tr (chuẩn bị 500 ngọc)</h3>
                                                <i>290.000 VNĐ</i>

                                            </div>
                                        </div>
                                        <div class="edu-history">
                                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                                            <div class="edu-hisinfo">
                                                <h3>200tr - 5 tỷ (chuẩn bị 800 ngọc)</h3>
                                                <i>250.000 VNĐ</i>

                                            </div>
                                        </div>


                                    </div>
                                    <h2>Thông tin đính kèm</h2>
                                    <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded">
                                        <table class="table table-bordered m-table m-table--border-brand m-table--head-bg-brand">
                                            <thead class="m-datatable__head">
                                            <tr class="m-datatable__row">
                                                <th style="width:50px;" class="m-datatable__cell">
                                                    #
                                                </th>
                                                <th class="m-datatable__cell">
                                                    Tên thông tin
                                                </th>
                                                <th style="width:150px;" class="m-datatable__cell">
                                                    Nội dung
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody class="m-datatable__body">

                                            <tr>
                                                <td>1</td>
                                                <td> Server</td>
                                                <td>
                                                    Vũ Trụ 1
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 2 </td>

                                                <td> Tài Khoản đăng nhập game </td>
                                                <td>


                                                    namdh@hqplay.vn
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 3 </td>

                                                <td> Mật khẩu game </td>
                                                <td>


                                                    ******
                                                </td>

                                            </tr>
                                            <tr>
                                                <td> 4 </td>
                                                <td> Bạn Đã Đọc Kĩ Quy Định Và Chuẩn Bị Đầy Đủ Vật Phẩm, Phụ Kiện Theo Yêu Cầu Của Shop Chưa? </td>
                                                <td>
                                                    321312
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="m-separator m-separator--dashed"></div>

                                    <div style="text-align: right">

                                        <button class="btn btn-brand btn-edit" id="btn-edit" data-id="7630">Chỉnh sửa thông tin</button>

                                        <script>
                                            $(document).on('click', '#btn-edit',function(event){
                                                $('#edit_info').modal('show');
                                            })
                                        </script>
                                        <div class="modal fade" id="edit_info">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form method="POST" action="https://frontend.dev.tichhop.pro/dich-vu-da-mua-7630/edit" accept-charset="UTF-8" class="m-form editForm"><input name="_token" type="hidden" value="mXWkGqxgoRV3z7iAG5N7BnuVR0ih8IaDY2UcyyLc">
                                                        <div class="modal-header" style="padding-left: 16px;padding-right: 16px">
                                                            <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;text-align: center">Chỉnh sửa thông tin</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="error__editerrvice" style="width: 100%;text-align: center;margin-bottom: 0">

                                                        </div>
                                                        <div class="modal-body text-left" style="padding-right: 16px;padding-left: 16px">

                                                            <span class="mb-15 control-label bb fw-500" style="color: black;font-weight: bold">Tài Khoản đăng nhập game:</span>


                                                            <div class="mb-15 pt-3 pb-2">
                                                                <input type="text" required name="customer_data0" value="namdh@hqplay.vn" class="form-control t14 " placeholder="Tài Khoản đăng nhập game" value="">
                                                            </div>


                                                            <span class="mb-15 control-label bb fw-500" style="color: black;font-weight: bold">Mật khẩu game:</span>


                                                            <div class="mb-15 pt-3 pb-2">
                                                                <input type="password" required class="form-control" name="customer_data1" value="123@@123" placeholder="Mật khẩu game">
                                                            </div>

                                                            <span class="mb-15 control-label bb">Bạn Đã Đọc Kĩ Quy Định Và Chuẩn Bị Đầy Đủ Vật Phẩm, Phụ Kiện Theo Yêu Cầu Của Shop Chưa?:</span>


                                                            <div class="mb-15 pt-3 pb-2">
                                                                <input type="text" required name="customer_data2" value="321312" class="form-control t14 " placeholder="Bạn Đã Đọc Kĩ Quy Định Và Chuẩn Bị Đầy Đủ Vật Phẩm, Phụ Kiện Theo Yêu Cầu Của Shop Chưa?" value="">
                                                            </div>


                                                            <input type="hidden" name="index" class="index" value="3">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" id="d3" style="background: rgb(238, 70, 35);border: 2px solid rgb(238, 70, 35);color: #ffffff">Cập nhật</button>
                                                            <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h2>Tiến độ</h2>
                                    <div class="edu-history-sec" id="experience">


                                        <div class="edu-history style2">
                                            <i></i>
                                            <div class="edu-hisinfo">
                                                <h3>
                                                    Đang chờ
                                                </h3>
                                                <i>08/07/2022 10:42:48</i>
                                            </div>
                                        </div>

                                    </div>
                                    <div style="text-align: right">
                                    </div>
                                    <h2>Trao đổi  <a href="/inbox/send/id" class="btn btn-brand btn-edit" >Nhắn tin</a></h2>
                                    <div class="edu-history-sec" id="awards">
                                        <span>Chưa có nội dung</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div><!-- /.container -->
    </section>
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/historydetail.css">
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/service/service-history-detail.js"></script>
@endsection

