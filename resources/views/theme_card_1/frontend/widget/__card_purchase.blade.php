<div class="card_process">
    <div class="row">
        <form enctype="multipart/form-data" class="recharge_supplier" id="recharge_supplier" name="recharge_supplier">

            <input type="hidden" name="_token" value="LFU5vc7pZziGJQf9VIxouOMS69I1iKGKLLsACICJ">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="content-supplier">
                        <div id="supplier-flex">
                            <ul id="tab-supplier" class="nav nav-pills nav-pills--success">
                                @foreach($telecoms as $key => $telecom)
                                    <li>
                                        <div class="nav-link link-supplier text-center">
                                            <input name="telecom_key" value="{{ $telecom->key }}" id="myCheckbox{{ $telecom->id }}" type="radio">
                                            <label class="item-wapper label-{{ $telecom->key }}" for="myCheckbox{{ $telecom->id }}" onclick="reply_click(this.id)" id="{{ $telecom->key }}">
                                                <img class="img-fluid" src="{{ $telecom->image }}" alt="{{ $telecom->key }}">
                                            </label>
                                        </div>
                                    </li>
                                @endforeach


{{--                                <li>--}}
{{--                                    <div class="nav-link link-supplier text-center">--}}
{{--                                        <input name="telecom_key" value="VIETTEL" id="myCheckbox3" type="radio">--}}
{{--                                        <label class="item-wapper label-VIETTEL" for="myCheckbox3" onclick="reply_click(this.id)" id="VIETTEL">--}}
{{--                                            <img class="img-fluid" src="/telecom/O6UHiMStn3_1619169265.png">--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                    </div>
                    <div class="content-supplier">
                        <div class="title-content mt-3">
                            <h3 class="menhgia_title">
                                Chọn mệnh giá thẻ <span style="color: #F25922;" class="denominations"></span>
                            </h3>
                        </div>
                        {{--                                <div id="render-supplier" class="wapper-content justify-content-center">--}}
                        {{--                                    <h5 style="color: #2F6A7C">Vui lòng chọn nhà cung cấp</h5>--}}
                        {{--                                </div>--}}
                        <div id="render-supplier" class="wapper-content justify-content-center">
                            <div class="text-center">
                                <input type="radio" name="amount" class="amount" id="CheckboxSupplier0" value="20000" rel-ratio="99.0">
                                <input style="display: none" type="text" id="price_20000" class="ratio_default" value="99.0">
                                <label class="item-content" for="CheckboxSupplier0">
                                    <h5>20,000 VNĐ </h5>
                                    <p>Giá: <span>19,800 VNĐ</span></p>
                                </label>
                            </div>
                            <div class="text-center">
                                <input type="radio" name="amount" class="amount" id="CheckboxSupplier1" value="50000" rel-ratio="95.5">
                                <input style="display: none" type="text" id="price_50000" class="ratio_default" value="95.5">
                                <label class="item-content" for="CheckboxSupplier1">
                                    <h5>50,000 VNĐ </h5>
                                    <p>Giá: <span>47,750 VNĐ</span></p>
                                </label>
                            </div>
                        </div>
                        <div id="button" class="my-5" style="margin-top: 22px;"></div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="tbl_card_discount active hidden-xs hidden-sm" id="vt_discount">
                        <h3 class="text-center text-uppercase">Bảng chiết chi tiết giao dịch</h3>
                        <p class="text-center">(Dành cho khách hàng là thành viên của hệ thống)</p>
                        <hr>
                        <table class="info-payment">
                            <tbody>
                            <tr>
                                <td>Loại thẻ:</td>
                                <td class="denominations">Chưa chọn</td>
                            </tr>
                            <tr>
                                <td>Mệnh giá:</td>
                                <td class="price_supplier">Chưa chọn</td>

                            </tr>
                            <tr>
                                <td>Phí giao dịch:</td>
                                <td>Miễn phí</td>

                            </tr>
                            <tr>
                                <td>Chiết khấu:</td>
                                <td class="ratio">0</td>

                            </tr>

                            <tr>
                                <td>Số lượng:</td>
                                <td class="render_quantity">1</td>

                            </tr>
                            <tr>
                                <td><span style="font-size: 19px">Tổng tiền:</span></td>
                                <td><span style="font-size: 19px;color: #F25922" class="total_price">0 VNĐ</span></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="wapper-pay text-center">
                        <button type="button" data-toggle="modal" data-target="#signin" class="btn ">Đăng
                            nhập để thanh toán
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <div class="modal fade" id="showInfor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">MUA THẺ THÀNH CÔNG</h4>
                    </div>
                    <div class="modal-body table-action">
                        <div id="showInforDetails"></div>
                        <table class="table m-table m-table--head-bg-success text-center">
                            <thead>
                            <tr class="text-center" style="background-color: #eef1f5;">
                                <td colspan="2" ><b>THÔNG TIN ĐƠN HÀNG</b></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td width="40%"><b>Mã số</b></td>
                                <td id="id-item"></td>
                            </tr>
                            <tr>
                                <td><b>Mô tả</b></td>
                                <td id="description-item"></td>
                            </tr>
                            <tr>
                                <td><b>Trạng thái</b></td>
                                <td><span class="btn btn-success btn-sm m-btn m-btn--custom ">Hoàn thành</span></td>
                            </tr>
                            <tr>
                                <td><b>Số tiền</b></td>
                                <td id="money-item"></td>
                            </tr>
                            <tr>
                                <td><b>Chiết khấu</b></td>
                                <td id="txns-item"></td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table m-table m-table--head-bg-success">
                            <thead>
                            <tr class="text-center" style="background-color: #eef1f5;">
                                <td colspan="2" ><b>DANH SÁCH MÃ THẺ</b></td>
                            </tr>
                            <tr class="text-center">
                                <td>Mã thẻ</td>
                                <td>Serial</td>
                            </tr>
                            </thead>
                            <tbody id="store_card" class="text-center">

                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>
