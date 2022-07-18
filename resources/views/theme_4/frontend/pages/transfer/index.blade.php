@extends('frontend.layouts.master')
@section('content')
<section>
    <div class="container">
        <div class="row user-manager">
            @include('frontend.pages.widget.__menu_profile')

            <div class="col-12 col-md-8 col-lg-9  site-form " style="min-height: 212.568px;">
                <div class="menu-content" style="padding-bottom: 16px">
                    <div class="title">
                        <h3>NẠP VÍ / ATM</h3>
                    </div>
                    <div class="wapper profile">

                        <div class="alert alert-info">
                            <p style="text-align:center"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><strong>*Ch&uacute; &yacute;: Chuyển khoản nạp tiền theo hướng dẫn</strong></span></span></p>

                            <p style="text-align:center"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><strong>Click Xem Hướng Dẫn:</strong></span></span></p>

                            <p style="text-align:center"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><strong><a href="/tin-tuc/huong-dan-nap-tien-vao-website-napgamegiarenet" target="_blank"><span style="color:#e74c3c">Link Hướng Dẫn Nạp Tiền ATM / V&iacute; Tự Động</span></a></strong></span></span></p>

                            <p style="text-align:center"><br />
                                <span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><strong><a href="https://youtu.be/Upp21KxrAJY" target="_blank"><span style="color:#e74c3c">Link Video Hướng Dẫn Nạp Tiền ATM/ V&iacute; Tự Động</span></a></strong></span></span></p>
                        </div>
                        <form method="POST" action="https://napgamegiare.net/recharge" accept-charset="UTF-8" class="form-horizontal form-charge" id="form-recharge"><input name="_token" type="hidden" value="1d1UtKProIOHCYvd7GjOQ1mwzvuWei6FP3awwoKP">
                            <div class="form-row mb-4">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                    <label class="mt-2">Tài khoản:</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                    <input class="form-control  c-square c-theme" type="text"
                                           value="3993473817374905@facebook.com"
                                           readonly>
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                    <label class="mt-2">Ngân hàng: </label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                    <select class="form-control  c-square c-theme" name="bank" id="bank" required>
                                        <option value="">-- Vui lòng chọn ngân hàng chuyển khoản --</option>
                                        <option value="TECHCOMBANK">Ngân hàng Kỹ thương Việt Nam (TechcomBank)</option>
                                        <option value="VIETCOMBANK">Ngân hàng Vietcombank</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                    <label class="mt-2">Số tiền muốn nạp</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                    <input class="form-control  c-square c-theme"name="amount" type="text" id="amount" maxlength="16"
                                           value="" placeholder="Tối thiểu 10.000 VNĐ tối đa 10.000.000 VNĐ" autofocus="" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                    <label class="mt-2">Mã bảo vệ (*):</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">

                                    <div class="input-group mb-3">

                                        <input type="text" class="form-control m-input refresh" id="captcha" name="captcha"
                                               placeholder="Mã bảo vệ" maxlength="3" autocomplete="off" required="">
                                        <div class="input-group-append">
                                    <span class="input-group-text" style="padding: 3px;background: none"><img
                                            src="/captcha/flat?eb9AEN8C" height="30px" id="imgcaptcha"
                                            onclick="document.getElementById('imgcaptcha').src ='captcha/flat?EhjAauu9'+Math.random();document.getElementById('captcha').focus();"></span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="mb-4 text-center">
                                <button class="btn-submit" type="submit"
                                        data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing Order">Xác nhận
                                </button>
                            </div>


                        </form>
                        <div class="alert alert-info" id="recharge-info" style="font-weight:bold;display: none;"></div>
                    </div>
                    <table id="hand_card_recent" class="table table-striped">
                        <thead>
                        <tr>
                            <th>Thời gian</th>
                            <th>Mã nạp yêu cầu</th>
                            <th>Ngân hàng</th>
                            <th>Chủ tài khoản</th>
                            <th>Số tài khoản</th>
                            <th>Số tiền (VNĐ)</th>
                            <th>Thực nhận (VNĐ)</th>
                            <th>Trạng thái</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>08/07/2022 10:42:48</td>
                            <td>#123456</td>
                            <td>Techcombank</td>
                            <td>BUI TUAN SON</td>
                            <td>123456789</td>
                            <td>500.000 đ</td>
                            <td>450.000 đ</td>
                            <td><span class="badge badge-success">Thành công</span></td>
{{--                            <td colspan="8">Không có dữ liệu</td>--}}
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <style>
            #recharge-info b{
                font-size: 18px;
            }
            i.fa.fa-copy.copyData{
                font-size: 18px;
            }
        </style>







    </div><!-- /.container -->
</section>

<script>
    formatNumberInput('#amount');
    function formatNumberInput(ele){
        $(ele).on( 'keyup' , function(e){
            if( e.keyCode != 37 && e.keyCode != 38 && e.keyCode != 39 && e.keyCode != 40 ){
                var _this = this,
                    num = _this.value.replace(/\./g,'');
                if( !isNaN( num ) ){
                    num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                    num = num.split('').reverse().join('').replace(/^[\.]/,'');
                    _this.value = num;
                    var start = _this.selectionStart,
                        end = _this.selectionEnd;
                    _this.setSelectionRange(start, end);
                }
                else {
                    _this.value = _this.value.replace(/[^\d\.]*/g,'');
                }
            }
        })
    }
    function formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
    }
    $('body').on('click','.copyData',function(){
        data = $(this).data('copy');
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($.trim(data)).select();
        document.execCommand("copy");
        $temp.remove();
        toastr.success('Đã sao chép: '+ data);
    })
    $('body').on('click','button#reload',function(){
        location.reload();
    })

    $('#form-recharge').submit(function (e) {
        e.preventDefault();
        var formSubmit = $(this);
        var url = formSubmit.attr('action');
        var btnSubmit = formSubmit.find(':submit');
        btnSubmit.text('Đang xử lý...');
        btnSubmit.prop('disabled', true);
        $.ajax({
            type: "POST",
            url: url,
            cache:false,
            data: formSubmit.serialize(), // serializes the form's elements.
            beforeSend: function (xhr) {

            },
            success: function (data) {
                if(data.status == 1){
                    let html = '';
                    html +='<p>Khởi tạo đơn hàng thành công</p>';
                    html +='<p>Để hoàn tất đơn nạp, bạn vui lòng chuyển khoản theo nội dung sau:</p>';
                    html += '<p><b>'+data.title+' <i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+data.title+'" aria-hidden="true"></i> </b></p>' ;
                    html += '<p><b>Số tài khoản: </b> <b style="color:red">'+data.number_account+' </b> <b><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+data.number_account+'" aria-hidden="true"></i></b></p>';
                    html += '<p><b>Chủ tài khoản: </b> <b style="color:red">'+data.account_name+' </b>  <b><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+data.account_name+'" aria-hidden="true"></i></b></p>';
                    html += '<p><b>Số tiền: </b> <b style="color:red">'+formatNumber(data.price)+' VNĐ </b> <b><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+data.price+'" aria-hidden="true"></i></b></p>';
                    html += '<p><b>Nội dung chuyển khoản: </b> <b style="color:red">'+data.code+' </b> <b><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+data.code+'" aria-hidden="true"></i></b></p>';
                    html += '<button type="button" class="btn c-theme-btn c-btn-square m-b-10" style="margin-left: 0px;margin-top: 10px;background: rgb(238, 70, 35) !important;color:#fff" id="reload">Hoàn thành</button>';
                    $('#recharge-info').html(html);
                    $('#recharge-info').css('display','block');
                    formSubmit.remove();
                }
                else{
                    alert(data.message);
                    btnSubmit.text('Xác nhận');
                    btnSubmit.prop('disabled', false);
                }
            },
            error: function (data) {
                alert('Kết nối với hệ thống thất bại.Xin vui lòng thử lại');
                btnSubmit.text('Xác nhận');
                btnSubmit.prop('disabled', false);
            },
            complete: function (data) {
                $('#imgcaptcha').trigger('click');
                $('#form-recharge').trigger("reset");
            }
        });
    });
</script>

@endsection
