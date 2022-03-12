@extends('frontend.layouts.master')
@section('content')
    <div class="account">

        <div class="account_content">
            <div class="container">
                @include('frontend.pages.account.sidebar')
                <div class="account_sidebar_content ">
                    <div class="account_pay_card ">
                        <div class="account_sidebar_content_title">
                            <p>NẠP VÍ / ATM</p>
                            <div class="account_sidebar_content_line"></div>
                        </div>
                        <div class="recharge_atm alert alert-info">
                            <p>
                                <strong>*Chú ý: Chuyển khoản nạp tiền theo hướng dẫn</strong>
                            </p>
                            <p>
                                <strong>Click Xem Hướng Dẫn:</strong>
                            </p>
                            <p>
                                <a href="">Link Hướng Dẫn Nạp Tiền ATM / Ví Tự Động</a>
                            </p>
                            <p>
                                <a href="">Link Video Hướng Dẫn Nạp Tiền ATM/ Ví Tự Động</a>
                            </p>
                        </div>
                        @if(isset($tranferbankPost->message))
                            <p  style="color: red;font-size: 14px">{{$tranferbankPost->message}}</p>
                        @endif

                        <p style="color: red;font-size: 14px">  {{ $errors->first() }}   </p>
                        <form action="{{route('postTranferBank')}}" method="POST" id="form-recharge" class="comfirm_tranfer_alert_out">
                            @csrf
                            <div class="form_tranfer">
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">
                                        Tài khoản

                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group" style="width: 100%">
                                            <input type="text" class="form-control" value=" {{App\Library\AuthCustom::user()->username}}" readonly>>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group row ">

                                    <label class="col-md-3 control-label">
                                        Ngân hàng:
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group" style="width: 100%">
                                            @if(isset($tranferbank->data))
                                                <select name="bank" id="bank_tranfer" class="form-control" data-id="">
                                                    <option value="">-- Vui lòng chọn ngân hàng chuyển khoản --</option>
                                                    @foreach($tranferbank->data as $key=>$items)
                                                        <option value="{{$items->title}}"  data-id="{{$key}}">{{$items->title}}</option>
                                                    @endforeach
                                                </select>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 control-label">
                                        Số tiền muốn nạp:

                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group" style="width: 100%">
                                            <input type="text" class="form-control"  name="tranfer_money" id="amount" placeholder="Tối thiểu 10.000 VNĐ tối đa 20.000.000 VNĐ">
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 control-label">
                                        Mã bảo vệ:

                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group" style="width: 100%">
                                            <input type="text" class="form-control" placeholder="Mã bảo vệ">
                                            <span class="input-group-addon"><img src="https://www.shopas.net/captcha/flat?KfHsLiD2" alt="" style="height: 100%;border: 1px solid darkgrey;"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="tranfer_confirm_form">
{{--                                    <form action="">--}}
                                        <div class="form-group row " style="margin-top: 40px">
                                            <div class="col-md-6" style="    margin-left: 25%;">
                                                <button class="btn c-theme-btn c-btn-square btn-confirm c-btn-uppercase c-btn-bold btn-block loading" type="submit" >Xác nhận</button>
                                            </div>
                                        </div>
{{--                                    </form>--}}
                                </div>

                            </div>

                            <div class="account_pay_card comfirm_tranfer_alert"  id="recharge-info">
                                <div class="recharge_atm alert alert-info">
{{--                                    <p>Khởi tạo đơn hàng thành công</p>--}}
{{--                                    <p>Để hoàn tất đơn nạp, bạn vui lòng chuyển khoản theo nội dung sau:</p>--}}
{{--                                    <p>Số tài khoản: <span>19037861065016</span></p>--}}
{{--                                    <p>Chủ tài khoản: <span>19037861065016</span></p>--}}
{{--                                    <p>Số tiền: <span>19037861065016</span></p>--}}
{{--                                    <p>Nội dung chuyển khoản: <span>19037861065016</span></p>--}}
{{--                                    <button class="btn c-theme-btn" type="submit">--}}
{{--                                        Hoàn thành--}}
{{--                                    </button>--}}

                                </div>
                            </div>
                        </form>
                        <table class="table table-striped">
                            <thead>
                            <tr>
{{--                                <th>Thời gian</th>--}}
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
                            @foreach($tranferbankHistory->data->data as $historyitems)
                                <tr>
                                    {{--                                <th>03/07/2022</th>--}}
                                    <td>{{$historyitems->request_id}}</td>
                                    <td>{{$historyitems->title}}</td>
                                    <td>{{$historyitems->title}}</td>
                                    <td>{{$historyitems->author_id}}</td>
                                    <td>{{$historyitems->price}}</td>
                                    <td>{{$historyitems->real_received_price}}</td>
                                    <td>{{$historyitems->status}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        // $('.btn-confirm').on('click',function (e) {
        //     $('.btn-confirm').on('click', function(e) {
            $("#bank_tranfer").on('change', function(){
            // var dataid = $("#bank_tranfer option:selected").attr('data-id');
            // id = $(this).data("id");

            // e.preventDefault();
            var money_bank = $('#tranfer_name').val();
            $('.hide').show();
            var dataid =  $("#bank_tranfer option:selected").attr('data-id');
            $.ajax({
                type: 'get',
                dataType: "json",
                data: {
                    dataid: dataid,
                    money_bank: money_bank
                },
                url: "/recharge-atm-bank",
                success: function (response) {
                    // alert(response);
                    // console.log(response.data)
                    // console.log(response.data.infoTranfer.title)
                    // console.log(response.data.infoTranfer.id)
                    // console.log(response.data.infoTranfer.params.account_name)
                    // console.log(response.data.infoTranfer.params.number_account)
                    // console.log(response.data.moneyBank)
                    // $('select[name="amount"]').find('option:not(:first)').remove();
                    //
                    // console.log()
                    // for(i = 0; i < response.data.length; i++) {
                    $('.comfirm_tranfer_alert').css('display','block')
                        let html = '';

                        html +=' <input type="text" name="id_bank" class="form-control" hidden value="'+response.data.infoTranfer.id+'"/>';

                    //    $('.form_tranfer').addClass('hide');
                        $('.comfirm_tranfer_alert_out').append(html)
                    // $('.tranfer_confirm_form').css('display','none')

                    // };
                }
            });
        });

        // $('.btn-confirm').on('click', function(e) {
            // var dataid = $("#bank_tranfer option:selected").attr('data-id');
            // id = $(this).data("id");
            // e.preventDefault();
            // var money_bank = $('#tranfer_name').val();
            // $('.hide').show();
            // var dataid =  $("#bank_tranfer option:selected").attr('data-id');
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });
            // $.ajax({
            //     type: 'post',
            //     dataType: "json",
            //     data: {
            //         dataid: dataid,
            //         money_bank: money_bank
            //     },
            //     url: "/recharge-atm-api",
            //     success: function (response) {
            //         alert(response);
            //         console.log(response.data)
            //         // console.log(response.data.infoTranfer.title)
            //         // console.log(response.data.infoTranfer.id)
            //         // console.log(response.data.infoTranfer.params.account_name)
            //         // console.log(response.data.infoTranfer.params.number_account)
            //         // console.log(response.data.moneyBank)
            //         // // $('select[name="amount"]').find('option:not(:first)').remove();
            //         // //
            //         // // console.log()
            //         // // for(i = 0; i < response.data.length; i++) {
            //         // $('.comfirm_tranfer_alert').css('display','block')
            //         // let html = '';
            //         //
            //         // html +=' <input type="text" name="id_bank" class="form-control" hidden value="'+response.data.infoTranfer.id+'"/>';
            //         //
            //         // //    $('.form_tranfer').addClass('hide');
            //         // $('.comfirm_tranfer_alert_out').append(html)
            //         // // $('.tranfer_confirm_form').css('display','none')
            //         //
            //         // // };
            //         //
            //
            //     }
            //
            // });



        // });
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
                    console.log(data);
                    if(data.status == 1){
                        alert(data.message);
                        let html = '';
                        html +='<p>Khởi tạo đơn hàng thành công</p>';
                        html +='<p>Để hoàn tất đơn nạp, bạn vui lòng chuyển khoản theo nội dung sau:</p>';
                        html += '<p><b>'+data.title+' <i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+data.title+'" aria-hidden="true"></i> </b></p>' ;
                        html += '<p><b>Số tài khoản: </b> <b style="color:red">'+data.number_account+' </b> <b><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+data.number_account+'" aria-hidden="true"></i></b></p>';
                        html += '<p><b>Chủ tài khoản: </b> <b style="color:red">'+data.account_name+' </b>  <b><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+data.account_name+'" aria-hidden="true"></i></b></p>';
                        html += '<p><b>Số tiền: </b> <b style="color:red">'+formatNumber(data.price)+' VNĐ </b> <b><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+data.price+'" aria-hidden="true"></i></b></p>';
                        html += '<p><b>Nội dung chuyển khoản: </b> <b style="color:red">'+data.code+' </b> <b><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+data.code+'" aria-hidden="true"></i></b></p>';
                        html += '<button type="button" class="btn c-theme-btn c-btn-square m-b-10" style="margin-left: 0px;margin-top: 10px" id="reload">Hoàn thành</button>';
                        $('#recharge-info .recharge_atm ').html(html);
                        $('#recharge-info .recharge_atm ').css('display','block');
                        formSubmit.remove();
                    }
                    else{
                        alert(data);
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
    </script>
@endsection
